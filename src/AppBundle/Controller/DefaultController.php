<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("home", name="homepage")
     * @Template(engine="php")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:default:index.html.php', array(
            'title'     => 'Homepage',
            'settings'  => $this->readSettings()
        ));
    }

    private function readSettings()
    {
        return $this->get('kernel')->getRootDir();
    }

    private function getGoals()
    {
        $goals = array();

        $em     = $this->getDoctrine()->getManager();
        $query  = $em->createQuery('SELECT * FROM Goals');
        $foals  = $query->getResult();
    }
}
