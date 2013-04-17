<?php
$o = shell_exec('git pull');
echo implode("<br>", $o);

?>
