<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../partials/nav.php");


//handle the toggle first so select pulls fresh data
//CONVERT TO JOIN BUTTON
if (isset($_POST["compID"])) {
    $compID = se($_POST, "compID", "", false);
    if (!empty($compID)) {
        $db = getDB();
        $user = get_user_id();
        //Removing Credits
        //Getting Credit Value from User
        $cquery = "SELECT Credits FROM User WHERE id = $user";
        $stmtCreds = $db->prepare($cquery);
        $stmtCreds->execute();
        $creds = $stmtCreds->fetch(PDO::FETCH_ASSOC);
        $creds = $creds['Credits'];
        //Getting join fee Value from Competition
        $Fquery = "SELECT joinFee FROM Competition WHERE id = $compID";
        $stmtFee = $db->prepare($Fquery);
        $stmtFee->execute();
        $Fee = $stmtFee->fetch(PDO::FETCH_ASSOC);
        $Fee = $Fee['joinFee'];
        if( $creds >= $Fee ){
            //gets new credit value
            $endCreds = $creds - ($Fee);
            //Update the User's credits to the new, lesser value
            $updatequeryFee = "UPDATE User SET Credits = :endCreds WHERE id = :user";
            $stmtUpdateFee= $db->prepare($updatequeryFee);
            $stmtUpdateFee->execute([":endCreds" => $endCreds, ":user" => $user]);
            //Placing User into Competition
            $stmt = $db->prepare("INSERT INTO CompetitionParticipant (compID, userID) VALUES(:compID, :userID)");
            try {
                $stmt->execute([":compID" => $compID,":userID"=>get_user_id()]);
                flash("Joined Competition", "success");
                $updatequery = "UPDATE Competition c INNER JOIN CompetitionParticipant cp ON c.id = cp.compID SET c.currentParticipants = c.currentParticipants + 1 WHERE cp.compID = :compID";
                $stmtUpdate = $db->prepare($updatequery);
                $stmtUpdate->execute([":compID" => $compID]);
            
            } catch (PDOException $e) {
                flash("Already joined this Competition!", "danger");
            }
        } else {
            flash("Not enough credits to create competition","danger");
        }
        
    }
}
//LISTS COMPETITIONS
$query = "SELECT id, name, expires,currentReward,joinFee,currentParticipants from Competition";
$params = null;
if (isset($_POST["role"])) {
    $search = se($_POST, "role", "", false);
    $query .= " WHERE name LIKE :role";
    $params =  [":role" => "%$search%"];
}
$query .= " ORDER BY expires  LIMIT 10";
$db = getDB();
$stmt = $db->prepare($query);
$roles = [];
try {
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        $roles = $results;
    } else {
        flash("No matches found", "warning");
    }
} catch (PDOException $e) {
    flash(var_export($e->errorInfo, true), "danger");
}
// Dishes out Rewards


?>

<table>
    <thead>
        <th>Name</th>
        <th>Expiration</th>
        <th>Join Fee</th>
        <th>Current Reward</th>
        <th>No. of Participants</th>
        <th>Joined</th>
    </thead>
    <tbody>
        <?php if (empty($roles)) : ?>
            <tr>
                <td colspan="100%">No Competitions</td>
            </tr>
        <?php else : ?>
            <?php foreach ($roles as $role) : ?>
                <tr>
                    <td><?php se($role, "name"); ?></td>
                    <td><?php se($role, "expires"); ?></td>
                    <td><?php se($role, "joinFee"); ?></td>
                    <td><?php se($role, "currentReward"); ?></td>
                    <td><?php se($role, "currentParticipants"); ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="compID" value="<?php se($role, 'id'); ?>" />
                            <?php if (isset($search) && !empty($search)) : ?>
                                <?php /* if this is part of a search, lets persist the search criteria so it reloads correctly*/ ?>
                                <input type="hidden" name="role" value="<?php se($search, null); ?>" />
                            <?php endif; ?>
                            <input type="submit" value="Join?" />
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../partials/flash.php");
?>