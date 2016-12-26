<?php

namespace App\Controllers;

use App\Models\Seasons;
use App\Models\Series;
use phpDocumentor\Reflection\Types\Array_;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class HomeController
{
    private $view;
    private $logger;
	private $user;

    public function __construct($view, LoggerInterface $logger, $user)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->model = $user;
    }

    public function dispatch(Request $request, Response $response, $args)
    {
        $this->logger->info("Home page action dispatched");
        $tabNouv = Series::orderBy('first_air_date','DESC')->take(4)->get();
        $tabTend = Series::orderBy('popularity','DESC')->take(4)->get();
        $this->view->render($response, 'homepage.twig',array('seriesNouv'=>$tabNouv,'seriesTend'=>$tabTend));
        return $response;
    }

    public function signup(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'signup.twig');
    }

    public function signin(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'signin.twig');
    }

    public function show(Request $request, Response $response, $args)
    {
        $serie = Series::find($args['id']);
        $tabSaison = $serie->saisons()->get();
        foreach ($tabSaison as $season ){
            $tabEpisodes = $season->episodes()->get();
            $season['tabEpisodes'] = $tabEpisodes;
        }

        //var_dump($tabEpisodes);
        //var_dump($tabSaison[0]["tabEpisodes"]);
        return $this->view->render($response, 'show.twig', Array("serie"=>$serie,"seasons"=>$tabSaison));

    }
}
