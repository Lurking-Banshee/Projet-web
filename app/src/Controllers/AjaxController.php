<?php
/**
 * Created by PhpStorm.
 * User: Prenoult
 * Date: 03/01/2017
 * Time: 20:36
 */

namespace App\Controllers;


use App\Models\Episodes;
use App\Models\User;
use Illuminate\Database\Capsule\Manager;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class AjaxController
{
    private $view;
    private $logger;
    private $router;

    public function __construct($c)
    {
        $this->view = $c->get('view');
        $this->logger = $c->get('logger');
        $this->router = $c->get('router');
    }

    public function addEpisode(Request $request, Response $response, $args)
    {
        $user = User::find($_SESSION['uniqid']);
        $episode = Episodes::find($args['id']);
        $user->episode()->attach($episode);
        $user->save();
        echo json_encode('');
    }

    public function deleteEpisode(Request $request, Response $response, $args){
        $episode = Episodes::find($args['id']);
        $user = User::find($_SESSION['uniqid']);
        Manager::table('usersepisodes')->where('user_id', $user->id)->where('episode_id', $episode->id)->delete();
        echo json_encode('');
    }
}