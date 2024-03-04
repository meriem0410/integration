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

/* package.html.twig */
class __TwigTemplate_6897ba02d87b86cd13cbe7103363604b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "package.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title></title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    ";
        // line 10
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 11
        echo "
    <!-- Favicon -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/css/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/css/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "<body>
    <!-- Spinner Start -->
    
    <!-- Spinner End -->


   


    <!-- Navbar & Hero Start -->
    

       

    <!-- Navbar & Hero End -->


    <!-- Package Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Voyages organisés</h6>
                <p>Découvrez le monde avec nos voyages organisés exceptionnels ! À travers des itinéraires soigneusement planifiés, nous vous offrons une expérience de voyage sans tracas, combinant aventure, confort et découvertes.</p>
            </div>
            <div class=\"row g-4 justify-content-center\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"package-item\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/img/package-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"d-flex border-bottom\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Thailand</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-calendar-alt text-primary me-2\"></i>3 jours</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i></small>
                        </div>
                        <div class=\"text-center p-4\">
                            <h3 class=\"mb-0\">1500.00DT</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                            </div>
                            <p>Découvrez le monde avec nos voyages organisés exceptionnels ! À travers des itinéraires soigneusement planifiés, nous vous offrons une expérience de voyage sans tracas, combinant aventure, confort et découvertes.</p>
                            <div class=\"d-flex justify-content-center mb-2\">
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Voir plus</a>
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Reserver maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"package-item\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/img/package-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"d-flex border-bottom\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Indonesie</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-calendar-alt text-primary me-2\"></i>8 jours </small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>2 Person</small>
                        </div>
                        <div class=\"text-center p-4\">
                            <h3 class=\"mb-0\">4500.00 DT</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                            </div>
                            <p> Indonésie, l'archipel enchanteur qui séduit les voyageurs du monde entier. Explorez la diversité culturelle de Java avec ses temples majestueux, découvrez la beauté naturelle de Bali avec ses rizières verdoyantes et ses plages paradisiaques, et plongez dans l'histoire fascinante de Sumatra.</p>
                            <div class=\"d-flex justify-content-center mb-2\">
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Voir plus</a>
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Reserver maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"package-item\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"asset";
        // line 120
        echo "voyageorganisé/img/package-3.jpg";
        echo "\" alt=\"\">
                        </div>
                        <div class=\"d-flex border-bottom\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Vietnam</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-calendar-alt text-primary me-2\"></i>7 jours</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i></small>
                        </div>
                        <div class=\"text-center p-4\">
                            <h3 class=\"mb-0\">5000.00DT</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                            </div>
                            <p> Vietnam, un pays d'une beauté exceptionnelle où l'histoire riche se mêle à une culture vibrante. Explorez la capitale animée de Hanoï, imprégnez-vous de l'atmosphère unique de Hô Chi Minh-Ville, et découvrez l'ancienne cité impériale de Hué</p>
                            <div class=\"d-flex justify-content-center mb-2\">
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Voir plus</a>
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Reserver maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->
";
        // line 148
        $this->displayBlock('content', $context, $blocks);
        // line 151
        echo "
    <!-- Booking Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"booking p-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-6 text-white\">
                        <h6 class=\"text-white text-uppercase\">Suggestion ?</h6>
                        <h1 class=\"text-white mb-4\">Remplisser ce formulaire </h1>
                        <p class=\"mb-4\">Vous ne trouvez pas votre boneur parmis nos suggestion ? Decrivez nous votre voyages de rêve et il sera bientôt disponible ..</p>
                        <a class=\"btn btn-outline-light py-3 px-5 mt-2\" href=\"\">Créer votre itinéraires</a>
                    </div>
                    <div class=\"col-md-6\">
                        <h1 class=\"text-white mb-4\"></h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"text\" class=\"form-control bg-transparent\" id=\"name\" placeholder=\"Your Name\">
                                        <label for=\"name\">Destination</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"email\" class=\"form-control bg-transparent\" id=\"email\" placeholder=\"Your Email\">
                                        <label for=\"email\">Saison</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating date\" id=\"date3\" data-target-input=\"nearest\">
                                        <input type=\"text\" class=\"form-control bg-transparent datetimepicker-input\" id=\"datetime\" placeholder=\"Date & Time\" data-target=\"#date3\" data-toggle=\"datetimepicker\" />
                                        <label for=\"datetime\">Date & Time</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <select class=\"form-select bg-transparent\" id=\"select1\">
                                            <option value=\"1\">Email</option>
                                            <option value=\"2\">Destination 2</option>
                                            <option value=\"3\">Destination 3</option>
                                        </select>
                                        <label for=\"select1\"></label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        <textarea class=\"form-control bg-transparent\" placeholder=\"Special Request\" id=\"message\" style=\"height: 100px\"></textarea>
                                        <label for=\"message\">Decrivez les activités</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-outline-light w-100 py-3\" type=\"submit\">Soumettre</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center pb-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Process</h6>
                <h1 class=\"mb-5\">3 Easy Steps</h1>
            </div>
            <div class=\"row gy-5 gx-4 justify-content-center\">
                <div class=\"col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"position-relative border border-primary pt-5 pb-4 px-4\">
                        <div class=\"d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow\" style=\"width: 100px; height: 100px;\">
                            <i class=\"fa fa-globe fa-3x text-white\"></i>
                        </div>
                        <h5 class=\"mt-4\">Choose A Destination</h5>
                        <hr class=\"w-25 mx-auto bg-primary mb-1\">
                        <hr class=\"w-50 mx-auto bg-primary mt-0\">
                        <p class=\"mb-0\">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"position-relative border border-primary pt-5 pb-4 px-4\">
                        <div class=\"d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow\" style=\"width: 100px; height: 100px;\">
                            <i class=\"fa fa-dollar-sign fa-3x text-white\"></i>
                        </div>
                        <h5 class=\"mt-4\">Pay Online</h5>
                        <hr class=\"w-25 mx-auto bg-primary mb-1\">
                        <hr class=\"w-50 mx-auto bg-primary mt-0\">
                        <p class=\"mb-0\">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"position-relative border border-primary pt-5 pb-4 px-4\">
                        <div class=\"d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow\" style=\"width: 100px; height: 100px;\">
                            <i class=\"fa fa-plane fa-3x text-white\"></i>
                        </div>
                        <h5 class=\"mt-4\">Fly Today</h5>
                        <hr class=\"w-25 mx-auto bg-primary mb-1\">
                        <hr class=\"w-50 mx-auto bg-primary mt-0\">
                        <p class=\"mb-0\">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
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
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->
<script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/voyageorganisé/js/main.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 148
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        echo " 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "package.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  420 => 148,  410 => 280,  404 => 277,  400 => 276,  396 => 275,  392 => 274,  388 => 273,  384 => 272,  380 => 271,  258 => 151,  256 => 148,  225 => 120,  195 => 93,  165 => 66,  135 => 38,  128 => 37,  118 => 33,  112 => 30,  106 => 27,  102 => 26,  98 => 25,  92 => 22,  88 => 21,  77 => 13,  73 => 11,  66 => 10,  59 => 37,  56 => 36,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title></title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    {% block stylesheet%}

    <!-- Favicon -->
    <link href=\"{{ asset('/voyageorganisé/img/favicon.ico') }}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"{{ asset('/voyageorganisé/css/all.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/voyageorganisé/css/bootstrap-icons.css') }}\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('/voyageorganisé/css/animate.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/voyageorganisé/css/owl.carousel.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/voyageorganisé/css/tempusdominus-bootstrap-4.min.css') }}\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('/voyageorganisé/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('/voyageorganisé/css/style.css') }}\" rel=\"stylesheet\">
</head>
{% endblock %}

{% block body%}
<body>
    <!-- Spinner Start -->
    
    <!-- Spinner End -->


   


    <!-- Navbar & Hero Start -->
    

       

    <!-- Navbar & Hero End -->


    <!-- Package Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Voyages organisés</h6>
                <p>Découvrez le monde avec nos voyages organisés exceptionnels ! À travers des itinéraires soigneusement planifiés, nous vous offrons une expérience de voyage sans tracas, combinant aventure, confort et découvertes.</p>
            </div>
            <div class=\"row g-4 justify-content-center\">
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"package-item\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"{{ asset('/voyageorganisé/img/package-1.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"d-flex border-bottom\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Thailand</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-calendar-alt text-primary me-2\"></i>3 jours</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i></small>
                        </div>
                        <div class=\"text-center p-4\">
                            <h3 class=\"mb-0\">1500.00DT</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                            </div>
                            <p>Découvrez le monde avec nos voyages organisés exceptionnels ! À travers des itinéraires soigneusement planifiés, nous vous offrons une expérience de voyage sans tracas, combinant aventure, confort et découvertes.</p>
                            <div class=\"d-flex justify-content-center mb-2\">
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Voir plus</a>
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Reserver maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"package-item\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"{{ asset('/voyageorganisé/img/package-2.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"d-flex border-bottom\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Indonesie</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-calendar-alt text-primary me-2\"></i>8 jours </small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i>2 Person</small>
                        </div>
                        <div class=\"text-center p-4\">
                            <h3 class=\"mb-0\">4500.00 DT</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                            </div>
                            <p> Indonésie, l'archipel enchanteur qui séduit les voyageurs du monde entier. Explorez la diversité culturelle de Java avec ses temples majestueux, découvrez la beauté naturelle de Bali avec ses rizières verdoyantes et ses plages paradisiaques, et plongez dans l'histoire fascinante de Sumatra.</p>
                            <div class=\"d-flex justify-content-center mb-2\">
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Voir plus</a>
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Reserver maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
<div class=\"col-lg-4 col-md-6 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"package-item\">
                        <div class=\"overflow-hidden\">
                            <img class=\"img-fluid\" src=\"asset{{('voyageorganisé/img/package-3.jpg')}}\" alt=\"\">
                        </div>
                        <div class=\"d-flex border-bottom\">
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-map-marker-alt text-primary me-2\"></i>Vietnam</small>
                            <small class=\"flex-fill text-center border-end py-2\"><i class=\"fa fa-calendar-alt text-primary me-2\"></i>7 jours</small>
                            <small class=\"flex-fill text-center py-2\"><i class=\"fa fa-user text-primary me-2\"></i></small>
                        </div>
                        <div class=\"text-center p-4\">
                            <h3 class=\"mb-0\">5000.00DT</h3>
                            <div class=\"mb-3\">
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                                <small class=\"fa fa-star text-primary\"></small>
                            </div>
                            <p> Vietnam, un pays d'une beauté exceptionnelle où l'histoire riche se mêle à une culture vibrante. Explorez la capitale animée de Hanoï, imprégnez-vous de l'atmosphère unique de Hô Chi Minh-Ville, et découvrez l'ancienne cité impériale de Hué</p>
                            <div class=\"d-flex justify-content-center mb-2\">
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3 border-end\" style=\"border-radius: 30px 0 0 30px;\">Voir plus</a>
                                <a href=\"#\" class=\"btn btn-sm btn-primary px-3\" style=\"border-radius: 0 30px 30px 0;\">Reserver maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->
{% block content%} 

{%endblock%}

    <!-- Booking Start -->
    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
            <div class=\"booking p-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-6 text-white\">
                        <h6 class=\"text-white text-uppercase\">Suggestion ?</h6>
                        <h1 class=\"text-white mb-4\">Remplisser ce formulaire </h1>
                        <p class=\"mb-4\">Vous ne trouvez pas votre boneur parmis nos suggestion ? Decrivez nous votre voyages de rêve et il sera bientôt disponible ..</p>
                        <a class=\"btn btn-outline-light py-3 px-5 mt-2\" href=\"\">Créer votre itinéraires</a>
                    </div>
                    <div class=\"col-md-6\">
                        <h1 class=\"text-white mb-4\"></h1>
                        <form>
                            <div class=\"row g-3\">
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"text\" class=\"form-control bg-transparent\" id=\"name\" placeholder=\"Your Name\">
                                        <label for=\"name\">Destination</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <input type=\"email\" class=\"form-control bg-transparent\" id=\"email\" placeholder=\"Your Email\">
                                        <label for=\"email\">Saison</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating date\" id=\"date3\" data-target-input=\"nearest\">
                                        <input type=\"text\" class=\"form-control bg-transparent datetimepicker-input\" id=\"datetime\" placeholder=\"Date & Time\" data-target=\"#date3\" data-toggle=\"datetimepicker\" />
                                        <label for=\"datetime\">Date & Time</label>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"form-floating\">
                                        <select class=\"form-select bg-transparent\" id=\"select1\">
                                            <option value=\"1\">Email</option>
                                            <option value=\"2\">Destination 2</option>
                                            <option value=\"3\">Destination 3</option>
                                        </select>
                                        <label for=\"select1\"></label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"form-floating\">
                                        <textarea class=\"form-control bg-transparent\" placeholder=\"Special Request\" id=\"message\" style=\"height: 100px\"></textarea>
                                        <label for=\"message\">Decrivez les activités</label>
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <button class=\"btn btn-outline-light w-100 py-3\" type=\"submit\">Soumettre</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class=\"container-xxl py-5\">
        <div class=\"container\">
            <div class=\"text-center pb-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                <h6 class=\"section-title bg-white text-center text-primary px-3\">Process</h6>
                <h1 class=\"mb-5\">3 Easy Steps</h1>
            </div>
            <div class=\"row gy-5 gx-4 justify-content-center\">
                <div class=\"col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp\" data-wow-delay=\"0.1s\">
                    <div class=\"position-relative border border-primary pt-5 pb-4 px-4\">
                        <div class=\"d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow\" style=\"width: 100px; height: 100px;\">
                            <i class=\"fa fa-globe fa-3x text-white\"></i>
                        </div>
                        <h5 class=\"mt-4\">Choose A Destination</h5>
                        <hr class=\"w-25 mx-auto bg-primary mb-1\">
                        <hr class=\"w-50 mx-auto bg-primary mt-0\">
                        <p class=\"mb-0\">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp\" data-wow-delay=\"0.3s\">
                    <div class=\"position-relative border border-primary pt-5 pb-4 px-4\">
                        <div class=\"d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow\" style=\"width: 100px; height: 100px;\">
                            <i class=\"fa fa-dollar-sign fa-3x text-white\"></i>
                        </div>
                        <h5 class=\"mt-4\">Pay Online</h5>
                        <hr class=\"w-25 mx-auto bg-primary mb-1\">
                        <hr class=\"w-50 mx-auto bg-primary mt-0\">
                        <p class=\"mb-0\">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
                </div>
                <div class=\"col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp\" data-wow-delay=\"0.5s\">
                    <div class=\"position-relative border border-primary pt-5 pb-4 px-4\">
                        <div class=\"d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow\" style=\"width: 100px; height: 100px;\">
                            <i class=\"fa fa-plane fa-3x text-white\"></i>
                        </div>
                        <h5 class=\"mt-4\">Fly Today</h5>
                        <hr class=\"w-25 mx-auto bg-primary mb-1\">
                        <hr class=\"w-50 mx-auto bg-primary mt-0\">
                        <p class=\"mb-0\">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                    </div>
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
<script src=\"{{ asset('/voyageorganisé/lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('/voyageorganisé/lib/waypoints/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('/voyageorganisé/lib/owlcarousel/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('/voyageorganisé/lib/tempusdominus/js/moment.min.js') }}\"></script>
<script src=\"{{ asset('/voyageorganisé/lib/tempusdominus/js/moment-timezone.min.js') }}\"></script>
<script src=\"{{ asset('/voyageorganisé/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}\"></script>

<!-- Template Javascript -->
<script src=\"{{ asset('/voyageorganisé/js/main.js') }}\"></script>

{% endblock %}", "package.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/package.html.twig");
    }
}
