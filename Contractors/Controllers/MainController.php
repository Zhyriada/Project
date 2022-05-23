<?php

namespace Contractors\Controllers;

use Contractors\Services\Db;

use Contractors\View\View;

class MainController
{
      private $view;

      private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->db = new Db();
    }

    public function main()
    {
        $articles = $this->db->query('SELECT * FROM `articles`;');

        echo $this->view->renderHtml('main.php', ['articles' => $articles]);
    }
}

