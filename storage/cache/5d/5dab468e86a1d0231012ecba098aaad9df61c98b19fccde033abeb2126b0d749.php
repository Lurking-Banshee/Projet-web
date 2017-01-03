<?php

/* homepageUser.twig */
class __TwigTemplate_69f4d5db0bda7912fb6f0c3e8b0bfbf6a204861d9adb9970e11ade6431d3e9ae extends Twig_Template
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
            <h5><i class=\"material-icons red-text\">whatshot</i> Tendances</h5>
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
                        <a class=\"waves-effect waves-light btn red darken-1\"><i class=\"material-icons left\">add</i>Ajouter</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>


    <div class=\"row sous-titre\">
        <div class=\"card-panel col s12 m12 \">
            <h5><i class=\"material-icons red-text\">new_releases</i> Nouveautés</h5>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["seriesNouv"]) ? $context["seriesNouv"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["nouv"]) {
            // line 40
            echo "            <div class=\"col s12 m6 l3\">
                <div class=\"card sticky-action medium\">
                    <div class=\"card-image waves-effect waves-block waves-light\">
                        <img class=\"activator\" src=\"https://image.tmdb.org/t/p/original";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "poster_path", array()), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"card-content\">
                        <span class=\"card-title activator\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">more_vert</i></span>
                    </div>
                    <div class=\"card-reveal\">
                        <span class=\"card-title grey-text text-darken-4\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
                        <p>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "overview", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"card-action\">
                        <a href=\"/show/";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["nouv"], "id", array()), "html", null, true);
            echo "\"><span class=\"red-text text-darken-1\">Explorer</span></a>
                        <a class=\"waves-effect waves-light btn red darken-1\"><i class=\"material-icons left\">add</i>Ajouter</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nouv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
    </div>

    <div class=\"row sous-titre\">
        <div class=\"card-panel col s12 m12 \">
            <h5><i class=\"material-icons red-text\">subscriptions</i> Recommandations</h5>
        </div>
    </div>
    <div class=\"row\">

        <div class=\"col s12 m6 l3\">
            <div class=\"card sticky-action medium\">
                <div class=\"card-image waves-effect waves-block waves-light\">
                    <img class=\"activator\" src=\"https://image.tmdb.org/t/p/original/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator\">Breaking Bad<i class=\"material-icons right\">more_horiz</i></span>
                </div>
                <div class=\"card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">Breaking Bad<i class=\"material-icons right\">close</i></span>
                    <p>Breaking Bad is an American crime drama television series created and produced by Vince Gilligan. Set and produced in Albuquerque, New Mexico, Breaking Bad is the story of Walter White, a struggling high school chemistry teacher who is diagnosed with inoperable lung cancer at the beginning of the series. He turns to a life of crime, producing and selling methamphetamine, in order to secure his family's financial future before he dies, teaming with his former student, Jesse Pinkman. Heavily serialized, the series is known for positioning its characters in seemingly inextricable corners and has been labeled a contemporary western by its creator.</p>
                </div>
                <div class=\"card-action\">
                    <a href=\"/show\"><span class=\"red-text text-darken-1\">Explorer</span></a>
                </div>
            </div>
        </div>

        <div class=\"col s12 m6 l3\">
            <div class=\"card sticky-action medium\">
                <div class=\"card-image waves-effect waves-block waves-light\">
                    <img class=\"activator\" src=\"https://image.tmdb.org/t/p/original/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator\">Breaking Bad<i class=\"material-icons right\">more_horiz</i></span>
                </div>
                <div class=\"card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">Breaking Bad<i class=\"material-icons right\">close</i></span>
                    <p>Breaking Bad is an American crime drama television series created and produced by Vince Gilligan. Set and produced in Albuquerque, New Mexico, Breaking Bad is the story of Walter White, a struggling high school chemistry teacher who is diagnosed with inoperable lung cancer at the beginning of the series. He turns to a life of crime, producing and selling methamphetamine, in order to secure his family's financial future before he dies, teaming with his former student, Jesse Pinkman. Heavily serialized, the series is known for positioning its characters in seemingly inextricable corners and has been labeled a contemporary western by its creator.</p>
                </div>
                <div class=\"card-action\">
                    <a href=\"/show\"><span class=\"red-text text-darken-1\">Explorer</span></a>
                </div>
            </div>
        </div>

        <div class=\"col s12 m6 l3\">
            <div class=\"card sticky-action medium\">
                <div class=\"card-image waves-effect waves-block waves-light\">
                    <img class=\"activator\" src=\"https://image.tmdb.org/t/p/original/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator\">Breaking Bad<i class=\"material-icons right\">more_horiz</i></span>
                </div>
                <div class=\"card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">Breaking Bad<i class=\"material-icons right\">close</i></span>
                    <p>Breaking Bad is an American crime drama television series created and produced by Vince Gilligan. Set and produced in Albuquerque, New Mexico, Breaking Bad is the story of Walter White, a struggling high school chemistry teacher who is diagnosed with inoperable lung cancer at the beginning of the series. He turns to a life of crime, producing and selling methamphetamine, in order to secure his family's financial future before he dies, teaming with his former student, Jesse Pinkman. Heavily serialized, the series is known for positioning its characters in seemingly inextricable corners and has been labeled a contemporary western by its creator.</p>
                </div>
                <div class=\"card-action\">
                    <a href=\"/show\"><span class=\"red-text text-darken-1\">Explorer</span></a>
                </div>
            </div>
        </div>

        <div class=\"col s12 m6 l3\">
            <div class=\"card sticky-action medium\">
                <div class=\"card-image waves-effect waves-block waves-light\">
                    <img class=\"activator\" src=\"https://image.tmdb.org/t/p/original/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg\">
                </div>
                <div class=\"card-content\">
                    <span class=\"card-title activator\">Breaking Bad<i class=\"material-icons right\">more_horiz</i></span>
                </div>
                <div class=\"card-reveal\">
                    <span class=\"card-title grey-text text-darken-4\">Breaking Bad<i class=\"material-icons right\">close</i></span>
                    <p>Breaking Bad is an American crime drama television series created and produced by Vince Gilligan. Set and produced in Albuquerque, New Mexico, Breaking Bad is the story of Walter White, a struggling high school chemistry teacher who is diagnosed with inoperable lung cancer at the beginning of the series. He turns to a life of crime, producing and selling methamphetamine, in order to secure his family's financial future before he dies, teaming with his former student, Jesse Pinkman. Heavily serialized, the series is known for positioning its characters in seemingly inextricable corners and has been labeled a contemporary western by its creator.</p>
                </div>
                <div class=\"card-action\">
                    <a href=\"/show\"><span class=\"red-text text-darken-1\">Explorer</span></a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "homepageUser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  115 => 53,  109 => 50,  105 => 49,  99 => 46,  93 => 43,  88 => 40,  84 => 39,  73 => 30,  61 => 24,  55 => 21,  51 => 20,  45 => 17,  39 => 14,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row"></div>*/
