<?php

/* casestudydetail.html.twig */
class __TwigTemplate_7a544652ef4cd8cd96e8038d50659ef4776bea554e7af1ae0b29c5d07e50bc48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "casestudydetail.html.twig", 1);
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
        // line 43
        echo "    
";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "
";
        // line 48
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/career_detail.css"), "method");
        // line 49
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
<div id=\"sumit-form-preload\"></div>
<div class=\"modular-row\">
    <div class=\"container\">  
        <div class=\"career-detail\">
            <h2><strong>";
        // line 54
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</strong></h2>      
            <p>";
        // line 55
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array());
        echo "</p>        
        </div>    
       <div class=\"case-study-thumbnail\">
            <img class=\"img-responsive\" src=\"";
        // line 58
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "thumbnail", array()), array(), "array"), "url", array());
        echo "\" >
       </div>

<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
<div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
    </div>
    <div class=\"modal-body\">
        <div class=\"inside-body\">
            <img class=\"inside-img p-class\" src=\"";
        // line 71
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/email.png\">
        </div>
        <div class=\"inside-text\">
            <p class=\"big p-class\" ><strong>Thank you for requesting a Case Study!</strong></p>
            <p class=\"below p-class\">We have sent you an email with the download link.
            </p>
            <p class=\"if-you-need\">If you have trouble with the automatic download, and you still would like to get the Case Study, please contact us at: +84 2363 655 336.</strong></p>
            <p class=\"learn-more\"><strong>Learn more about MOWEDE</strong></p>
            <div class=\"row email-phone-row\">
                <div class=\"col-xs-6\">
                    <div class=\"row phone-popup\">
                            <p>+84 2363 655 336</p>
                            <img src=\"";
        // line 83
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/phone-popup.png\">
                    </div>
                </div>
                 <div class=\"col-xs-6\">
                     <div class=\"row email-popup\">
                            <img src=\"";
        // line 88
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/email-popup.png\">
                            <p><a href=\"mailto:sales@mowede.com\">sales@mowede.com</a></p>
                    </div>
                </div>
            </div>
            <div class=\"by-submit\">
                <p><i>By submitting this form, you agree that you have read and understand MOWEDE's Privacy Policy. You can Opt-Out of communications at any time. We respect your privacy.</i></p>
            </div>
            <button type=\"button\" class=\"btn btn-default p-class\" data-dismiss=\"modal\">OK</button>
        </div>
    </div>
    </div>
    <input type=\"hidden\" class=\"hid-file-path\" value=\"";
        // line 100
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "file", array()), array(), "array"), "url", array());
        echo "\">
    <input type=\"hidden\" class=\"hid-competitor\" value=";
        // line 101
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "competitor", array()));
        echo ">
    <input type=\"hidden\" class=\"hid-exitingcustomer\" value=";
        // line 102
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "existingcustomer", array()));
        echo ">
    <input type=\"hidden\" class=\"hid-blacklist\" value=";
        // line 103
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "blacklist", array()));
        echo ">
</div>
</div>
<center><h2 style=\"margin-top: 50px;\"><b>Download</b> Full Version of Case Study</h2></center>

    ";
        // line 108
        $this->loadTemplate("forms/form.html.twig", "casestudydetail.html.twig", 108)->display($context);
        // line 109
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/case-study-form.css"), "method");
        // line 110
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/jquery.validate.min.js"), "method");
        // line 111
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/case-study-form.js"), "method");
        // line 112
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "casestudydetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 112,  244 => 111,  242 => 110,  240 => 109,  238 => 108,  230 => 103,  226 => 102,  222 => 101,  218 => 100,  203 => 88,  195 => 83,  180 => 71,  164 => 58,  158 => 55,  154 => 54,  146 => 49,  144 => 48,  141 => 47,  138 => 46,  133 => 43,  126 => 40,  122 => 39,  112 => 37,  109 => 36,  106 => 35,  98 => 31,  91 => 26,  77 => 23,  75 => 22,  72 => 21,  68 => 20,  59 => 16,  48 => 7,  45 => 6,  42 => 5,  31 => 3,  11 => 1,);
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

{% do assets.add('theme://css/career_detail.css') %}
{{ assets.css() }}
<div id=\"sumit-form-preload\"></div>
<div class=\"modular-row\">
    <div class=\"container\">  
        <div class=\"career-detail\">
            <h2><strong>{{ page.title }}</strong></h2>      
            <p>{{ page.header.description }}</p>        
        </div>    
       <div class=\"case-study-thumbnail\">
            <img class=\"img-responsive\" src=\"{{ page.media[header.thumbnail].url }}\" >
       </div>

<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
<div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
    </div>
    <div class=\"modal-body\">
        <div class=\"inside-body\">
            <img class=\"inside-img p-class\" src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/email.png\">
        </div>
        <div class=\"inside-text\">
            <p class=\"big p-class\" ><strong>Thank you for requesting a Case Study!</strong></p>
            <p class=\"below p-class\">We have sent you an email with the download link.
            </p>
            <p class=\"if-you-need\">If you have trouble with the automatic download, and you still would like to get the Case Study, please contact us at: +84 2363 655 336.</strong></p>
            <p class=\"learn-more\"><strong>Learn more about MOWEDE</strong></p>
            <div class=\"row email-phone-row\">
                <div class=\"col-xs-6\">
                    <div class=\"row phone-popup\">
                            <p>+84 2363 655 336</p>
                            <img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/phone-popup.png\">
                    </div>
                </div>
                 <div class=\"col-xs-6\">
                     <div class=\"row email-popup\">
                            <img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/email-popup.png\">
                            <p><a href=\"mailto:sales@mowede.com\">sales@mowede.com</a></p>
                    </div>
                </div>
            </div>
            <div class=\"by-submit\">
                <p><i>By submitting this form, you agree that you have read and understand MOWEDE's Privacy Policy. You can Opt-Out of communications at any time. We respect your privacy.</i></p>
            </div>
            <button type=\"button\" class=\"btn btn-default p-class\" data-dismiss=\"modal\">OK</button>
        </div>
    </div>
    </div>
    <input type=\"hidden\" class=\"hid-file-path\" value=\"{{ page.media[header.file].url }}\">
    <input type=\"hidden\" class=\"hid-competitor\" value={{ page.header.competitor|json_encode }}>
    <input type=\"hidden\" class=\"hid-exitingcustomer\" value={{ page.header.existingcustomer|json_encode }}>
    <input type=\"hidden\" class=\"hid-blacklist\" value={{ page.header.blacklist|json_encode }}>
</div>
</div>
<center><h2 style=\"margin-top: 50px;\"><b>Download</b> Full Version of Case Study</h2></center>

    {% include \"forms/form.html.twig\" %}
{% do assets.add('theme://css/case-study-form.css') %}
{% do assets.add('theme://js/jquery.validate.min.js') %}
{% do assets.add('theme://js/case-study-form.js') %}
    </div>
</div>
{% endblock %}
", "casestudydetail.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/gondola/user/themes/bootstrap/templates/casestudydetail.html.twig");
    }
}
