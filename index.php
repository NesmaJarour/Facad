<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        spl_autoload_register(function($className){
            include_once $className . '.php';
        });
        

        $amaker =  StudentMaker::getamaker();
        echo $amaker->viewART(). '<br>';
        echo $amaker->viewIT(). '<br>';
        ?>
    </body>
</html>
