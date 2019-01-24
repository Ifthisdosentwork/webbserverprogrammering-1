<?php

?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8" />
<title>De senaste blogginläggen - Läxhjälpen</title>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<link href="laxhjalpen.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' /> 
</head>
<body class="subpage">
<?php
require "masthead.php";
require "menu.php";
echo <<<MAIN
<div role="main">
<article class="singleblogpost">
<h2>{$blogpost['title']}</h2>
<p><small>Postad {$blogpost['pubdate']} av {$blogpost['username']}</small></p>
<div class="blogtext">
	{$blogpost['text']}
	</div>
	</article>
	</div>
MAIN;
require "footer.php";
?>
</body>
</html>