<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {

        $news = $this->getDoctrine()->getRepository('App:News')->findBy([], ['id' => 'DESC'],3);

        dump($news);


        return $this->render('index/index.html.twig',
            [
                'news' => $news
            ]);
    }


    /**
     * @Route("/news/{id}")
     */
    public function news($id)
    {
        $nouvelle = $this->getDoctrine()->getRepository('App:News')->findBy(['id' => $id ], ['id' => 'DESC'],3);

        return $this->render('index/page/news.html.twig',
            [
                'nouvelle' => $nouvelle
            ]);
    }


    /**
     * @Route("/personnage")
     */
    public function personnage()
    {

        $personnage = $this->getDoctrine()->getRepository('App:Personnage')->findAll();

        dump($personnage);

        return $this->render('index/page/character.html.twig',
            [
                'personnage' => $personnage
            ]);
    }

    /**
     * @Route("/personnage/{name}/{id}")
     */
    public function description($name, $id)
    {

        $perso = $this->getDoctrine()->getRepository('App:Personnage')->findBy(['nom' => $name ]);
        dump($perso);

        $skill = $this->getDoctrine()->getRepository('App:Skill')->findBy(['personnage' => $id ]);
        dump($skill);
        return $this->render('index/page/description.html.twig',
            [
                'perso' => $perso,
                'skill' => $skill
            ]);
    }

}
