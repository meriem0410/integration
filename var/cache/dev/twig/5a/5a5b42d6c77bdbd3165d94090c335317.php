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

/* programme/index.html.twig */
class __TwigTemplate_eabf3f64cf7c98ef9d357c25d469557d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "programme/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Programmes";
        
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
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des programmes</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Programme</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Liste</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-10 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des programmes</h4>
            <table class=\"table\">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Activité</th>
                  <th>Date de départ</th>
                  <th>Date de retour</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["programme"]) {
            // line 35
            echo "                <tr>
                  <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                  <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "activite", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                  <td>";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["programme"], "datedepart", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "datedepart", [], "any", false, false, false, 38), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                  <td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["programme"], "dateretour", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "dateretour", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                  <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["programme"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                  <td>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_show", ["id" => twig_get_attribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-info\" style=\"background-color: #D0A343; border-color: #D0A343;\">Afficher</a>
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["programme"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Modifier</a>
                  </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                  <td colspan=\"6\">Aucun enregistrement trouvé</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "              </tbody>
            </table>
            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_new");
        echo "\" class=\"btn btn-success\" style=\"background-color: #D0A343; border-color: #D0A343;\">Créer un nouveau programme</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class=\"footer\">
    <!-- Contenu du pied de page -->
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
        return "programme/index.html.twig";
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
        return array (  158 => 53,  154 => 51,  145 => 47,  136 => 43,  132 => 42,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  108 => 35,  103 => 34,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Liste des Programmes{% endblock %}

{% block content %}
<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des programmes</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Programme</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Liste</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-10 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des programmes</h4>
            <table class=\"table\">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Activité</th>
                  <th>Date de départ</th>
                  <th>Date de retour</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for programme in programmes %}
                <tr>
                  <td>{{ programme.id }}</td>
                  <td>{{ programme.activite }}</td>
                  <td>{{ programme.datedepart ? programme.datedepart|date('Y-m-d') : '' }}</td>
                  <td>{{ programme.dateretour ? programme.dateretour|date('Y-m-d') : '' }}</td>
                  <td>{{ programme.description }}</td>
                  <td>
                    <a href=\"{{ path('app_programme_show', {'id': programme.id}) }}\" class=\"btn btn-info\" style=\"background-color: #D0A343; border-color: #D0A343;\">Afficher</a>
                    <a href=\"{{ path('app_programme_edit', {'id': programme.id}) }}\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Modifier</a>
                  </td>
                </tr>
                {% else %}
                <tr>
                  <td colspan=\"6\">Aucun enregistrement trouvé</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
            <a href=\"{{ path('app_programme_new') }}\" class=\"btn btn-success\" style=\"background-color: #D0A343; border-color: #D0A343;\">Créer un nouveau programme</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class=\"footer\">
    <!-- Contenu du pied de page -->
  </footer>
</div>
{% endblock %}
", "programme/index.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/programme/index.html.twig");
    }
}
