<?php
require_once 'magicclass.php';

$T1 = new Point;
$T1->x = 2;
$T1->y = 5;

$V1 = new Vector;
$V1->x = 6;
$V1->y = 3;

$V2 = new Vector;
$V2->x = 0;
$V2->y = 0;

$V3 = new Vector;
$V3->x = -3;
$V3->y = 6;

echo Vector::long($V1->x, $V1->y).'<br>';
echo Vector::long($V2->x, $V2->y).'<br>';
echo Vector::long($V3->x, $V3->y).'<br>';

echo Vector::square($V1->x, $V1->y, $V3->x1, $V3->y1).'<br>';

echo Point::swap($T1->x, $T1->y, $T1->x - $V1->x, $T1->y - $V1->dy);