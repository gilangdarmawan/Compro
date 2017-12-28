<?php

/* C:\xampp\htdocs\agit-testing/themes/demo/partials/site/title.htm */
class __TwigTemplate_ffa7bbb7c9e7e98edf1102fd233b402e4da3c83c19e593ca2c0f433b61b9b740 extends Twig_Template
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
        echo "<div class=\"page-title\">
    <div class=\"container\">
        <h4><b>";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</b></h4>
        <h6>
        \t";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "
        </h6>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\agit-testing/themes/demo/partials/site/title.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-title\">
    <div class=\"container\">
        <h4><b>{{ this.page.title }}</b></h4>
        <h6>
        \t{{ this.page.description }}
        </h6>
    </div>
</div>", "C:\\xampp\\htdocs\\agit-testing/themes/demo/partials/site/title.htm", "");
    }
}
