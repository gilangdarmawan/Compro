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
        $context["posts"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPosts"] ?? null), "posts", array());
        // line 4
        echo "<div class=\"bg-white slide-section\">
    <div class=\"container\">
        <div class=\"desc mb-5\">
            News
            <br>
            <span>Keep update with our Activities & Communities</span>
        </div>
        <div class=\"card-deck\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "            <div class=\"card\">
                ";
            // line 14
            if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), "count", array())) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "featured_images", array()), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 15
                    echo "                <img class=\"card-img-top\" data-src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "filename", array()), "html", null, true);
                    echo "\" src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array()) != null)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "filename", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "title", array()) != null)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "title", array())) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()))), "html", null, true);
                    echo "\"> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
            }
            // line 16
            echo "
                <div class=\"card-body\">
                    <div class=\"card-title\"><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</a></div>
                    <p class=\"card-text\">
                        <small class=\"text-muted\">
                            <i>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "</i>
                        </small>
                    </p>
                    ";
            // line 24
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "summary", array()), 150));
            echo "
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
        <div class=\"text-center mt-5\">
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("news");
        echo "\" class=\"btn btn-primary\">More News</a>
        </div>
    </div>
</div>
";
        // line 34
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("Home/Partners"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 35
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
        return array (  111 => 35,  107 => 34,  100 => 30,  96 => 28,  86 => 24,  80 => 21,  72 => 18,  68 => 16,  52 => 15,  46 => 14,  43 => 13,  39 => 12,  29 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% content 'Home/Landing' %}
{% content 'Home/Offer' %}
{% set posts = blogPosts.posts %}
<div class=\"bg-white slide-section\">
    <div class=\"container\">
        <div class=\"desc mb-5\">
            News
            <br>
            <span>Keep update with our Activities & Communities</span>
        </div>
        <div class=\"card-deck\">
            {% for post in posts %}
            <div class=\"card\">
                {% if post.featured_images.count %} {% for image in post.featured_images|slice(0, 1) %}
                <img class=\"card-img-top\" data-src=\"{{ image.filename }}\" src=\"{{ image.path }}\" alt=\"{{ image.description != null ? image.description : image.filename }}\" title=\"{{ image.title != null ? image.title : post.title }}\"> {% endfor %} {% endif %}

                <div class=\"card-body\">
                    <div class=\"card-title\"><a href=\"{{ post.url }}\">{{ post.title }}</a></div>
                    <p class=\"card-text\">
                        <small class=\"text-muted\">
                            <i>{{ post.published_at|date('M d, Y') }}</i>
                        </small>
                    </p>
                    {{ html_limit(post.summary, 150) |raw }}
                </div>
            </div>
            {% endfor %}
        </div>
        <div class=\"text-center mt-5\">
            <a href=\"{{ 'news'|page }}\" class=\"btn btn-primary\">More News</a>
        </div>
    </div>
</div>
{% content 'Home/Partners' %}
{% content 'Home/Subscribe' %}", "C:\\xampp\\htdocs\\compro/themes/demo/pages/home.htm", "");
    }
}
