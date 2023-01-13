<?php

    class UserManager{

        private $db;

        public function __construct($db1){
            $this->db=$db1;
        }

        public function login(){
            $req = $this->db->prepare(
                'SELECT * FROM users u WHERE u.email=email AND u.password=password');
            $req->execute(array(
                'email'=>$user->getEmail(),
                'password' =>$user->getPassword(),
            ),
            ); 
            //error_log(print_r( $req,true));
            //return $req->fetchAll();
        }

        public function create(User $user){
            $req = $this->db->prepare(
                'INSERT INTO users (id, lastName, firstName,email, adress, postalCode, city, password, admin)
                VALUES (:id, :lastName, :firstName,:email, :adress, :cp, :city, :password, 1)'
            ); 
            $req->execute(
                array(
                    'id'=>$user->getId(),
                    'lastName'=>$user->getLastName(),
                    'firstName'=>$user->getFirstName(),
                    'email'=>$user->getEmail(),
                    'adress'=>$user->getAdress(),
                    'cp'=>$user->getPostalCode(),
                    'city'=>$user->getCity(),
                    'password' =>$user->getPassword(),
                ),
                ); 
        }

        public function findAll(){
            $req = $this->db->prepare(
                'SELECT * FROM users u'
            );
            $req->execute($list = array(
                'id'=>$user->getId(),
                'lastName'=>$user->getLastName(),
                'firstName'=>$user->getFirstName(),
                'email'=>$user->getEmail(),
                'adress'=>$user->getAdress(),
                'cp'=>$user->getPostalCode(),
                'city'=>$user->getCity(),
                'password' =>$user->getPassword(),
            ),
            ); 
             error_log(print_r($list,true));
           //return $req->fetchAll();
        }

        public function findAll($id){
            $req = $this->db->prepare(
                'SELECT * FROM users u WHERE u.id=id'
            );
            $req->execute(); 
           
            //return $req->fetchAll();
        }

        public function findEmail($email){
           
            $req = $this->db->prepare(
                'SELECT * FROM users u WHERE u.email=email'
            );
            //error_log(print_r( $req,true));
            $req->execute();
        }
        
        public function findPass($password){
           
            $req = $this->db->prepare(
                'SELECT * FROM users u WHERE u.password=password'
            );
            //error_log(print_r( $req,true));
            $req->execute();
        }

        public function update(User $user){
            $req = $this->db->prepare(
                'UPDATE users u SET * WHERE u.user=user'
            );
            $req->execute();
            return $req->fetchAll();
        }

        public function delete(User $user){
            $req = $this->db->prepare(
                'DELETE * FROM users u WHERE u.user=user'
            );
            $req->execute();
            return $req->fetchAll();
        }


    }