/* */
/*     <div class="row sous-titre">*/
/*         <div class="card-panel col s12 m12 ">*/
/*             <h5><i class="material-icons red-text">whatshot</i> Tendances</h5>*/
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
/*                         <a class="waves-effect waves-light btn red darken-1"><i class="material-icons left">add</i>Ajouter</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/* */
/*     <div class="row sous-titre">*/
/*         <div class="card-panel col s12 m12 ">*/
/*             <h5><i class="material-icons red-text">new_releases</i> Nouveautés</h5>*/
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
/*                         <a class="waves-effect waves-light btn red darken-1"><i class="material-icons left">add</i>Ajouter</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*     </div>*/
/* */
/*     <div class="row sous-titre">*/
/*         <div class="card-panel col s12 m12 ">*/
/*             <h5><i class="material-icons red-text">subscriptions</i> Recommandations</h5>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/* */
/*         <div class="col s12 m6 l3">*/
/*             <div class="card sticky-action medium">*/
/*                 <div class="card-image waves-effect waves-block waves-light">*/
/*                     <img class="activator" src="https://image.tmdb.org/t/p/original/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg">*/
/*                 </div>*/
/*                 <div class="card-content">*/
/*                     <span class="card-title activator">Breaking Bad<i class="material-icons right">more_horiz</i></span>*/
/*                 </div>*/
/*                 <div class="card-reveal">*/
/*                     <span class="card-title grey-text text-darken-4">Breaking Bad<i class="material-icons right">close</i></span>*/
/*                     <p>Breaking Bad is an American crime drama television series created and produced by Vince Gilligan. Set and produced in Albuquerque, New Mexico, Breaking Bad is the story of Walter White, a struggling high school chemistry teacher who is diagnosed with inoperable lung cancer at the beginning of the series. He turns to a life of crime, producing and selling methamphetamine, in order to secure his family's financial future before he dies, teaming with his former student, Jesse Pinkman. Heavily serialized, the series is known for positioning its characters in seemingly inextricable corners and has been labeled a contemporary western by its creator.</p>*/
/*                 </div>*/
/*                 <div class="card-action">*/
/*                     <a href="/show"><span class="red-text text-darken-1">Explorer</span></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col s12 m6 l3">*/
/*             <div class="card sticky-action medium">*/
/*                 <div class="card-image waves-effect waves-block waves-light">*/
/*                     <img class="activator" src="https://image.tmdb.org/t/p/original/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg">*/
/*                 </div>*/
/*                 <div class="card-content">*/
/*                     <span class="card-title activator">Breaking Bad<i class="material-icons right">more_horiz</i></span>*/
/*                 </div>*/
/*                 <div class="card-reveal">*/
/*                     <span class="card-title grey-text text-darken-4">Breaking Bad<i class="material-icons right">close</i></span>*/
/*                     <p>Breaking Bad is an American crime drama television series created and produced by Vince Gilligan. Set and produced in Albuquerque, New Mexico, Breaking Bad is the story of Walter White, a struggling high school chemistry teacher who is diagnosed with inoperable lung cancer at the beginning of the series. He turns to a life of crime, producing and selling methamphetamine, in order to secure his family's financial future before he dies, teaming with his former student, Jesse Pinkman. Heavily serialized, the series is known for positioning its characters in seemingly inextricable corners and has been labeled a contemporary western by its creator.</p>*/
/*                 </div>*/
/*                 <div class="card-action">*/
/*                     <a href="/show"><span class="red-text text-darken-1">Explorer</span></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col s12 m6 l3">*/
/*             <div class="card sticky-action medium">*/
/*                 <div class="card-image waves-effect waves-block waves-light">*/
/*                     <img class="activator" src="https://image.tmdb.org/t/p/original/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg">*/
/*                 </div>*/
/*                 <div class="card-content">*/
/*                     <span class="card-title activator">Breaking Bad<i class="material-icons right">more_horiz</i></span>*/
/*                 </div>*/
/*                 <div class="card-reveal">*/
/*                     <span class="card-title grey-text text-darken-4">Breaking Bad<i class="material-icons right">close</i></span>*/
/*                     <p>Breaking Bad is an American crime drama television series created and produced by Vince Gilligan. Set and produced in Albuquerque, New Mexico, Breaking Bad is the story of Walter White, a struggling high school chemistry teacher who is diagnosed with inoperable lung cancer at the beginning of the series. He turns to a life of crime, producing and selling methamphetamine, in order to secure his family's financial future before he dies, teaming with his former student, Jesse Pinkman. Heavily serialized, the series is known for positioning its characters in seemingly inextricable corners and has been labeled a contemporary western by its creator.</p>*/
/*                 </div>*/
/*                 <div class="card-action">*/
/*                     <a href="/show"><span class="red-text text-darken-1">Explorer</span></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col s12 m6 l3">*/
/*             <div class="card sticky-action medium">*/
/*                 <div class="card-image waves-effect waves-block waves-light">*/
/*                     <img class="activator" src="https://image.tmdb.org/t/p/original/1yeVJox3rjo2jBKrrihIMj7uoS9.jpg">*/
/*                 </div>*/
/*                 <div class="card-content">*/
/*                     <span class="card-title activator">Breaking Bad<i class="material-icons right">more_horiz</i></span>*/
/*                 </div>*/
/*                 <div class="card-reveal">*/
/*                     <span class="card-title grey-text text-darken-4">Breaking Bad<i class="material-icons right">close</i></span>*/
/*                     <p>Breaking Bad is an American crime drama television series created and produced by Vince Gilligan. Set and produced in Albuquerque, New Mexico, Breaking Bad is the story of Walter White, a struggling high school chemistry teacher who is diagnosed with inoperable lung cancer at the beginning of the series. He turns to a life of crime, producing and selling methamphetamine, in order to secure his family's financial future before he dies, teaming with his former student, Jesse Pinkman. Heavily serialized, the series is known for positioning its characters in seemingly inextricable corners and has been labeled a contemporary western by its creator.</p>*/
/*                 </div>*/
/*                 <div class="card-action">*/
/*                     <a href="/show"><span class="red-text text-darken-1">Explorer</span></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
