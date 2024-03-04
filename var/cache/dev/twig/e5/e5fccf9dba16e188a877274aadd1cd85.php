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

/* voypersonalise/index.html.twig */
class __TwigTemplate_8ff1d9540f84679831990cf69bab7707 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voypersonalise/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "voypersonalise/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Voyages pérsonalisés";
        
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
<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des Voyages pérsonalisés</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Voyage</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Liste</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-10 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des voyages personnalisés</h4>
            <!-- Champ de recherche -->
            <div class=\"input-group mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Rechercher...\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary\" type=\"button\">Rechercher</button>
              </div>
            </div>
            <table class=\"table\">
              <thead>
                <tr>
                 
                  <th>Destination</th>
                  <th>Saison</th>
                  <th>Date</th>
                  <th>Email</th>
                  <th>Suggestion</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id=\"myTable\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voypersonalises"]) || array_key_exists("voypersonalises", $context) ? $context["voypersonalises"] : (function () { throw new RuntimeError('Variable "voypersonalises" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voypersonalise"]) {
            // line 44
            echo "                <tr>
                 
                  <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voypersonalise"], "destination", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                  <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voypersonalise"], "saison", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                  <td>";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["voypersonalise"], "date", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voypersonalise"], "date", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                  <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voypersonalise"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                  <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voypersonalise"], "act", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                  <td>
                    <a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voypersonalise");
            echo "\" class=\"btn btn-info\" style=\"background-color: #D0A343; border-color: #D0A343;\">Afficher</a>
                   
                  </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                <tr>
                  <td colspan=\"7\">Aucun enregistrement trouvé</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voypersonalise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Assurez-vous d'inclure jQuery avant votre script -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
  \$(document).ready(function () {
    \$(\"#search_input\").on(\"keyup\", function () {
      var value = \$(this).val().toLowerCase();
      \$(\"#myTable tr\").filter(function () {
        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
      });
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
        return "voypersonalise/index.html.twig";
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
        return array (  161 => 61,  152 => 57,  142 => 52,  137 => 50,  133 => 49,  129 => 48,  125 => 47,  121 => 46,  117 => 44,  112 => 43,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Liste des Voyages pérsonalisés{% endblock %}

{% block content %}

<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des Voyages pérsonalisés</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Voyage</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\" style=\"color: #4F818C;\">Liste</li>
        </ol>
      </nav>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-md-10 grid-margin stretch-card\">
        <div class=\"card\" style=\"border-color: #4F818C;\">
          <div class=\"card-body\">
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des voyages personnalisés</h4>
            <!-- Champ de recherche -->
            <div class=\"input-group mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Rechercher...\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary\" type=\"button\">Rechercher</button>
              </div>
            </div>
            <table class=\"table\">
              <thead>
                <tr>
                 
                  <th>Destination</th>
                  <th>Saison</th>
                  <th>Date</th>
                  <th>Email</th>
                  <th>Suggestion</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id=\"myTable\">
                {% for voypersonalise in voypersonalises %}
                <tr>
                 
                  <td>{{ voypersonalise.destination }}</td>
                  <td>{{ voypersonalise.saison }}</td>
                  <td>{{ voypersonalise.date ? voypersonalise.date|date('Y-m-d') : '' }}</td>
                  <td>{{ voypersonalise.email }}</td>
                  <td>{{ voypersonalise.act }}</td>
                  <td>
                    <a href=\"{{ path('app_voypersonalise')}}\" class=\"btn btn-info\" style=\"background-color: #D0A343; border-color: #D0A343;\">Afficher</a>
                   
                  </td>
                </tr>
                {% else %}
                <tr>
                  <td colspan=\"7\">Aucun enregistrement trouvé</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Assurez-vous d'inclure jQuery avant votre script -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<script>
  \$(document).ready(function () {
    \$(\"#search_input\").on(\"keyup\", function () {
      var value = \$(this).val().toLowerCase();
      \$(\"#myTable tr\").filter(function () {
        \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

{% endblock %}
", "voypersonalise/index.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/voypersonalise/index.html.twig");
    }
}
