<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>	
<body>
	<h1>Hello world</h1>
    <hr>
    <h1> Html Helper </h1>
    <p> OL() </p>
    <?php
    $list = array ('a','b','c');
    echo ol($list);

    echo '<hr>';
    echo ul($list);
    ?>

    <hr>
    aaaaaa
    <?php echo br(5);?>
    bbbbb
    <hr>
    <p>heading()</p>
    <?php 
    echo heading("Text", 1);
    echo heading("Text", 2);
    echo heading("Text", 3);
    echo heading("Text", 4);
    echo heading("Text", 5);
    ?>
    <hr>
    <p>nbs()</p>
    testing programming
    <br>
    <?php
    echo 'mywebsite';
    echo nbs(10);
    echo 'banana.com';
    ?>
    <hr>


</body>
</html>
