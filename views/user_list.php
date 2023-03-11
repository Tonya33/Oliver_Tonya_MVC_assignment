<div id="content" class="row">
    <ul>
        <?php
        for ($i = 0; $i < $rows; $i++) {
            echo '<a class="col-12 med-col-6" href="index.php?id=' . $users[$i]->id . '"><li>' . $users[$i]->user_fname . ' ' . $users[$i]->user_lname . '</li></a>';
        }
        ?>
    </ul>
</div>
<?php
echo '<a href="views/user_form.php">Create New User</a><br>';
echo '<a href="views/user_form.php">Update Existing User</a><br>';
echo '<a href="views/user_form.php">Delete Existing User</a><br>';
// echo '<a href="index.php?form=user">Update User</a><br>';
// echo '<a href="index.php?form=user">Delete User</a></a>';
?>