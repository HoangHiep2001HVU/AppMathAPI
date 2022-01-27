<?php
    class ExplainMathControllers extends Controller{
        function GetAll(){
            $explain_math = $this->model("ExplainMathModels");

            $this->view("index", [
                "getData"=> $explain_math->GetExplainMath(),
            ]);
        }

        function GetExplainMathById($id){
            $explain_math = $this->model("ExplainMathModels");

            $this->view("index", [
                "getData"=> $explain_math->GetExplainMathId($id),
            ]);
        }

        function GetExplainMathQuestionId($id){
            $explain_math = $this->model("ExplainMathModels");

            $this->view("index", [
                "getData"=> $explain_math->GetExplainMathQuestion($id),
            ]);
        }
    }
?>