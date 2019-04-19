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

/* cart/index.html.twig */
class __TwigTemplate_74e257e4c0c32655b9db553871647c0a7e83051b806777188e46351a75c10272 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

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

        echo "Votre panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


    <div class=\"container mb-4\">
        <div class=\"row\">
            <div class=\"col-12\">

                ";
        // line 18
        if (((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 18, $this->source); })()) == null)) {
            // line 19
            echo "                    <h1 class=\"text-center\">Il n'y a pas de produit</h1>


                ";
        } else {
            // line 23
            echo "                <div class=\"table-responsive\">

                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th scope=\"col\"> </th>
                            <th scope=\"col\">Produit</th>
                            <th scope=\"col\">Disponibilité</th>
                            <th scope=\"col\" class=\"text-center\">Quantité</th>
                            <th scope=\"col\" class=\"text-right\">Prix</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>


                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 39, $this->source); })()), "products", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 40
                echo "                            <tr>
                                <td><img src=\"https://dummyimage.com/50x50/55595c/fff\" /> </td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "idProducts", []), "name", []), "html", null, true);
                echo "</td>
                                <td>En stock</td>
                                <td><input class=\"form-control\" type=\"text\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "qty", []), "html", null, true);
                echo "\" /></td>
                                <td class=\"text-right\">";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", []), "html", null, true);
                echo " &euro;</td>
                                <td class=\"text-right\">
                                    <a href=\"";
                // line 47
                echo "\" class=\"btn btn-sm btn-danger\">
                                        <i class=\"fa fa-trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                        <tr>
                            <td colspan=\"5\" class=\"text-right\">Sous-Total</td>
                            <td class=\"text-right\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 55, $this->source); })()), "order", []), "total", []), "html", null, true);
            echo " &euro;</td>
                        </tr>

                        <tr>
                            <td colspan=\"5\" class=\"text-right\">Frais de port</td>
                            <td class=\"text-right\">";
            // line 60
            echo " &euro;</td>
                        </tr>
                        <tr>
                            <td colspan=\"5\" class=\"text-right\"><strong>Total</strong></td>
                            <td class=\"text-right\"><strong>";
            // line 64
            echo " &euro;</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                ";
        }
        // line 71
        echo "            </div>




            <div class=\"col mb-2\">
                <div class=\"row\">
                    <div class=\"col-sm-12  col-md-6\">
                        <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bikes");
        echo "\" class=\"btn btn-block btn-light\" >Continuer vos achats</a>
                        <a href=\"";
        // line 80
        echo "\">Vider le panier</a>
                    </div>

                    <div class=\"col-sm-12 col-md-6 text-right\">
                        ";
        // line 84
        if (((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 84, $this->source); })()) != null)) {
            // line 85
            echo "                            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 86
                echo "                                ";
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", []), "Addresses", []))) {
                    // line 87
                    echo "                                    <a href=\"#\" class=\"btn btn-lg btn-block btn-success text-uppercase\">Ajouter une adresse</a>
                                ";
                } else {
                    // line 89
                    echo "                                    <button class=\"btn btn-lg btn-block btn-success text-uppercase\" onclick=\"checkout('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["session"]) || array_key_exists("session", $context) ? $context["session"] : (function () { throw new RuntimeError('Variable "session" does not exist.', 89, $this->source); })()), "id", []), "html", null, true);
                    echo "')\">Commander</button>
                                ";
                }
                // line 91
                echo "                            ";
            } else {
                // line 92
                echo "                                <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
                echo "\" class=\"btn btn-lg btn-block btn-success text-uppercase\">Se connecter</a>
                            ";
            }
            // line 94
            echo "                        ";
        }
        // line 95
        echo "                    </div>
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
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 95,  229 => 94,  223 => 92,  220 => 91,  214 => 89,  210 => 87,  207 => 86,  204 => 85,  202 => 84,  196 => 80,  192 => 79,  182 => 71,  173 => 64,  167 => 60,  159 => 55,  155 => 53,  144 => 47,  139 => 45,  135 => 44,  130 => 42,  126 => 40,  122 => 39,  104 => 23,  98 => 19,  96 => 18,  84 => 8,  75 => 7,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Votre panier{% endblock %}

{#{% block title %}Cart - {{ sitename }}{% endblock %}#}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>


    <div class=\"container mb-4\">
        <div class=\"row\">
            <div class=\"col-12\">

                {% if cart == null %}
                    <h1 class=\"text-center\">Il n'y a pas de produit</h1>


                {% else %}
                <div class=\"table-responsive\">

                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th scope=\"col\"> </th>
                            <th scope=\"col\">Produit</th>
                            <th scope=\"col\">Disponibilité</th>
                            <th scope=\"col\" class=\"text-center\">Quantité</th>
                            <th scope=\"col\" class=\"text-right\">Prix</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>


                        {% for item in cart.products %}
                            <tr>
                                <td><img src=\"https://dummyimage.com/50x50/55595c/fff\" /> </td>
                                <td>{{ item.idProducts.name }}</td>
                                <td>En stock</td>
                                <td><input class=\"form-control\" type=\"text\" value=\"{{ item.qty }}\" /></td>
                                <td class=\"text-right\">{{ item.total  }} &euro;</td>
                                <td class=\"text-right\">
                                    <a href=\"{#{{ path('cart_remove', {'id': item.product.id}) }}#}\" class=\"btn btn-sm btn-danger\">
                                        <i class=\"fa fa-trash\"></i>
                                    </a>
                                </td>
                            </tr>
                        {% endfor %}
                        <tr>
                            <td colspan=\"5\" class=\"text-right\">Sous-Total</td>
                            <td class=\"text-right\">{{ cart.order.total }} &euro;</td>
                        </tr>

                        <tr>
                            <td colspan=\"5\" class=\"text-right\">Frais de port</td>
                            <td class=\"text-right\">{#{{ cart.shipping }}#} &euro;</td>
                        </tr>
                        <tr>
                            <td colspan=\"5\" class=\"text-right\"><strong>Total</strong></td>
                            <td class=\"text-right\"><strong>{#{{ cart.total }}#} &euro;</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                {% endif %}
            </div>




            <div class=\"col mb-2\">
                <div class=\"row\">
                    <div class=\"col-sm-12  col-md-6\">
                        <a href=\"{{ path('bikes') }}\" class=\"btn btn-block btn-light\" >Continuer vos achats</a>
                        <a href=\"{#{{ path('cart_clear') }}#}\">Vider le panier</a>
                    </div>

                    <div class=\"col-sm-12 col-md-6 text-right\">
                        {% if cart != null %}
                            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                {% if app.user.Addresses is empty %}
                                    <a href=\"#\" class=\"btn btn-lg btn-block btn-success text-uppercase\">Ajouter une adresse</a>
                                {% else %}
                                    <button class=\"btn btn-lg btn-block btn-success text-uppercase\" onclick=\"checkout('{{ session.id }}')\">Commander</button>
                                {% endif %}
                            {% else %}
                                <a href=\"{{ path('login') }}\" class=\"btn btn-lg btn-block btn-success text-uppercase\">Se connecter</a>
                            {% endif %}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "cart/index.html.twig", "/home/esteban/Becycle/templates/cart/index.html.twig");
    }
}
