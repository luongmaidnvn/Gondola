<?php

/* general.html.twig */
class __TwigTemplate_a52ae92c4087ac8653a7668f2c841af922dc17a431920066cff22fb87e9a6606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "general.html.twig", 1);
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
                echo "
                        ";
                // line 22
                $context["current_module"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("active") : (""));
                // line 23
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
            // line 26
            echo "                </ul>
            </div>
        </div>
    </nav>
    ";
        } else {
            // line 31
            echo "        ";
            $this->displayParentBlock("header_navigation", $context, $blocks);
            echo "
    ";
        }
    }

    // line 35
    public function block_banner($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_image", array()) == true)) {
            // line 37
            echo "        <div class=\"banner\" style=\"color: ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "color", array());
            echo ";background-image: url('";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "header_image_file", array()), array(), "array"), "url", array());
            echo "');min-height: ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "min_height", array());
            echo "px;\">       
            <div class=\"heading-content\">
                <h1 class=\"header-main-text\">";
            // line 39
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_main_text", array()));
            echo "</h1>
                <p class=\"header-sub-text\">";
            // line 40
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_sub_text", array());
            echo "</p>
            </div>

        </div>
    ";
        }
        // line 44
        echo "    
";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 50
            echo "    \t<div class=\"modular-anchor\" id=\"";
            echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
            echo "\"></div>
        ";
            // line 51
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "general.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 51,  151 => 50,  147 => 49,  142 => 48,  139 => 47,  134 => 44,  126 => 40,  122 => 39,  112 => 37,  109 => 36,  106 => 35,  98 => 31,  91 => 26,  77 => 23,  75 => 22,  72 => 21,  68 => 20,  59 => 16,  48 => 7,  45 => 6,  42 => 5,  31 => 3,  11 => 1,);
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
    {{ page.content }}
    {% for module in page.collection() %}
    \t<div class=\"modular-anchor\" id=\"{{ _self.pageLinkName(module.menu) }}\"></div>
        {{ module.content }}
    {% endfor %}
{% endblock %}
", "general.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/general.html.twig");
    }
}
