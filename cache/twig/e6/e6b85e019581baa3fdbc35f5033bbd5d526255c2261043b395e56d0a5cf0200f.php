<?php

/* modular/advertisement.html.twig */
class __TwigTemplate_9f4a632b791350c191a4a06054050341070d5fa0e9ea2d06484c66e62d960b97 extends Twig_Template
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
        echo "<div class=\"advertisement\" style=\"background-image: url('";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background", array()), array(), "array"), "url", array());
        echo "');height: ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "height", array());
        echo "px;\">
    <div class=\"advertisement-container\"> 
        <div class=\"col-sm-8 advertisement-text\">
            ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
        </div>
        <div class=\"col-sm-4 advertisement-btn\"> 
            <center><a href=\"";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "btn_url", array());
        echo "\" target=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "btn_url_target", array());
        echo "\" class=\"\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "btn", array());
        echo "</a></center>
        </div>
    </div>
</div>
  ";
    }

    public function getTemplateName()
    {
        return "modular/advertisement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"advertisement\" style=\"background-image: url('{{page.media.images[page.header.background].url}}');height: {{ page.header.height }}px;\">
    <div class=\"advertisement-container\"> 
        <div class=\"col-sm-8 advertisement-text\">
            {{ content }}
        </div>
        <div class=\"col-sm-4 advertisement-btn\"> 
            <center><a href=\"{{ page.header.btn_url }}\" target=\"{{ page.header.btn_url_target }}\" class=\"\">{{ page.header.btn }}</a></center>
        </div>
    </div>
</div>
  ", "modular/advertisement.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\modular\\advertisement.html.twig");
    }
}
