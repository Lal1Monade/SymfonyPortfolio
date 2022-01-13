<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ValletController extends AbstractController
{
    /**
     * @Route("/vallet", name="vallet")
     */
    public function index(): Response
    {
        return $this->render('vallet/index.html.twig', [
            'controller_name' => 'ValletController',
        ]);
    }    
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('vallet/accueil.html.twig');
    }        
    /**
     * @Route("/moncv", name="moncv")
     */
    public function moncv()
    {
        return $this->render('vallet/cv.html.twig');    
    }
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio()
    {
        return $this->render('vallet/portfolio.html.twig');    
    }
    /**
     * @Route("/ensavoirplus", name="ensavoirplus")
     */
    public function ensavoirplus()
    {
        return $this->render('vallet/ensavoirplus.html.twig');    
    } 
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('vallet/contact.html.twig');    
    } 
        /**
     * @Route("/cca", name="cca")
     */
    public function cca()
    {
        return $this->render('vallet/cca.html.twig');    
    } 
        /**
     * @Route("/ccb", name="ccb")
     */
    public function ccb()
    {
        return $this->render('vallet/ccb.html.twig');    
    } 
            /**
     * @Route("/ccc", name="ccc")
     */
    public function ccc()
    {
        return $this->render('vallet/ccc.html.twig');    
    } 

}
