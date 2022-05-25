<?php

namespace Contractors\Controllers;

use Contractors\Services\Db;

use Contractors\View\View;

use Contractors\Models\Articles\Contractor;

class MainController
{
      private $view;

      private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../templates');
        $this->db = new Db();
    }

    public function main()
    {
        $articles = $this->db->query('SELECT * FROM `contractor`;');

        $arr = [];
        foreach ($articles as $oneContractor){
            $arr[] = new Contractor
            (
                $oneContractor['company_name'],
                $oneContractor['ceo'],
                $oneContractor['contact'],
                $oneContractor['activity'],
                $oneContractor['region']
            );
        }

        echo $this->view->renderHtml('/main/main.php',
            ['articles' => $arr]);
    }
}


