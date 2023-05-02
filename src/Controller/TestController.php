<?php

namespace App\Controller;

use ApiPlatform\OpenApi\Model\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{

  #[Route('/api/test', name: 'test')]
  public function index()
  {
    return $this->json([
      'message' => 'Welcome to your new controller!',
      'path' => 'src/Controller/TestController.php',
    ]);
  }
}
