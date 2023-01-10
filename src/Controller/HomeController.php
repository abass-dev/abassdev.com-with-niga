<?php

namespace App\Controller;

use Nigatedev\FrameworkBundle\Controller\AbstractController;
use Nigatedev\FrameworkBundle\Attributes\Route;
use Nigatedev\FrameworkBundle\Http\Request;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(Request $request)
    {
        return $this->render("home");
    }
}
