<?php
/**
 * Created by PhpStorm.
 * User: debian
 * Date: 23/12/16
 * Time: 17:04
 */

namespace App\Controllers;


use App\Models\Series;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class SerieController
{

    private $view;
    private $logger;
    private $user;

    public function __construct($view, LoggerInterface $logger, $user)
    {
        $this->view = $view;
        $this->logger = $logger;
        $this->user = $user;
    }

    public function detailSerie($view, Response $response, $user){
        //$serie = Series::find($args['id']);
        //var_dump($serie);

    }
}