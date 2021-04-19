<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{   
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    /**
     * @Route("/", name="first")
     */
    public function first():RedirectResponse
    {   
        return $this->redirectToRoute("app_login");
    }

    /**
     * @Route("/chat", name="chat")
     */
    public function chat():Response
    {   
        return $this->render("chat/index.html.twig");
    }

    /**
     * @Route("/user_register", name="user_register")
     */
    public function user_register():Response
    {   
        return $this->render("security/user_register.html.twig");
    }

    /**
     * @Route("/test_ajout_et", name="test_ajout_et")
     */
    public function test_ajout_et():Response
    {   
        return $this->render("security/test.html.twig");   
    } 
    /**
     * @Route("/front", name="front")
     */
    public function front():Response
    {   
        return $this->render("front/front.html.twig");   
    }   
    
}