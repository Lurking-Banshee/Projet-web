<?php

/* footer.twig */
class __TwigTemplate_abe54e5a98636de5c5c302e4ae37930649e784b2a70327f087fb9b5b380bcc01 extends Twig_Template
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
        echo "</main>

<footer class=\"page-footer red darken-1\">

    <!-- Bandeau inf -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12\">
                <h5 class=\"white-text\">Watched</h5>
                <p class=\"grey-text text-lighten-4\">Watched est une application web développée par Clélie Amiot, Morgane
                    Colle, Estelle Kilfiger et Paul Renoult dans le cadre du cours Web Dynamique de la licence MIASHS
                    parcours sciences cognitives.</p>
            </div>
            <div class=\"col l4 offset-l2 s12\">
                <h5 class=\"white-text\">Liens</h5>
                <ul>
                    <li><a class=\"grey-text text-lighten-3\" href=\"/\">Accueil</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"/search\">Rechercher</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"/signin\">Connexion</a></li>
                    <li><a class=\"grey-text text-lighten-3\" href=\"/signup\">Inscription</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-copyright\">
        <div class=\"container\">
            © 2017 Watched
        </div>
    </div>

</footer>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"../css/materialize/js/materialize.js\"></script>
<script type=\"text/javascript\" src=\"../css/materialize/js/addEpisode.js\"></script>
<script>\$(\".button-collapse\").sideNav();</script>
<script>
    \$(document).ready(function() {
        \$('select').material_select();
        \$('.parallax').parallax();
\t\t\$(\"#annuler\").on('click', function(){
\t\t\t\$(\"form\").trigger(\"reset\");
\t\t});
    });

    \$('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: false, // Does not change width of dropdown to that of the activator
                hover: true, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: false, // Displays dropdown below the button
                alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
    );
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* </main>*/
/* */
/* <footer class="page-footer red darken-1">*/
/* */
/*     <!-- Bandeau inf -->*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col l6 s12">*/
/*                 <h5 class="white-text">Watched</h5>*/
/*                 <p class="grey-text text-lighten-4">Watched est une application web développée par Clélie Amiot, Morgane*/
/*                     Colle, Estelle Kilfiger et Paul Renoult dans le cadre du cours Web Dynamique de la licence MIASHS*/
/*                     parcours sciences cognitives.</p>*/
/*             </div>*/
/*             <div class="col l4 offset-l2 s12">*/
/*                 <h5 class="white-text">Liens</h5>*/
/*                 <ul>*/
/*                     <li><a class="grey-text text-lighten-3" href="/">Accueil</a></li>*/
/*                     <li><a class="grey-text text-lighten-3" href="/search">Rechercher</a></li>*/
/*                     <li><a class="grey-text text-lighten-3" href="/signin">Connexion</a></li>*/
/*                     <li><a class="grey-text text-lighten-3" href="/signup">Inscription</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="footer-copyright">*/
/*         <div class="container">*/
/*             © 2017 Watched*/
/*         </div>*/
/*     </div>*/
/* */
/* </footer>*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>*/
/* <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/* <script type="text/javascript" src="../css/materialize/js/materialize.js"></script>*/
/* <script type="text/javascript" src="../css/materialize/js/addEpisode.js"></script>*/
/* <script>$(".button-collapse").sideNav();</script>*/
/* <script>*/
/*     $(document).ready(function() {*/
/*         $('select').material_select();*/
/*         $('.parallax').parallax();*/
/* 		$("#annuler").on('click', function(){*/
/* 			$("form").trigger("reset");*/
/* 		});*/
/*     });*/
/* */
/*     $('.dropdown-button').dropdown({*/
/*                 inDuration: 300,*/
/*                 outDuration: 225,*/
/*                 constrain_width: false, // Does not change width of dropdown to that of the activator*/
/*                 hover: true, // Activate on hover*/
/*                 gutter: 0, // Spacing from edge*/
/*                 belowOrigin: false, // Displays dropdown below the button*/
/*                 alignment: 'left' // Displays dropdown with edge aligned to the left of button*/
/*             }*/
/*     );*/
/* </script>*/
/* */
/* </body>*/
/* </html>*/
