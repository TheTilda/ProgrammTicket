<?php

    function redirect(string $path){
        header("Location: $path");
        die();
    }

?>