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

/* voypersonalise/new.html.twig */
class __TwigTemplate_e1a0a1919a68d2b3f03168f17de68033 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voypersonalise/new.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "voypersonalise/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Voypersonalise";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "

 <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/img/favicon.ico"), "html", null, true);
        echo "\" rel=\"icon\">
     <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
           <div class=\"booking p-5\" >

                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-6 text-white\">
                        <h6  style=\"color: #94BDB5;\">Suggestion ?</h6>
                     <h1  style=\"color: #94BDB5;\">Remplir ce formulaire</h1>
                        <p class=\"mb-4\">Vous ne trouvez pas votre bonheur parmi nos suggestions ? Décrivez-nous votre voyage de rêve et il sera bientôt disponible ..</p>
                        <a class=\"btn btn-outline py-3 px-5 mt-2\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_test");
        echo "\" style=\"border-color: #94BDB5;\">Retour à la liste </a>
                    </div>
                    <div class=\"col-md-6\">
                        <h1 class=\"text-white mb-4\"></h1>
                        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "destination", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control bg-transparent", "placeholder" => "Destination"]]);
        echo "
                                    <label for=\"destination\">Destination</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "saison", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control bg-transparent", "placeholder" => "Saison"]]);
        echo "
                                    <label for=\"saison\">Saison</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating \" >
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "date", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control bg-transparent datetimepicker-input", "placeholder" => "Date & Time", "data-target" => "#date3", "data-toggle" => "datetimepicker"]]);
        echo "
                                    <label for=\"date\">Date & Time</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control bg-transparent", "placeholder" => "Email"]]);
        echo "
                                    <label for=\"email\">Email</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "act", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control bg-transparent", "placeholder" => "Special Request", "style" => "height: 100px"]]);
        echo "
                                    <label for=\"act\">Decrivez les activités</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                         <button  class=\"btn btn-outline w-100 py-3\" style=\"border-color: #94BDB5;\" type=\"submit\">Soumettre</button>
                            </div>
                        </div>
                        ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        echo "

                     

                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\"><i class=\"bi bi-arrow-up\"></i></a>



<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/tempusdominus/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/tempusdominus/js/moment-timezone.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("voyageorganisé/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voypersonalise/new.html.twig";
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
        return array (  235 => 100,  229 => 97,  225 => 96,  221 => 95,  217 => 94,  213 => 93,  209 => 92,  205 => 91,  186 => 75,  175 => 67,  166 => 61,  157 => 55,  148 => 49,  139 => 43,  132 => 39,  125 => 35,  110 => 23,  104 => 20,  100 => 19,  96 => 18,  90 => 15,  86 => 14,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}New Voypersonalise{% endblock %}

{% block content %}


 <link href=\"{{ asset('voyageorganisé/img/favicon.ico') }}\" rel=\"icon\">
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


    <div class=\"container-xxl py-5 wow fadeInUp\" data-wow-delay=\"0.1s\">
        <div class=\"container\">
           <div class=\"booking p-5\" >

                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-6 text-white\">
                        <h6  style=\"color: #94BDB5;\">Suggestion ?</h6>
                     <h1  style=\"color: #94BDB5;\">Remplir ce formulaire</h1>
                        <p class=\"mb-4\">Vous ne trouvez pas votre bonheur parmi nos suggestions ? Décrivez-nous votre voyage de rêve et il sera bientôt disponible ..</p>
                        <a class=\"btn btn-outline py-3 px-5 mt-2\" href=\"{{ path('app_test') }}\" style=\"border-color: #94BDB5;\">Retour à la liste </a>
                    </div>
                    <div class=\"col-md-6\">
                        <h1 class=\"text-white mb-4\"></h1>
                        {{ form_start(form) }}
                        <div class=\"row g-3\">
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.destination, {'attr': {'class': 'form-control bg-transparent', 'placeholder': 'Destination'}}) }}
                                    <label for=\"destination\">Destination</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.saison, {'attr': {'class': 'form-control bg-transparent', 'placeholder': 'Saison'}}) }}
                                    <label for=\"saison\">Saison</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating \" >
                                    {{ form_widget(form.date, {'attr': {'class': 'form-control bg-transparent datetimepicker-input', 'placeholder': 'Date & Time', 'data-target': '#date3', 'data-toggle': 'datetimepicker'}}) }}
                                    <label for=\"date\">Date & Time</label>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control bg-transparent', 'placeholder': 'Email'}}) }}
                                    <label for=\"email\">Email</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"form-floating\">
                                    {{ form_widget(form.act, {'attr': {'class': 'form-control bg-transparent', 'placeholder': 'Special Request', 'style': 'height: 100px'}}) }}
                                    <label for=\"act\">Decrivez les activités</label>
                                </div>
                            </div>
                            <div class=\"col-12\">
                         <button  class=\"btn btn-outline w-100 py-3\" style=\"border-color: #94BDB5;\" type=\"submit\">Soumettre</button>
                            </div>
                        </div>
                        {{ form_end(form) }}

                     

                    </div>
                </div>
            </div>
        </div>
    </div>

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
{% endblock %}
", "voypersonalise/new.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/voypersonalise/new.html.twig");
    }
}
