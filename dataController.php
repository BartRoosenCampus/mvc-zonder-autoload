<?php
// dataController.php
declare(strict_types = 1);

require_once 'App/Business/UserService.php';

$userService = new UserService();

$user = $userService->getUser();

include_once 'App/Presentation/data.php';
