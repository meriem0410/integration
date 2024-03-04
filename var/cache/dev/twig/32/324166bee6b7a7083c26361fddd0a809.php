<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* test/index.html.twig */
class __TwigTemplate_ca6a01396f0499b9ec550b3f438bc34a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "test/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hermes Voyages ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
<!-- Booking Start -->
 <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Voyages organisés</h6>
                <p>Découvrez le monde avec nos voyages organisés exceptionnels ! À travers des itinéraires soigneusement planifiés, nous vous offrons une expérience de voyage sans tracas, combinant aventure, confort et découvertes.</p>
            </div>
            <div class=\"row g-4 justify-content-center\">
             ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 38
            echo "            
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"package-item\">
                        <div class=\"overflow-hidden\">
                         <img class=\"img-fluid image-clarifai\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("/voyageorganisé/img/package-" . twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 42)) . ".jpg")), "html", null, true);
            echo "\"  alt=\"\">
                        </div>
                        <div class=\"d-flex border-bottom\"><small class=\"flex-fill text-center border-end py-2\" style=\"font-size: 2.2em; font-weight: bold; color: #94BDB5;\"><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 44), "html", null, true);
            echo "</small>
<small class=\"flex-fill text-center border-end py-2\" style=\"font-size: 2.2em; font-weight: bold; color: #4F818C;\"><i class=\"fa fa-calendar-alt text-primary me-2\"></i>";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</small>
<small class=\"flex-fill text-center py-2\" style=\"font-size: 2.2em; font-weight: bold; color: #D0A343;\"><i class=\"fa fa-user text-primary me-2\"></i>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "type", [], "any", false, false, false, 46), "html", null, true);
            echo "</small>

                           
                          

                        </div>
                        <div class=\"text-center p-4\">
                            <h3 class=\"mb-0\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "prix", [], "any", false, false, false, 53), "html", null, true);
            echo "DT</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                            </div>
                            <p> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 61), "html", null, true);
            echo " Avec une population diversifiée et accueillante, elle offre un mélange unique de cultures, de traditions et de styles de vie.</p>
                            <div class=\"d-flex justify-content-center mb-2\">
                          <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_prog", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Voir plus</a>
                                <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_res_new");
            echo "\"class=\"btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Reserver maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
    <!-- Package End -->


    <!-- Booking Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"booking p-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-6 text-white\">
                    <center>
                        <h6 class=\"text-white text-uppercase\">Suggestion ?</h6>
                        <h1 class=\"text-white mb-4\">Remplisser ce formulaire </h1>
                        <p class=\"mb-4\">Vous ne trouvez pas votre boneur parmis nos suggestion ? Decrivez nous votre voyages de rêve et il sera bientôt disponible ..</p>
                        <a class=\"btn btn-outline-light py-3 px-5 mt-2\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voypersonalise_new");
        echo "\">Créer votre itinéraire</a>
                        </center>
                    </div>
    
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
   
               
                </div>
            </div>
        </div>
    </div>
   <!-- Process Start -->
        

    <!-- Footer Start -->
    
  <!-- Footer End -->

 <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>



<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/js/main.js"), "html", null, true);
        echo "\"></script>
  <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
     \$(document).ready(function() {
    // Fonction pour détecter les objets dans une image
    function detecterObjets(urlImage) {
        // Clé d'API de Clarifai
        var apiKey = '2a63ec320dc849029024284d84924db4';
        
        // URL de l'API Clarifai pour la détection d'objets
        var urlApi = 'https://api.clarifai.com/v2/models/general-v1.3/outputs';

        // Paramètres de la requête AJAX
        var data = {
            inputs: [
                {
                    data: {
                        image: {
                            url: urlImage
                        }
                    }
                }
            ]
        };

        // Envoi de la requête AJAX à l'API Clarifai
        \$.ajax({
            url: urlApi,
            type: 'POST',
            headers: {
                'Authorization': 'Key ' + apiKey,
                'Content-Type': 'application/json'
            },
            data: JSON.stringify(data),
            success: function(response) {
                // Traitement des résultats de la détection d'objets
                console.log(response);
                // Affichage des résultats sur la page ou autre traitement
            },
            error: function(xhr, status, error) {
                // Gestion des erreurs
                console.error(error);
            }
        });
    }

    // Attacher la fonction de détection d'objets au clic sur le bouton
    \$('#btnDetecterObjets').click(function() {
        // Récupérer l'URL de l'image à partir de l'attribut data-src de l'image
        var urlImage = \$('.image-clarifai').attr('src');
        // Appeler la fonction de détection d'objets
        detecterObjets(urlImage);
    });
    
});

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  273 => 123,  267 => 120,  263 => 119,  259 => 118,  255 => 117,  251 => 116,  247 => 115,  243 => 114,  210 => 84,  194 => 70,  182 => 64,  178 => 63,  173 => 61,  162 => 53,  152 => 46,  148 => 45,  144 => 44,  139 => 42,  133 => 38,  129 => 37,  118 => 29,  112 => 26,  106 => 23,  102 => 22,  98 => 21,  92 => 18,  88 => 17,  77 => 9,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Hermes Voyages {% endblock %}


{% block content%}

