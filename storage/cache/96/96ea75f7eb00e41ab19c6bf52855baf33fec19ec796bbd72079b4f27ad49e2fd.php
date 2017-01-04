<?php

/* profile.twig */
class __TwigTemplate_873c7b8d924ed56cb47db322f0193878bd2991691931c87e1f8cf3b4294df918 extends Twig_Template
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
        echo "<div class=\"row container section grey lighten-3 col s12 m12 l12\">


\t<div class=\"row sous-titre\">
        <div class=\"card-panel col s12 m12 \">
            <h5><i class=\"material-icons red-text left\">account_circle</i>Votre profil</h5>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"card-content col s12 m12 l12\"> <!-- Le contenu de la carte. -->
\t\t\t\t<ul class=\"collection z-depth-1\">
\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 grey-text darken-1\"> Votre pseudo </div>
\t\t\t\t\t\t\t<div class=\"col s7 grey-text text-darken-4 right-align\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"collection-item\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col s5 grey-text darken-1\"> Votre adresse mail </div>
\t\t\t\t\t\t\t<div class=\"col s7 grey-text text-darken-4 right-align\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"row sous-titre\">
        <div class=\"card-panel col s12 m12 \">
            <h5><i class=\"material-icons red-text left\">playlist_add_check</i>Vos séries visionnées</h5>
        </div>
    </div>
    <ul class=\"collapsible\" data-collapsible=\"accordion\">
\t\t<li>
\t\t\t<div class=\"collapsible-header\">Liste des épisodes</div>
\t\t\t<div class=\"collapsible-body\">
\t\t\t\t<ul class=\"collection\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabEpisodes"]) ? $context["tabEpisodes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 39
            echo "\t\t\t\t\t<div id=\"bloc_";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", array()), "html", null, true);
            echo "\"><li class=\"collection-item\"><b>Episode ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "number", array()), "html", null, true);
            echo " : </b>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "name", array()), "html", null, true);
            echo "</li><a name=\"add\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", array()), "html", null, true);
            echo "\" class=\"deleteEpisode\"><i class=\"icone_episode material-icons red-text darken-1 right\">clear</i></a></div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
    </ul>
\t
</div>";
    }

    public function getTemplateName()
    {
        return "profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 41,  68 => 39,  64 => 38,  43 => 20,  34 => 14,  19 => 1,);
    }
}
/* <div class="row container section grey lighten-3 col s12 m12 l12">*/
/* */
/* */
/* 	<div class="row sous-titre">*/
/*         <div class="card-panel col s12 m12 ">*/
/*             <h5><i class="material-icons red-text left">account_circle</i>Votre profil</h5>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="card-content col s12 m12 l12"> <!-- Le contenu de la carte. -->*/
/* 				<ul class="collection z-depth-1">*/
/* 					<li class="collection-item">*/
/* 						<div class="row">*/
/* 							<div class="col s5 grey-text darken-1"> Votre pseudo </div>*/
/* 							<div class="col s7 grey-text text-darken-4 right-align">{{user.name}}</div>*/
/* 						</div>*/
/* 					</li>*/
/* 					<li class="collection-item">*/
/* 						<div class="row">*/
/* 							<div class="col s5 grey-text darken-1"> Votre adresse mail </div>*/
/* 							<div class="col s7 grey-text text-darken-4 right-align">{{user.email}}</div>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	*/
/* 	<div class="row sous-titre">*/
/*         <div class="card-panel col s12 m12 ">*/
/*             <h5><i class="material-icons red-text left">playlist_add_check</i>Vos séries visionnées</h5>*/
/*         </div>*/
/*     </div>*/
/*     <ul class="collapsible" data-collapsible="accordion">*/
/* 		<li>*/
/* 			<div class="collapsible-header">Liste des épisodes</div>*/
/* 			<div class="collapsible-body">*/
/* 				<ul class="collection">*/
/*                     {% for episode in tabEpisodes %}*/
/* 					<div id="bloc_{{ episode.id }}"><li class="collection-item"><b>Episode {{ episode.number }} : </b>{{ episode.name }}</li><a name="add" id="{{ episode.id }}" class="deleteEpisode"><i class="icone_episode material-icons red-text darken-1 right">clear</i></a></div>*/
/*                     {% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 		</li>*/
/*     </ul>*/
/* 	*/
/* </div>*/
