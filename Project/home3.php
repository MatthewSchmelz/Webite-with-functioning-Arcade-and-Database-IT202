<?php
require(__DIR__ . "/../partials/nav.php");
?>
<h1>Home</h1>
<?php


if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>
<li><a href="<?php echo get_url('angry_pong.php'); ?>">Come Play Rage Pong!</a></li>
<a?> A game of pong where things don't go quite right!</a>


<?php
require(__DIR__ . "/../partials/flash.php");
// Attempting to Add Score Table Beneath this
$query = "SELECT Scores, modified from Scores where modified <= CURRENT_DATE() AND modified >=DATE_SUB(CURRENT_DATE(), INTERVAL 7 DAY)";

$params = null;
if (isset($_POST["role"])) {
    $search = se($_POST, "role", "", false);
    $query .= " WHERE name LIKE :role";
    $params =  [":role" => "%$search%"];
}
$query .= " ORDER BY Scores DESC LIMIT 100";
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
?>
<table>
    <thead>
        <h1>Leaderboards: Weekly</h1>
        <th>Score</th>
        <th>Date Played</th>
    </thead>
        <div>
            <a href="<?php echo get_url('home.php'); ?>">Yearly</a>
            <a href="<?php echo get_url('home2.php'); ?>">Monthly</a>
            <a href="<?php echo get_url('home3.php'); ?>">Weekly</a>
        </div>
    <tbody>
        <?php if (empty($roles)) : ?>
            <tr>
                <td colspan="100%">No Games Played</td>
            </tr>
        <?php else : ?>
            <?php foreach ($roles as $role) : ?>
                <tr>
                    <td><?php se($role, "Scores"); ?></td>
                    <td><?php se($role, "modified"); ?></td>
                    <td>
                        <form method="POST">
                            <input type="hidden" name="roleID" value="<?php se($role, 'id'); ?>" />
                            <?php if (isset($search) && !empty($search)) : ?>
                                <?php /* if this is part of a search, lets persist the search criteria so it reloads correctly*/ ?>
                                <input type="hidden" name="role" value="<?php se($search, null); ?>" />
                            <?php endif; ?>
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