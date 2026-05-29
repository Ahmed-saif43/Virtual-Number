<?php
$code = file_get_contents('api-sites.php');
$fixed = preg_replace('/\[([a-zA-Z_][a-zA-Z0-9_]*)\]/', "['$1']", $code);
file_put_contents('api-sites.php', $fixed);
echo "تم الإصلاح!";