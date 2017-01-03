<?php

/* homepage.twig */
class __TwigTemplate_a87391103521115e5e3366da0505aab90eb0a2a275acf7968c56c96ab9f8ce5e extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\"></div>

    <div class=\"row sous-titre\">
        <div class=\"card-panel col s12 m12 \">
            <h5><i class=\"material-icons red-text left\">whatshot</i>Tendances</h5>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seriesTend"]) ? $context["seriesTend"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tend"]) {
            // line 11
            echo "            <div class=\"col s12 m6 l3\">
                <div class=\"card sticky-action medium\">
                    <div class=\"card-image waves-effect waves-block waves-light\">
                        <img class=\"activator\" src=\"https://image.tmdb.org/t/p/original";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["tend"], "poster_path", array()), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"card-content\">
                        <span class=\"card-title activator\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["tend"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">more_vert</i></span>
                    </div>
                    <div class=\"card-reveal\">
                        <span class=\"card-title grey-text text-darken-4\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tend"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
                        <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tend"], "overview", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"card-action\">
                        <a href=\"/show/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tend"], "id", array()), "html", null, true);
            echo "\"><span class=\"red-text text-darken-1\">Explorer</span></a>
                        ";
            // line 25
            if (((isset($context["connecter"]) ? $context["connecter"] : null) == 1)) {
                // line 26
                echo "                        <a href=\"/\" class=\"waves-effect waves-light btn red darken-1\"><i class=\"material-icons left\">add</i>Ajouter</a>
                        ";
            } else {
                // line 28
                echo "                        <a href=\"/signin\" class=\"waves-effect waves-light btn red darken-1\"><i class=\"material-icons left\">add</i>Ajouter</a>
                        ";
            }
            // line 30
            echo "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>


    <div class=\"row sous-titre\">
        <div class=\"card-panel col s12 m12 \">
            <h5><i class=\"material-icons red-text left\">new_releases</i>Nouveautés</h5>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seriesNouv"]) ? $context["seriesNouv"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nouv"]) {
            // line 44
            echo "            <div class=\"col s12 m6 l3\">
                <div class=\"card sticky-action medium\">
                    <div class=\"card-image waves-effect waves-block waves-light\">
                        <img class=\"activator\" src=\"https://image.tmdb.org/t/p/original";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "poster_path", array()), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"card-content\">
                        <span class=\"card-title activator\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">more_vert</i></span>
                    </div>
                    <div class=\"card-reveal\">
                        <span class=\"card-title grey-text text-darken-4\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
                        <p>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "overview", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"card-action\">
                        <a href=\"/show/";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "id", array()), "html", null, true);
            echo "\"><span class=\"red-text text-darken-1\">Explorer</span></a>
                        ";
            // line 58
            if (((isset($context["connecter"]) ? $context["connecter"] : null) == 1)) {
                // line 59
                echo "                            <a href=\"/\" class=\"waves-effect waves-light btn red darken-1\"><i class=\"material-icons left\">add</i>Ajouter</a>
                        ";
            } else {
                // line 61
                echo "                            <a href=\"/signin\" class=\"waves-effect waves-light btn red darken-1\"><i class=\"material-icons left\">add</i>Ajouter</a>
                        ";
            }
            // line 63
            echo "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nouv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
    ";
        // line 68
        if (((isset($context["connecter"]) ? $context["connecter"] : null) == 1)) {
            // line 69
            echo "        <div class=\"row sous-titre\">
            <div class=\"card-panel col s12 m12 \">
                <h5><i class=\"material-icons red-text left\">subscriptions</i>Recommandations</h5>
            </div>
        </div>
        <div class=\"row\">

           ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["seriesReco"]) ? $context["seriesReco"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["reco"]) {
                // line 77
                echo "\t\t\t\t<div class=\"col s12 m6 l3\">
\t\t\t\t\t<div class=\"card sticky-action medium\">
\t\t\t\t\t\t<div class=\"card-image waves-effect waves-block waves-light\">
\t\t\t\t\t\t\t<img class=\"activator\" src=\"https://image.tmdb.org/t/p/original";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["reco"], "poster_path", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<span class=\"card-title activator\">";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["reco"], "name", array()), "html", null, true);
                echo "<i class=\"material-icons right\">more_vert</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-reveal\">
\t\t\t\t\t\t\t<span class=\"card-title grey-text text-darken-4\">";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["reco"], "name", array()), "html", null, true);
                echo "<i class=\"material-icons right\">close</i></span>
\t\t\t\t\t\t\t<p>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["reco"], "overview", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-action\">
\t\t\t\t\t\t\t<a href=\"/show/";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["reco"], "id", array()), "html", null, true);
                echo "\"><span class=\"red-text text-darken-1\">Explorer</span></a>
