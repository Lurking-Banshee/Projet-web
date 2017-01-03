<?php

/* show.twig */
class __TwigTemplate_eecd08376ba93e05ae4578a7b50c253c83e7e422c4518bcbf47b01364d2f6dd7 extends Twig_Template
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
        echo "<!-- Block serie -->
<div class=\"parallax-container\">
    ";
        // line 3
        if ( !twig_test_empty($this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "backdrop_path", array()))) {
            // line 4
            echo "        <div class=\"parallax\"><img src=\"https://image.tmdb.org/t/p/original";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "backdrop_path", array()), "html", null, true);
            echo "\"></div>
    ";
        } else {
            // line 6
            echo "        <div class=\"parallax\"><img src=\"https://mave.me/img/projects/full_placeholder.png\"></div>
    ";
        }
        // line 8
        echo "</div>
<div class=\"section white\">
    <div class=\"row container\">
        ";
        // line 11
        if (true) {
            echo " <!--Affiche que si utilisateur connecte-->
            <div class=\"progress grey lighten-2\">
                <div class=\"determinate red darken-1\" style=\"width: 70%\"></div>
            </div>
        ";
        }
        // line 16
        echo "        <div class=\"btn red right\"><i class=\"material-icons left\">star</i>";
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "popularity", array())), "html", null, true);
        echo "</div>
        <h2 class=\"header\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "name", array()), "html", null, true);
        echo "</h2>
        <p class=\"grey-text text-darken-3 lighten-3\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["serie"]) ? $context["serie"] : null), "overview", array()), "html", null, true);
        echo "</p>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) ? $context["genres"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 20
            echo "            <div class=\"chip\">
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "name", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
    </div>
</div>

<!-- Block season -->
";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seasons"]) ? $context["seasons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
            // line 30
            echo "
    <div class=\"row container section grey lighten-3 col l12\">
        <div class=\"card horizontal small\">
            <div class=\"card-image valign-wrapper\">
                ";
            // line 34
            if ( !twig_test_empty($this->getAttribute($context["season"], "poster_path", array()))) {
                // line 35
                echo "                    <img class=\"valign\" src=\"https://image.tmdb.org/t/p/original/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["season"], "poster_path", array()), "html", null, true);
                echo "\">
                ";
            } else {
                // line 37
                echo "                    <img class=\"valign\" src=\"http://www.ztackey.com/wp-content/uploads/2016/11/placeholder-1.jpg\">
                ";
            }
            // line 39
            echo "            </div>
            <div class=\"card-stacked\">
                <div class=\"card-content\">
                    <h3 class=\"header\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["season"], "name", array()), "html", null, true);
            echo "</h3>
                    ";
            // line 43
            if ( !twig_test_empty($this->getAttribute($context["season"], "air_date", array()))) {
                // line 44
                echo "                        <div class=\"chip\">
                            ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["season"], "air_date", array()), "html", null, true);
                echo "
                        </div>
                    ";
            }
            // line 48
            echo "                    <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["season"], "overview", array()), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>
        <ul class=\"collapsible\" data-collapsible=\"accordion\">
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["season"], "tabEpisodes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                // line 54
                echo "                <li>
                    <div class=\"collapsible-header\"><b>Episode ";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "number", array()), "html", null, true);
                echo " :</b> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "name", array()), "html", null, true);
                echo "</div>
                    ";
                // line 56
                if (((isset($context["connecter"]) ? $context["connecter"] : null) == 1)) {
                    echo " <!--Affiche que si utilisateur connecte-->
                        <a name=\"add\" id=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", array()), "html", null, true);
                    echo "\" class=\"addEpisode\"><i class=\"icone_ajout_episode material-icons red-text darken-1 right\">add</i></a>
                    ";
                } else {
                    // line 59
                    echo "                        <a href=\"/signin\"><i class=\"icone_ajout_episode material-icons red-text darken-1 right\">add</i></a>
                    ";
                }
                // line 61
                echo "                    ";
                if ( !twig_test_empty($this->getAttribute($context["episode"], "overview", array()))) {
                    // line 62
                    echo "                        <div class=\"collapsible-body\"><p class=\"white\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "overview", array()), "html", null, true);
                    echo "</p></div>
                    ";
                }
                // line 64
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        </ul>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 66,  170 => 64,  164 => 62,  161 => 61,  157 => 59,  152 => 57,  148 => 56,  142 => 55,  139 => 54,  135 => 53,  126 => 48,  120 => 45,  117 => 44,  115 => 43,  111 => 42,  106 => 39,  102 => 37,  96 => 35,  94 => 34,  88 => 30,  84 => 29,  77 => 24,  68 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  48 => 16,  40 => 11,  35 => 8,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!-- Block serie -->*/
/* <div class="parallax-container">*/
/*     {% if serie.backdrop_path is not empty %}*/
/*         <div class="parallax"><img src="https://image.tmdb.org/t/p/original{{ serie.backdrop_path }}"></div>*/
/*     {% else %}*/
/*         <div class="parallax"><img src="https://mave.me/img/projects/full_placeholder.png"></div>*/
/*     {% endif %}*/
/* </div>*/
/* <div class="section white">*/
/*     <div class="row container">*/
/*         {% if true %} <!--Affiche que si utilisateur connecte-->*/
/*             <div class="progress grey lighten-2">*/
/*                 <div class="determinate red darken-1" style="width: 70%"></div>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="btn red right"><i class="material-icons left">star</i>{{ serie.popularity|round }}</div>*/
/*         <h2 class="header">{{ serie.name }}</h2>*/
/*         <p class="grey-text text-darken-3 lighten-3">{{ serie.overview }}</p>*/
/*         {% for genre in genres %}*/
/*             <div class="chip">*/
/*                 {{ genre.name }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* <!-- Block season -->*/
/* {% for season in seasons %}*/
/* */
/*     <div class="row container section grey lighten-3 col l12">*/
/*         <div class="card horizontal small">*/
/*             <div class="card-image valign-wrapper">*/
/*                 {% if season.poster_path is not empty %}*/
/*                     <img class="valign" src="https://image.tmdb.org/t/p/original/{{ season.poster_path }}">*/
/*                 {% else %}*/
/*                     <img class="valign" src="http://www.ztackey.com/wp-content/uploads/2016/11/placeholder-1.jpg">*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="card-stacked">*/
/*                 <div class="card-content">*/
/*                     <h3 class="header">{{ season.name }}</h3>*/
/*                     {% if season.air_date is not empty %}*/
/*                         <div class="chip">*/
/*                             {{ season.air_date }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <p>{{ season.overview }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <ul class="collapsible" data-collapsible="accordion">*/
/*             {% for episode in season.tabEpisodes %}*/
/*                 <li>*/
/*                     <div class="collapsible-header"><b>Episode {{ episode.number }} :</b> {{ episode.name }}</div>*/
/*                     {% if connecter == 1 %} <!--Affiche que si utilisateur connecte-->*/
/*                         <a name="add" id="{{ episode.id }}" class="addEpisode"><i class="icone_ajout_episode material-icons red-text darken-1 right">add</i></a>*/
/*                     {% else %}*/
/*                         <a href="/signin"><i class="icone_ajout_episode material-icons red-text darken-1 right">add</i></a>*/
/*                     {% endif %}*/
/*                     {% if episode.overview is not empty %}*/
/*                         <div class="collapsible-body"><p class="white">{{ episode.overview }}</p></div>*/
/*                     {% endif %}*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/* {% endfor %}*/
/* */
