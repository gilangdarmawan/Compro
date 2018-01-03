<?php

/* C:\xampp\htdocs\compro/themes/demo/pages/ict-platform.htm */
class __TwigTemplate_b3483ff6a9ef8a8e0c15abaa144ec901ee71f925aa6523053c2e54f51e6b4814 extends Twig_Template
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
        $context["records"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "records", array());
        // line 3
        $context["displayColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "displayColumn", array());
        // line 4
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "noRecordsMessage", array());
        // line 5
        $context["detailsPage"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsPage", array());
        // line 6
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsKeyColumn", array());
        // line 7
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["builderList"] ?? null), "detailsUrlParameter", array());
        // line 8
        echo "
<div class=\"container\">
    <div class=\"row my-5 justify-content-center\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 12
            echo "        ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "category", array()) == "ICT")) {
                // line 13
                echo "        <div class=\"col-md-3 col-12 py-3\">
            <div class=\"agit-csp-card\">
                <div class=\"cardbox\">
                    <div class=\"original\">
                        <div class=\"text\">
                            <img src=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "iconslider", array()), "path", array()), "html", null, true);
                echo "\">
                            <div>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "title", array()), "html", null, true);
                echo "</div>
                        </div>
                    </div>
                    <div class=\"on-hover\">
                        ";
                // line 23
                ob_start();
                // line 24
                echo "                        ";
                if (($context["detailsPage"] ?? null)) {
                    // line 25
                    echo "                        <a href=\"";
                    echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], ($context["detailsKeyColumn"] ?? null))));
                    echo "\">
                            <b>";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "title", array()), "html", null, true);
                    echo "</b> ";
                    echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "desc", array()), 150));
                    echo "
                        </a>
                        ";
                }
                // line 29
                echo "                        ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 30
                echo "                    </div>
                </div>
            </div>
        </div>
        ";
            }
            // line 35
            echo "        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "        <h4>";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</h4> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>

    <!-- <ul class=\"record-list\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 41
            echo "            <li>
                ";
            // line 42
            echo " ";
            ob_start();
            echo " ";
            if (($context["detailsPage"] ?? null)) {
                // line 43
                echo "                <a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(($context["detailsPage"] ?? null), array(($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], ($context["detailsKeyColumn"] ?? null))));
                echo "\">
                    ";
            }
            // line 45
            echo "
                    ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "title", array()), "html", null, true);
            echo "

                    ";
            // line 48
            if (($context["detailsPage"] ?? null)) {
                // line 49
                echo "                </a> ";
            }
            echo " ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 50
            echo "                <p>";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "desc", array());
            echo "</p>
                <p>Category : ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["record"], "category", array()), "html", null, true);
            echo "</p>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "            <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
    ";
        // line 57
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > 1)) {
            // line 58
            echo "    <ul class=\"pagination\">
        ";
            // line 59
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) > 1)) {
                // line 60
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 61
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 62
                echo "        <li class=\"";
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
            <a href=\"";
                // line 63
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo " ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "lastPage", array()) > twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()))) {
                // line 66
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "baseFileName", array()), array(($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->getSourceContext(), ($context["records"] ?? null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 68
            echo "    </ul>
    ";
        }
        // line 69
        echo " -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\compro/themes/demo/pages/ict-platform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 69,  214 => 68,  208 => 66,  205 => 65,  194 => 63,  189 => 62,  184 => 61,  178 => 60,  176 => 59,  173 => 58,  171 => 57,  168 => 56,  159 => 54,  151 => 51,  146 => 50,  141 => 49,  139 => 48,  134 => 46,  131 => 45,  125 => 43,  120 => 42,  117 => 41,  112 => 40,  107 => 37,  99 => 36,  94 => 35,  87 => 30,  84 => 29,  76 => 26,  71 => 25,  68 => 24,  66 => 23,  59 => 19,  55 => 18,  48 => 13,  45 => 12,  40 => 11,  35 => 8,  33 => 7,  31 => 6,  29 => 5,  27 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/title' %}
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<div class=\"container\">
    <div class=\"row my-5 justify-content-center\">
        {% for record in records %}
        {% if record.category == \"ICT\" %}
        <div class=\"col-md-3 col-12 py-3\">
            <div class=\"agit-csp-card\">
                <div class=\"cardbox\">
                    <div class=\"original\">
                        <div class=\"text\">
                            <img src=\"{{ record.iconslider.path }}\">
                            <div>{{ record.title }}</div>
                        </div>
                    </div>
                    <div class=\"on-hover\">
                        {% spaceless %}
                        {% if detailsPage %}
                        <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                            <b>{{ record.title }}</b> {{ html_limit(record.desc, 150) | raw }}
                        </a>
                        {% endif %}
                        {% endspaceless %}
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
        {% else %}
        <h4>{{ noRecordsMessage }}</h4> {% endfor %}
    </div>

    <!-- <ul class=\"record-list\">
        {% for record in records %}
            <li>
                {# Use spaceless tag to remove spaces inside the A tag. #} {% spaceless %} {% if detailsPage %}
                <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                    {% endif %}

                    {{ record.title }}

                    {% if detailsPage %}
                </a> {% endif %} {% endspaceless %}
                <p>{{ record.desc | raw }}</p>
                <p>Category : {{ record.category }}</p>
            </li>
        {% else %}
            <li class=\"no-data\">{{ noRecordsMessage }}</li>
        {% endfor %}
    </ul>
    {% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
        <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %} {% for page in 1..records.lastPage %}
        <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
            <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
        </li>
        {% endfor %} {% if records.lastPage > records.currentPage %}
        <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
    {% endif %} -->
</div>", "C:\\xampp\\htdocs\\compro/themes/demo/pages/ict-platform.htm", "");
    }
}
