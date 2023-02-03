<?php declare(strict_types=1);

namespace App\Controller\Web\Common;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route(path: '/', name: 'default')]
    public function index(): Response
    {
        return $this->render('default.html.twig');
    }
}