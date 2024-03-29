<?php
/**
 * Created by PhpStorm.
 * User: irina
 * Date: 15.05.17
 * Time: 5:11
 */

namespace OxApp\controllers;


use Ox\App;
use Ox\View;
use OxApp\helpers\TunnelBroker;
use OxApp\models\TechAccount;
use OxApp\models\Tunnels;
use OxApp\models\Users;

/**
 * Class TunnelsController
 *
 * @package OxApp\controllers
 */
class TunnelsController extends App
{
    public function get()
    {
        /*
         * Status:
         * 0 - Delete
         * 1 - Wait Create
         * 2 - Wait settings server
         * 3 - Settings server
         * 4 - Work
         *
         */
        return View::build("tunnel");
    }
}
