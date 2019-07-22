<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
    /**
     * @Route("/")
     * @return JsonResponse
     */
    public function indexAction(LoggerInterface $logger)
    {
        $logger->info("I just got the logger");
        $logger->error('An error occurred');
        $logger->critical('I left the oven on !', [
            'cause' => 'in_hurry'
        ]);
        return new JsonResponse(['logging']);
    }
}