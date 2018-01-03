<?php

/* C:\xampp\htdocs\compro/themes/demo/partials/site/header.htm */
class __TwigTemplate_f25b2096e8fc3359f6719c30c9b86ca3e8093cd67ed2712eb7445546bc48c707 extends Twig_Template
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
        $context["nav"] = $this;
        // line 2
        echo "
";
        // line 23
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-light navbar-expand-lg\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">
              <img src=\"/compro/storage/app/media/company-logo/agit-logo.png\" alt=\"logo\">
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            ";
        // line 32
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 33
            echo "                <ul class=\"navbar-nav ml-auto\">
                    ";
            // line 34
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array()));
            echo "
                </ul>
            ";
        }
        // line 37
        echo "        </div>
    </div>
</nav>";
    }

    // line 3
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["nav"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    // line 8
                    echo "            <li class=\"nav-item dropdown ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
                    // line 10
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))), "html", null, true);
                    echo " <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 13
                    echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array()));
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 17
                    echo "            <li class=\"nav-item ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 21
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\compro/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 21,  111 => 18,  104 => 17,  97 => 13,  91 => 10,  87 => 9,  80 => 8,  77 => 7,  73 => 6,  70 => 5,  67 => 4,  55 => 3,  49 => 37,  43 => 34,  40 => 33,  38 => 32,  30 => 27,  24 => 23,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        {% if item.items %}
            <li class=\"nav-item dropdown {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    {{ item.code ? ('nav.'~item.code)|_ : item.title }} <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    {{ nav.render_menu(item.items) }}
                </ul>
            </li>
        {% else %}
            <li class=\"nav-item {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\" class=\"nav-link\">{{ item.code ? ('nav.'~item.code)|_ : item.title }}</a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}
<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-light navbar-expand-lg\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
              <img src=\"/compro/storage/app/media/company-logo/agit-logo.png\" alt=\"logo\">
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            {% if staticMenu.menuItems %}
                <ul class=\"navbar-nav ml-auto\">
                    {{ nav.render_menu(staticMenu.menuItems) }}
                </ul>
            {% endif %}
        </div>
    </div>
</nav>", "C:\\xampp\\htdocs\\compro/themes/demo/partials/site/header.htm", "");
    }
}
