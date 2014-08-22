<?php
namespace Skeleton\Application;
use Cubex\Kernel\ApplicationKernel;
use Skeleton\Application\Controllers\WelcomeController;
/**
 * Class Application
 * @package Skeleton\Application
 */
class Application extends ApplicationKernel{
  /**
   * @return WelcomeController
   */
  public function defaultAction()
  {
    return new WelcomeController();
  }
}
