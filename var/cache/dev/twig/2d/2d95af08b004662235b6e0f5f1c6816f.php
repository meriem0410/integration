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

/* programme/new.html.twig */
class __TwigTemplate_14401ca487083082325ded13659f0dfa extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/new.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "programme/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nouveau Programme";
        
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
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Créer un nouveau programme</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Programme</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Ajouter programme</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-8 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Ajouter un  programme</h4>
            <center>
            <p class=\"card-description\" style=\"color: #4F818C;\">Veuillez remplir le formulaire ci-dessous :</p>
            </center>
            <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_new");
        echo "\" method=\"POST\">
              ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
              <div class=\"form-group\" style=\"color: #4F818C;\">
               
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "activite", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Activité"]]);
        echo "
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "datedepart", [], "any", false, false, false, 33), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Date de départ"]]);
        echo "
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
               
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dateretour", [], "any", false, false, false, 37), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Date de retour"]]);
        echo "
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Description"]]);
        echo "
              </div> 
              <button type=\"submit\" class=\"btn btn-primary btn-lg\" style=\"background-color: #D0A343; border-color: #D0A343;\">Enregistrer</button>
               <center> ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo " </center>
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
        return "programme/new.html.twig";
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
        return array (  131 => 44,  125 => 41,  118 => 37,  111 => 33,  104 => 29,  98 => 26,  94 => 25,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Nouveau Programme{% endblock %}

{% block content %}
<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Créer un nouveau programme</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Programme</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Ajouter programme</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-8 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Ajouter un  programme</h4>
            <center>
            <p class=\"card-description\" style=\"color: #4F818C;\">Veuillez remplir le formulaire ci-dessous :</p>
            </center>
            <form action=\"{{ path('app_programme_new') }}\" method=\"POST\">
              {{ form_start(form) }}
              <div class=\"form-group\" style=\"color: #4F818C;\">
               
                {{ form_row(form.activite, { 'attr': {'class': 'form-control', 'placeholder': 'Activité'} }) }}
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                
                {{ form_row(form.datedepart, { 'attr': {'class': 'form-control', 'placeholder': 'Date de départ'} }) }}
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
               
                {{ form_row(form.dateretour, { 'attr': {'class': 'form-control', 'placeholder': 'Date de retour'} }) }}
              </div>
              <div class=\"form-group\" style=\"color: #4F818C;\">
                
                {{ form_row(form.description, { 'attr': {'class': 'form-control', 'placeholder': 'Description'} }) }}
              </div> 
              <button type=\"submit\" class=\"btn btn-primary btn-lg\" style=\"background-color: #D0A343; border-color: #D0A343;\">Enregistrer</button>
               <center> {{ form_end(form) }} </center>
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
", "programme/new.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/programme/new.html.twig");
    }
}
