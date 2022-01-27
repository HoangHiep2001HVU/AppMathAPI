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
                return ["error"=>"Mật khẩu hoặc tài khoản không đúng!"];
            }
            
        }

        function RegisterAccount($user_name, $password, $id_user){
            $sql = "INSERT INTO accounts(id_customer, user_name, password, status) VALUES('$id_user','$user_name', '$password', 1)";

            $result = mysqli_query($this->con, $sql);
            if(!$result){
                return ["error"=> $this->con->error];
            }

            return ["user"=>$user_name, "pass"=> $password, "id_user"=> $id_user];
        }

        function CheckUserName($user_name){
            $user = $this->GetAccount();

            for($i=0; $i<count($user); $i++){
                if($user[$i]["user_name"] == $user_name){
                    return true;
                }
            }
            return false;
        }

        function CheckStatus(){
            
        }
    }
?>