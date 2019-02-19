<?php

/* casestudy.html.twig */
class __TwigTemplate_f90ec51c9dfc419eeb5b6cb74601b3c1f4a7479afb0706bfafda458b4837e51f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "casestudy.html.twig", 1);
        $this->blocks = array(
            'body_classes' => array($this, 'block_body_classes'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'banner' => array($this, 'block_banner'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_classes($context, array $blocks = array())
    {
        $this->displayParentBlock("body_classes", $context, $blocks);
        echo " ";
        if (($context["show_onpage_menu"] ?? null)) {
            echo "fixed-nav";
        }
        echo " ";
    }

    // line 5
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (($context["show_onpage_menu"] ?? null)) {
            // line 7
            echo "        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
            // line 16
            echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
            echo "</a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 21
                echo "                        ";
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                // line 22
                echo "                        <li class=\"";
                echo ($context["current_module"] ?? null);
                echo "\"><a href=\"#";
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </ul>
            </div>
        </div>
    </nav>
    ";
        } else {
            // line 29
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 33
    public function block_banner($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()) == true)) {
            // line 35
            echo "        <div class=\"banner\" style=\"color: ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "color", array());
            echo ";background-image: url('";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "header_image_file", array()), array(), "array"), "url", array());
            echo "');min-height: ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "min_height", array());
            echo "px;\">       
            <div class=\"heading-content\">
                <h1 class=\"header-main-text\">";
            // line 37
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_main_text", array()));
            echo "</h1>
                <p class=\"header-sub-text\">";
            // line 38
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_sub_text", array());
            echo "</p>
            </div>

        </div>
    ";
        }
        // line 42
        echo "    
";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        echo "   
";
        // line 46
        $context["collection"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"), "visible", array());
        // line 47
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            echo "   
    <div class=\"modular-row case-study-list\">
        <div class=\"container\">
            <div class=\"col-sm-3 case-study-image\">
                <a href=\"";
            // line 51
            echo $this->getAttribute($context["p"], "url", array());
            echo "\"><img class=\"img-responsive\" src=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "media", array()), $this->getAttribute($this->getAttribute($context["p"], "header", array()), "thumbnail", array()), array(), "array"), "url", array());
            echo "\" ></a>
            </div>
            <div class=\"col-sm-9 case-study-desc\">
                <h3><strong><a href=\"";
            // line 54
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</a></strong></h3>
                <p>";
            // line 55
            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "description", array());
            echo "</p>
                <a class=\"mwd-read-more\" href=\"";
            // line 56
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">READ MORE</a>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    
";
    }

    public function getTemplateName()
    {
        return "casestudy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 60,  171 => 56,  167 => 55,  161 => 54,  153 => 51,  143 => 47,  141 => 46,  136 => 45,  131 => 42,  123 => 38,  119 => 37,  109 => 35,  106 => 34,  103 => 33,  95 => 29,  88 => 24,  75 => 22,  72 => 21,  68 => 20,  59 => 16,  48 => 7,  45 => 6,  42 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block body_classes %}{{ parent() }} {% if show_onpage_menu %}fixed-nav{% endif %} {% endblock %}

{% block header_navigation %}
    {% if show_onpage_menu %}
        <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title|e('html') }}</a>
            </div>
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    {% for module in page.collection() %}
                        {% set current_module = (module.active or module.activeChild) ? 'active' : '' %}
                        <li class=\"{{ current_module }}\"><a href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </nav>
    {% else %}
        {{  parent() }}
    {% endif %}
{% endblock %}

{% block banner %}
    {% if page.header.header_image == true %}
        <div class=\"banner\" style=\"color: {{ page.header.color }};background-image: url('{{ page.media[header.header_image_file].url }}');min-height: {{ page.header.min_height }}px;\">       
            <div class=\"heading-content\">
                <h1 class=\"header-main-text\">{{ page.header.header_main_text|markdown }}</h1>
                <p class=\"header-sub-text\">{{ page.header.header_sub_text }}</p>
            </div>

        </div>
    {% endif %}    
{% endblock %}

{% block content %}   
{% set collection = page.collection().visible %}
    {% for p in collection %}   
    <div class=\"modular-row case-study-list\">
        <div class=\"container\">
            <div class=\"col-sm-3 case-study-image\">
                <a href=\"{{ p.url }}\"><img class=\"img-responsive\" src=\"{{ p.media[p.header.thumbnail].url }}\" ></a>
            </div>
            <div class=\"col-sm-9 case-study-desc\">
                <h3><strong><a href=\"{{ p.url }}\">{{ p.title }}</a></strong></h3>
                <p>{{ p.header.description }}</p>
                <a class=\"mwd-read-more\" href=\"{{ p.url }}\">READ MORE</a>
            </div>
        </div>
    </div>
    {% endfor %}    
{% endblock %}
", "casestudy.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/gondola/user/themes/bootstrap/templates/casestudy.html.twig");
    }
}
