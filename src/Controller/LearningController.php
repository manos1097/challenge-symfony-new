<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class LearningController extends AbstractController
{
    /**
     * @Route("", name="index")
     * @param SessionInterface $session
     * @return Response
     */
    public function showMyName(SessionInterface $session): Response
    {
        $name = 'Unknown';
        if ($session->get('name')) {
            $name = $session->get('name');
        }
        return $this->render('learning/index.html.twig', [
            'name' => $name
        ]);
    }

    /**
     * @Route("/about-becode", name="about")
     * @param SessionInterface $session
     * @return Response
     */
    public function aboutMe(SessionInterface $session): Response
    {
        $name = $name = $session->get('name');
        if (empty($name)) {
            return $this->forward('App\Controller\LearningController::showMyName');
        }
        return $this->render('learning/about.html.twig', [
            'name' => $name
        ]);
    }

    /**
     * @Route("/change-my-name", name="changeMyName")
     * @param SessionInterface $session
     */
    public function changeMyName(SessionInterface $session): Response
    {
        $request = Request::createFromGlobals();
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            if ($name) {
                $session->set('name', $name);
            }
        }
        return $this->redirectToRoute('index');
    }
}
