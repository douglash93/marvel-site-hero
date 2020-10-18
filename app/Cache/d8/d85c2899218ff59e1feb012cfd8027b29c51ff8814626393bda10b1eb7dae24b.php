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

/* storie.twig */
class __TwigTemplate_616130f06472b4291f58c8c3ff8534999f58dab5a0ce11a06bbcc87ebbbc0203 extends Template
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
        $this->parent = $this->loadTemplate("base_template.twig", "storie.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    
    <div class=\"container-fluid mt-3\">

        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"/\">Home</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Stories</li>
            </ol>
        </nav>

        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center flex-row\">
                
                ";
        // line 16
        if ((1 === twig_compare(twig_length_filter($this->env, ($context["stories"] ?? null)), 0))) {
            // line 17
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["storie"]) {
                // line 18
                echo "                        <div class=\"card\" style=\"width: 17rem;\">
                            <img class=\"card-img-top\" src=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["storie"], "thumbnail", [], "any", false, false, false, 19);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["storie"], "title", [], "any", false, false, false, 19);
                echo "\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["storie"], "title", [], "any", false, false, false, 21);
                echo "</h5>
                                ";
                // line 23
                echo "                                ";
                // line 24
                echo "                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['storie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                ";
        }
        // line 28
        echo "
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "storie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  96 => 27,  88 => 24,  86 => 23,  82 => 21,  75 => 19,  72 => 18,  67 => 17,  65 => 16,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_template.twig' %}
{% block main %}
    
    <div class=\"container-fluid mt-3\">

        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"/\">Home</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Stories</li>
            </ol>
        </nav>

        <div class=\"row\">
            <div class=\"col-md-12 d-flex justify-content-center flex-row\">
                
                {% if stories|length > 0 %}
                    {% for storie in stories %}
                        <div class=\"card\" style=\"width: 17rem;\">
                            <img class=\"card-img-top\" src=\"{{storie.thumbnail}}\" alt=\"{{storie.title}}\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{storie.title}}</h5>
                                {# <h6 class=\"card-subtitle mb-2 text-muted\">Card subtitle</h6> #}
                                {# <p class=\"card-text\">{{storie.description}}</p> #}
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}

            </div>
        </div>
    </div>

{% endblock %}", "storie.twig", "C:\\projetos\\desafios\\marvel-hero\\app\\Views\\storie.twig");
    }
}
