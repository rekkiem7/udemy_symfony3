<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{
    
    public function indexAction(Request $request,$lang,$name,$page,$lastname)
    {
        // replace this example code with whatever you need
        $productos = array("producto"=>"Consola","precio"=>2);
        
        return $this->render('AppBundle:Pruebas:index.html.twig', array(
            'texto'=> $name.'-'.$page,
            'productos'=> $productos
        ));
    }
    
    /**
     * @Route("/redirect", name="redirect1")
     */
    public function redirect1Action(Request $request)
    {
        return $this->redirect($this->generateUrl("homepage")); // aqui va el name de la ruta
    }
    
    /**
     * @Route("/redirect2", name="redirect2")
     */
    public function redirect2Action(Request $request)
    {
        return $this->redirect($this->container->get("router")->getContext()->getBaseUrl()."/pruebas/en/pablo/3/barria?hola");
    }
    
    /**
     * @Route("/redirect3", name="redirect3")
     */
    public function redirect3Action(Request $request)
    {
        return $this->redirect($request->getBaseUrl()."/hello?hola=true");
    }
    
    /**
     * @Route("/getVar", name="getVar1")
     */
    
    public function getValueAction(Request $request)
    {
        var_dump($request->query->get("hola"));
        var_dump($request->get("hola-post"));
        die();
    }
    
}


