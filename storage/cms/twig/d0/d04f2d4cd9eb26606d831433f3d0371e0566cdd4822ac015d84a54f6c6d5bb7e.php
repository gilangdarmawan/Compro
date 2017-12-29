<?php

/* C:\xampp\htdocs\compro/themes/demo/partials/site/title.htm */
class __TwigTemplate_9775c1803cc0e71468e5bc86fcbf099feabb53b8f392a9fa713f4315b0372971 extends Twig_Template
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
        return "C:\\xampp\\htdocs\\compro/themes/demo/partials/site/title.htm";
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
</div>", "C:\\xampp\\htdocs\\compro/themes/demo/partials/site/title.htm", "");
    }
}
