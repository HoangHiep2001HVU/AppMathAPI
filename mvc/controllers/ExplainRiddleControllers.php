<?php
    class ExplainRiddleControllers extends Controller{
        function GetAll(){
            $explain = $this->model("ExplainRiddleModels");

            $this->view("index", [
                "getData"=> $explain->GetExplainRiddle(),
            ]);
        }

        function GetExplainRiddleId($id){
            $explain = $this->model("ExplainRiddleModels");

            $this->view("index", [
                "getData"=> $explain->GetExplainId($id),
            ]);
        }

        function GetExplainRiddleById($id){
            $explain = $this->model("ExplainRiddleModels");

            $this->view("index", [
                "getData"=> $explain->GetExplainRiddleId($id),
            ]);
        }
    }
?>