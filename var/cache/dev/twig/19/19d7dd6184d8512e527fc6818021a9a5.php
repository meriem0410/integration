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

/* res/index.html.twig */
class __TwigTemplate_39a4d28bbe96399b8871925a0ab0f1f7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "res/index.html.twig"));

        $this->parent = $this->loadTemplate("base_back.html.twig", "res/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Res index";
        
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
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des réservations</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Réservation</a></li>
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
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des réservations</h4>
            <table id=\"myTable\" class=\"table\">
              <thead>
                <tr>
                 <th>Mail</th>
                  <th>Nombre de personnes</th>
                  <th>Origine</th>
                  <th>Age</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["re"]) {
            // line 41
            echo "                <tr>
                 <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "mail", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                  <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "nombre", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                  <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "origine", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                  <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["re"], "age", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                  <td>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_res_show", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Afficher</a>
                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_res_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier</a>
                    ";
            // line 49
            if ( !twig_get_attribute($this->env, $this->source, $context["re"], "confirmed", [], "any", false, false, false, 49)) {
                // line 50
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("confirm_reservation", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-success\">Confirmer</a>
                    ";
            } else {
                // line 52
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cancel_reservation", ["id" => twig_get_attribute($this->env, $this->source, $context["re"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Annuler</a>
                    ";
            }
            // line 54
            echo "                  </td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "                <tr>
                  <td colspan=\"5\">Aucun enregistrement trouvé</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['re'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "              </tbody>
            </table>
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
        return "res/index.html.twig";
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
        return array (  172 => 61,  163 => 57,  156 => 54,  150 => 52,  144 => 50,  142 => 49,  138 => 48,  134 => 47,  129 => 45,  125 => 44,  121 => 43,  117 => 42,  114 => 41,  109 => 40,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_back.html.twig' %}

{% block title %}Res index{% endblock %}

{% block content %}
<div class=\"main-panel\">
  <div class=\"content-wrapper\">
    <div class=\"page-header\">
      <h3 class=\"page-title\" style=\"color: #D0A343;\">Liste des réservations</h3>
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\" style=\"background-color: #94BDB5;\">
          <li class=\"breadcrumb-item\"><a href=\"#\" style=\"color: #4F818C;\">Réservation</a></li>
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
            <h4 class=\"card-title\" style=\"color: #D0A343;\">Liste des réservations</h4>
            <table id=\"myTable\" class=\"table\">
              <thead>
                <tr>
                 <th>Mail</th>
                  <th>Nombre de personnes</th>
                  <th>Origine</th>
                  <th>Age</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                {% for re in res %}
                <tr>
                 <td>{{ re.mail }}</td>
                  <td>{{ re.nombre }}</td>
                  <td>{{ re.origine }}</td>
                  <td>{{ re.age }}</td>
                  <td>
                    <a href=\"{{ path('app_res_show', {'id': re.id}) }}\" class=\"btn btn-primary\">Afficher</a>
                    <a href=\"{{ path('app_res_edit', {'id': re.id}) }}\" class=\"btn btn-secondary\">Modifier</a>
                    {% if not re.confirmed %}
                    <a href=\"{{ path('confirm_reservation', {'id': re.id}) }}\" class=\"btn btn-success\">Confirmer</a>
                    {% else %}
                    <a href=\"{{ path('cancel_reservation', {'id': re.id}) }}\" class=\"btn btn-danger\">Annuler</a>
                    {% endif %}
                  </td>
                </tr>
                {% else %}
                <tr>
                  <td colspan=\"5\">Aucun enregistrement trouvé</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
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
", "res/index.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/res/index.html.twig");
    }
}
