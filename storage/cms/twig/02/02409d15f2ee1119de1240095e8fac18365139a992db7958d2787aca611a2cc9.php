<?php

/* C:\xampp\htdocs\compro/plugins/rainlab/builder/components/recorddetails/default.htm */
class __TwigTemplate_52757f12f14fc5d72c5c69a5e05628afdbc09112cdf0df90dd0e0d43e77274c8 extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "record", array());
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "displayColumn", array());
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "notFoundMessage", array());
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["record"] ?? null), ($context["displayColumn"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\compro/plugins/rainlab/builder/components/recorddetails/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = __SELF__.record %}
{% set displayColumn = __SELF__.displayColumn %}
{% set notFoundMessage = __SELF__.notFoundMessage %}

{% if record %}
    {{ attribute(record, displayColumn) }}
{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\compro/plugins/rainlab/builder/components/recorddetails/default.htm", "");
    }
}
