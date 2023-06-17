<?php

namespace App\Controller;

use App\Service\ServiceApi;
use App\TwigExtension\CustomTwigExtesion;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListPokemonController extends AbstractController
{
    #[Route('/list/pokemon', name: 'app_list_pokemon')]
    public function index(ServiceApi $serviceApi): Response
    {
        $json = $serviceApi->getData("v1/pokemon/3");
        $get = json_decode($json, true);
        //dd($get);

        $date = [];
        $count = [];

        foreach ($get as $key => $value) {
            foreach ($value as $key => $i) {
                $count[$key] = isset($count[$key]) ? $count[$key] + 1 : 1;
                $date[$key . $count[$key]] = $i;
            }
        };

        $twig = new CustomTwigExtesion;
        $twig->setFunction();

        return $this->render('list_pokemon/index.html.twig', [
            'date' => $date,
        ]);
    }

    public function print_r(array $arg): string
    {
        return print_r($arg, true);
    }
}

