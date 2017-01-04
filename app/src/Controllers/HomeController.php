<?php

namespace App\Controllers;

use App\Models\Compagnies;
use App\Models\Companies;
use App\Models\Creators;
use App\Models\Episodes;
use App\Models\Genre;
use App\Models\Genres;
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
        $tabNouv = Series::orderBy('first_air_date', 'DESC')->take(4)->get();
        $tabTend = Series::orderBy('popularity', 'DESC')->take(4)->get();
        if(isset($_SESSION['uniqid'])){
            $connecter = 1;
        }else{
            $connecter = 2;
        }
        $this->view->render($response, 'homepage.twig', array('seriesNouv' => $tabNouv, 'seriesTend' => $tabTend, "connecter"=>$connecter));
        return $response;
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return mixed
     *
     * method for accessing the signup page
     */
    public function signup(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'signup.twig');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return mixed
     *
     * method for accessing the signin page
     */
    public function signin(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'signin.twig');
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return mixed
     *
     * method for accessing the show page which present the details of the serie selected
     */
    public function show(Request $request, Response $response, $args)
    {
        $serie = Series::find($args['id']);
        $tabSaison = $serie->saisons()->orderBy('air_date', 'ASC')->get();
        foreach ($tabSaison as $season) {
            $tabEpisodes = $season->episodes()->orderBy('number', 'ASC')->get();
            $season['tabEpisodes'] = $tabEpisodes;
        }
        if(isset($_SESSION['uniqid'])){
            $connecter = 1;
        }else{
            $connecter = 2;
        }
        $tabGenres = $serie->genres()->get();
        return $this->view->render($response, 'show.twig', Array("serie" => $serie, "seasons" => $tabSaison, "genres" => $tabGenres, "connecter" => $connecter));
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return mixed
     *
     * method for accessing the search page
     */
    public function search(Request $request, Response $response, $args)
    {
        return $this->view->render($response, 'search.twig', Array("type" => $args));
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return mixed
     *
     * method for accessing the profile page
     */
    public function profile(Request $request, Response $response, $args)
    {
        $user = User::find($_SESSION['uniqid']);
        $tabEpisodes = $user->episode()->get();
        return $this->view->render($response, 'profile.twig', array('user' => $user, 'tabEpisodes' => $tabEpisodes));
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return \Psr\Http\Message\MessageInterface
     *
     * method used on the signup page for adding an user in the database
     */
    public function addUser(Request $request, Response $response, $args)
    {
        if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = array();
			
			if($username=="" or $email=="" or $password==""){
				array_push($errors, "Veuillez remplir tous les champs");
			}
			
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
                $password = password_hash($password, PASSWORD_DEFAULT, Array(
                    'cost' => 12
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

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return mixed
     *
     * method used on the search page for searching a serie
     */
    public function resultSearch(Request $request, Response $response, $args)
    {


        $tabSeries = Series::where('name', 'like', '%' . $_POST['name'] . '%')->get();


        if (isset($_POST['genre']) && !empty($_POST['genre'])) {
            $genre = Genres::find($_POST['genre']);
            $tabSeries_genre = collect();
            foreach ($genre as $it_genre) {
                foreach ($it_genre->series()->get() as $it_serie_genre) {
                    $tabSeries_genre->push($it_serie_genre);
                }
            }
            $tabSeries = $tabSeries->intersect($tabSeries_genre);
        }

        if (isset($_POST['company']) && !empty($_POST['company'])) {
            $company = Companies::where('name', 'like', '%' . $_POST['company'] . '%')->get();
            $tabSeries_company = collect();
            foreach ($company as $it_company) {
                foreach ($it_company->series()->get() as $it_serie_company) {
                    $tabSeries_company->push($it_serie_company);
                }
            }
            $tabSeries = $tabSeries->intersect($tabSeries_company);
        }

        if (isset($_POST['creator']) && !empty($_POST['creator'])) {
            $creator = Creators::where('name', 'like', '%' . $_POST['creator'] . '%')->get();
            $tabSeries_creator = collect();
            foreach ($creator as $it_creator) {
                foreach ($it_creator->series()->get() as $it_serie_creator) {
                    $tabSeries_creator->push($it_serie_creator);
                }
            }
            $tabSeries = $tabSeries->intersect($tabSeries_creator);
        }

        return $this->view->render($response, 'resultSearch.twig', Array("series" => $tabSeries));
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return mixed
     *
     * method used on signin page for login an user who already exist in the database
     */
    public function loginUser(Request $request, Response $response, $args)
    {
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
            $user = User::where("email", $email)->get()->first();
            //var_dump($user);
            if (isset($user->id)) {
                if (password_verify($password, $user->password)) {
                    $_SESSION["uniqid"] = $user->id;
                    $_SESSION["type"] = 'user';
                    var_dump($_SESSION['uniqid']);
                    return $response->withRedirect($this->router->pathFor('homepage'));
                } else {
                    $this->view->render($response, 'signin.twig', array('errors' => "error"));
                }
            } else {
                $this->view->render($response, 'signin.twig', array('errors' => "error"));
            }
        } else {
            $this->view->render($response, 'signin.twig', array('errors' => "error"));
        }
    }

    /**
     * @param Request $request
     * @param Response $response
     * @param $args
     * @return mixed
     *
     * method used in the header for logout the user connected
     */
    public function logout(Request $request, Response $response, $args)
    {
        unset($_SESSION['uniqid']);
        return $response->withRedirect($this->router->pathFor('homepage'));
    }
}
