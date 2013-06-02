<?php

namespace SspPress\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class PressController extends AbstractActionController
{
    public function indexAction()
    {
        echo 'press-controller-test';
        
        return array();
    }

    public function fooAction()
    {
        return array();
    }
}
