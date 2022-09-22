<?php
$i1 = "<img src=\"images/img1.jpg\"width=\"70\"\"height =\"70\">";
print "<table style=\"border:solid;\">";
for ($i = 0; $i <= rand(1,10); $i++) {
    print "<tr><td style=\"border:solid;\">$i</td><td style=\"border:solid;\">$i1</td></tr>";
}
print "</table>";