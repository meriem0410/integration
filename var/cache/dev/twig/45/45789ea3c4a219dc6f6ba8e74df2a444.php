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

/* prog/index.html.twig */
class __TwigTemplate_794df8d4e532fe580890dffdec8a430c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "prog/index.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "prog/index.html.twig", 1);
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
<!DOCTYPE html>
<html>
<head>
    <title>Détails du programme de voyage</title>
</head>
<body>
    <h1>Détails du programme de voyage</h1>
    ";
        // line 15
        if ((isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 16, $this->source); })()), "activite", [], "any", false, false, false, 16), "html", null, true);
            echo "</h2>
        <p>";
            // line 17
            ((twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 17, $this->source); })()), "datedepart", [], "any", false, false, false, 17)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 17, $this->source); })()), "datedepart", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
        <p>";
            // line 18
            ((twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 18, $this->source); })()), "dateretour", [], "any", false, false, false, 18)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 18, $this->source); })()), "dateretour", [], "any", false, false, false, 18), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
        <h3>Description :</h3>
        <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
        <!-- Ajoutez ici d'autres détails du programme selon vos besoins -->
    ";
        } else {
            // line 23
            echo "        <p>Aucun programme trouvé pour cet ID.</p>
    ";
        }
        // line 25
        echo "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "prog/index.html.twig";
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
        return array (  109 => 25,  105 => 23,  99 => 20,  94 => 18,  90 => 17,  85 => 16,  83 => 15,  73 => 7,  66 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block title %}Hermes Voyages {% endblock %}


{% block content%}

<!DOCTYPE html>
<html>
<head>
    <title>Détails du programme de voyage</title>
</head>
<body>
    <h1>Détails du programme de voyage</h1>
    {% if programme %}
        <h2>{{ programme.activite }}</h2>
        <p>{{ programme.datedepart ? programme.datedepart|date('Y-m-d') : '' }}</p>
        <p>{{ programme.dateretour ? programme.dateretour|date('Y-m-d') : '' }}</p>
        <h3>Description :</h3>
        <p>{{ programme.description }}</p>
        <!-- Ajoutez ici d'autres détails du programme selon vos besoins -->
    {% else %}
        <p>Aucun programme trouvé pour cet ID.</p>
    {% endif %}
</body>
</html>
{% endblock %}
   ", "prog/index.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/prog/index.html.twig");
    }
}
