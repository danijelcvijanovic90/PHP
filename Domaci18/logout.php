<?php

include_once("modeli/auth.php");

start_session();

session_destroy();

header("location: index.php");

?>