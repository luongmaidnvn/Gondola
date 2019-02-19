<?php

/* modular/section_title.html.twig */
class __TwigTemplate_d45ccb5cad16493cdcdfeb56c9464ee4eefc177394e7de5d26ab4f64a77a7b6a extends Twig_Template
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
    <div class=\"container\">  
        <h2 style=\"text-align: ";
        // line 3
        echo $this->getAttribute(($context["header"] ?? null), "section_title_align", array());
        echo "; margin: ";
        echo $this->getAttribute(($context["header"] ?? null), "margin", array());
        echo "\"> ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["header"] ?? null), "section_title", array()));
        echo " </h2>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/section_title.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
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
    <div class=\"container\">  
        <h2 style=\"text-align: {{ header.section_title_align }}; margin: {{ header.margin }}\"> {{ header.section_title|markdown }} </h2>
    </div>
</div>", "modular/section_title.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/modular/section_title.html.twig");
    }
}
