<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
* Class Zool
* @author MATHEU
 */
class Zool extends AbstractController
{
    #[Route("zool/{animal}")]
    public function index($animal)
    {
        return $this->render("zool/index.twig",[
            "animal" => $animal
        ]);
    }
}

?>
