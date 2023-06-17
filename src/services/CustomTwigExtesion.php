<?php
#namespace Services\ConstumTwigExtesion;
namespace App\TwigExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
* Class ConstumTwigExtecson
* @author Matheu
*/
class CustomTwigExtesion extends AbstractExtension
{
    public function setFunction()
    {
        return [
            new TwigFunction("print_r", [$this, "printr"])
        ];
    }

    public function printr($object)
    {
        return print_r($object, true);
    }
}

?>
