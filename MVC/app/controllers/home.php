
<?php

class home extends controller{

    function __construct(){
        parent::__construct();
    }

    public function search(){
  
        $this->view->render('homeview');   
    }
    
    public function results(){
        $this->model('user');
        $name = $_POST['name'];
        $resultset = $this->model->search($name);
        $this->view->users = $resultset;
        $this->view->render('resultView');
    }

    public function insertData(){
        
        $this->view->render('submitForm');

        //$this->model->insertData($id, $name, $address, $password);
    }

    public function insertToDatabase(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        $this->model('user');
        $this->model->insertData($id, $name, $address, $password);

    }

    }

    


?>