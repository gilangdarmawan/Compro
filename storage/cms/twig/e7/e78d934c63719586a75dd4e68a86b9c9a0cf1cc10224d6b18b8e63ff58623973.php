<?php

/* C:\xampp\htdocs\compro/plugins/mey/breadcrumbs/components/breadcrumbs/default.htm */
class __TwigTemplate_34a0e8e79d5d543564be29c59eaab573600ded2f9cef8b5b3da242d5ba6652a2 extends Twig_Template
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
        $context["crumbOptions"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "options", array());
        // line 2
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["currentCrumb"] ?? null), "show_crumb", array())) {
            // line 3
            echo "<ol class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["crumbOptions"] ?? null), "main-ol-class", array(), "array"), "html", null, true);
            echo "\">
";
            // line 4
            $context["activeCrumb"] = "";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 6
                echo "    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "in_crumb_trail", array())) {
                    // line 7
                    echo "    <li class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["crumbOptions"] ?? null), "main-li-class", array(), "array"), "html", null, true);
                    echo " ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "crumb_disabled", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["crumbOptions"] ?? null), "disabled-class", array(), "array"), "html", null, true);
                        echo " ";
                    }
                    echo " ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["crumbOptions"] ?? null), "active-class", array(), "array"), "html", null, true);
                        echo " ";
                    }
                    echo "\" ";
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                        echo " id=\"bcLast\" ";
                    }
                    echo ">
        ";
                    // line 8
                    if (( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "crumb_disabled", array()))) {
                        echo " <a href=\"";
                        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "baseFileName", array()));
                        echo "\"> ";
                    }
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "title", array()), "html", null, true);
                    echo " ";
                    if (( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array()) &&  !twig_get_attribute($this->env, $this->getSourceContext(), $context["crumb"], "is_disabled", array()))) {
                        echo "</a>";
                    }
                    // line 9
                    echo "    </li>
    ";
                }
                // line 11
                echo "
    ";
                // line 12
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    // line 13
                    echo "        ";
                    $context["activeCrumb"] = $context["crumb"];
                    // line 14
                    echo "    ";
                }
                // line 15
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "</ol>
";
        }
        // line 19
        echo "
";
        // line 21
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["activeCrumb"] ?? null), "elementTitle", array())) {
            // line 22
            echo "<script>
    document.addEventListener('DOMContentLoaded', function (){
        var bcTitle = document.getElementById('";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["activeCrumb"] ?? null), "elementTitle", array()), "html", null, true);
            echo "');
        var bcActive = document.getElementById('bcLast');

        if (bcTitle) {
            bcActive.innerHTML = bcTitle.innerHTML;
        }
    });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\compro/plugins/mey/breadcrumbs/components/breadcrumbs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 24,  122 => 22,  120 => 21,  117 => 19,  113 => 17,  98 => 15,  95 => 14,  92 => 13,  90 => 12,  87 => 11,  83 => 9,  71 => 8,  50 => 7,  47 => 6,  30 => 5,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set crumbOptions = __SELF__.options %}
{% if currentCrumb.show_crumb %}
<ol class=\"{{crumbOptions['main-ol-class']}}\">
{% set activeCrumb = '' %}
{% for crumb in breadcrumbs %}
    {% if crumb.in_crumb_trail %}
    <li class=\"{{crumbOptions['main-li-class']}} {% if crumb.crumb_disabled %} {{crumbOptions['disabled-class']}} {% endif %} {% if loop.last %} {{crumbOptions['active-class']}} {% endif %}\" {% if loop.last %} id=\"bcLast\" {% endif %}>
        {% if not loop.last and not crumb.crumb_disabled %} <a href=\"{{crumb.baseFileName | page}}\"> {% endif %} {{crumb.title}} {% if not loop.last and not crumb.is_disabled %}</a>{% endif %}
    </li>
    {% endif %}

    {% if loop.last %}
        {% set activeCrumb = crumb %}
    {% endif %}

{% endfor %}
</ol>
{% endif %}

{# javascript to enable dynamic breadcrumbs. Helpful for ':slug' type routes #}
{% if activeCrumb.elementTitle %}
<script>
    document.addEventListener('DOMContentLoaded', function (){
        var bcTitle = document.getElementById('{{activeCrumb.elementTitle}}');
        var bcActive = document.getElementById('bcLast');

        if (bcTitle) {
            bcActive.innerHTML = bcTitle.innerHTML;
        }
    });
</script>
{% endif %}
", "C:\\xampp\\htdocs\\compro/plugins/mey/breadcrumbs/components/breadcrumbs/default.htm", "");
    }
}
