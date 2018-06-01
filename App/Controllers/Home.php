<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP Version 7.2.5
 */
class Home extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        /*
        View::render('Home/index.php', [
            'name'    => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
        */
        // $config = new Config();
        // $config->load('/Core/.settings.php');

        // $db = new Database();
        View::renderTemplate(
            'Home/index.html.twig', [
            'name'    => 'test',
            'colours' => ['red', 'green', 'blue']
            ]
        );
    }
}
