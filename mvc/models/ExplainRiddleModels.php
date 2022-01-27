<?php
    class ExplainRiddleModels extends DB {
        function GetExplainRiddle(){
            $json_array = array();

            $sql = "SELECT * FROM explain_riddle";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }


        function GetExplainId($id){
            $json_array = array();

            $sql = "SELECT * FROM explain_riddle WHERE id=$id";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }

        function GetExplainRiddleId($id){
            $json_array = array();

            $sql = "SELECT * FROM explain_riddle WHERE id_riddle=$id";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }
    }
?>