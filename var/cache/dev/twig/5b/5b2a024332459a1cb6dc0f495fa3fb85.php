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

/* res/msg.html.twig */
class __TwigTemplate_e71b4f09b1bb099dc1a4d5937e6bf5c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "res/msg.html.twig"));

        $this->parent = $this->loadTemplate("base_front.html.twig", "res/msg.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div style=\" padding: 20px;\">
        
        <div style=\"background-color: #94BDB5; padding: 20px; border-radius: 10px;\">
        <h1 style=\"color: #D0A343;\">Bienvenue aux voyageurs responsables!</h1>
            <p style=\"color: #333333;\">Nous sommes heureux de vous accueillir dans notre monde magnifique! En tant que voyageur, vous avez un rôle crucial à jouer dans la préservation de notre environnement et dans la promotion d'un tourisme durable.</p>
            <p style=\"color: #333333;\">Voici quelques conseils pour voyager de manière responsable :</p>
            <ul style=\"color: #333333;\">
                <li><i class=\"fas fa-leaf\" style=\"color: #D0A343;\"></i> Privilégiez les hébergements respectueux de l'environnement, comme les éco-lodges ou les hôtels certifiés écologiques.</li>
                <li><i class=\"fas fa-mountain\" style=\"color: #D0A343;\"></i> Optez pour des activités touristiques qui préservent la nature et la culture locales, comme la randonnée, l'observation des oiseaux ou les visites de sites historiques.</li>
                <li><i class=\"fas fa-bus\" style=\"color: #D0A343;\"></i> Utilisez les transports en commun, le covoiturage ou le vélo chaque fois que possible pour réduire votre empreinte carbone.</li>
                <li><i class=\"fas fa-shopping-bag\" style=\"color: #D0A343;\"></i> Évitez d'acheter des souvenirs fabriqués à partir d'espèces menacées ou de matériaux non durables.</li>
                <li><i class=\"fas fa-recycle\" style=\"color: #D0A343;\"></i> Respectez les règles locales en matière de protection de l'environnement, telles que le recyclage des déchets et la préservation des zones protégées.</li>
                <li><i class=\"fas fa-hand-holding-heart\" style=\"color: #D0A343;\"></i> Sensibilisez-vous aux enjeux environnementaux locaux et soutenez les initiatives de conservation et de développement durable.</li>
            </ul>
            <p style=\"color: #333333;\">En adoptant ces pratiques durables, vous contribuerez à préserver la diversité naturelle et culturelle de notre planète pour les générations futures. Merci pour votre engagement en faveur d'un tourisme responsable!</p>
       
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "res/msg.html.twig";
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
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_front.html.twig' %}

{% block content %}
    <div style=\" padding: 20px;\">
        
        <div style=\"background-color: #94BDB5; padding: 20px; border-radius: 10px;\">
        <h1 style=\"color: #D0A343;\">Bienvenue aux voyageurs responsables!</h1>
            <p style=\"color: #333333;\">Nous sommes heureux de vous accueillir dans notre monde magnifique! En tant que voyageur, vous avez un rôle crucial à jouer dans la préservation de notre environnement et dans la promotion d'un tourisme durable.</p>
            <p style=\"color: #333333;\">Voici quelques conseils pour voyager de manière responsable :</p>
            <ul style=\"color: #333333;\">
                <li><i class=\"fas fa-leaf\" style=\"color: #D0A343;\"></i> Privilégiez les hébergements respectueux de l'environnement, comme les éco-lodges ou les hôtels certifiés écologiques.</li>
                <li><i class=\"fas fa-mountain\" style=\"color: #D0A343;\"></i> Optez pour des activités touristiques qui préservent la nature et la culture locales, comme la randonnée, l'observation des oiseaux ou les visites de sites historiques.</li>
                <li><i class=\"fas fa-bus\" style=\"color: #D0A343;\"></i> Utilisez les transports en commun, le covoiturage ou le vélo chaque fois que possible pour réduire votre empreinte carbone.</li>
                <li><i class=\"fas fa-shopping-bag\" style=\"color: #D0A343;\"></i> Évitez d'acheter des souvenirs fabriqués à partir d'espèces menacées ou de matériaux non durables.</li>
                <li><i class=\"fas fa-recycle\" style=\"color: #D0A343;\"></i> Respectez les règles locales en matière de protection de l'environnement, telles que le recyclage des déchets et la préservation des zones protégées.</li>
                <li><i class=\"fas fa-hand-holding-heart\" style=\"color: #D0A343;\"></i> Sensibilisez-vous aux enjeux environnementaux locaux et soutenez les initiatives de conservation et de développement durable.</li>
            </ul>
            <p style=\"color: #333333;\">En adoptant ces pratiques durables, vous contribuerez à préserver la diversité naturelle et culturelle de notre planète pour les générations futures. Merci pour votre engagement en faveur d'un tourisme responsable!</p>
       
    </div>
{% endblock %}
", "res/msg.html.twig", "/Users/meriemsayari/Desktop/HermesvoyagesPIDEV3A34-main copie 3/templates/res/msg.html.twig");
    }
}
