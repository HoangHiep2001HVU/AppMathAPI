<?php
     class AccountControllers extends Controller{

          public function GetAll(){
               $acount = $this->model("AccountModels");

               $this->view("index", [
                    "getData"=> $acount->GetAccount(),
                ]);
          }

          public function Login($u, $p){
               $acount = $this->model("AccountModels");

               $this->view("index", [
                    "getData"=> $acount->LoginAcc($u, $p),
                ]);
          }

          public function InsertAccount(){
               $acount = $this->model("AccountModels");
               $user = $this->model("UserModels");

               if(isset($_POST["user_name"])){
                    $name = $_POST["name"];
                    $sex = $_POST["sex"];
                    $date = $_POST["date"];
                    $address = $_POST["address"];
                    $phone = $_POST["phone"];
                    $user_name = $_POST["user_name"];
                    $pass = $_POST["pass"];
                    $password = password_hash($pass, PASSWORD_DEFAULT);

                    $_user = $user->InserUser($name, $sex, $date, $address, $phone);
                    
                    if($_user){

                         $id_user = $user->GetId($name, $phone);
                         $id_user = $id_user[0];
                         $_acc = $acount->RegisterAccount($user_name, $password, $id_user["id"]);
                         if($_acc){
                              return true;
                         }
                    }
                    return false;
               }
          }

          public function DeleteAccount(){
               echo "InsertAccount";
          }

          public function UpdateAccount(){
               echo "InsertAccount";
          }

          public function GetUser(){
               
          }
     }
?>