<?php

/* C:\xampp\htdocs\compro/themes/demo/pages/news-post.htm */
class __TwigTemplate_ccc86796f3093fe0e11315574ecacd252657161627839d80f05626f5313a4813 extends Twig_Template
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
        $context["post"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["blogPost"] ?? null), "post", array());
        // line 2
        echo "
<div class=\"container\">
";
        // line 4
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("breadcrumbs"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 5
        echo "<div class=\"content\">";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "content_html", array());
        echo "</div>

";
        // line 7
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()), "count", array())) {
            // line 8
            echo "    <div class=\"featured-images text-center\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 10
                echo "            <p>
                <img
                    data-src=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "filename", array()), "html", null, true);
                echo "\"
                    src=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "path", array()), "html", null, true);
                echo "\"
                    alt=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array()), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
";
        }
        // line 20
        echo "
<p class=\"info\">
    Posted
    ";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()), "count", array())) {
            echo " in
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "categories", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 26
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
        }
        // line 28
        echo "    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["post"] ?? null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "
</p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\compro/themes/demo/pages/news-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  119 => 27,  105 => 26,  96 => 25,  79 => 24,  75 => 23,  70 => 20,  66 => 18,  56 => 14,  52 => 13,  48 => 12,  44 => 10,  40 => 9,  37 => 8,  35 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = blogPost.post %}

<div class=\"container\">
{% component 'breadcrumbs' %}
<div class=\"content\">{{ post.content_html|raw }}</div>

{% if post.featured_images.count %}
    <div class=\"featured-images text-center\">
        {% for image in post.featured_images %}
            <p>
                <img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
            </p>
        {% endfor %}
    </div>
{% endif %}

<p class=\"info\">
    Posted
    {% if post.categories.count %} in
        {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
    on {{ post.published_at|date('M d, Y') }}
</p>
</div>", "C:\\xampp\\htdocs\\compro/themes/demo/pages/news-post.htm", "");
    }
}
