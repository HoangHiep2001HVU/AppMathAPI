<?php
    class MenuControllers extends Controller {
        function GetAll(){
            $menu = $this->model("MenuModels");

            $this->view("index", [
                "getData"=> $menu->GetMenu(),
            ]);
        }
    }
?>