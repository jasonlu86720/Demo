<?php
require_once "../vendor/autoload.php";

echo (new \demo\hello\HelloWorld())->hello();
echo "\n";
echo (new \demo\hello\HelloWorld('Good'))->hello();