<?php
namespace Application;
use Skeleton\Application\Application;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
  public function testIsApplicationKernel()
  {
    $cubex = new \Cubex\Cubex(__DIR__);
    $cubex->prepareCubex();
    $cubex->processConfiguration($cubex->getConfiguration());
    $app = new Application();
    $this->assertInstanceOf(
      '\Cubex\Kernel\ApplicationKernel',
      $app
    );
  }
}
