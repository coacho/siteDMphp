<?php

class userController{

    private $userManager;
    private $user;

    public function __construct($db1){

        require_once('./Model/User.php');
        require_once('./Model/UserManager.php');
        $this->userManager = new UserManager($db1);

        $this->db = $db1;
    }

    public function goHome(){
        $page = 'home';
        require('./View/default.php');
        
    }

    public function goConnexion(){
        $page = 'login';
        require('./View/default.php');
    }

    public function goRegister(){
        $page = 'register';
        require('./View/default.php');
    }

    public function doLogin(){

        $this-> user = new User($_POST);
        $email=$_POST['email'];
        $mdp=$_POST['password'];


        $alreadyExistEmail = $this->userManager->findEmail($_POST['email']);
        $alreadyExistPass = $this->userManager->findPass($_POST['password']);
        
        if(!$alreadyExistEmail && !$alreadyExistPass){
            $result = true;
        }
        
        if($result == true){
            $info = "connexion reussie";
            $_SESSION['user'] = $result;
            $page = 'usersList';
        }
        else{
            $info = "identifiants incorrects";
            $page = 'home';
        }

        require('./View/default.php');
    }


    public function doCreate(){
        if(
            isset($_POST['email'])&&
            isset($_POST['password'])&&
            isset($_POST['lastName']) &&
            isset($_POST['firstName']) &&
            isset($_POST['adress']) &&
            isset($_POST['postalCode']) &&
            isset($_POST['city']) 
        ){
        $alreadyExist = $this->userManager->findEmail($_POST['email']);
        
            if(!$alreadyExist){
                //error_log(print_r($_POST['email'],true));
                   $newUser = new User($_POST);
                    $this->userManager->create($newUser);
                    $page = 'login';
                }
            else{
                $page = 'home';
            }
        }
        else
        {
            $error = "ERROR : This email (" . $_POST['email'] . ") is used by another user"; 
            $page = 'home';
                            
        }
        require('./View/default.php');
    
        }

        public function listUsers(){
            
            $this-> user = new User($_GET);
            $usersList->userManager->findAll();
            error_log(print_r($usersList,true));
        }

        public function deleteAllUser(){

        }

}
