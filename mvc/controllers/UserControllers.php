<?php
    class UserControllers extends Controller{
        public function GetAll(){
            $acount = $this->model("UserModels");

            $this->view("index", [
                 "getData"=> $acount->GetUser(),
             ]);
       }

       
    }
?>