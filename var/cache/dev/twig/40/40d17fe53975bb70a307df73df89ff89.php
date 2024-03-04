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

/* voyage/new.html.twig */
class __TwigTemplate_8a821edb8bcf3bae520daee9199180a3 extends Template
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
        return "base_back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/new.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "voyage/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nouveau Voyage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Créer un nouveau voyage</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Voyage</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Ajouter voyage</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-8 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Ajout voyage</h4>
            <p class=\"card-description\" style=\"color: #4F818C;\">Veuillez remplir le formulaire ci-dessous :</p>
            <form action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_new");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
              ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
              <div class=\"form-group\" style=\"color: #4F818C;\">
                <label for=\"destination\"> <i class=\"fas fa-map-marker-alt\"></i></label>
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "destination", [], "any", false, false, false, 27), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Destination"]]);
        echo "
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                <label for=\"prix\"> <i class=\"fas fa-money-bill-wave\"></i></label>
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Prix"]]);
        echo "
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                <label for=\"date\"> <i class=\"fas fa-calendar-alt\"></i></label>
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "date", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Date"]]);
        echo "
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                <label for=\"type\"> <i class=\"fas fa-tags\"></i></label>
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Type"]]);
        echo "
              </div>
        
             <button type=\"submit\" class=\"btn btn-primary btn-lg\" style=\"background-color: #D0A343; border-color: #D0A343;\"><i class=\"fas fa-save\"></i> Enregistrer</button>
              ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo " 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class=\"footer\">
    <!-- Footer Content Goes Here -->
  </footer>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "voyage/new.html.twig";
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
        return array (  130 => 43,  123 => 39,  116 => 35,  109 => 31,  102 => 27,  96 => 24,  92 => 23,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Nouveau Voyage{% endblock %}

{% block content %}
<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Créer un nouveau voyage</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Voyage</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Ajouter voyage</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-8 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Ajout voyage</h4>
            <p class=\"card-description\" style=\"color: #4F818C;\">Veuillez remplir le formulaire ci-dessous :</p>
            <form action=\"{{ path('app_voyage_new') }}\" method=\"POST\" enctype=\"multipart/form-data\">
              {{ form_start(form) }}
              <div class=\"form-group\" style=\"color: #4F818C;\">
                <label for=\"destination\"> <i class=\"fas fa-map-marker-alt\"></i></label>
                {{ form_row(form.destination, { 'attr': {'class': 'form-control', 'placeholder': 'Destination'} }) }}
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                <label for=\"prix\"> <i class=\"fas fa-money-bill-wave\"></i></label>
                {{ form_row(form.prix, { 'attr': {'class': 'form-control', 'placeholder': 'Prix'} }) }}
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                <label for=\"date\"> <i class=\"fas fa-calendar-alt\"></i></label>
                {{ form_row(form.date, { 'attr': {'class': 'form-control', 'placeholder': 'Date'} }) }}
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                <label for=\"type\"> <i class=\"fas fa-tags\"></i></label>
                {{ form_row(form.type, { 'attr': {'class': 'form-control', 'placeholder': 'Type'} }) }}
              </div>
        
             <button type=\"submit\" class=\"btn btn-primary btn-lg\" style=\"background-color: #D0A343; border-color: #D0A343;\"><i class=\"fas fa-save\"></i> Enregistrer</button>
              {{ form_end(form) }} 
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class=\"footer\">
    <!-- Footer Content Goes Here -->
  </footer>
</div>
{% endblock %}
", "voyage/new.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/voyage/new.html.twig");
    }
}
