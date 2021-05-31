<?php

require 'vendor/autoload.php';

use Alura\Pdo\core\domain\model\Student;
use Alura\Pdo\core\logic\AccountLogicImpl;
use Alura\Pdo\Infrastructure\Dao\StudentDaoService;

$accountLogic = new AccountLogicImpl();
$accountLogic->getAccounts();
