<?php

namespace App\Controller;

use Niga\Framework\Controller\AbstractController;
use Niga\Framework\Attributes\Route;
use Niga\Framework\Http\Request;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(Request $request)
    {
        return $this->render("home");
    }
}
