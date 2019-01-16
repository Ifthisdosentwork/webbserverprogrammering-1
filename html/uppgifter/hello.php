<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <!--<meta charset="UTF-8">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>TODO write content</div>
        <?php
        header("content-type: text/html; charset=UTF-8");
        

        if (empty($_GET['name'])) {
            echo '<h1>Hej okända människa</h1>';
           
        }
        else {
        echo '<h1>Hej ', filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS), '<h1>';    
        } ?>
    </body>
</html>
