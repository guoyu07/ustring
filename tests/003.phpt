--TEST--
Test UString::endsWith
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$std = "こんにちは世界";

$string = new UString($std, "UTF-8");

var_dump($string->endsWith("界"));
var_dump($string->endsWith(new UString("界", "UTF-8")));
?>
--EXPECT--
bool(true)
bool(true)