<!-- Booking Start -->
 <link href=\"{{ asset('voyageorganisé/img/favicon.ico') }}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"{{ asset('voyageorganisé/css/all.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('voyageorganisé/css/bootstrap-icons.css') }}\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('voyageorganisé/css/animate.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('voyageorganisé/css/owl.carousel.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('voyageorganisé/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('voyageorganisé/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('voyageorganisé/css/style.css') }}\" rel=\"stylesheet\">
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Voyages organisés</h6>
                <p>Découvrez le monde avec nos voyages organisés exceptionnels ! À travers des itinéraires soigneusement planifiés, nous vous offrons une expérience de voyage sans tracas, combinant aventure, confort et découvertes.</p>
            </div>
            <div class=\"row g-4 justify-content-center\">
             {% for voyage in voyages %}
            
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"package-item\">
                        <div class=\"overflow-hidden\">
                         <img class=\"img-fluid image-clarifai\" src=\"{{ asset('/voyageorganisé/img/package-' ~ voyage.id ~ '.jpg') }}\"  alt=\"\">
                        </div>
                        <div class=\"d-flex border-bottom\"><small class=\"flex-fill text-center border-end py-2\" style=\"font-size: 2.2em; font-weight: bold; color: #94BDB5;\"><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>{{ voyage.destination }}</small>
<small class=\"flex-fill text-center border-end py-2\" style=\"font-size: 2.2em; font-weight: bold; color: #4F818C;\"><i class=\"fa fa-calendar-alt text-primary me-2\"></i>{{ voyage.date ? voyage.date|date('Y-m-d') : '' }}</small>
<small class=\"flex-fill text-center py-2\" style=\"font-size: 2.2em; font-weight: bold; color: #D0A343;\"><i class=\"fa fa-user text-primary me-2\"></i>{{ voyage.type }}</small>

                           
                          

                        </div>
                        <div class=\"text-center p-4\">
                            <h3 class=\"mb-0\">{{voyage.prix}}DT</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                            </div>
                            <p> {{voyage.destination }} Avec une population diversifiée et accueillante, elle offre un mélange unique de cultures, de traditions et de styles de vie.</p>
                            <div class=\"d-flex justify-content-center mb-2\">
                          <a href=\"{{ path('app_prog', {'id': voyage.id} ) }}\" class=\"btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Voir plus</a>
                                <a href=\"{{ path('app_res_new') }}\"class=\"btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Reserver maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
               {% endfor %}

    <!-- Package End -->


    <!-- Booking Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"booking p-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-6 text-white\">
                    <center>
                        <h6 class=\"text-white text-uppercase\">Suggestion ?</h6>
                        <h1 class=\"text-white mb-4\">Remplisser ce formulaire </h1>
                        <p class=\"mb-4\">Vous ne trouvez pas votre boneur parmis nos suggestion ? Decrivez nous votre voyages de rêve et il sera bientôt disponible ..</p>
                        <a class=\"btn btn-outline-light py-3 px-5 mt-2\" href=\"{{ path('app_voypersonalise_new') }}\">Créer votre itinéraire</a>
                        </center>
                    </div>
    
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
   
               
                </div>
            </div>
        </div>
    </div>
   <!-- Process Start -->
        

    <!-- Footer Start -->
    
  <!-- Footer End -->

 <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>



<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('voyageorganisé/lib/wow/wow.min.js') }}\"></script>
<script src=\"{{ asset('voyageorganisé/lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('voyageorganisé/lib/waypoints/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('voyageorganisé/lib/owlcarousel/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('voyageorganisé/lib/tempusdominus/js/moment.min.js') }}\"></script>
<script src=\"{{ asset('voyageorganisé/lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
<script src=\"{{ asset('voyageorganisé/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>

<!-- Template Javascript -->
<script src=\"{{ asset('voyageorganisé/js/main.js') }}\"></script>
  <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
     \$(document).ready(function() {
    // Fonction pour détecter les objets dans une image
    function detecterObjets(urlImage) {
        // Clé d'API de Clarifai
        var apiKey = '2a63ec320dc849029024284d84924db4';
        
        // URL de l'API Clarifai pour la détection d'objets
        var urlApi = 'https://api.clarifai.com/v2/models/general-v1.3/outputs';

        // Paramètres de la requête AJAX
        var data = {
            inputs: [
                {
                    data: {
                        image: {
                            url: urlImage
                        }
                    }
                }
            ]
        };

        // Envoi de la requête AJAX à l'API Clarifai
        \$.ajax({
            url: urlApi,
            type: 'POST',
            headers: {
                'Authorization': 'Key ' + apiKey,
                'Content-Type': 'application/json'
            },
            data: JSON.stringify(data),
            success: function(response) {
                // Traitement des résultats de la détection d'objets
                console.log(response);
                // Affichage des résultats sur la page ou autre traitement
            },
            error: function(xhr, status, error) {
                // Gestion des erreurs
                console.error(error);
            }
        });
    }

    // Attacher la fonction de détection d'objets au clic sur le bouton
    \$('#btnDetecterObjets').click(function() {
        // Récupérer l'URL de l'image à partir de l'attribut data-src de l'image
        var urlImage = \$('.image-clarifai').attr('src');
        // Appeler la fonction de détection d'objets
        detecterObjets(urlImage);
    });
    
});

    </script>
{% endblock %}

", "test/index.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/test/index.html.twig");
    }
}
