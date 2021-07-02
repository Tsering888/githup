<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Website Title</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Contacts</a>
    	</div>
    </nav>



    
<?php

function template_header($title) {
    echo <<<EOT
    


    EOT;
}
function template_footer() {
echo <<<EOT
   
EOT;
}

include 'functions.php';
// Your PHP code here.

// Home Page template below.

?>
<?=template_header('Home')?>

<div class="content">
	<h2>Home</h2>
	<p>Welcome to the home page!</p>
</div>

<?=template_footer()?>




</body>
</html>