<?php
namespace Skeleton\Application\Views;
use Cubex\View\TemplatedViewModel;
use Packaged\Dispatch\AssetManager;

/**
 * Class WelcomeView
 * @package Skeleton\Application\Views
 */
class WelcomeView extends TemplatedViewModel{
  /**
   * @var AssetManager
   */
  public $am;

  /**
   * @param AssetManager $am
   */
  public function __construct(AssetManager $am)
  {
    $this->am = $am;
  }

}
