<?php

namespace IMCV\HajjBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    /**
   * @Route("/", name="imcv_hajj_")
     */
    public function indexAction()
    {
        return $this->redirect('https://goo.gl/forms/g3DKjQLU1XujCodS2');
    }

}
