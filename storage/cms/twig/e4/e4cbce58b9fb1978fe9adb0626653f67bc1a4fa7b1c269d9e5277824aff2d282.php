<?php

/* C:\xampp\htdocs\compro/themes/demo/pages/ict-platform-post.htm */
class __TwigTemplate_9cbd1147308a55a42fcd70a9fd97f738ba43f0c747e612d61be4bf37fa752cf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("breadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        $context["record"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "record", array());
        // line 4
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 5
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 6
        echo "
<div class=\"container\">
    ";
        // line 8
        if (($context["record"] ?? null)) {
            // line 9
            echo "    <h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "title", array()), "html", null, true);
            echo "</h3>
    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "iconslider", array()), "path", array()), "html", null, true);
            echo "\" alt=\"\"> 
    <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "post_date", array()), "html", null, true);
            echo "</p>
    <p>";
            // line 12
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "desc", array());
            echo "</p>
    <p>Category : ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), "category", array()), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 14
            echo " ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo " ";
        }
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\compro/themes/demo/pages/ict-platform-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  61 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  39 => 9,  37 => 8,  33 => 6,  31 => 5,  29 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/title' %}
{% component 'breadcrumbs' %}
{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

<div class=\"container\">
    {% if record %}
    <h3>{{ record.title }}</h3>
    <img src=\"{{ record.iconslider.path }}\" alt=\"\"> 
    <p>{{ record.post_date }}</p>
    <p>{{ record.desc | raw }}</p>
    <p>Category : {{ record.category }}</p>
    {% else %} {{ notFoundMessage }} {% endif %}
</div>", "C:\\xampp\\htdocs\\compro/themes/demo/pages/ict-platform-post.htm", "");
    }
}
