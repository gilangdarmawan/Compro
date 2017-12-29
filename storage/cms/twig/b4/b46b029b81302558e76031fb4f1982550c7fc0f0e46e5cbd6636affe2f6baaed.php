<?php

/* C:\xampp\htdocs\compro/themes/demo/pages/home.htm */
class __TwigTemplate_e7c5b887f4dc21cfbd4423e96d60589c0670b8cca1c79bec9e38237d841b5923 extends Twig_Template
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
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("Home/Landing"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 2
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("Home/Offer"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("Home/News"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("Home/Partners"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("Home/Subscribe"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\compro/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% content 'Home/Landing' %}
{% content 'Home/Offer' %}
{% content 'Home/News' %}
{% content 'Home/Partners' %}
{% content 'Home/Subscribe' %}", "C:\\xampp\\htdocs\\compro/themes/demo/pages/home.htm", "");
    }
}
