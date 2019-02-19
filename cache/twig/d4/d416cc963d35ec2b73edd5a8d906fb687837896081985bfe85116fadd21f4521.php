<?php

/* partials/base.html.twig */
class __TwigTemplate_04d509c5fc012195fb905aaa13b725b7031848acff40ec2f93e7601f63de022b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_classes' => array($this, 'block_body_classes'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'banner' => array($this, 'block_banner'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "    </head>

      <body class=\"";
        // line 41
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TFNN9ZH\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <div id=\"preloader\">
            <div id=\"status\">
                <div class=\"status-mes\"></div>
            </div>
        </div>
        <div class=\"search_view\" style=\"top:0;left: 0; display: none\">
            <div class=\"container\"> 
                <div class=\"search_btn_close\"><span class=\"search_close_icon\" style=\"float: right\"><img src=\"";
        // line 53
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/close-btn.png", true);
        echo "\"></span></div>            
                <div class=\"col-xs-12 modal-search-form no-padding\">    
                    <h1>Search</h1>
                    ";
        // line 56
        $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "                    <p><i>Type the words and hit Enter.</i></p>
                </div>
            </div>
        </div>
        ";
        // line 61
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "langswitcher", array()), "enabled", array())) {
            // line 62
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 62)->display($context);
            // line 63
            echo "        ";
        }
        // line 64
        echo "        ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('banner', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "        ";
        $this->displayBlock('bottom', $context, $blocks);
        echo " 
    </body>

    ";
        // line 78
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
    ";
        // line 79
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
        // line 80
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "


</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "        <title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico", true);
        echo "\" />
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
        ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/font-awesome.min.css", 1 => 99), "method");
        // line 13
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css-compiled/theme.css", 1 => 98), "method");
        // line 14
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/theme-custom.css", 1 => 97), "method");
        // line 15
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/jquery-ui.css", 1 => 96), "method");
        // line 16
        echo "        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "            <script type=\"text/javascript\" src=\"";
        echo ($context["base_url_absolute"] ?? null);
        echo "/system/assets/jquery/jquery-2.x.min.js\"></script>
            <script src='https://www.google.com/recaptcha/api.js?render=6LeNFogUAAAAACapIHbXE2T2QXOIkpEw-ubfFK7m'></script>
            ";
        // line 22
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/modernizr.custom.71422.js"), "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/custom.js"), "method");
        // line 24
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 25
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 26
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 27
            echo "            ";
        }
        // line 28
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "top"), "method");
        echo "
\t<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TFNN9ZH');</script>
<!-- End Google Tag Manager -->
        ";
    }

    // line 41
    public function block_body_classes($context, array $blocks = array())
    {
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
    }

    // line 64
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 65
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 65)->display($context);
        // line 66
        echo "        ";
    }

    // line 68
    public function block_banner($context, array $blocks = array())
    {
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
    }

    // line 70
    public function block_pagination($context, array $blocks = array())
    {
    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        // line 73
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 73)->display($context);
        // line 74
        echo "        ";
    }

    // line 75
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 75,  257 => 74,  254 => 73,  251 => 72,  246 => 70,  241 => 69,  236 => 68,  232 => 66,  229 => 65,  226 => 64,  220 => 41,  206 => 28,  203 => 27,  200 => 26,  197 => 25,  194 => 24,  191 => 23,  189 => 22,  183 => 20,  180 => 19,  176 => 16,  173 => 15,  170 => 14,  167 => 13,  164 => 12,  161 => 11,  156 => 37,  154 => 19,  148 => 17,  146 => 11,  142 => 10,  133 => 9,  131 => 8,  126 => 5,  123 => 4,  114 => 80,  110 => 79,  106 => 78,  99 => 75,  97 => 72,  94 => 71,  91 => 70,  88 => 69,  86 => 68,  83 => 67,  80 => 64,  77 => 63,  74 => 62,  72 => 61,  66 => 57,  64 => 56,  58 => 53,  43 => 41,  39 => 39,  37 => 4,  32 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        {% include 'partials/metadata.html.twig' %}
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.ico', true) }}\" />
        {% block stylesheets %}
            {% do assets.add('theme://css/font-awesome.min.css',99) %}
            {% do assets.add('theme://css-compiled/theme.css',98) %}
            {% do assets.add('theme://css/theme-custom.css',97) %}
            {% do assets.add('theme://css/jquery-ui.css', 96) %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            <script type=\"text/javascript\" src=\"{{ base_url_absolute }}/system/assets/jquery/jquery-2.x.min.js\"></script>
            <script src='https://www.google.com/recaptcha/api.js?render=6LeNFogUAAAAACapIHbXE2T2QXOIkpEw-ubfFK7m'></script>
            {% do assets.add('theme://js/modernizr.custom.71422.js') %}
            {% do assets.add('theme://js/custom.js') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
                {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}
            {% endif %}
            {{ assets.js('top') }}
\t<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TFNN9ZH');</script>
<!-- End Google Tag Manager -->
        {% endblock %}

        {% endblock head%}
    </head>

      <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% endblock %}\">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-TFNN9ZH\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <div id=\"preloader\">
            <div id=\"status\">
                <div class=\"status-mes\"></div>
            </div>
        </div>
        <div class=\"search_view\" style=\"top:0;left: 0; display: none\">
            <div class=\"container\"> 
                <div class=\"search_btn_close\"><span class=\"search_close_icon\" style=\"float: right\"><img src=\"{{ url('theme://images/close-btn.png', true) }}\"></span></div>            
                <div class=\"col-xs-12 modal-search-form no-padding\">    
                    <h1>Search</h1>
                    {% include 'partials/simplesearch_searchbox.html.twig' %}
                    <p><i>Type the words and hit Enter.</i></p>
                </div>
            </div>
        </div>
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}
        {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block banner %}{% endblock %}
        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}
        {% block bottom %}{% endblock %} 
    </body>

    {{ assets.css() }}
    {{ assets.js() }}
    {{ assets.js('bottom') }}


</html>
", "partials/base.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\partials\\base.html.twig");
    }
}
