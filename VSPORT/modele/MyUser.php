<?php
    include("Connexion.php");
    class User {
        private $f_name;
        private $l_name;
        private $username;
        private $password;
        private $date_naiss;
        private $gender;
        private $role;
        private $conn ;
        public function __construct(){
            $this->conn = new Connexion();
        }
        // public function __construct($f_name , $l_name , $username , $password , $date_naiss , $gender , $role){
        //     $this->f_name = $f_name;
        //     $this->l_name = $l_name;
        //     $this->username = $username;
        //     $this->password = $password;
        //     $this->date_naiss = $date_naiss;
        //     $this->gender = $gender;
        //     $this->role = $role;
        //     $this->conn = new Connexion();
        // }
        public function valide($email, $Password){

            $sql = "SELECT * FROM user WHERE username='$email' AND password='$Password' limit 1 ";
            $req = $this->conn->getPDO()->query($sql);
    
            $user = $req->fetch();
            if ($user) {
                return true ;
            } else {
                return false ;
            }
        }
        
    }

?>