<?php
$list = '1,2,3';
$list = explode(',', $list);
$listed = array_map('intval', $list);
