<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$d = strtotime("+3 weeks");
echo "date created is: ".date("Y-m-d h:i:sA", $d);
?>