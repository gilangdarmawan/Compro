<?php

/* C:\xampp\htdocs\compro/themes/demo/layouts/master.htm */
class __TwigTemplate_2568a0d81fcbdea730a410de76f64e3f6e439830679d4e6671478ce3bc8fea44 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>AGIT - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
    <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"AGIT\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"AGIT\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\">
    <link href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/agit.min.css");
        echo "\" rel=\"stylesheet\"> ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "</head>

<body>
    <!-- Header -->
    <header id=\"layout-header\">
        <div class=\"container p-0\">
            <div class=\"navbar navbar-top\">
                <div class=\"mr-auto\">
                    <a class=\"nav-lang mr-md-2 mr-1\" href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">English</a> |
                    <a class=\"nav-lang ml-md-2 ml-1\" href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'id'\">Indonesia</a>
                </div>
                <form class=\"form-inline\">
                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn\" type=\"submit\"><i class=\"fa fa-search fa-fw\"></i></button>
                </form>
            </div>
        </div>
    </header>
    ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "    <!-- Content -->
    <section id=\"layout-content\">
        ";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 38
        echo "    </section>
    <!-- Footer -->
    <footer id=\"layout-footer\">
        ";
        // line 41
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 42
        echo "    </footer>
    <!-- Scripts -->
    <!-- <script src=\"";
        // line 44
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script> -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/javascript/app.js");
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready

            // breakpoint and up  
            \$(window).resize(function() {
                if (\$(window).width() >= 980) {
                    // when you hover a toggle show its dropdown menu
                    \$(\".navbar .dropdown-toggle\").hover(function() {
                        \$(this).parent().toggleClass(\"show\");
                        \$(this).parent().find(\".dropdown-menu\").toggleClass(\"show\");
                    });
                    // hide the menu when the mouse leaves the dropdown
                    \$(\".navbar .dropdown-menu\").mouseleave(function() {
                        \$(this).removeClass(\"show\");
                    });
                    // do something here
                }
            });
            // document ready  
        });
    </script>
    ";
        // line 72
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        echo " ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 73
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\compro/themes/demo/layouts/master.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 73,  135 => 72,  109 => 49,  102 => 45,  98 => 44,  94 => 42,  90 => 41,  85 => 38,  83 => 37,  79 => 35,  75 => 34,  55 => 16,  50 => 15,  45 => 13,  41 => 12,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <title>AGIT - {{ this.page.title }}</title>
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
    <meta name=\"author\" content=\"AGIT\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"generator\" content=\"AGIT\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
    <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/css/agit.min.css'|theme }}\" rel=\"stylesheet\"> {% styles %}
</head>

<body>
    <!-- Header -->
    <header id=\"layout-header\">
        <div class=\"container p-0\">
            <div class=\"navbar navbar-top\">
                <div class=\"mr-auto\">
                    <a class=\"nav-lang mr-md-2 mr-1\" href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\">English</a> |
                    <a class=\"nav-lang ml-md-2 ml-1\" href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'id'\">Indonesia</a>
                </div>
                <form class=\"form-inline\">
                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn\" type=\"submit\"><i class=\"fa fa-search fa-fw\"></i></button>
                </form>
            </div>
        </div>
    </header>
    {% partial 'site/header' %}
    <!-- Content -->
    <section id=\"layout-content\">
        {% page %}
    </section>
    <!-- Footer -->
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>
    <!-- Scripts -->
    <!-- <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
    <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script> -->
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
    <script>
        \$(document).ready(function() {
            // executes when HTML-Document is loaded and DOM is ready

            // breakpoint and up  
            \$(window).resize(function() {
                if (\$(window).width() >= 980) {
                    // when you hover a toggle show its dropdown menu
                    \$(\".navbar .dropdown-toggle\").hover(function() {
                        \$(this).parent().toggleClass(\"show\");
                        \$(this).parent().find(\".dropdown-menu\").toggleClass(\"show\");
                    });
                    // hide the menu when the mouse leaves the dropdown
                    \$(\".navbar .dropdown-menu\").mouseleave(function() {
                        \$(this).removeClass(\"show\");
                    });
                    // do something here
                }
            });
            // document ready  
        });
    </script>
    {% framework extras %} {% scripts %}
</body>

</html>", "C:\\xampp\\htdocs\\compro/themes/demo/layouts/master.htm", "");
    }
}
