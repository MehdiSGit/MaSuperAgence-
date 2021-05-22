<?php

namespace App\Controller;

use App\Entity\Property;
use App\Repository\PropertyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{

    // php bin/console debug:autowiring 
    public function __construct(PropertyRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/biens", name="property.index")
     * @return Response
     */
    public function index(): Response
    {
        // $property = $this->repository->findAllVisible();
        // $property[0]->setSold(true);
        // dump($property);
        // $this->em->flush();

        // $repository = $this->getDoctrine()->getRepository(Property::class);

        // $property = new Property();
        // $property->setTitle('Mon premier bienvenue')
        //         ->setPrice(200000)
        //         ->setRooms(4)
        //         ->setBedrooms(3)
        //         ->setDescription('une petite description')
        //         ->setSurface(60)
        //         ->setFloor(4)
        //         ->setHeat(1)
        //         ->setCity('Paris')
        //         ->setAddress('15 boulevard Gambetta')
        //         ->setPostalCode(75012);
        // $em = $this->getDoctrine()->getManager();
        // $em->persist($property);
        // $em->flush();

        return $this->render('property/index.html.twig', [
            'current_menu' =>'properties'
            ]);
    }
}