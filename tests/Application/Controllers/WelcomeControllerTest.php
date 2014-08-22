<?php
namespace Application\Controllers;
use Skeleton\Application\Controllers\WelcomeController;

class WelcomeControllerTest extends \PHPUnit_Framework_TestCase
{
  public function testIsApplicationKernel()
  {
    $cubex = new \Cubex\Cubex(__DIR__);
    $cubex->prepareCubex();
    $cubex->processConfiguration($cubex->getConfiguration());
    $controller = new WelcomeController();
    $this->assertInstanceOf(
      '\Skeleton\Application\Controllers\WelcomeController',
      $controller
    );
  }
}
