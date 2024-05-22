<?php
require_once "class_lingkaran.php";
echo "nilai PHI" . lingkaran ::PHI;
$lingkaran1 = new lingkaran (10) ;
$lingkaran2 = new lingkaran (4) ;

echo "<br>luas lingkaran I = " . $lingkaran1->getluas();
echo "<br>luas lingkaram II = " . $lingkaran2->getluas();

echo "<br>keliling lingkaran I = " . $lingkaran1->getkeliling();
echo "<br>keliling lingkaram II = " . $lingkaran2->getkeliling();