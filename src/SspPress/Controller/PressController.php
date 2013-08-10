<?php

namespace SspPress\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PressController extends AbstractActionController
{
    public function indexAction()
    {
        $releaseTable = $this->serviceLocator->get('ReleaseTable');
        $releases = $releaseTable->findAll();

        return new ViewModel(array('releases' => $releases));
    }

    public function fooAction()
    {
        return array();
    }
}
