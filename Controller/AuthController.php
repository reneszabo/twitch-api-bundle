<?php

namespace Twitch\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/auth")
 */
class AuthController extends Controller
{
    /**
     * @Route("/auth_authorization")
     */
    public function indexAction()
    {
        return new JsonResponse('hello');
    }
}
