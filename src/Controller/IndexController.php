<?php

namespace App\Controller;

use App\Entity\CraftEssence;
use App\Entity\MysticCode;
use App\Entity\News;
use App\Entity\Personnage;
use App\Entity\Skill;
use App\Entity\SkillMysticCode;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\PersonnageType;


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
     * @Route("/allevent")
     */
    public function allevent()
    {

        $news = $this->getDoctrine()->getRepository('App:News')->findBy([], ['id' => 'DESC']);

        dump($news);


        return $this->render('index/page/allevent.html.twig',
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
     * @Route("/personnage/class")
     */
    public function class()
    {

        $personnage = $this->getDoctrine()->getRepository('App:Personnage')->findBy([], ['classid' => 'ASC']);

        dump($personnage);

        return $this->render('index/page/class.html.twig',
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

    /**
     * @Route("/personnage/ajoutperso")
     */
    public function createperso()
    {
        if (!empty($_GET)) {
            $entityManager = $this->getDoctrine()->getManager();
            $personnage = new personnage();
            $personnage->setNom($_GET['name']);
            $personnage->setPv($_GET['pv']);
            $personnage->setBaseatk($_GET['baseatk']);
            $personnage->setBasepv($_GET['basepv']);
            $personnage->setAtk($_GET['atk']);
            $personnage->setCost($_GET['cost']);
            $personnage->setImageName($_GET['imagename']);
            $personnage->setImageSize($_GET['imagesize']);
            $personnage->setNp($_GET['np']);
            $personnage->setClass($_GET['class']);
            $personnage->setClassid($_GET['classid']);
            $personnage->setAscension1($_GET['ascension1']);
            $personnage->setAscension2($_GET['ascension2']);
            $personnage->setAscension3($_GET['ascension3']);
            $personnage->setAscension4($_GET['ascension4']);



            $entityManager->persist($personnage);
            $entityManager->flush();

            return $this->redirectToRoute('app_index_personnage');
        }
        return $this->render('index/page/createperso.html.twig');
    }


    /**
     * @Route("/personnage/ajoutevent")
     */
    public function createevent()
    {
        if (!empty($_GET)) {
            $entityManager = $this->getDoctrine()->getManager();
            $news = new News();
            $news->setTitle($_GET['title']);
            $news->setText($_GET['text']);
            $news->setImageName($_GET['imagename']);
            $news->setImageSize($_GET['imagesize']);
            $news->setTrailer($_GET['trailer']);



            $entityManager->persist($news);
            $entityManager->flush();

            return $this->redirectToRoute('app_index_personnage');
        }
        return $this->render('index/page/createevent.html.twig');
    }

    /**
     * @Route("/skill")
     */
    public function skill()
    {

        $skill = $this->getDoctrine()->getRepository('App:Skill')->findAll();

        dump($skill);

        return $this->render('index/page/skill.html.twig',
            [
                'skill' => $skill
            ]);
    }

    /**
     * @Route("/personnage/ajoutskill")
     */
    public function createskill()
    {
        if (!empty($_GET)) {
            $entityManager = $this->getDoctrine()->getManager();
            $skill = new Skill();

            $skill->setNom($_GET['nom']);
            $skill->setTarget($_GET['target']);
            $skill->setCd($_GET['cd']);
            $skill->setDescription($_GET['description']);
            $skill->setImageName($_GET['imagename']);
            $skill->setLvl1($_GET['lvl1']);
            $skill->setLvl2($_GET['lvl2']);
            $skill->setLvl3($_GET['lvl3']);
            $skill->setLvl4($_GET['lvl4']);
            $skill->setLvl5($_GET['lvl5']);
            $skill->setLvl6($_GET['lvl6']);
            $skill->setLvl7($_GET['lvl7']);
            $skill->setLvl8($_GET['lvl8']);
            $skill->setLvl9($_GET['lvl9']);
            $skill->setLvl10($_GET['lvl10']);

            dump($skill);


            $entityManager->persist($skill);
            $entityManager->flush();

            return $this->redirectToRoute('app_index_personnage');
        }
        return $this->render('index/page/createskill.html.twig');
    }





    /**
     * @Route("/craftessence")
     */
    public function craftessence()
    {

        $craftessence = $this->getDoctrine()->getRepository('App:CraftEssence')->findAll();

        dump($craftessence);

        return $this->render('index/page/craftessence.html.twig',
            [
                'craftessence' => $craftessence
            ]);
    }

    /**
     * @Route("/craftessence/{id}")
     */
    public function craft($id)
    {

        $craftessence = $this->getDoctrine()->getRepository('App:CraftEssence')->findBy(['id' => $id ]);
        dump($craftessence);

        return $this->render('index/page/descriptioncraftessence.html.twig',
            [
                'craftessence' => $craftessence,
            ]);
    }



    /**
     * @Route("/createcraftessence")
     */
    public function createcraftessence()
    {
        if (!empty($_GET)) {
            $entityManager = $this->getDoctrine()->getManager();
            $craftessence = new CraftEssence();

            $craftessence->setName($_GET['name']);
            $craftessence->setImagename($_GET['imagename']);
            $craftessence->setCost($_GET['cost']);
            $craftessence->setDescription($_GET['description']);
            $craftessence->setImageName($_GET['imagename']);
            $craftessence->setBasehp($_GET['basehp']);
            $craftessence->setBaseatk($_GET['baseatk']);
            $craftessence->setHp($_GET['hp']);
            $craftessence->setAtk($_GET['atk']);
            $craftessence->setIcon($_GET['icon']);
            $craftessence->setLb($_GET['lb']);
            $craftessence->setImagefull($_GET['imagefull']);
            $craftessence->setJapanese($_GET['japanese']);
            $craftessence->setEnglish($_GET['english']);



            dump($craftessence);


            $entityManager->persist($craftessence);
            $entityManager->flush();

            return $this->redirectToRoute('app_index_craftessence');
        }
        return $this->render('index/page/createcraftessence.html.twig');
    }

    /**
     * @Route("/mysticcode")
     */
    public function mysticcode()
    {

        $mysticcode = $this->getDoctrine()->getRepository('App:MysticCode')->findAll();

        dump($mysticcode);

        return $this->render('index/page/mysticcode.html.twig',
            [
                'mysticcode' => $mysticcode
            ]);
    }

    /**
     * @Route("/ajoutmysticcode")
     */
    public function ajoutmysticcode()
    {
        if (!empty($_GET)) {
            $entityManager = $this->getDoctrine()->getManager();
            $mysticcode = new MysticCode();
            $mysticcode->setName($_GET['name']);
            $mysticcode->setimagename($_GET['imagename']);
            $mysticcode->setDescription($_GET['description']);
            $mysticcode->setQuest($_GET['quest']);

            dump($mysticcode);


            $entityManager->persist($mysticcode);
            $entityManager->flush();

            return $this->redirectToRoute('app_index_mysticcode');
        }
        return $this->render('index/page/ajoutmysticcode.html.twig');
    }

    /**
     * @Route("/ajoutskillmysticcode")
     */
    public function ajoutskillmysticcode()
    {
        if (!empty($_GET)) {
            $entityManager = $this->getDoctrine()->getManager();
            $skillmysticcode = new SkillMysticCode();

            $skillmysticcode->setNom($_GET['nom']);
            $skillmysticcode->setTarget($_GET['target']);
            $skillmysticcode->setCd($_GET['cd']);
            $skillmysticcode->setDescription($_GET['description']);
            $skillmysticcode->setImageName($_GET['imagename']);
            $skillmysticcode->setLvl1($_GET['lvl1']);
            $skillmysticcode->setLvl2($_GET['lvl2']);
            $skillmysticcode->setLvl3($_GET['lvl3']);
            $skillmysticcode->setLvl4($_GET['lvl4']);
            $skillmysticcode->setLvl5($_GET['lvl5']);
            $skillmysticcode->setLvl6($_GET['lvl6']);
            $skillmysticcode->setLvl7($_GET['lvl7']);
            $skillmysticcode->setLvl8($_GET['lvl8']);
            $skillmysticcode->setLvl9($_GET['lvl9']);
            $skillmysticcode->setLvl10($_GET['lvl10']);

            dump($skillmysticcode);


            $entityManager->persist($skillmysticcode);
            $entityManager->flush();

            return $this->redirectToRoute('app_index_personnage');
        }
        return $this->render('index/page/ajoutskillmystic.html.twig');
    }

    /**
     * @Route("/skillmysticcode")
     */
    public function skillmysticcode()
    {

        $skillmysticcode = $this->getDoctrine()->getRepository('App:SkillMysticCode')->findAll();

        dump($skillmysticcode);

        return $this->render('index/page/skillmystic.html.twig',
            [
                'skillmysticcode' => $skillmysticcode
            ]);
    }

    /**
     * @Route("/mysticcode/{id}")
     */
    public function descriptionmysticcode($id)
    {

        $descriptionmysticcode = $this->getDoctrine()->getRepository('App:MysticCode')->findBy(['id' => $id ]);
        dump($descriptionmysticcode);
        $skill = $this->getDoctrine()->getRepository('App:SkillMysticCode')->findBy(['mysticcode' => $id ]);
        dump($skill);
        return $this->render('index/page/descriptionmysticcode.html.twig',
            [
                'descriptionmysticcode' => $descriptionmysticcode,
                'skill' => $skill,
            ]);
    }



}
