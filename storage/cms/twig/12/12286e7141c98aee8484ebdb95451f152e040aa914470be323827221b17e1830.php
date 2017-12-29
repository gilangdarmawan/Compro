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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("builderList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
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
        return array (  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% partial 'site/title' %}
{% component 'blogPosts' %}
{% component 'builderList' %}", "C:\\xampp\\htdocs\\compro/themes/demo/pages/ict-platform.htm", "");
    }
}
