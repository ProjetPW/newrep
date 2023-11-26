<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
 {
    #[Route('/hello', name: 'app_hello')]
    public function hello(){
        return $this->render('hello/hello.html.twig', [
            'controller_name' => 'HelloController'
        ]);
        
    }
}


