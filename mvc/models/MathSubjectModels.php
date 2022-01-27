<?php
    class MathSubjectModels extends DB {
        function GetMathSubject(){
            $json_array = array();

            $sql = "SELECT * FROM math_subject";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }
    }
?>