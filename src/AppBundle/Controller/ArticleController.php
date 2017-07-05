<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Service\ArticleManager;
use JMS\DiExtraBundle\Annotation as DI;
use AppBundle\Service\AppLogger;

class ArticleController extends Controller
{
    /** @DI\Inject("article.manager") */
    public $articleManager;

    /** @DI\Inject("app.logger") */
    public $appLogger;

    /**
     * @Route("/article/create/{artId}")
     */
    public function createAction(Request $request, $artId )
    {
        // replace this example code with whatever you need
        // if artid is empty means request for new article
        $this->appLogger->error('asdf');
        return $this->render('article/create.html.twig', array(
            'number' => $this->articleManager->getArtIdFromMDocId( 54 ),
        ));
        // if artid is non empty means return article for updation
    }

    /**
     * @Route("/article/show/{artId}")
     */
    public function showAction(Request $request, $artId)
    {
        // replace this example code with whatever you need
        return $this->render('article/create.html.twig', array(
            'number' => $artId,
        ));
    }

    /**
     * @Route("/article/update/{artId}")
     */
    public function updateAction(){

    }

}
