<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapsController extends AbstractController
{
    #[Route('/maps', name: 'maps')]
    public function index(): Response
    {
        return $this->render('maps/index.html.twig', [
            'google_maps_api_key' => $_ENV['GOOGLE_MAPS_API_KEY'],
        ]);
    }
}
