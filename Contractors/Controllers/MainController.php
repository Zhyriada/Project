<?php

namespace Contractors\Controllers;

use Contractors\Services\Db;

use Contractors\View\View;

class MainController
{
    public function main()
    {
        //$contractors = [
        //    ['CompanyName' => ''],
        //    ['CEO' => ''],
        //    ['Contact' => ''],
        //    ['Activity' => ''],
        //    ['Region' => ''],
        //];

        include __DIR__ . '/../../templates/main/main.php';
        include __DIR__ . '/../../Contractors/Services/Db.php';
    }

}