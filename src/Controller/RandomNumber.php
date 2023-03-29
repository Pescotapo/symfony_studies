<?php
namespace App\ControllerTest1;

$br = PHP_EOL;
$vendor = (string) getenv("VENDOR");

require_once $vendor."autoload.php";

use \Symfony\Component\HttpFoundation\Response;

class RandomNumber {
    public static function random_number(){
        $random_number = random_int(0, 10);
        return new Response("
            <html>
                <body>
                    <center>
                        <p>$$random_number</p>
                    </center>
                </body>
            </html>",
            Response::HTTP_OK
        );
    }
}

?>
