<?php 
    class User {

    private $id;
    private $email;
    private $password;
    private $firstName;
    private $lastName;
    private $adress; 
    private $postalCode;
    private $city;
    
    //constructeur User
    public function __construct($data){
        $this->hydrate($data);
    }

    //hydratation User
    public function hydrate($data){
        foreach($data as $key=>$value){          
            $this->{'set'.ucwords($key)}($value); //php7
           //$this->key = $value; //PHP8
        }
        $this->setId();
    }

    // SET
    public final function setId() {
        $this->id = random_int(0, 99);//$id1;
    }
    public final function setEmail($email1) {
        $this->email = $email1;
    }
    public final function setPassword($pass1) {
        $this->password = $pass1;
    }
    public final function setFirstName($fisrtName1) {
        $this->firstName = $fisrtName1;
    }
    public final function setLastName($lastName1) {
        $this->lastName = $lastName1;
    }
    public final function setAdress($adress1) {
        $this->adress = $adress1;
    }
    public final function setPostalCode($postalCode1) {
        $this->postalCode = $postalCode1;
    }
    public final function setCity($city1) {
        $this->city = $city1;
    }
    
    // GET
    public final function getId() {
       return $this->id;
    }
    public final function getEmail() {
       return $this->email;
    }
    public final function getPassword() {
        return $this->password;
    }
    public final function getFirstName() {
        return $this->firstName;
    }
    public final function getLastName() {
        return $this->lastName;
    }
    public final function getAdress() {
        return $this->adress;
    }
    public final function getPostalCode() {
        return $this->postalCode;
    }
    public final function getCity() {
        return $this->city;
    }
}
