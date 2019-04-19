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

/* bikes/show.html.twig */
class __TwigTemplate_404324c041c5f44d83101eb102ce9fc2e058d756655bd45dfb12c436c3b5e88a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "bikes/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bikes/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bikes/show.html.twig"));

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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 3, $this->source); })()), "name", []), "html", null, true);
        
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
    <div class=\"row\">
        <div class=\"col-12 col-lg-6\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-body\">
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                        <img class=\"img-fluid\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/image/velos/hommes/" . twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 13, $this->source); })()), "image", []))), "html", null, true);
        echo "\" />
                    </a>
                </div>
            </div>
            <div id=\"show-zoom\" class=\"row justify-content-between\">
            <div class=\"img-fluid img-thumbnail col-4\">
                <div>
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                        <img class=\"img-fluid\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 21, $this->source); })()), "image", []), "html", null, true);
        echo "\" />
                    </a>
                </div>
            </div>

            <div class=\"img-fluid img-thumbnail col-4\">
                <div>
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                        <img class=\"img-fluid\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 29, $this->source); })()), "image", []), "html", null, true);
        echo "\" />
                    </a>
                </div>
            </div>

            <div class=\"img-fluid img-thumbnail col-4\">
                <div>
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                        <img class=\"img-fluid\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 37, $this->source); })()), "image", []), "html", null, true);
        echo "\" />
                    </a>
                </div>
            </div>
            
            </div>
            
        </div>

        <div class=\"col-12 col-lg-6 add_to_cart_block\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-body\">
                        <h1 class=\"text-center\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 49, $this->source); })()), "name", []), "html", null, true);
        echo "</h1>
                        <p class=\"description\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 50, $this->source); })()), "description", []), "html", null, true);
        echo "</p>
                    </div>
                </div>
                        
                       
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-body\">
                        <h1 class=\"text-center\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 57, $this->source); })()), "name", []), "html", null, true);
        echo "</h1>
                                <p class=\"description\">Caractéristique principale</p>
                            <div class=\"row\">
                            <h2 class=\"bike-price ml-5\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 60, $this->source); })()), "price", []), "html", null, true);
        echo "&euro;</h2>
                            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addProduct", ["product" => twig_get_attribute($this->env, $this->source, (isset($context["bike"]) || array_key_exists("bike", $context) ? $context["bike"] : (function () { throw new RuntimeError('Variable "bike" does not exist.', 61, $this->source); })()), "id", [])]), "html", null, true);
        echo "\" class=\"ml-5 btn btn-dark btn-lg btn-panier text-uppercase\">
                                <i class=\"fa fa-shopping-cart\"></i> Ajouter au panier
                            </a>
                        </div>
                    </div>
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
        return "bikes/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 61,  161 => 60,  155 => 57,  145 => 50,  141 => 49,  126 => 37,  115 => 29,  104 => 21,  93 => 13,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{bike.name}}{% endblock %}

{% block body %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-lg-6\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-body\">
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                        <img class=\"img-fluid\" src=\"{{asset('assets/image/velos/hommes/'~bike.image)}}\" />
                    </a>
                </div>
            </div>
            <div id=\"show-zoom\" class=\"row justify-content-between\">
            <div class=\"img-fluid img-thumbnail col-4\">
                <div>
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                        <img class=\"img-fluid\" src=\"{{bike.image}}\" />
                    </a>
                </div>
            </div>

            <div class=\"img-fluid img-thumbnail col-4\">
                <div>
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                        <img class=\"img-fluid\" src=\"{{bike.image}}\" />
                    </a>
                </div>
            </div>

            <div class=\"img-fluid img-thumbnail col-4\">
                <div>
                    <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                        <img class=\"img-fluid\" src=\"{{bike.image}}\" />
                    </a>
                </div>
            </div>
            
            </div>
            
        </div>

        <div class=\"col-12 col-lg-6 add_to_cart_block\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-body\">
                        <h1 class=\"text-center\">{{bike.name}}</h1>
                        <p class=\"description\">{{bike.description}}</p>
                    </div>
                </div>
                        
                       
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-body\">
                        <h1 class=\"text-center\">{{bike.name}}</h1>
                                <p class=\"description\">Caractéristique principale</p>
                            <div class=\"row\">
                            <h2 class=\"bike-price ml-5\">{{bike.price }}&euro;</h2>
                            <a href=\"{{ path('addProduct', {'product':bike.id}) }}\" class=\"ml-5 btn btn-dark btn-lg btn-panier text-uppercase\">
                                <i class=\"fa fa-shopping-cart\"></i> Ajouter au panier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "bikes/show.html.twig", "/home/esteban/Becycle/templates/bikes/show.html.twig");
    }
}
