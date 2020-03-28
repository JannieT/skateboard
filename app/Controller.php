<?php

namespace App;

use Skateboard\Wheels\WebController;

class Controller extends WebController
{
    // Uncomment the next line if you don't want to wrap your
    // views in a layout:

    // public $layout = null;

    public function index()
    {
        $data = [
            'host' => $this->getHeaderLine('Host'),
        ];
        $this->view('home', $data);
    }
}
