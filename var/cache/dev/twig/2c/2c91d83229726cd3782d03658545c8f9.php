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

/* voyage/index.html.twig */
class __TwigTemplate_3d8a969192fc650b3e52839069ee8b96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sidebar' => [$this, 'block_sidebar'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voyage/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "voyage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Voyages";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        echo " ";
        
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
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des voyages</h3>
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
            <!-- Champ de recherche -->
            <div class=\"input-group mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Rechercher...\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary\" type=\"button\">Rechercher</button>
              </div>
            </div>
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des voyages</h4>
            <table id=\"myTable\" class=\"table\">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Destination</th>
                  <th>Prix</th>
                  <th>Date</th>
                  <th>Type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voyages"]) || array_key_exists("voyages", $context) ? $context["voyages"] : (function () { throw new RuntimeError('Variable "voyages" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["voyage"]) {
            // line 43
            echo "                <tr>
                  <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                  <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "destination", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                  <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "prix", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                  <td>";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "date", [], "any", false, false, false, 47), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                  <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["voyage"], "type", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                  <td>
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_show", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-info\" style=\"background-color: #D0A343; border-color: #D0A343;\">Afficher</a>
                    <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["voyage"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Modifier</a>
                  </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "                <tr>
                  <td colspan=\"6\">Aucun enregistrement trouvé</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voyage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "              </tbody>
            </table>
            <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_new");
        echo "\" class=\"btn btn-success\" style=\"background-color: #D0A343; border-color: #D0A343;\">Créer un nouveau voyage</a>

            <!-- Bouton d'impression -->
            <a id=\"btnPrint\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_pdf");
        echo "\"> Imprimer </a>
        
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class=\"footer\">
    <!-- Contenu du pied de page -->
  </footer>
</div>

<!-- Assurez-vous d'inclure jQuery avant votre script -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>



<script>
    \$(document).ready(function () {
        \$(\"#search_input\").on(\"keyup\", function () {
            var value = \$(this).val().toLowerCase();
            \$(\"#myTable tbody tr\").filter(function () {
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
        return "voyage/index.html.twig";
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
        return array (  186 => 64,  180 => 61,  176 => 59,  167 => 55,  158 => 51,  154 => 50,  149 => 48,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  130 => 43,  125 => 42,  87 => 6,  80 => 5,  67 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Liste des Voyages{% endblock %}
{% block sidebar %} {% endblock %} 
{% block content %}

<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des voyages</h3>
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
            <!-- Champ de recherche -->
            <div class=\"input-group mb-3\">
              <input type=\"text\" class=\"form-control\" id=\"search_input\" placeholder=\"Rechercher...\">
              <div class=\"input-group-append\">
                <button class=\"btn btn-outline-secondary\" type=\"button\">Rechercher</button>
              </div>
            </div>
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des voyages</h4>
            <table id=\"myTable\" class=\"table\">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Destination</th>
                  <th>Prix</th>
                  <th>Date</th>
                  <th>Type</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for voyage in voyages %}
                <tr>
                  <td>{{ voyage.id }}</td>
                  <td>{{ voyage.destination }}</td>
                  <td>{{ voyage.prix }}</td>
                  <td>{{ voyage.date ? voyage.date|date('Y-m-d') : '' }}</td>
                  <td>{{ voyage.type }}</td>
                  <td>
                    <a href=\"{{ path('app_voyage_show', {'id': voyage.id}) }}\" class=\"btn btn-info\" style=\"background-color: #D0A343; border-color: #D0A343;\">Afficher</a>
                    <a href=\"{{ path('app_voyage_edit', {'id': voyage.id}) }}\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\">Modifier</a>
                  </td>
                </tr>
                {% else %}
                <tr>
                  <td colspan=\"6\">Aucun enregistrement trouvé</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
            <a href=\"{{ path('app_voyage_new') }}\" class=\"btn btn-success\" style=\"background-color: #D0A343; border-color: #D0A343;\">Créer un nouveau voyage</a>

            <!-- Bouton d'impression -->
            <a id=\"btnPrint\" class=\"btn btn-primary\" style=\"background-color: #D0A343; border-color: #D0A343;\" href=\"{{path('app_voyage_pdf')}}\"> Imprimer </a>
        
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class=\"footer\">
    <!-- Contenu du pied de page -->
  </footer>
</div>

<!-- Assurez-vous d'inclure jQuery avant votre script -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>



<script>
    \$(document).ready(function () {
        \$(\"#search_input\").on(\"keyup\", function () {
            var value = \$(this).val().toLowerCase();
            \$(\"#myTable tbody tr\").filter(function () {
                \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
{% endblock %}
", "voyage/index.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/voyage/index.html.twig");
    }
}
