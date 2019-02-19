<?php

/* modular/history.html.twig */
class __TwigTemplate_0d6e539e7a334df3c36531a0e252abd7f10c0219c11a132fa82040ffe00fdd49 extends Twig_Template
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
        echo "<div class=\"modular-row\">
    <div class=\"history\" style=\"background-image: url('";
        // line 2
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute(($context["header"] ?? null), "background", array()), array(), "array"), "url", array());
        echo "');\">    
        <div class=\"container\">         
            <h2 class=\"history-title\">
                ";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["header"] ?? null), "title", array()));
        echo "
            </h2>
            <div class=\"history-content\">
                ";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction(($context["content"] ?? null));
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row\">
    <div class=\"history\" style=\"background-image: url('{{ page.media[header.background].url }}');\">    
        <div class=\"container\">         
            <h2 class=\"history-title\">
                {{ header.title|markdown }}
            </h2>
            <div class=\"history-content\">
                {{ content|markdown }}
            </div>
        </div>
    </div>
</div>
", "modular/history.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\modular\\history.html.twig");
    }
}
