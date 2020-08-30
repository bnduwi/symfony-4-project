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

        $html = $this->render("micro-post/index.html.twig",
                ['posts' => $this->microPostRepository->findAll()]
                
            );

        return new Response($html);

        // $number = random_int(0, 100);

        // return new Response(
        //     "<head>
        //     <link href='https://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
        //     <style>
        //     body { 
        //         margin: 0;
        //         background-color: #eee;
        //       }
              
        //       .jumbotron { 
        //         padding: 30px; /* fills out the jumbotron */
        //         background-color: #111;
        //       }
              
        //       .container {
        //         width: 1170px; /* specify a width */
        //         margin: 0 auto;  /* centers the container */
        //         padding: 0 15px; /* adds some padding to the left and right*/
        //       }
              
        //       .jumbotron .container { 
        //         max-width: 100%; /* allows the jumbotron to adjust on smaller widths */
        //         background-color: #222;
        //       }
              
        //       .jumbotron h1 { 
        //         text-align: center; /* centers the heading */
        //         color: #DDD;
        //         font-family: 'Raleway', Helvetica, Arial, sans-serif;
        //         font-weight: 600;
        //         text-transform: uppercase;
        //       }
        //     </style>
        //   </head>
          
        //   <body>
            
        //     <div class=\"jumbotron\">
        //       <div class=\"container\">
        //         <h1>Lucky Number</h1>
        //       </div>
        //     </div>
            
        //     <div class=\"container\">
        //       <p style='font-size:660px; text-align:center; font-weight:bold; padding:0;margin:0'>{$number}</p>
        //       </div>
            
        //   </body>"
        // );

        
    }
}