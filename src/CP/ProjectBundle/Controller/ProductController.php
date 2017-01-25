<?php
/**
 * Created by PhpStorm.
 * User: fliou
 * Date: 23/01/17
 * Time: 18:40
 */

namespace CP\ProjectBundle\Controller;

use CP\ProjectBundle\Document\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends Controller
{

    public function createAction(){
        $projet = new Projet();
        $projet->setTitre("Test 1");
        $projet->setDescription("vers l'infini et au delas");

        $dm = $this->get('doctrine_mongodb')->getManager();
        $dm->persist($projet);
        $dm->flush();

        return new Response('Create product id ' .$projet->getId());

    }
}