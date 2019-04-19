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

/* accessories/show.html.twig */
class __TwigTemplate_a1be39418829c24179cc3c56c3e71b81635c1f1c807fa21758fbb57291601805 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "accessories/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accessories/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accessories/show.html.twig"));

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

        echo "Hello AccessoriesController!";
        
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
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-6\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-body\">
                        <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                            <img class=\"img-fluid\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accessory"]) || array_key_exists("accessory", $context) ? $context["accessory"] : (function () { throw new RuntimeError('Variable "accessory" does not exist.', 12, $this->source); })()), "image", []), "html", null, true);
        echo "\" />
                        </a>
                    </div>
                </div>
            </div>
    
            <div class=\"col-12 col-lg-6 add_to_cart_block\">
                    <div class=\"card bg-light mb-3\">
                        <div class=\"card-body\">
                            <h1>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accessory"]) || array_key_exists("accessory", $context) ? $context["accessory"] : (function () { throw new RuntimeError('Variable "accessory" does not exist.', 21, $this->source); })()), "name", []), "html", null, true);
        echo "</h1>
                            <p>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accessory"]) || array_key_exists("accessory", $context) ? $context["accessory"] : (function () { throw new RuntimeError('Variable "accessory" does not exist.', 22, $this->source); })()), "description", []), "html", null, true);
        echo "</p>
                        </div>
                    </div>
                            
                           
                    <div class=\"card bg-light mb-3\">
                        <div class=\"card-body\">
                            <h1>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accessory"]) || array_key_exists("accessory", $context) ? $context["accessory"] : (function () { throw new RuntimeError('Variable "accessory" does not exist.', 29, $this->source); })()), "name", []), "html", null, true);
        echo "</h1>
                            <form method=\"get\" action=\"cart.html\">
                                    <p>Caractéristique principale</p>
                                <div class=\"row\">
                                <h2>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accessory"]) || array_key_exists("accessory", $context) ? $context["accessory"] : (function () { throw new RuntimeError('Variable "accessory" does not exist.', 33, $this->source); })()), "price", []), "html", null, true);
        echo "&euro;</h2>
                                <a href=\"cart.html\" class=\"btn btn-success btn-lg text-uppercase\">
                                    <i class=\"fa fa-shopping-cart\"></i> Ajouter au panier
                                </a>
                            </div>
                            </form>
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
        return "accessories/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  118 => 29,  108 => 22,  104 => 21,  92 => 12,  84 => 6,  75 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AccessoriesController!{% endblock %}

{% block body %}
<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12 col-lg-6\">
                <div class=\"card bg-light mb-3\">
                    <div class=\"card-body\">
                        <a href=\"\" data-toggle=\"modal\" data-target=\"#productModal\">
                            <img class=\"img-fluid\" src=\"{{accessory.image}}\" />
                        </a>
                    </div>
                </div>
            </div>
    
            <div class=\"col-12 col-lg-6 add_to_cart_block\">
                    <div class=\"card bg-light mb-3\">
                        <div class=\"card-body\">
                            <h1>{{accessory.name}}</h1>
                            <p>{{accessory.description}}</p>
                        </div>
                    </div>
                            
                           
                    <div class=\"card bg-light mb-3\">
                        <div class=\"card-body\">
                            <h1>{{accessory.name}}</h1>
                            <form method=\"get\" action=\"cart.html\">
                                    <p>Caractéristique principale</p>
                                <div class=\"row\">
                                <h2>{{accessory.price }}&euro;</h2>
                                <a href=\"cart.html\" class=\"btn btn-success btn-lg text-uppercase\">
                                    <i class=\"fa fa-shopping-cart\"></i> Ajouter au panier
                                </a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "accessories/show.html.twig", "/home/esteban/Becycle/templates/accessories/show.html.twig");
    }
}
