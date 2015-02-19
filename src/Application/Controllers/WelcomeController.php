<?php
namespace Skeleton\Application\Controllers;
use Cubex\View\LayoutController;
use Packaged\Dispatch\AssetManager;
use Skeleton\Application\Views\WelcomeView;

/**
 * Class WelcomeController
 * @package Skeleton\Application\Controllers
 */
class WelcomeController extends LayoutController{
  /**
   * @var
   */
  private $am;

  /**
   *
   */
  protected function _init()
  {
    $this->am = AssetManager::aliasType('src');
    $this->am->requireCss('css/welcome');
  }

  /**
   * @return WelcomeView
   */
  public function defaultAction()
  {
    return new WelcomeView($this->am);
  }
}
