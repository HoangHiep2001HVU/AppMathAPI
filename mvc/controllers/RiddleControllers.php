<?php
    class RiddleControllers extends Controller{
        function GetAll(){
            $math = $this->model("RiddleModels");

            $this->view("index", [
                "getData"=> $math->GetRiddle(),
            ]);
        }

        function GetRiddleById($id){
            $math = $this->model("RiddleModels");

            $this->view("index", [
                "getData"=> $math->GetRiddleId($id),
            ]);
        }
    }
?>