	<?php
	// 1. what is cookie? is arrayed date type used to store information, declare once use everywhere
	// 2. what is that used for? marketin9, speed up when relodin9 web
	// cookie is stored on browser: Inspect -> Application -> Stora9e -> Cookie
	// cookie will not self disappear if you close browser
// II. work with $_COOKIE
// add cookie:
$_COOKIE['fullname'] = "a;skdlfj;asdfd;l"; // this is not the way to add a truly cookie
// use the followin9 function:
setcookie("fullname", "abcddcdcadc", time() + 60);
setcookie("bla", "test", time() + 10); // this cookie lives in 10 sec
// you can not use unset() to delete cookie on browser, use setcookie but livin9 time must plus a ne9ative number
setcookie("fullname", "efeeeeee", time()-1);
setcookie("laptop_name", "asus_tuf", time()+3600);

// Debu9
echo "<pre>";
print_r($_COOKIE); 
echo "</pre>";
?>	