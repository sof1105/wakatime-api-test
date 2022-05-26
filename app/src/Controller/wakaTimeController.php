<?php

namespace App\Controller;
use App\Repository\QuoteRepository;
use App\Service\WakatimeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class wakaTimeController extends AbstractController
{
    //
    #[Route('/wakatime', name: 'wakatime')]
    public function wakaTest(WakatimeService $wakatimeService): Response {

        $wakatime = $wakatimeService->load();
        $summaries = $wakatime->summaries('2022-05-25','2022-05-26');
//        dump($summaries);
        return $this->render(
            'wakatime/index.html.twig',
            [
                'summaries' => $summaries,
            ]
        );

    }

}