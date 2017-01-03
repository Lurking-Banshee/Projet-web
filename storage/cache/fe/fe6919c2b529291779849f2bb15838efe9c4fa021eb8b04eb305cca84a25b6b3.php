<?php

/* header.twig */
class __TwigTemplate_71466cf59b8f019ddf29ca94657e1ef33135befe695deb8b25787494d5d0819c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <!--Import Google Icon Font-->
    <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <!--Import materialize.css-->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/materialize/css/materialize.css\" media=\"screen,projection\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"../css/materialize/css/style.css\">
    <!--Let browser know website is optimized for mobile-->
    <link rel=\"icon\" type=\"image/png\" href=\"/images/ED.png\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <title>Watched</title>
</head>

<body class=\"grey lighten-3\">

<!--Bandeau sup -->

<div class=\"navbar-fixed\">
<nav>
    <div class=\"nav-wrapper row red darken-1\">
        <a href=\"/\" class=\"brand-logo\"><img src=\"/images/watchED.png\" class=\"logo hide-on-med-and-down\"></a>
        <a href=\"/\" class=\"brand-logo\"><img src=\"/images/watchED.png\" class=\"logo-tab hide-on-large-only hide-on-small-only\"></a>
        <a href=\"/\" class=\"brand-logo\"><img src=\"/images/watchED.png\" class=\"logo-mobile hide-on-med-and-up\"></a>
        <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
        <ul class=\"right hide-on-med-and-down\">
            <li><a href=\"/search\"><i class=\"material-icons\">search</i></a></li>
            ";
        // line 29
        if (((isset($context["connecter"]) ? $context["connecter"] : null) == 2)) {
            // line 30
            echo "                <li><a href=\"/signin\">Connexion</a></li>
                <li><a href=\"/signup\">Inscription</a></li>
            ";
        } else {
            // line 33
            echo "                <li><a href=\"/profile\"><i class=\"material-icons left\">account_circle</i>Profil</a></li>
                <li><a href=\"/logout\"><i class=\"material-icons right\">clear</i>Déconnexion</a></li>
            ";
        }
        // line 35
        echo "\t
        </ul>
        <ul class=\"side-nav\" id=\"mobile-demo\">
            <li><a href=\"/\">Accueil</a></li>
            <li><a href=\"/search\">Rechercher</a></li>
            <li><a href=\"/signin\">Connexion</a></li>
            <li><a href=\"/signup\">Inscription</a></li>
        </ul>
    </div>
</nav>
</div>
<main>";
    }

    public function getTemplateName()
    {
        return "header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 35,  56 => 33,  51 => 30,  49 => 29,  19 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="fr">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>*/
/*     <!--Import Google Icon Font-->*/
/*     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*     <!--Import materialize.css-->*/
/*     <link type="text/css" rel="stylesheet" href="../css/materialize/css/materialize.css" media="screen,projection">*/
/*     <link type="text/css" rel="stylesheet" href="../css/materialize/css/style.css">*/
/*     <!--Let browser know website is optimized for mobile-->*/
/*     <link rel="icon" type="image/png" href="/images/ED.png" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     <title>Watched</title>*/
/* </head>*/
/* */
/* <body class="grey lighten-3">*/
/* */
/* <!--Bandeau sup -->*/
/* */
/* <div class="navbar-fixed">*/
/* <nav>*/
/*     <div class="nav-wrapper row red darken-1">*/
/*         <a href="/" class="brand-logo"><img src="/images/watchED.png" class="logo hide-on-med-and-down"></a>*/
/*         <a href="/" class="brand-logo"><img src="/images/watchED.png" class="logo-tab hide-on-large-only hide-on-small-only"></a>*/
/*         <a href="/" class="brand-logo"><img src="/images/watchED.png" class="logo-mobile hide-on-med-and-up"></a>*/
/*         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>*/
/*         <ul class="right hide-on-med-and-down">*/
/*             <li><a href="/search"><i class="material-icons">search</i></a></li>*/
/*             {% if connecter == 2 %}*/
/*                 <li><a href="/signin">Connexion</a></li>*/
/*                 <li><a href="/signup">Inscription</a></li>*/
/*             {% else %}*/
/*                 <li><a href="/profile"><i class="material-icons left">account_circle</i>Profil</a></li>*/
/*                 <li><a href="/logout"><i class="material-icons right">clear</i>Déconnexion</a></li>*/
/*             {% endif %}	*/
/*         </ul>*/
/*         <ul class="side-nav" id="mobile-demo">*/
/*             <li><a href="/">Accueil</a></li>*/
/*             <li><a href="/search">Rechercher</a></li>*/
/*             <li><a href="/signin">Connexion</a></li>*/
/*             <li><a href="/signup">Inscription</a></li>*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* </div>*/
/* <main>*/
