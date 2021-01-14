<?php 

    
	define('NAME', 'Yoshi');// declaring a constant
    $age = 30;

    $nameMario = 'Mario';
    



    $stringOne = 'my email is ';
	$stringTwo = 'mario123@thenetninja.co.uk';

	

	$name = 'jermaine';

	$radius = 25;
	$pi = 3.14;

	 
	$age1 = 20;
	$age1 += 10; // age becomes 30
	$age1 -= 5; // age becomes 25
	$age1 *= 2; // age becomes 50

	
	// number functions

	echo floor($pi);
	echo ceil($pi);
	echo pi();

	// indexed arrays

	$peopleOne = ['shaun', 'crystal', 'ryu'];
    $peopleTwo = array('ken', 'chun-li');
 
?>


<!DOCTYPE html>
<html>
<head>
	<title>my first PHP file</title>
</head>
<body>
    <p><?php echo $name; ?></p>
	<h1><?php echo 'hello world' ?></h1>
    <div><?php echo NAME; ?></div>
	<div><?php echo $nameMario; ?></div>
    <div><?php echo $age; ?></div>
    <!-- concatenation -->
    <div><?php echo 'Hey, my name is '.$name; ?></div>
    <!-- // variable interpolation -->
    <div><?php echo "Hey, my name is $name"; ?></div>
	<!-- // escaping characters -->
    <div><?php echo "I screamed \"whaaa\""; ?></div>
    <div><?php echo 'I scream "whaaa"'; ?></div>
    <!-- get single characters -->
    <div><?php echo $name[1]; ?></div>
    <!-- // string functions
    //length of the string -->
	<div><?php echo strlen($name); ?></div>
    <!-- // to uppercase -->
    <div><?php echo strtoupper($name); ?></div>
    <!-- //to lower case -->
	<div><?php echo strtolower($name); ?></div>
    <!--  //replace e with er -->
    <div><?php echo str_replace('e', 'er', $name); ?></div>
    <!--  // basic operators - *, /, +, -, **
// order of operation (B I D M A S) -->
  <div><?php echo 2 * (4 + 5) / 3; ?></div>
	
  <div><?php echo $pi * $radius**2; ?></div>
  <!-- // increment & decrement operators -->
  <div><?php echo $radius++; ?></div>
  <div><?php echo $pi--; ?></div>	
  <div><?php echo $age1; ?></div>	
  <!-- // indexed arrays -->
  <div><?php echo $peopleOne[1]; ?></div>
  <div><?php echo $peopleTwo[1]; ?></div>
	
<!-- combine 2 string together -->

<div><?phpecho $stringOne.$stringTwo;?></div>
</body>
</html>

	
