<?php
$list = '1,2,3';
$list = explode(',', $list);
foreach($list as &$a) {
    $a = intval($a);
}
