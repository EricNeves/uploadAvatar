<?php 

require_once __DIR__."/core/Core.php";
require_once __DIR__."/router/routes.php";
require_once __DIR__."/config.php";

spl_autoload_register(function($file) {
  if (file_exists(__DIR__."/models/$file.php")) {
    require_once __DIR__."/models/$file.php";

  } else if (file_exists(__DIR__."/utils/$file.php")) {
    require_once __DIR__."/utils/$file.php";
  }
});

$core = new Core($routes);
$core->run();
