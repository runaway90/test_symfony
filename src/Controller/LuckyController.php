<?php
/**
 * Created by PhpStorm.
 * User: vbezgin
 * Date: 01.08.18
 * Time: 14:39
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

}