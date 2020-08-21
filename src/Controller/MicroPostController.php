<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MicroPostController
{
    
    public function index()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body><Lucky><h1>Lucky number:</h1><h2 style="color:red"> '.$number.'</h2></body></html>'
        );
    }
}