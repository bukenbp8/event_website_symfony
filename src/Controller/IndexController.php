<?php

namespace App\Controller;

use App\Entity\Event;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\ Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @Method({"GET"})
     */
    public function index()
    {
        $events = $this->getDoctrine()->getRepository
        (Event::class)->findAll();

        return $this->render('index/index.html.twig', array('events' => $events));
    }

    /**
     * @Route("/music", name="music")
     * @Method({"GET"})
     */
    public function music()
    {
        $events = $this->getDoctrine()->getRepository
        (Event::class)->findBy(array('type' => 'Music'));

        return $this->render('index/music.html.twig', array('events' => $events));
    }

    /**
     * @Route("/theater", name="theater")
     * @Method({"GET"})
     */
    public function theater()
    {
        $events = $this->getDoctrine()->getRepository
        (Event::class)->findBy(array('type' => 'Theater'));

        return $this->render('index/theater.html.twig', array('events' => $events));
    }

    /**
     * @Route("/festivals", name="festivals")
     * @Method({"GET"})
     */
    public function festivals()
    {
        $events = $this->getDoctrine()->getRepository
        (Event::class)->findBy(array('type' => 'Festival'));

        return $this->render('index/festival.html.twig', array('events' => $events));
    }

}
