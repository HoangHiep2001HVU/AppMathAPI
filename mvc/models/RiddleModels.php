<?php
    class RiddleModels extends DB {
        function GetRiddle(){
            $json_array = array();

            $sql = "SELECT * FROM riddles";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }


        function GetRiddleId($id){
            $json_array = array();

            $sql = "SELECT * FROM riddles WHERE id=$id";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }
    }
?>