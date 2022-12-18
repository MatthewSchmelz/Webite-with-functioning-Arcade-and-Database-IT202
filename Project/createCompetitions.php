<?php
require(__DIR__ . "/../partials/nav.php");
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="name">Name of Competition</label>
        <input type="name" name="name" required />
    </div>
    <div>
        <label for="reward">Reward</label>
        <input type="int" name="reward" required />
    </div>
    <div>
        <label for="cost">Cost to join</label>
        <input type="int" name="cost" required/>
    </div>
    <div>
        <label for="freward">Percent for 1st</label>
        <input type="int" name="freward" required />
    </div>
    <div>
        <label for="sreward">Percent for 2nd</label>
        <input type="int" name="sreward" required />
    </div>
    <div>
        <label for="treward">Percent for 3rd</label>
        <input type="int" name="treward" required />
    </div>
    <div>
        <label for="numPar">Minimum Participants</label>
        <input type="int" name="numPar" required />
    </div>
    <input type="submit" value="Register Competition" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["name"]) && isset($_POST["reward"]) && isset($_POST["cost"]) && isset($_POST["freward"])&& isset($_POST["sreward"])&& isset($_POST["treward"])&& isset($_POST["numPar"])) {
    $name = se($_POST, "name", "", false);
    $reward = se($_POST, "reward", "", false);
    $cost = se($_POST, "cost", "", false);
    $freward = se($_POST, "freward", "", false);
    $sreward = se($_POST, "sreward", "", false);
    $treward = se($_POST, "treward", "", false);
    $numPar = se($_POST, "numPar", "", false);
    

    //TODO 3
    $hasError = false;
    if (empty($name)) {
        flash("Name must not be empty", "danger");
        $hasError = true;
    }

    //validate
    if (empty($reward)) {
        flash("Reward must not be empty", "danger");
        $hasError = true;
    }
    //Checks if the rewards are empty and add up to 100
    if (empty($freward)) {
        flash("Percantage Reward must not be empty", "danger");
        $hasError = true;
    }
    if (empty($sreward)) {
        flash("Percantage Reward must not be empty", "danger");
        $hasError = true;
    }
    if (empty($treward)) {
        flash("Percantage Reward must not be empty", "danger");
        $hasError = true;
    }
    if($freward+$sreward+$treward != 100){
        flash("Percentages do not add to %100", "danger");
        $hasError = true;
    }
    if ($numPar < 3) {
        flash("Not enough participants", "danger");
        $hasError = true;
    }
    
    //No Errors? Lets insert this lad
    if (!$hasError) {
        //Gets the database
        $db = getDB();
        $user = get_user_id();
        //Gets current user Credits
        $cquery = "SELECT Credits FROM User WHERE id = $user";
        $stmtCreds = $db->prepare($cquery);
        $stmtCreds->execute();
        $creds = $stmtCreds->fetch(PDO::FETCH_ASSOC);
        $creds = $creds['Credits'];
        //Checks to see if they can afford competition
        if( $creds >= 1+$reward+$cost ){
            //gets new credit value
            $endCreds = $creds - (1+$reward+$cost);
            //Update the User's credits to the new, lesser value
            $updatequery = "UPDATE User SET Credits = :endCreds WHERE id = :user";
            $stmtUpdate = $db->prepare($updatequery);
            $stmtUpdate->execute([":endCreds" => $endCreds, ":user" => $user]);
            //Creates competition
            $stmt = $db->prepare("INSERT INTO Competition (name, startingReward,cost2create, minParticipants, createdBy, joinFee ) VALUES(:name, :startingReward, :minParticipants, :cost2create, :createdBy,:joinFee)");
            try {
                $stmt->execute([":name" => $name, ":startingReward" => $reward, ":cost2create" => 1+ $reward + $cost, "minParticipants" => $numPar, "createdBy" => get_user_id(), "joinFee" => $cost]);
                flash("Successfully registered the Competition! Good Luck", "success");
            } catch (Exception $e) {
                users_check_duplicate($e->errorInfo);
            }
        } else {
            flash("Not enough credits to create competition","danger");
        }
        
    }
}
?>
<?php
require(__DIR__ . "/../partials/flash.php");
?>