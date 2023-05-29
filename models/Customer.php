<?php
    require_once "./models/db.php";
    class DbModel{
        protected $db;
        public function __construct()
        {
            $this->db = new db();
        }
    }
    class Customer extends DbModel{
        function getCustomer(){
            $sql = "SELECT * from customer";
            return $this->db->getData($sql);
        }
    
        function add($name,$age){
            $sql = "INSERT into customer(name,age) values ('$name','$age')";
            $this->db->getData($sql,false);
        }

        function update($id,$name_new,$age_new){
            $sql = "UPDATE customer set name = '$name_new', age = '$age_new' where id=$id ";
            $this->db->getData($sql,false);
        }

        function delete(){
            $id = $_GET['id'];
            $sql = "DELETE from customer where id=$id";
            $this->db->getData($sql,false);
        }
    }


?>