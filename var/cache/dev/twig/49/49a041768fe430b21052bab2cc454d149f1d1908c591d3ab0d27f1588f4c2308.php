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

/* bikes/bikes.html.twig */
class __TwigTemplate_c7c61aed47e566d29e71977fcd9a018c67061173345faaf27fc850efd0284a83 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bikes/bikes.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bikes/bikes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bikes/bikes.html.twig"));

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

        echo "Nos vélos";
        
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
<div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12 col-md-4 col-lg-3\">
                <div id=\"categories\" class=\"card bg-light mb-3\">
                    <div class=\"card-header bg-dark text-white text-uppercase\"><i class=\"fa fa-list\"></i>  
                    <a class=\"bouton-categories\" data-toggle=\"collapse\" href=\"#collapseCategories\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseCategories\">
                    &ensp;Catégories</a> 
                    </div>
                    <div class=\"collapse show\" id=\"collapseCategories\">
                    <ul class=\"list-group category_block\">

                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) || array_key_exists("categorys", $context) ? $context["categorys"] : (function () { throw new RuntimeError('Variable "categorys" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "                        <li class=\"list-group-item licat\"><a class=\"category-link\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bikes", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [])]), "html", null, true);
            echo "\"><img class=\"bike-logo\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/image/logos/" . twig_get_attribute($this->env, $this->source, $context["category"], "logo", []))), "html", null, true);
            echo "\" alt=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", []), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </ul>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"row\">

                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bike"]) {
            // line 29
            echo "
                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"card\">
                                <img class=\"card-img-top\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/image/velos/hommes/" . twig_get_attribute($this->env, $this->source, $context["bike"], "image", []))), "html", null, true);
            echo "\" alt=\"Photo du vélo\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bike"], "name", []), "html", null, true);
            echo "\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\"><a class=\"card-link\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bike", ["id" => twig_get_attribute($this->env, $this->source, $context["bike"], "id", [])]), "html", null, true);
            echo "\" title=\"Voir le vélo\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bike"], "name", []), "html", null, true);
            echo "</a></h4>
                                    <p class=\"card-text\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bike"], "description", []), "html", null, true);
            echo "</p>
                                    
                                    <div class=\"row\">
                                            <h2 title=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bike"], "price", []), "html", null, true);
            echo "\" class=\"price\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bike"], "price", []), "html", null, true);
            echo " &euro;</h2>
                                        <div class=\"col\">
                                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bike", ["id" => twig_get_attribute($this->env, $this->source, $context["bike"], "id", [])]), "html", null, true);
            echo "\" title=\"En savoir plus sur ce vélo\" class=\"btn btn-dark \"><i class=\"fas fa-info-circle\"></i>&nbspPlus d'infos</a>
                                        </div>                               
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bike'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
                   
   <div class=\"col-12\">
        <nav class=\"example\" aria-label=\"...\">
            <ul class=\"pagination pagination-lg justify-content-center\">
                    ";
        // line 53
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 53, $this->source); })()));
        echo "
            </ul>
        </nav>
   </div>
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
        return "bikes/bikes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 53,  173 => 48,  159 => 40,  152 => 38,  146 => 35,  140 => 34,  133 => 32,  128 => 29,  124 => 28,  115 => 21,  102 => 19,  98 => 18,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos vélos{% endblock %}

{% block body %}

<div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12 col-md-4 col-lg-3\">
                <div id=\"categories\" class=\"card bg-light mb-3\">
                    <div class=\"card-header bg-dark text-white text-uppercase\"><i class=\"fa fa-list\"></i>  
                    <a class=\"bouton-categories\" data-toggle=\"collapse\" href=\"#collapseCategories\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseCategories\">
                    &ensp;Catégories</a> 
                    </div>
                    <div class=\"collapse show\" id=\"collapseCategories\">
                    <ul class=\"list-group category_block\">

                        {% for category in categorys %}
                        <li class=\"list-group-item licat\"><a class=\"category-link\" href=\"{{path('bikes', {'id': category.id })}}\"><img class=\"bike-logo\" src=\"{{asset('assets/image/logos/'~category.logo)}}\" alt=\"\">{{category.name}}</a></li>
                        {% endfor %}
                    </ul>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"row\">

                        {% for bike in pagination %}

                        <div class=\"col-12 col-md-6 col-lg-4\">
                            <div class=\"card\">
                                <img class=\"card-img-top\" src=\"{{asset('assets/image/velos/hommes/'~bike.image)}}\" alt=\"Photo du vélo\" title=\"{{bike.name}}\">
                                <div class=\"card-body\">
                                    <h4 class=\"card-title\"><a class=\"card-link\" href=\"{{path('bike', {'id': bike.id })}}\" title=\"Voir le vélo\">{{ bike.name }}</a></h4>
                                    <p class=\"card-text\">{{bike.description}}</p>
                                    
                                    <div class=\"row\">
                                            <h2 title=\"{{bike.price}}\" class=\"price\">{{bike.price}} &euro;</h2>
                                        <div class=\"col\">
                                            <a href=\"{{path('bike', {'id': bike.id })}}\" title=\"En savoir plus sur ce vélo\" class=\"btn btn-dark \"><i class=\"fas fa-info-circle\"></i>&nbspPlus d'infos</a>
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
</div>
{% endblock %}
", "bikes/bikes.html.twig", "/home/esteban/Becycle/templates/bikes/bikes.html.twig");
    }
}
