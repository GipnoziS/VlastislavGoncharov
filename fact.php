<?
include "header.php";

setcookie('site', 'fact.php', time() + 3600 * 24 * 7);
print_r($_COOKIE);

include "footer.php";
