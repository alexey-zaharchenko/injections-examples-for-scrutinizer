<?php


foreach ($_REQUEST as $k => $v) {
    $_REQUEST[$k] = intval($v);
}