<?php
require_once(__DIR__ . "/../partials/nav.php");
if (!is_logged_in()) {
    die(header("Location: login.php"));
}
?>
<?php
if (isset($_POST["save"])) {
    $email = se($_POST, "email", null, false);
    $logName = se($_POST, "logName", null, false);

    $params = [":email" => $email, ":logName" => $logName, ":id" => get_user_id()];
    $db = getDB();
    $stmt = $db->prepare("UPDATE User set email = :email, logName = :logName where id = :id");
    try {
        $stmt->execute($params);
        flash("Profile saved", "success");
    } catch (Exception $e) {
        if ($e->errorInfo[1] === 1062) {
            //https://www.php.net/manual/en/function.preg-match.php
            preg_match("/User.(\w+)/", $e->errorInfo[2], $matches);
            if (isset($matches[1])) {
                flash("The chosen " . $matches[1] . " is not available.", "warning");
            } else {
                //TODO come up with a nice error message
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            //TODO come up with a nice error message
            echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        }
    }
    //select fresh data from table
    $stmt = $db->prepare("SELECT id, email, logName from User where id = :id LIMIT 1");
    try {
        $stmt->execute([":id" => get_user_id()]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            //$_SESSION["user"] = $user;
            $_SESSION["user"]["email"] = $user["email"];
            $_SESSION["user"]["logName"] = $user["logName"];
        } else {
            flash("User doesn't exist", "danger");
        }
    } catch (Exception $e) {
        flash("An unexpected error occurred, please try again", "danger");
        //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
    }


    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        if ($new_password === $confirm_password) {
            //TODO validate current
            $stmt = $db->prepare("SELECT pwrdHash from User where id = :id");
            try {
                $stmt->execute([":id" => get_user_id()]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if (isset($result["pwrdHash"])) {
                    if (password_verify($current_password, $result["pwrdHash"])) {
                        $query = "UPDATE User set pwrdHash = :pwrdHash where id = :id";
                        $stmt = $db->prepare($query);
                        $stmt->execute([
                            ":id" => get_user_id(),
                            ":pwrdHash" => password_hash($new_password, PASSWORD_BCRYPT)
                        ]);

                        flash("Password reset", "success");
                    } else {
                        flash("Current password is invalid", "warning");
                    }
                }
            } catch (Exception $e) {
                echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
            }
        } else {
            flash("New passwords don't match", "warning");
        }
    }
}
?>

<?php
$email = get_user_email();
$logName = get_username();
?>
<form method="POST" onsubmit="return validate(this);">
    <div class="mb-3">
        <label for="logName">Log Name</label>
        <input type="text" name="logName" id="logName" value="<?php se($logName); ?>" />
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?php se($email); ?>" />
    </div>
    <!-- DO NOT PRELOAD PASSWORD -->
    <div>Password Reset</div>
    <div class="mb-3">
        <label for="cp">Current Password</label>
        <input type="password" name="currentPassword" id="cp" />
    </div>
    <div class="mb-3">
        <label for="np">New Password</label>
        <input type="password" name="newPassword" id="np" />
    </div>
    <div class="mb-3">
        <label for="conp">Confirm Password</label>
        <input type="password" name="confirmPassword" id="conp" />
    </div>
    <input type="submit" value="Update Profile" name="save" />
</form>

<script>
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        let isValid = true;
        //TODO add other client side validation....

        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (pw !== con) {
            //find the container
            let flash = document.getElementById("flash");
            //create a div (or whatever wrapper we want)
            let outerDiv = document.createElement("div");
            outerDiv.className = "row justify-content-center";
            let innerDiv = document.createElement("div");

            //apply the CSS (these are bootstrap classes which we'll learn later)
            innerDiv.className = "alert alert-warning";
            //set the content
            innerDiv.innerText = "Password and Confirm password must match";

            outerDiv.appendChild(innerDiv);
            //add the element to the DOM (if we don't it merely exists in memory)
            flash.appendChild(outerDiv);
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../partials/flash.php");
// Attempting to Add Score Table Beneath this
$guy = get_user_id();
$query = "SELECT Scores, modified from Scores WHERE userID = $guy";
$params = null;
if (isset($_POST["role"])) {
    $search = se($_POST, "role", "", false);
    $query .= " WHERE name LIKE :role";
    $params =  [":role" => "%$search%"];
}
$query .= " ORDER BY modified LIMIT 10";
$db = getDB();
$stmt = $db->prepare($query);
$roles = [];
try {
    $stmt->execute($params);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        $roles = $results;
    }
} catch (PDOException $e) {
    flash(var_export($e->errorInfo, true), "danger");
}
//Showing Credits on user profile
//MWS36 December 17, 2022
//
$guy = get_user_id();
$query = "SELECT Credits from User WHERE id = $guy";
$query .= " ORDER BY modified LIMIT 10";
$db = getDB();
$stmt = $db->prepare($query);
$creds = [];
try {
    $stmt->execute();
    $creds = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    flash(var_export($e->errorInfo, true), "danger");
}
?>
<table>
    <header>
    <?php if (empty($creds)) : ?>
            <thread>
                <td colspan="100%">No Credits</td>
            </thread>
        <?php else : ?>
            <?php foreach ($creds as $cred) : ?>
                <tr>
                    <td> Credits: <?php se($cred, "Credits"); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </header>
</table>


<table>
    
    <thead>
        <th>Score</th>
        <th>Date Played</th>
    </thead>
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