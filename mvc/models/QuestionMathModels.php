<?php
    class QuestionMathModels extends DB {
        function GetQuestionMath(){
            $json_array = array();

            $sql = "SELECT * FROM question_maths";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }


        function GetQuestionId($id){
            $json_array = array();

            $sql = "SELECT * FROM question_maths WHERE id=$id";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }

        function GetQuestionSubject($id_subject){
            $json_array = array();

            $sql = "SELECT * FROM question_maths WHERE id_subject=$id_subject";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }
    }
?>