<?php
for ($x = 0; $x < 10; $x++) {
//   if ($x == 4) {
//     continue;
//   } if written above then 4 is skipped
  echo "The number is: $x <br>";
   if ($x == 4) {
    continue;
  }//4 is not skipped bcoz it is written below and print is written above
  if ($x==8){
    break;
}
}


?>