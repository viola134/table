<?php
print "<table style=\"border:solid;\">";
for ($i = 1; $i < 11; $i++) {
    if($i % 2 == 0)
    print "<tr><td style=\"border:solid;\">$i</td><td style=\"border:solid;\"><img src=\"images/img_$i.jpg\"width=\"300\"></td></tr>";
}
print "</table>";