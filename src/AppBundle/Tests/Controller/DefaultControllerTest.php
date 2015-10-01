<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\DefaultController;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
    	$controller = new DefaultController;

        $this->assertEquals(3, $controller->getA());
    }
}
