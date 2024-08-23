<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Service\MyLApiService;

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

class EditionController extends AbstractController
{
    #[Route('/edition/{edslug}', name: 'edition')]

    private $cardApiService;

    public function __construct(MyLApiService $cardApiService)
    {
        $this->cardApiService = $cardApiService;
    }

    public function editionBySlug(string $edslug): Response
    {
        $response = $this->cardApiService->editionBySlug($edslug);
        $response = json_decode($response);
        $response = json_encode($response, JSON_PRETTY_PRINT);

        return new Response(
            "<pre>$response</pre>"
        );
    }

    public function createEdition(string $edslug): bool
    {
        $response = $this->cardApiService->editionBySlug($edslug);

        return False;
    }

}
