<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Repository\MicroPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @var MicroPostRepository
     */
    private $microPostRepository;

    public function __construct(MicroPostRepository $microPostRepository)
    {
        $this->microPostRepository = $microPostRepository;
    }

    public function number(): Response
    {
        //$number = random_int(0, 100);

        // return new Response(
        //     '<html><body>Lucky number: '.$this->microPostRepository->findAll().'</body></html>'
        // );

        // $html = $this->render("micro-post/index.html.twig",
        //         ['posts' => $this->microPostRepository->findAll()]
                
        //     );

        // return $html;

        $number = random_int(0, 100);

        return new Response(
            '<html><body><Lucky><h1>Lucky number:</h1><h2 style="color:red"> '.$number.'</h2></body></html>'
        );

        
    }
}