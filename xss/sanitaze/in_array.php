<?php

$goodValues = array('a', 'b');

if (in_array($_REQUEST['a'], $goodValues)) {
    echo $_REQUEST['a'];
}

/////////////////////////////////////
function c($c)
{
    if (!in_array($c, array(1))) {
        return;
    }
    echo $c;
}

c($_REQUEST['c']);
/////////////////////////////////////

$d = function ($d) {
    if (!in_array($d, array(1))) {
        return;
    }
    echo $d;
};

$d($_REQUEST['d']);


/////////////////////////////////////
$b = $_REQUEST['b'];

if (false == in_array($b, $goodValues)) {
    die();
}
echo $b;