<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MicroPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MicroPostController extends AbstractController
{
    /**
     * @var MicroPostRepository
     */
    private $microPostRepository;

    public function __construct(MicroPostRepository $microPostRepository)
    {
        $this->microPostRepository = $microPostRepository;
    }

    public function index()
    {
        $html = $this->render("micro-post/index.html.twig",
                ['posts' => $this->microPostRepository->findAll()]
                
            );

        return $html;
    }
}