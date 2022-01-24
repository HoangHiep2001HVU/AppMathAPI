<?php
    if(isset($data["getData"])){
        print(json_encode($data["getData"]));
    }
    else {
        echo $data["check"];
    }
?>