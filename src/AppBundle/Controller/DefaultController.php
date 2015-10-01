<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Users;

class DefaultController extends Controller
{
    /**
     * @Route("home", name="homepage")
     * @Template(engine="php")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:default:index.html.php', array(
            'title' => 'Homepage',
            'user'  => $this->getUserById(1)
        ));
    }

    public function getUserById($id)
    {   
        $em   = $this->getDoctrine()->getRepository('AppBundle:Users');
        $user = $em->find($id);
        $info = array(
            "username" => $user->getUsername(),
            "fullname" => $user->getFullname()
        );
        
        return $info;
    }
}
