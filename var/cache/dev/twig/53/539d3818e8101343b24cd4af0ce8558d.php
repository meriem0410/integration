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

/* base_front.html.twig */
class __TwigTemplate_df779c2a4771231d5b0a37684d1cfbd5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
    <meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
    <meta name=\"author\" content=\"FREEHTML5.CO\" />


    <!-- Facebook and Twitter integration -->


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/favicon.ico"), "html", null, true);
        echo "\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 49
        echo "</head>

<body>
    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo " 
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hermes Voyage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "    <!-- Animate.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/animate.css"), "html", null, true);
        echo "\">
    <!-- Icomoon Icon Fonts-->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/icomoon.css"), "html", null, true);
        echo "\">
    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/bootstrap.css"), "html", null, true);
        echo "\">
    <!-- Superfish -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/superfish.css"), "html", null, true);
        echo "\">
    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
    <!-- CS Select -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/cs-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/cs-skin-border.css"), "html", null, true);
        echo "\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/css/style.css"), "html", null, true);
        echo "\">

    <!-- Modernizr JS -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <div id=\"fh5co-wrapper\">
        <div id=\"fh5co-page\">

            <header id=\"fh5co-header-section\" class=\"sticky-banner\">
                <div class=\"container\">
                    <div class=\"nav-header\">
                        <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle dark\"><i></i></a>
                        <h1 id=\"fh5co-logo\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/index.html"), "html", null, true);
        echo "\"><i class=\"icon-airplane\"></i>Hermes Voyage</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id=\"fh5co-menu-wrap\" role=\"navigation\">
                            <ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
                                <li class=\"active\"><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/index.html"), "html", null, true);
        echo "\">Acceuil</a></li>
                                <li>
                                    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/vacation.html"), "html", null, true);
        echo "\" class=\"fh5co-sub-ddown\">Voyages organisés</a>
                                
                                </li>
                                <li><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/flight.html"), "html", null, true);
        echo "\">Transport</a></li>
                                <li><a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/templates/pacakge.html.twig"), "html", null, true);
        echo "\">Hebergement</a></li>
                                <li><a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/car.html"), "html", null, true);
        echo "\">E-tourism</a></li>
                                <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front_office/blog.html"), "html", null, true);
        echo "\">Evenement</a></li>
                                
                            </ul>
                        </nav>

                    </div>
                </div>
            </header>



            
           

            <!-- end:header-top -->
        
            
                
               
                    <div class=\"desc\">
                        <div class=\"container\">
                         ";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "                            <div class=\"row\">
                                <div class=\"col-sm-5 col-md-5\">
                                    <div class=\"tabulation animate-box\">

                                    <!-- Nav tabs -->
                                  

                                    <!-- Tab panes -->
                                        
                                                <!-- Rest of the form elements -->
                                            </div>
                                        </div>
                                        <!-- Rest of the tab panes -->
                                    </div>

                                </div>
                                <!-- Rest of the content -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            
            
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 93
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
        return "base_front.html.twig";
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
        return array (  281 => 93,  248 => 96,  246 => 93,  222 => 72,  218 => 71,  214 => 70,  210 => 69,  204 => 66,  199 => 64,  192 => 60,  183 => 53,  176 => 52,  166 => 46,  160 => 43,  154 => 40,  149 => 38,  145 => 37,  140 => 35,  135 => 33,  130 => 31,  125 => 29,  120 => 27,  115 => 25,  112 => 24,  105 => 23,  92 => 9,  83 => 122,  81 => 52,  76 => 49,  74 => 23,  68 => 20,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %}Hermes Voyage{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Free HTML5 Template by FREEHTML5.CO\" />
    <meta name=\"keywords\" content=\"free html5, free template, free bootstrap, html5, css3, mobile first, responsive\" />
    <meta name=\"author\" content=\"FREEHTML5.CO\" />


    <!-- Facebook and Twitter integration -->


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel=\"shortcut icon\" href=\"{{ asset('front_office/favicon.ico') }}\">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    {% block stylesheets %}
    <!-- Animate.css -->
    <link rel=\"stylesheet\" href=\"{{ asset('front_office/css/animate.css') }}\">
    <!-- Icomoon Icon Fonts-->
    <link rel=\"stylesheet\" href=\"{{ asset('front_office/css/icomoon.css') }}\">
    <!-- Bootstrap  -->
    <link rel=\"stylesheet\" href=\"{{ asset('front_office/css/bootstrap.css') }}\">
    <!-- Superfish -->
    <link rel=\"stylesheet\" href=\"{{ asset('front_office/css/superfish.css') }}\">
    <!-- Magnific Popup -->
    <link rel=\"stylesheet\" href=\"{{ asset('front_office/css/magnific-popup.css') }}\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('front_office/css/bootstrap-datepicker.min.css') }}\">
    <!-- CS Select -->
    <link rel=\"stylesheet\" href=\"{{ asset('front_office/css/cs-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front_office/css/cs-skin-border.css') }}\">
    
    <link rel=\"stylesheet\" href=\"{{ asset('front_office/css/style.css') }}\">

    <!-- Modernizr JS -->
    <script src=\"{{ asset('front_office/js/modernizr-2.6.2.min.js') }}\"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src=\"{{ asset('front_office/js/respond.min.js') }}\"></script>
    <![endif]-->
    {% endblock %}
</head>

<body>
    {% block body %}
    <div id=\"fh5co-wrapper\">
        <div id=\"fh5co-page\">

            <header id=\"fh5co-header-section\" class=\"sticky-banner\">
                <div class=\"container\">
                    <div class=\"nav-header\">
                        <a href=\"#\" class=\"js-fh5co-nav-toggle fh5co-nav-toggle dark\"><i></i></a>
                        <h1 id=\"fh5co-logo\"><a href=\"{{ asset('front_office/index.html') }}\"><i class=\"icon-airplane\"></i>Hermes Voyage</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id=\"fh5co-menu-wrap\" role=\"navigation\">
                            <ul class=\"sf-menu\" id=\"fh5co-primary-menu\">
                                <li class=\"active\"><a href=\"{{ asset('front_office/index.html') }}\">Acceuil</a></li>
                                <li>
                                    <a href=\"{{ asset('front_office/vacation.html') }}\" class=\"fh5co-sub-ddown\">Voyages organisés</a>
                                
                                </li>
                                <li><a href=\"{{ asset('front_office/flight.html') }}\">Transport</a></li>
                                <li><a href=\"{{ asset('/templates/pacakge.html.twig') }}\">Hebergement</a></li>
                                <li><a href=\"{{ asset('front_office/car.html') }}\">E-tourism</a></li>
                                <li><a href=\"{{ asset('front_office/blog.html') }}\">Evenement</a></li>
                                
                            </ul>
                        </nav>

                    </div>
                </div>
            </header>



            
           

            <!-- end:header-top -->
        
            
                
               
                    <div class=\"desc\">
                        <div class=\"container\">
                         {% block content %} 

            {% endblock %}
                            <div class=\"row\">
                                <div class=\"col-sm-5 col-md-5\">
                                    <div class=\"tabulation animate-box\">

                                    <!-- Nav tabs -->
                                  

                                    <!-- Tab panes -->
                                        
                                                <!-- Rest of the form elements -->
                                            </div>
                                        </div>
                                        <!-- Rest of the tab panes -->
                                    </div>

                                </div>
                                <!-- Rest of the content -->
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            
            
 {% endblock %} 
</body>
</html>", "base_front.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/base_front.html.twig");
    }
}
