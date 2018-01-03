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
        // line 78
        echo "


<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-light navbar-expand-lg\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 85
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">
              <img src=\"/compro/storage/app/media/company-logo/agit-logo.png\" alt=\"logo\">
            </a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            ";
        // line 90
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array())) {
            // line 91
            echo "                <ul class=\"navbar-nav ml-auto\">
                    ";
            // line 92
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->getSourceContext(), ($context["staticMenu"] ?? null), "menuItems", array()));
            echo "
                </ul>
            ";
        }
        // line 95
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
                echo "        <!-- ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    // line 8
                    echo "
            ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        echo " 

                ";
                        // line 11
                        if (twig_get_attribute($this->env, $this->getSourceContext(), $context["subitem"], "item", array())) {
                            // line 12
                            echo "                    <li>
                        <a href=\"";
                            // line 13
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subitem"], "url", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subitem"], "title", array()), "html", null, true);
                            echo "</a>
                    </li>
                ";
                        } else {
                            // line 16
                            echo "
                    <li class=\"nav-item dropdown ";
                            // line 17
                            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                            echo " ";
                            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                            echo "\">
                        <a href=\"";
                            // line 18
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                            echo "\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\">
                            ";
                            // line 19
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))), "html", null, true);
                            echo "
                        </a>

                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"";
                            // line 24
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()), "html", null, true);
                            echo "</a>
                            </li>
                        </ul>                
                    </li>
                ";
                        }
                        // line 29
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "
        ";
                } else {
                    // line 33
                    echo "            <li class=\"nav-item ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 36
                echo "  -->       
        
        <!-- level 1 -->
        ";
                // line 39
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                    // line 40
                    echo "        <li class=\"nav-item dropdown ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
            <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\">
                ";
                    // line 42
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))), "html", null, true);
                    echo "
            </a>

            <ul class=\"dropdown-menu\">
                <!-- Checking for Level 2 -->
                ";
                    // line 47
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array())) {
                        // line 48
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "items", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 49
                            echo "                        <li class=\"dropdown-level-2\"> <!-- level 2 -->
                            <a href=\"";
                            // line 50
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subitem"], "url", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subitem"], "title", array()), "html", null, true);
                            echo "</a> 

                            <!-- Checking for Level 3 -->
                            ";
                            // line 53
                            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["subitem"], "items", array())) {
                                // line 54
                                echo "                                <ul>
                                    ";
                                // line 55
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), $context["subitem"], "items", array()));
                                foreach ($context['_seq'] as $context["_key"] => $context["subitem2"]) {
                                    // line 56
                                    echo "                                        <li class=\"dropdown-level-3\"> <!-- level 3 -->
                                            <a href=\"";
                                    // line 57
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subitem2"], "url", array()), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["subitem2"], "title", array()), "html", null, true);
                                    echo "</a> 
                                        </li>                                
                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem2'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 60
                                echo "                                </ul>                            
                            ";
                            }
                            // line 62
                            echo "                        </li>

                        
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 66
                        echo "                ";
                    }
                    // line 67
                    echo "                
            </ul>                
        </li>
        ";
                } else {
                    // line 71
                    echo "            <li class=\"nav-item ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"nav-link\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "title", array()))), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 74
                echo "  
        
    ";
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
        return array (  267 => 74,  259 => 72,  252 => 71,  246 => 67,  243 => 66,  234 => 62,  230 => 60,  219 => 57,  216 => 56,  212 => 55,  209 => 54,  207 => 53,  199 => 50,  196 => 49,  191 => 48,  189 => 47,  181 => 42,  177 => 41,  170 => 40,  168 => 39,  163 => 36,  155 => 34,  148 => 33,  144 => 31,  137 => 29,  127 => 24,  119 => 19,  115 => 18,  109 => 17,  106 => 16,  98 => 13,  95 => 12,  93 => 11,  86 => 9,  83 => 8,  80 => 7,  76 => 6,  73 => 5,  70 => 4,  58 => 3,  52 => 95,  46 => 92,  43 => 91,  41 => 90,  33 => 85,  24 => 78,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        <!-- {% if item.items %}

            {% for subitem in item.items %} 

                {% if subitem.item %}
                    <li>
                        <a href=\"{{ subitem.url }}\">{{ subitem.title }}</a>
                    </li>
                {% else %}

                    <li class=\"nav-item dropdown {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                        <a href=\"{{ item.url }}\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\">
                            {{ item.code ? ('nav.'~item.code)|_ : item.title }}
                        </a>

                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"{{ item.url }}\">{{ item.title }}</a>
                            </li>
                        </ul>                
                    </li>
                {% endif %}

            {% endfor %}

        {% else %}
            <li class=\"nav-item {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\" class=\"nav-link\">{{ item.code ? ('nav.'~item.code)|_ : item.title }}</a>
            </li>
        {% endif %}  -->       
        
        <!-- level 1 -->
        {% if item.items %}
        <li class=\"nav-item dropdown {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
            <a href=\"{{ item.url }}\" class=\"nav-link dropdown-toggle\" role=\"button\" data-toggle=\"dropdown\">
                {{ item.code ? ('nav.'~item.code)|_ : item.title }}
            </a>

            <ul class=\"dropdown-menu\">
                <!-- Checking for Level 2 -->
                {% if item.items %}
                    {% for subitem in item.items %}
                        <li class=\"dropdown-level-2\"> <!-- level 2 -->
                            <a href=\"{{ subitem.url }}\">{{ subitem.title }}</a> 

                            <!-- Checking for Level 3 -->
                            {% if subitem.items %}
                                <ul>
                                    {% for subitem2 in subitem.items %}
                                        <li class=\"dropdown-level-3\"> <!-- level 3 -->
                                            <a href=\"{{ subitem2.url }}\">{{ subitem2.title }}</a> 
                                        </li>                                
                                    {% endfor %}
                                </ul>                            
                            {% endif %}
                        </li>

                        
                    {% endfor %}
                {% endif %}
                
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
