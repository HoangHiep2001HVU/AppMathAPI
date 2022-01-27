<?php
    class MenuModels extends DB {
        function GetMenu(){
            $json_array = array();

            $sql = "SELECT * FROM menus";

            $result = mysqli_query($this->con, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $json_array[] = $row;
            }

            return $json_array;
        }
    }
?>