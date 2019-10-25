<?php
/**
 * Middleware.php
 * Created by Bassirou NGOM.
 * User: bngesp <https://github.com/bngesp>
 * Licence: MIT
 * Date: 2019-04-11
 * Time: 12:14
 * Email: bassiroungom@esp.sn
 */

namespace Door\Core\Middleware;

use Door\Core\Route\Interfaces\Dispatcher;

/**
 * Class Middleware
 * @package Door\Core\Middleware
 */
class Middleware
{
    /**
     * @var  $container : element to save the map the route call to the core Container
     */
    private  $container;

    /**
     * @var  Dispatcher $dispatcher
     */
    private  $dispatcher;

}