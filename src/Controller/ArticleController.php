<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends AbstractController
{
    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{slug}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */
    public function show($_locale, $year, $slug)
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            '1' => $_locale,
            '2' => $year,
            '3' => $slug,
        ]);
    }


    //http://localhost:8001/articles/en/2013/my-latest-post
}
