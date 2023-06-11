<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class RandomNumber extends AbstractController
{
    public function index(): Response
    {
        // return new Response("hello, wold", Response::HTTP_OK);
        $rand = random_int(0, 10);
        return $this->render("random/index.twig", [
            "rand" => $rand
        ]);
    }
}
?>
