<?php
namespace Dmitriisavchik\PackagistTest;

use Dmitriisavchik\PackagistTest\Components\Session;

class Car
{
    public function __construct()
    {
        Session::set('name','123');
        echo 'car' . '</br>';
    }
}