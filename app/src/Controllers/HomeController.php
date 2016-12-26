<?php

namespace App\Controllers;

use App\Models\Seasons;
use App\Models\Series;
use phpDocumentor\Reflection\Types\Array_;
use Psr\Log\LoggerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Models\User;

final class HomeController
{
    private $view;
    private $logger;
    private $user;

    public function __construct($c)
    {
        $this->view = $c->get('view');
        $this->logger = $c->get('logger');
        $this->model = $c->get('App\Repositories\UserRepository');
        $this->router = $c->get('router');
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

    public function search(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'search.twig');
    }

    public function profile(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'profile.twig');
    }
	
    public function addUser(Request $request, Response $response, $args)
    {
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = array();

            if ($username != filter_var($username, FILTER_SANITIZE_STRING)) {
                array_push($errors, "Nom invalide, merci de corriger");
            }
            if ($email != filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Adresse email invalide, merci de corriger");
            } else {
                $emailVerif = \App\Models\User::where('email', $email)->get();
                if (sizeof($emailVerif) != 0) {
                    array_push($errors, "Un compte a déjà été créé avec cette adresse email ou ce pseudo");
                }
            }
            if ($password != filter_var($password, FILTER_SANITIZE_STRING)) {
                array_push($errors, "Mot de passe invalide, merci de corriger");
            }

            if (sizeof($errors) == 0) {
                $username = filter_var($username, FILTER_SANITIZE_STRING);
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                $password = password_hash($password, PASSWORD_DEFAULT, array(
                    'cost' => 12,
                ));

                $user = new \App\Models\User();
                $user->name = $username;
                $user->email = $email;
                $user->password = $password;
                $user->save();

                $_SESSION['uniqid'] = $user->id;
                $_SESSION['type'] = 'user';

                if (isset($_SESSION['route'])) {
                    $derniere_route = $_SESSION['route'];
                    unset($_SESSION['route']);
                    return $response->withStatus(302)->withHeader('Location', $derniere_route);
                } else {
                    return $response->withRedirect($this->router->pathFor('homepage'));
                }

            } else {
                return $this->view->render($response, 'signup.twig', array('errors' => $errors));

            }
        } else {
            return $response->withRedirect($this->router->pathFor('homepage'));

        }
    }
}
