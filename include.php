<?php
echo"<h2 style='color:purple;'>file handling</h2>";
include("./function.php");
for($i=0;$i<10;$i++){
    include_once("function.php");
}
require("./datatype.php");
for($i=0;$i<10;$i++){
    require_once("datatype.php");
}
?>