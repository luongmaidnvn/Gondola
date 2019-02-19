<?php

/* career.html.twig */
class __TwigTemplate_e8051be9ab4e74275237d5afbcbba8162bd16abaad24442f62812a931aaaf3c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "career.html.twig", 1);
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
        // line 46
        echo "    <div class=\"search-header-pannel\" style=\"position: relative; top: -20px;\" id=\"search-career-box\">
        <h1 class=\"search-header\" >Find your opportunity at MOWEDE</h1>
        <div class=\"center\">
            ";
        // line 49
        $this->loadTemplate("partials/simplesearch_searchbox_blog.html.twig", "career.html.twig", 49)->display($context);
        // line 50
        echo "        </div>
    </div>
<div class=\"modular-row\">
    <div class=\"container\"> 
        ";
        // line 54
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        ";
        // line 55
        $context["collection"] = (($this->getAttribute(($context["search_results"] ?? null), "collection", array(), "array")) ? ($this->getAttribute(($context["search_results"] ?? null), "collection", array(), "array")) : ($this->getAttribute(($context["page"] ?? null), "collection", array(), "method")));
        // line 56
        echo "

        ";
        // line 58
        if ($this->getAttribute(($context["search_results"] ?? null), "collection", array(), "array")) {
            // line 59
            echo "            ";
            $context["count"] = (($this->getAttribute(($context["search_results"] ?? null), "collection", array(), "array")) ? ($this->getAttribute($this->getAttribute(($context["search_results"] ?? null), "collection", array(), "array"), "count", array())) : (0));
            // line 60
            echo "            ";
            if ((($context["count"] ?? null) == 0)) {
                // line 61
                echo "                <p style=\"margin-top: 10px\"><strong>Sorry, we couldn't find any matches for \"";
                echo ($context["query"] ?? null);
                echo "\"</strong></p>
            ";
            }
            // line 63
            echo "        ";
        }
        // line 64
        echo "

        <div class=\"col-xs-12 career-list\">

            ";
        // line 68
        if ( !($this->getAttribute(($context["search_results"] ?? null), "collection", array(), "array") && (($context["count"] ?? null) == 0))) {
            // line 69
            echo "                <h1 class=\"career-heading section-title\">Featured Job</h1>
                <div class=\"col-sm-12 hidden-xs career-item-label\">
                    <div class=\"col-sm-4 career-label\"><b>JOB</b></div>
                    <div class=\"col-sm-7 career-label\"><b>DESCRIPTION</b></div>
                    <div class=\"col-sm-1 career-label\"><b>LOCATION</b></div>
                </div>
            ";
        }
        // line 76
        echo "
            ";
        // line 77
        $context["i"] = 0;
        // line 78
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 79
            echo "                <div class=\"col-xs-12 career-item\">
                    <div class=\"col-sm-4 career-item-title\"><h3><a href=\"";
            // line 80
            echo $this->getAttribute($context["p"], "url", array());
            echo "\"><b>";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</b></a></h3></div>
                    <div class=\"col-sm-7 career-item-description\">";
            // line 81
            if ($this->getAttribute($this->getAttribute(($context["search_results"] ?? null), "textSum", array(), "array"), ($context["i"] ?? null), array(), "array")) {
                echo " ";
                echo $this->getAttribute($this->getAttribute(($context["search_results"] ?? null), "textSum", array(), "array"), ($context["i"] ?? null), array(), "array");
                echo " ";
            } else {
                echo " ";
                echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "summary", array());
                echo " ";
            }
            echo "</div>
                    <div class=\"col-sm-1 hidden-xs career-item-location\"><h4>";
            // line 82
            echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "location", array());
            echo "</h4></div>

                </div>
                ";
            // line 85
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 86
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </div>

    </div>
    ";
        // line 90
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "display_gallery", array()) == true)) {
            // line 91
            echo "
    <div class=\"career-gallery\">     
        <h1 class=\"section-title\"><b>Life</b> at <b>MOWEDE</b></h1>   
        <div class=\"carousel carousel-mwd slide\" id=\"career-carousel\">
            <div class=\"carousel-inner\">
                 ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "galleries", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo "  
                    ";
                // line 97
                $context["active"] = "";
                echo "                   
                    ";
                // line 98
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    // line 99
                    echo "                    ";
                    $context["active"] = "active";
                    // line 100
                    echo "                    ";
                }
                echo " 
                    <div class=\"item ";
                // line 101
                echo ($context["active"] ?? null);
                echo "\">
                    <div class=\"col-xs-12 col-sm-3 col-md-3 no-padding\">
                        <a href=\"javascript:void(0)\"><img src=\"";
                // line 103
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array());
                echo "\" class=\"img-responsive\"></a>
                    </div>
                </div>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "               
                
            </div>
            <a class=\"left carousel-control\" href=\"#career-carousel\" data-slide=\"prev\"><i class=\"glyphicon glyphicon-chevron-left\"></i></a>
            <a class=\"right carousel-control\" href=\"#career-carousel\" data-slide=\"next\"><i class=\"glyphicon glyphicon-chevron-right\"></i></a>
        </div>
    </div>
    ";
        }
        // line 113
        echo " 
