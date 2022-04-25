<?
$uri = explode('/', $_SERVER['REQUEST_URI']);

require_once("views/head.php");
if ($uri[1] == 'blog')
    require_once("views/blog.php");
else 
    require_once("views/main.php");
require_once("views/foot.php");
?>
