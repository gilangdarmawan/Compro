<?php

/* C:\xampp\htdocs\agit-testing/themes/demo/partials/site/header.htm */
class __TwigTemplate_8102933ad41ae43e4fc4c66912bfe2026735c99adb6fff778bf0b608bde35bb9 extends Twig_Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-light navbar-expand-lg\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">
              <img src=\"/agit-project/themes/rainlab-bonjour/assets/images/agit-logo.png\" alt=\"logo\">
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 11
            echo "            <ul class=\"navbar-nav ml-auto\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                echo "                <li class=\"nav-item\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                echo "\" class=\"nav-link\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            </ul>
            ";
        }
        // line 17
        echo "        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit-testing/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  53 => 15,  42 => 13,  38 => 12,  35 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-light navbar-expand-lg\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
              <img src=\"/agit-project/themes/rainlab-bonjour/assets/images/agit-logo.png\" alt=\"logo\">
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            {% if staticMenu.menuItems %}
            <ul class=\"navbar-nav ml-auto\">
                {% for item in staticMenu.menuItems %}
                <li class=\"nav-item\"><a href=\"{{ item.url }}\" class=\"nav-link\">{{ item.title }}</a></li>
                {% endfor %}
            </ul>
            {% endif %}
        </div>
    </div>
</nav>", "C:\\xampp\\htdocs\\agit-testing/themes/demo/partials/site/header.htm", "");
    }
}
