<?php
require_once('./models/UserModel.php');

class User
{

    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }


    public function loadViews()
    {
        require_once('views/head.php');
        require_once('views/nav.php');
        require_once('views/user_search.php');

        if (isset($_GET['id']) && !isset($_GET['task'])) {
            $users = $this->model->getOne($_GET['id']);
            require_once('views/user_detail.php');
        } else if (isset($_GET['str'])) {
            $users = $this->model->search('user_lname', $_GET['str']);
            $rows = $this->model->rows;
            require_once('views/user_list.php');
        } else if (isset($_GET['id']) && !isset($_GET['task'])) {
            $users = $this->model->getOne($_GET['id']);
            //} else if (isset($_GET['task']) && $_GET['task'] == 'create') {
            //  $formvalues = array(
            //    'user_lname' => $_POST['lname'],
            //  'user_fname' => $_POST['fname'],
            //'user_username' => $_POST['username'],
            //  'user_password' => $_POST['pw'],
            //'user_avatar' => $_POST['image'],
            //         'user_role' => $_POST['role']
            //   );
            // $users = $this->model->create($formvalues);            require_once('views/user_detail.php');
            /*
            } else if (isset($_GET['task']) && $_GET['task'] == 'delete') {
            $formvalues = array(
            'user_id' => $_GET['id']
            );
            $users = $this->model->delete($formvalues);
            require_once('views/user_detail.php');
            } else if (isset($_GET['task']) && $_GET['task'] == 'update') {
            $formvalues = array(
            'user_id' => $_GET['id'],
            'user_lname' => $_POST['lname'],
            'user_fname' => $_POST['fname'],
            'user_username' => $_POST['username'],
            'user_password' => $_POST['pw'],
            'user_avatar' => $_POST['image'],
            'user_role' => $_POST['role']
            );*/
            $users = $this->model->update($formvalues);
            require_once('views/user_details.php');
        } else {
            $users = $this->model->getAll();
            $rows = $this->model->rows;
            require_once('views/user_list.php');
        }

        require_once('views/footer.php');

    }
}

?>