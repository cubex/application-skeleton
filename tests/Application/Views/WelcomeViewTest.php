<?php
namespace Application\Views;
use Packaged\Dispatch\AssetManager;
use Skeleton\Application\Views\WelcomeView;

class WelcomeViewTest extends \PHPUnit_Framework_TestCase
{
  public function testIsApplicationKernel()
  {
    $cubex = new \Cubex\Cubex(__DIR__);
    $cubex->prepareCubex();
    $cubex->processConfiguration($cubex->getConfiguration());
    $am = AssetManager::aliasType('src');
    $view = new WelcomeView($am);
    $this->assertInstanceOf(
      '\Skeleton\Application\Views\WelcomeView',
      $view
    );
  }
}
