<?php
// problem: show first value of element havin9 index 0 of $name form file session-cookie.php
// importin9 file and copy code from included file is exactly the same, we need to solve this
require_once "session-cookie.php";
echo "<br>" .	$names[0];
// until now, we showed result we wanted, but we can see phan thua ko mon9 muon
// in case we want to use a variable at many files, we will store the variable by SESSION or COOKIE instead usin9 normal array.
?>