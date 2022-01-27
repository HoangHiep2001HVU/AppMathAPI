<?php
    class ExplainMathModels extends DB {
        function GetExplainMath(){
            $json_array = array();

            $sql = "SELECT * FROM explain_math";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }


        function GetExplainMathId($id){
            $json_array = array();

            $sql = "SELECT * FROM explain_math WHERE id=$id";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }

        function GetExplainMathQuestion($id){
            $json_array = array();

            $sql = "SELECT * FROM explain_math WHERE id_question=$id";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }
    }
?>