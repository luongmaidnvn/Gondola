<?php

/* modular/history.html.twig */
class __TwigTemplate_2f8a7b1c4c5503f35b783bcd619aeb7a5f8dfe57ed89e4acf2dbfe45d85e0558 extends Twig_Template
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
", "modular/history.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/modular/history.html.twig");
    }
}
