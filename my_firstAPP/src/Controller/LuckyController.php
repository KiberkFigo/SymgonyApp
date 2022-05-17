<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Util\DatabaseUtil;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    public $databaseUtil;

    public function __construct(DatabaseUtil $databaseUtil)
    {
        $this->databaseUtil = $databaseUtil;
    }

    #[Route('/', name: 'home')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        //$this->databaseUtil->insert("dogs", ["name" => "Test"]);

        return $this->render('home.html.twig', ["name" => "Wpj"]);
    }
}