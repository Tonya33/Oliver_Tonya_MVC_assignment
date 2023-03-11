<div id="content" class="row">
    <form method="post">
        <label>Last Name:</label>
        <input type="text" name="lname" required>

        <label>First Name:</label>
        <input type="text" name="fname" required>

        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="pw" required>

        <label>Profile Image:</label>
        <input type="text" name="image">

        <label>Role:</label>
        <select name="role" required>
            <option value="1">Admin</option>
            <option value="2">User</option>
        </select>
        <input type="submit" value="Create User">
    </form>
</div>
<?php
echo '<a href="http://localhost:8888/employees/index.php?task=create&id=' . $users[0]->id . '">create user</a><br><br>';
echo '<a href="http://localhost:8888/Oliver_Tonya_MVC_PHP_assignment/index.php?task=update&id=' . $users[0]->id . '">update user</a><br><br>';
echo '<a href="http://localhost:8888/Oliver_Tonya_MVC_PHP_assignment/index.php?task=delete&id=' . $users[0]->id . '">delete user</a><br>';
?>