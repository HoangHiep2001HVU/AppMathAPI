<?php
    class UserModels extends DB {
        function GetUser(){
            $sql = "SELECT * FROM customers";
            $json_array = array();
            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }

        function GetId($name, $phone){
            $sql = "SELECT * FROM customers WHERE name= '$name' AND phone_number= '$phone'";
            $json_array = array();
            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }

        function InserUser($name, $sex, $date, $address, $phone){
            $sql = "INSERT INTO customers(name, sex, date_of_birth, address, phone_number) 
                VALUES('$name', '$sex', '$date', '$address', '$phone')";

            $result = mysqli_query($this->con, $sql);
            if(!$result){
                return ["error"=> $this->con->error];
            }

            return ["name"=> $name,"sex"=> $sex, "date"=> $date, "address"=> $address, "phone"=> $phone];
        }
    }
?>