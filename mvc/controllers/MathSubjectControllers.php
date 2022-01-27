<?php
    class MathSubjectControllers extends Controller{
        function GetAll(){
            $math_subject = $this->model("MathSubjectModels");

            $this->view("index", [
                "getData"=> $math_subject->GetMathSubject(),
            ]);
        }
    }
?>