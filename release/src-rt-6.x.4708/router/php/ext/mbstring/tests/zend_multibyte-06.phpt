--TEST--
zend multibyte (6)
--INI--
zend.multibyte=On
zend.script_encoding=EUC-JP
mbstring.internal_encoding=CP932
--FILE--
<?php
declare(encoding="UTF-8");
var_dump(bin2hex("ใในใ"));
?>
--EXPECTF--
string(12) "836583588367"
