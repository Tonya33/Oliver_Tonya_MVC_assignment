<?php
if (isset($_GET['task']) && $_GET['task'] == 'create') {
            $formvalues = array(
                'user_lname' => $_POST['lname'],
                'user_fname' => $_POST['fname'],
                'user_username' => $_POST['username'],
                'user_password' => $_POST['pw'],
                'user_avatar' => $_POST['image'],
                'user_role' => $_POST['role']
            );
            $users = $this->model->create($formvalues);
            if (file_exists('views/user_search.php')) {
                require_once('views/user_detail.php');
            }
        } else if (isset($_GET['task']) && $_GET['task'] == 'delete') {
            $formvalues = array(
                'user_id' => $_GET['id']
            );
            $users = $this->model->delete($formvalues);
            if (file_exists('views/user_search.php')) {
                require_once('views/user_detail.php');
            }
        } else if (isset($_GET['task']) && $_GET['task'] == 'update') {
            $formvalues = array(
                'user_id' => $_GET['id'],
                'user_lname' => $_POST['lname'],
                'user_fname' => $_POST['fname'],
                'user_username' => $_POST['username'],
                'user_password' => $_POST['pw'],
                'user_avatar' => $_POST['image'],
                'user_role' => $_POST['role']
            );
            $users = $this->model->update($formvalues);
            if (file_exists('views/user_search.php')) {
                require_once('views/user_details.php');
            }