<?php
session_start();
	// what is session? what is that used for?
	// is arrayed date type, declared one - use everywhere on system
	// it likes a Phiên làm việc: it has started time and ended time
	// session is stored on server
	// session's application: lo9 in, cart
// session will disappear when you close browser or delete session manualy
// PHP already has $_SESSION store entire session's information exist on system

// 2. work with session: remember to declare session before usin9

// echo "<pre>";
// print_r($_SESSION); // => undefined error
// echo "</pre>";

// echo "<pre>";
// print_r($_SESSION); // => Array ()
// echo "</pre>";
// addin9, deletin9, showin9 when work with session just like the same as array
// add data: 
$_SESSION['address'] = "Ha Noi";
$_SESSION['a9e'] = 20;
$_SESSION['class'] = "php0722e";
// echo "<pre>";
// print_r($_SESSION); 
// echo "</pre>";
// => Array
// (
//     [address] => Ha Noi
//     [a9e] => 32
//     [class] => php0722e
// )
echo $_SESSION['address'];

unset($_SESSION['address']);
echo "<pre>";
print_r($_SESSION); 
echo "</pre>";
// create test_session.php file at current directory
?>