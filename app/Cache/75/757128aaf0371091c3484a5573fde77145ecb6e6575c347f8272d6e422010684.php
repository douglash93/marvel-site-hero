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

/* home.twig */
class __TwigTemplate_7ae9d676aa0324e0850ba81fe61159acbdd6dc70d477fe84605044d341144f0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_template.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base_template.twig", "home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    
    <div class=\"container mt-3\">
        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center flex-row\">
                
                ";
        // line 8
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["heros"] ?? null)), 0))) {
            // line 9
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["heros"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
                // line 10
                echo "                        <div class=\"card\" style=\"width: 17rem;\">
                            <img class=\"card-img-top\" src=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["hero"], "thumbnail", [], "any", false, false, false, 11);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["hero"], "name", [], "any", false, false, false, 11);
                echo "\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["hero"], "name", [], "any", false, false, false, 13);
                echo "</h5>
                                <p class=\"card-text\">";
                // line 14
                echo ((((null === twig_get_attribute($this->env, $this->source, $context["hero"], "description", [], "any", false, false, false, 14)) || twig_test_empty(twig_get_attribute($this->env, $this->source, $context["hero"], "description", [], "any", false, false, false, 14)))) ? ("No description.") : (twig_get_attribute($this->env, $this->source, $context["hero"], "description", [], "any", false, false, false, 14)));
                echo "</p>
                                <a href=\"/stories?heroId=";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 15);
                echo "\" class=\"card-link\">View Stories</a>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hero'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
        }
        // line 20
        echo "
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  92 => 19,  82 => 15,  78 => 14,  74 => 13,  67 => 11,  64 => 10,  59 => 9,  57 => 8,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_template.twig' %}
{% block main %}
    
    <div class=\"container mt-3\">
        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center flex-row\">
                
                {% if heros|length > 0 %}
                    {% for hero in heros %}
                        <div class=\"card\" style=\"width: 17rem;\">
                            <img class=\"card-img-top\" src=\"{{hero.thumbnail}}\" alt=\"{{hero.name}}\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{hero.name}}</h5>
                                <p class=\"card-text\">{{ (hero.description is null or hero.description is empty) ? 'No description.' : hero.description }}</p>
                                <a href=\"/stories?heroId={{hero.id}}\" class=\"card-link\">View Stories</a>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}

            </div>
        </div>
    </div>

{% endblock %}", "home.twig", "C:\\projetos\\desafios\\marvel-hero\\app\\Views\\home.twig");
    }
}
