<?php
    class AccountModels extends DB {
        function GetAccount(){
            $sql = "SELECT * FROM accounts";
            $json_array = array();
            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }

        function LoginAcc($userName, $password){
            $sql = "SELECT * FROM accounts WHERE user_name='$userName'";
            $json_array = array();
            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            if (password_verify($password, $json_array[0]["password"])){
                return $json_array;
            }
            else{
                return [];
            }
            
        }

        function RegisterAccount($user_name, $password, $id_user){
            $sql = "INSERT INTO accounts(id_customer, user_name, password, status) VALUES('$id_user','$user_name', '$password', 1)";

            $result = mysqli_query($this->con, $sql);
            if(!$result){
                return false;
            }

            return true;
        }
    }
?>