<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index(){
        $a = 3; 
        var_dump($a);
        var_dump("Ca fonctionne");
        die();
    }

    /**
     *  @Route('/test' , name: 'test' , methods={'GET','POST'})
     *  */
    public function test(Request $request):Response{

        $departement = $request->query->get('departement' , 0);
        $response = new Response($departement) ; 

        return $response;
        
        

        
        // if (isset($_GET['departement'])) {
        //     dd("c'est un departement ".$_GET['departement']);
        // }else{
        //     dd("vous n'avez pas de departement");
        // }
        
        
        
    }
    
}
