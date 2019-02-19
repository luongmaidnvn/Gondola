<?php

/* modular/whoweare.html.twig */
class __TwigTemplate_b1310847458377305eb146031787503d17d812eb3717f4cc8b0c27bd201cc7ab extends Twig_Template
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
        echo "
<div class=\"modular-row\">
    <div class=\"container\">
        <div class=\"whoweare\">             
            ";
        // line 5
        if (($this->getAttribute(($context["header"] ?? null), "layout", array()) == true)) {
            // line 6
            echo "                <div class=\"col-sm-6 whoweare-thumbnail\">
                    <img src=\"";
            // line 7
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "thumbnail", array()), array(), "array"), "url", array());
            echo "\" alt=\"";
            echo $this->getAttribute(($context["header"] ?? null), "alt", array());
            echo "\" >
                </div>
                <div class=\"col-sm-6 whoweare-content\">
                    ";
            // line 10
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction(($context["content"] ?? null));
            echo "
                </div>
            ";
        } else {
            // line 13
            echo "                <div class=\"col-sm-6 whoweare-content\">
                    ";
            // line 14
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction(($context["content"] ?? null));
            echo "
                </div>
                <div class=\"col-sm-6 whoweare-thumbnail\">
                    <img src=\"";
            // line 17
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "thumbnail", array()), array(), "array"), "url", array());
            echo "\" alt=\"";
            echo $this->getAttribute(($context["header"] ?? null), "alt", array());
            echo "\" >
                </div>
            ";
        }
        // line 19
        echo "                  
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/whoweare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  53 => 17,  47 => 14,  44 => 13,  38 => 10,  30 => 7,  27 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"modular-row\">
    <div class=\"container\">
        <div class=\"whoweare\">             
            {% if header.layout == true %}
                <div class=\"col-sm-6 whoweare-thumbnail\">
                    <img src=\"{{ page.media[header.thumbnail].url }}\" alt=\"{{ header.alt }}\" >
                </div>
                <div class=\"col-sm-6 whoweare-content\">
                    {{ content|markdown }}
                </div>
            {% else %}
                <div class=\"col-sm-6 whoweare-content\">
                    {{ content|markdown }}
                </div>
                <div class=\"col-sm-6 whoweare-thumbnail\">
                    <img src=\"{{ page.media[header.thumbnail].url }}\" alt=\"{{ header.alt }}\" >
                </div>
            {% endif %}                  
        </div>
    </div>
</div>
", "modular/whoweare.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/modular/whoweare.html.twig");
    }
}
