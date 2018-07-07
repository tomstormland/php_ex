<?php

define('NEW_LINE', "\n");

$str = 'LOREM TEXT';

$search = 'TEXT';

$replace = 'WORLD';

$new_str = str_replace($search, $replace, $str);

echo 'BEFORE: ' . $str;

echo NEW_LINE;

echo 'AFTER: ' . $new_str;

echo NEW_LINE;