\t\t\t\t\t\t\t<a href=\"/\" class=\"waves-effect waves-light btn red darken-1\"><i class=\"material-icons left\">add</i>Ajouter</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reco'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t
        </div>
    ";
        }
        // line 99
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "homepage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 99,  206 => 96,  194 => 90,  188 => 87,  184 => 86,  178 => 83,  172 => 80,  167 => 77,  163 => 76,  154 => 69,  152 => 68,  149 => 67,  140 => 63,  136 => 61,  132 => 59,  130 => 58,  126 => 57,  120 => 54,  116 => 53,  110 => 50,  104 => 47,  99 => 44,  95 => 43,  84 => 34,  75 => 30,  71 => 28,  67 => 26,  65 => 25,  61 => 24,  55 => 21,  51 => 20,  45 => 17,  39 => 14,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row"></div>*/
/* */
/*     <div class="row sous-titre">*/
/*         <div class="card-panel col s12 m12 ">*/
/*             <h5><i class="material-icons red-text left">whatshot</i>Tendances</h5>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         {% for tend in seriesTend %}*/
/*             <div class="col s12 m6 l3">*/
/*                 <div class="card sticky-action medium">*/
/*                     <div class="card-image waves-effect waves-block waves-light">*/
/*                         <img class="activator" src="https://image.tmdb.org/t/p/original{{ tend.poster_path }}">*/
/*                     </div>*/
/*                     <div class="card-content">*/
/*                         <span class="card-title activator">{{ tend.name }}<i class="material-icons right">more_vert</i></span>*/
/*                     </div>*/
/*                     <div class="card-reveal">*/
/*                         <span class="card-title grey-text text-darken-4">{{ tend.name }}<i class="material-icons right">close</i></span>*/
/*                         <p>{{ tend.overview }}</p>*/
/*                     </div>*/
/*                     <div class="card-action">*/
/*                         <a href="/show/{{ tend.id }}"><span class="red-text text-darken-1">Explorer</span></a>*/
/*                         {% if connecter == 1 %}*/
/*                         <a href="/" class="waves-effect waves-light btn red darken-1"><i class="material-icons left">add</i>Ajouter</a>*/
/*                         {% else %}*/
/*                         <a href="/signin" class="waves-effect waves-light btn red darken-1"><i class="material-icons left">add</i>Ajouter</a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/* */
/*     <div class="row sous-titre">*/
/*         <div class="card-panel col s12 m12 ">*/
/*             <h5><i class="material-icons red-text left">new_releases</i>Nouveautés</h5>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         {% for nouv in seriesNouv %}*/
/*             <div class="col s12 m6 l3">*/
/*                 <div class="card sticky-action medium">*/
/*                     <div class="card-image waves-effect waves-block waves-light">*/
/*                         <img class="activator" src="https://image.tmdb.org/t/p/original{{ nouv.poster_path }}">*/
/*                     </div>*/
/*                     <div class="card-content">*/
/*                         <span class="card-title activator">{{ nouv.name }}<i class="material-icons right">more_vert</i></span>*/
/*                     </div>*/
/*                     <div class="card-reveal">*/
/*                         <span class="card-title grey-text text-darken-4">{{ nouv.name }}<i class="material-icons right">close</i></span>*/
/*                         <p>{{ nouv.overview }}</p>*/
/*                     </div>*/
/*                     <div class="card-action">*/
/*                         <a href="/show/{{ nouv.id }}"><span class="red-text text-darken-1">Explorer</span></a>*/
/*                         {% if connecter == 1 %}*/
/*                             <a href="/" class="waves-effect waves-light btn red darken-1"><i class="material-icons left">add</i>Ajouter</a>*/
/*                         {% else %}*/
/*                             <a href="/signin" class="waves-effect waves-light btn red darken-1"><i class="material-icons left">add</i>Ajouter</a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     {% if connecter == 1 %}*/
/*         <div class="row sous-titre">*/
/*             <div class="card-panel col s12 m12 ">*/
/*                 <h5><i class="material-icons red-text left">subscriptions</i>Recommandations</h5>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/* */
/*            {% for reco in seriesReco %}*/
/* 				<div class="col s12 m6 l3">*/
/* 					<div class="card sticky-action medium">*/
/* 						<div class="card-image waves-effect waves-block waves-light">*/
/* 							<img class="activator" src="https://image.tmdb.org/t/p/original{{ reco.poster_path }}">*/
/* 						</div>*/
/* 						<div class="card-content">*/
/* 							<span class="card-title activator">{{ reco.name }}<i class="material-icons right">more_vert</i></span>*/
/* 						</div>*/
/* 						<div class="card-reveal">*/
/* 							<span class="card-title grey-text text-darken-4">{{ reco.name }}<i class="material-icons right">close</i></span>*/
/* 							<p>{{ reco.overview }}</p>*/
/* 						</div>*/
/* 						<div class="card-action">*/
/* 							<a href="/show/{{ reco.id }}"><span class="red-text text-darken-1">Explorer</span></a>*/
/* 							<a href="/" class="waves-effect waves-light btn red darken-1"><i class="material-icons left">add</i>Ajouter</a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 			*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* </div>*/
