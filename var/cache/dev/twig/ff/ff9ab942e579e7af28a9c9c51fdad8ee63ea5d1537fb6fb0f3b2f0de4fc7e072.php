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

/* accessories/accessories.html.twig */
class __TwigTemplate_c62633b4e4c3b8de85bac6761dc5100ab590e79d03b0603403abf76b8977ee7f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accessories/accessories.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accessories/accessories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accessories/accessories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nos accessoires";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<div class=\"container\">
    
        <div class=\"col\">
                
            <div class=\"row\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["accessorie"]) {
            // line 15
            echo "                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"card\">
                        <img class=\"card-img-top\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accessorie"], "image", []), "html", null, true);
            echo "\" alt=\"Photo de l'accessoire\">
                        <div class=\"card-body\">
                            <h4 class=\"card-link\"><a class=\"card-link\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accessory", ["id" => twig_get_attribute($this->env, $this->source, $context["accessorie"], "id", [])]), "html", null, true);
            echo "\" title=\"Voir l'accessoire\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accessorie"], "name", []), "html", null, true);
            echo "</a></h4>
                            <p class=\"card-text\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accessorie"], "description", []), "html", null, true);
            echo "</p>
                            
                            <div class=\"row\">
                                    <h2 title=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accessorie"], "price", []), "html", null, true);
            echo "\" class=\"price\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accessorie"], "price", []), "html", null, true);
            echo " &euro;</h2>
                                <div class=\"col\">
                                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accessory", ["id" => twig_get_attribute($this->env, $this->source, $context["accessorie"], "id", [])]), "html", null, true);
            echo "\" title=\"En savoir plus sur ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["accessorie"], "name", []), "html", null, true);
            echo "\" class=\"btn btn-dark \">Plus d'infos</a>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accessorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    <div class=\"col-12\">
                        <nav class=\"example\" aria-label=\"...\">
                            <ul class=\"pagination pagination-lg justify-content-center\">
                                    ";
        // line 35
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 35, $this->source); })()));
        echo "
                            </ul>
                        </nav>
                   </div>
            </div>
        </div>
        
</div>            




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accessories/accessories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 35,  141 => 32,  126 => 25,  119 => 23,  113 => 20,  107 => 19,  102 => 17,  98 => 15,  94 => 14,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos accessoires{% endblock %}

{% block body %}



<div class=\"container\">
    
        <div class=\"col\">
                
            <div class=\"row\">
                    {% for accessorie in pagination %}
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"card\">
                        <img class=\"card-img-top\" src=\"{{accessorie.image}}\" alt=\"Photo de l'accessoire\">
                        <div class=\"card-body\">
                            <h4 class=\"card-link\"><a class=\"card-link\" href=\"{{path('accessory', {'id': accessorie.id })}}\" title=\"Voir l'accessoire\">{{ accessorie.name }}</a></h4>
                            <p class=\"card-text\">{{accessorie.description}}</p>
                            
                            <div class=\"row\">
                                    <h2 title=\"{{accessorie.price}}\" class=\"price\">{{accessorie.price}} &euro;</h2>
                                <div class=\"col\">
                                    <a href=\"{{path('accessory', {'id': accessorie.id })}}\" title=\"En savoir plus sur {{accessorie.name}}\" class=\"btn btn-dark \">Plus d'infos</a>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
                    {% endfor %}
                    <div class=\"col-12\">
                        <nav class=\"example\" aria-label=\"...\">
                            <ul class=\"pagination pagination-lg justify-content-center\">
                                    {{ knp_pagination_render(pagination) }}
                            </ul>
                        </nav>
                   </div>
            </div>
        </div>
        
</div>            




{% endblock %}
", "accessories/accessories.html.twig", "/home/esteban/Becycle/templates/accessories/accessories.html.twig");
    }
}
