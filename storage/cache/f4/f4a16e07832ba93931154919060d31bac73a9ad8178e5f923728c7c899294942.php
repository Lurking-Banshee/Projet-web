<?php

/* resultSearch.twig */
class __TwigTemplate_f7a7e49997c0185a7612c49f3c350c8bd6c334920546b1d928f00780e341c32e extends Twig_Template
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
            <h5><i class=\"material-icons red-text\">search</i> Résultats</h5>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) ? $context["series"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 10
            echo "            <div class=\"col s12 m6 l3\">
                <div class=\"card sticky-action medium\">
                    <div class=\"card-image waves-effect waves-block waves-light\">
                        <img class=\"activator\" src=\"https://image.tmdb.org/t/p/original";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "poster_path", array()), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"card-content\">
                        <span class=\"card-title activator\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">more_vert</i></span>
                    </div>
                    <div class=\"card-reveal\">
                        <span class=\"card-title grey-text text-darken-4\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
                        <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "overview", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"card-action\">
                        <a href=\"/show/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "\"><span class=\"red-text text-darken-1\">Explorer</span></a>
                        <a class=\"waves-effect waves-light btn red darken-1\"><i class=\"material-icons left\">add</i>Ajouter</a>
                    </div>
                </div>
            </div>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "\t\t\t<span>Aucune série correspondant aux critères trouvée.</span>
\t\t
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "resultSearch.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 32,  72 => 29,  61 => 23,  55 => 20,  51 => 19,  45 => 16,  39 => 13,  34 => 10,  29 => 9,  19 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row"></div>*/
/*     <div class="row sous-titre">*/
/*         <div class="card-panel col s12 m12 ">*/
/*             <h5><i class="material-icons red-text">search</i> Résultats</h5>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         {% for serie in series %}*/
/*             <div class="col s12 m6 l3">*/
/*                 <div class="card sticky-action medium">*/
/*                     <div class="card-image waves-effect waves-block waves-light">*/
/*                         <img class="activator" src="https://image.tmdb.org/t/p/original{{ serie.poster_path }}">*/
/*                     </div>*/
/*                     <div class="card-content">*/
/*                         <span class="card-title activator">{{ serie.name }}<i class="material-icons right">more_vert</i></span>*/
/*                     </div>*/
/*                     <div class="card-reveal">*/
/*                         <span class="card-title grey-text text-darken-4">{{ serie.name }}<i class="material-icons right">close</i></span>*/
/*                         <p>{{ serie.overview }}</p>*/
/*                     </div>*/
/*                     <div class="card-action">*/
/*                         <a href="/show/{{ serie.id }}"><span class="red-text text-darken-1">Explorer</span></a>*/
/*                         <a class="waves-effect waves-light btn red darken-1"><i class="material-icons left">add</i>Ajouter</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* 		{% else %}*/
/* 			<span>Aucune série correspondant aux critères trouvée.</span>*/
/* 		*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
