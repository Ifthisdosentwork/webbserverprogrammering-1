           <?php
        header("content-type: text/html; charset=UTF-8");
        

        if (empty($_GET['name'])) {
            $name = 'du okända';
           
        }
        else {
        $name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        } ?>
<!DOCTYPE html>
<title>hello2</title>
        <!--<meta charset="UTF-8">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Hello 2</h1>
        <?php
        echo "<p>Hej $name</p> \n";
        ?>
      
    </body>
</html>