<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use App\Repository\PropertyRepository;

class HomeController
{
    /**
     * @var
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index(PropertyRepository $repository): Response
    
    {
        $properties = $repository->findLatest();
        return new Response($this->twig->render('pages/home.html.twig', [
            'properties' => $properties
        ]));
    }

}