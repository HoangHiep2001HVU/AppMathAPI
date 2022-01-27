<?php
    class QuestionMathControllers extends Controller{
        function GetAll(){
            $math = $this->model("QuestionMathModels");

            $this->view("index", [
                "getData"=> $math->GetQuestionMath(),
            ]);
        }

        function GetQuestionById($id){
            $math = $this->model("QuestionMathModels");

            $this->view("index", [
                "getData"=> $math->GetQuestionId($id),
            ]);
        }

        function GetQuestionBySubject($id_subject){
            $math = $this->model("QuestionMathModels");

            $this->view("index", [
                "getData"=> $math->GetQuestionSubject($id_subject),
            ]);
        }
    }
?>