</div>
<script>
      ";
        // line 116
        if ($this->getAttribute(($context["search_results"] ?? null), "collection", array(), "array")) {
            // line 117
            echo "        \$('html, body').animate({
            scrollTop: \$(\"#search-career-box\").offset().top
        }, 0);
        ";
        }
        // line 120
        echo " 
</script>
    ";
        // line 122
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/career.js"), "method");
    }

    public function getTemplateName()
    {
        return "career.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 122,  334 => 120,  328 => 117,  326 => 116,  321 => 113,  311 => 106,  293 => 103,  288 => 101,  283 => 100,  280 => 99,  278 => 98,  274 => 97,  255 => 96,  248 => 91,  246 => 90,  241 => 87,  235 => 86,  233 => 85,  227 => 82,  215 => 81,  209 => 80,  206 => 79,  201 => 78,  199 => 77,  196 => 76,  187 => 69,  185 => 68,  179 => 64,  176 => 63,  170 => 61,  167 => 60,  164 => 59,  162 => 58,  158 => 56,  156 => 55,  152 => 54,  146 => 50,  144 => 49,  139 => 46,  136 => 45,  131 => 42,  123 => 38,  119 => 37,  109 => 35,  106 => 34,  103 => 33,  95 => 29,  88 => 24,  75 => 22,  72 => 21,  68 => 20,  59 => 16,  48 => 7,  45 => 6,  42 => 5,  31 => 3,  11 => 1,);
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
    <div class=\"search-header-pannel\" style=\"position: relative; top: -20px;\" id=\"search-career-box\">
        <h1 class=\"search-header\" >Find your opportunity at MOWEDE</h1>
        <div class=\"center\">
            {% include 'partials/simplesearch_searchbox_blog.html.twig' %}
        </div>
    </div>
<div class=\"modular-row\">
    <div class=\"container\"> 
        {{ page.content }}
        {% set collection = search_results[\"collection\"] ?: page.collection() %}


        {% if search_results[\"collection\"]  %}
            {% set count = search_results[\"collection\"] ? search_results[\"collection\"].count : 0 %}
            {% if count == 0 %}
                <p style=\"margin-top: 10px\"><strong>Sorry, we couldn't find any matches for \"{{ query }}\"</strong></p>
            {% endif %}
        {% endif %}


        <div class=\"col-xs-12 career-list\">

            {% if not (search_results[\"collection\"] and count ==0) %}
                <h1 class=\"career-heading section-title\">Featured Job</h1>
                <div class=\"col-sm-12 hidden-xs career-item-label\">
                    <div class=\"col-sm-4 career-label\"><b>JOB</b></div>
                    <div class=\"col-sm-7 career-label\"><b>DESCRIPTION</b></div>
                    <div class=\"col-sm-1 career-label\"><b>LOCATION</b></div>
                </div>
            {% endif %}

            {% set i = 0 %}
            {% for p in collection %}
                <div class=\"col-xs-12 career-item\">
                    <div class=\"col-sm-4 career-item-title\"><h3><a href=\"{{ p.url }}\"><b>{{ p.title }}</b></a></h3></div>
                    <div class=\"col-sm-7 career-item-description\">{% if search_results[\"textSum\"][i] %} {{ search_results[\"textSum\"][i] }} {% else %} {{ p.header.summary }} {% endif %}</div>
                    <div class=\"col-sm-1 hidden-xs career-item-location\"><h4>{{ p.header.location }}</h4></div>

                </div>
                {% set i = i+1 %}
            {% endfor %}
        </div>

    </div>
    {% if page.header.display_gallery == true %}

    <div class=\"career-gallery\">     
        <h1 class=\"section-title\"><b>Life</b> at <b>MOWEDE</b></h1>   
        <div class=\"carousel carousel-mwd slide\" id=\"career-carousel\">
            <div class=\"carousel-inner\">
                 {% for item in page.header.galleries %}  
                    {% set active = \"\" %}                   
                    {% if loop.index == 1 %}
                    {% set active = \"active\" %}
                    {% endif %} 
                    <div class=\"item {{ active }}\">
                    <div class=\"col-xs-12 col-sm-3 col-md-3 no-padding\">
                        <a href=\"javascript:void(0)\"><img src=\"{{ page.media[item.image].url }}\" class=\"img-responsive\"></a>
                    </div>
                </div>
                {% endfor %}               
                
            </div>
            <a class=\"left carousel-control\" href=\"#career-carousel\" data-slide=\"prev\"><i class=\"glyphicon glyphicon-chevron-left\"></i></a>
            <a class=\"right carousel-control\" href=\"#career-carousel\" data-slide=\"next\"><i class=\"glyphicon glyphicon-chevron-right\"></i></a>
        </div>
    </div>
    {% endif %} 
</div>
<script>
      {% if search_results[\"collection\"]  %}
        \$('html, body').animate({
            scrollTop: \$(\"#search-career-box\").offset().top
        }, 0);
        {% endif %} 
</script>
    {% do assets.add('theme://js/career.js') %}
{% endblock %}
", "career.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\career.html.twig");
    }
}
