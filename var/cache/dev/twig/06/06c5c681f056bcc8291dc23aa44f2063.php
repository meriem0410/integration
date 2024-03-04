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

/* sidebar.html.twig */
class __TwigTemplate_ac4340712f09229f1787ddabf3f6ef5c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        echo "<div class=\"container-scroller\">
  <nav class=\"sidebar sidebar-offcanvas active\" id=\"sidebar\" style=\"background-color: #FAFBFC; color: #fff; padding: 20px;\">
    <div class=\"text-center sidebar-brand-wrapper d-flex align-items-center\">
      <a class=\"sidebar-brand brand-logo\" href=\"#\"> 
        <!-- Ajoutez le logo de votre marque ici si nécessaire -->
      </a>
    </div>
    <ul class=\"nav\">
      <li class=\"nav-item nav-profile\">
        <!-- Ajoutez le profil de l'utilisateur ici si nécessaire -->
      </li>
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">
          <i class=\"mdi mdi-home menu-icon\"></i>
          <span class=\"menu-title\"> Accueil</span>
        </a>
      </li>
      <!-- Autres éléments de la barre latérale ici -->
      <!-- ... -->
      <!-- Liens de gestion des voyages -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#gestion-voyage\" aria-expanded=\"true\" aria-controls=\"gestion-voyage\">
          <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
          <span class=\"menu-title\">Gestion Voyage </span>
          <i class=\"menu-arrow\"></i>
        </a>
        <div class=\"collapse show\" id=\"gestion-voyage\" style=\"\">
          <ul class=\"nav flex-column sub-menu\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_new");
        echo "\">Ajouter Un Voyage </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voyage_index");
        echo "\"> Liste des voyages</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_new");
        echo "\">Ajouter un programme </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\"> Liste des programme </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Autres éléments de la barre latérale ici -->
      <!-- ... -->
    </ul>
  </nav>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sidebar.html.twig";
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
        return array (  89 => 39,  83 => 36,  77 => 33,  71 => 30,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-scroller\">
  <nav class=\"sidebar sidebar-offcanvas active\" id=\"sidebar\" style=\"background-color: #FAFBFC; color: #fff; padding: 20px;\">
    <div class=\"text-center sidebar-brand-wrapper d-flex align-items-center\">
      <a class=\"sidebar-brand brand-logo\" href=\"#\"> 
        <!-- Ajoutez le logo de votre marque ici si nécessaire -->
      </a>
    </div>
    <ul class=\"nav\">
      <li class=\"nav-item nav-profile\">
        <!-- Ajoutez le profil de l'utilisateur ici si nécessaire -->
      </li>
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">
          <i class=\"mdi mdi-home menu-icon\"></i>
          <span class=\"menu-title\"> Accueil</span>
        </a>
      </li>
      <!-- Autres éléments de la barre latérale ici -->
      <!-- ... -->
      <!-- Liens de gestion des voyages -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#gestion-voyage\" aria-expanded=\"true\" aria-controls=\"gestion-voyage\">
          <i class=\"mdi mdi-crosshairs-gps menu-icon\"></i>
          <span class=\"menu-title\">Gestion Voyage </span>
          <i class=\"menu-arrow\"></i>
        </a>
        <div class=\"collapse show\" id=\"gestion-voyage\" style=\"\">
          <ul class=\"nav flex-column sub-menu\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_voyage_new') }}\">Ajouter Un Voyage </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_voyage_index') }}\"> Liste des voyages</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_programme_new') }}\">Ajouter un programme </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_programme_index') }}\"> Liste des programme </a>
            </li>
          </ul>
        </div>
      </li>
      <!-- Autres éléments de la barre latérale ici -->
      <!-- ... -->
    </ul>
  </nav>
</div>
", "sidebar.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/sidebar.html.twig");
    }
}
