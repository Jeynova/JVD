<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\AlbumController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/AlbumController.php';

$this->services['App\\Controller\\AlbumController'] = $instance = new \App\Controller\AlbumController();

$instance->setContainer(($this->privates['.service_locator.ow4ciWN'] ?? $this->load('get_ServiceLocator_Ow4ciWNService.php'))->withContext('App\\Controller\\AlbumController', $this));

return $instance;
