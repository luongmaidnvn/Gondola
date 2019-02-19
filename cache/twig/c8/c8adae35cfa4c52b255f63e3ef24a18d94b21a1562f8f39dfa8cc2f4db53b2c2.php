<?php

/* forms/fields/hidden/hidden.html.twig */
class __TwigTemplate_f0f4888bcb09e1c13593180f21fedb6c3ceb443ea2bf6b29a507837769c254b9 extends Twig_Template
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
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 2
        echo "
<input type=\"hidden\" class=\"input ";
        // line 3
        echo $this->getAttribute(($context["field"] ?? null), "classes", array());
        echo "\" name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\" value=\"";
        echo twig_join_filter(($context["value"] ?? null), ", ");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/hidden/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set value = (value is null ? field.default : value) %}

<input type=\"hidden\" class=\"input {{ field.classes }}\" name=\"{{ (scope ~ field.name)|fieldName }}\" value=\"{{ value|join(', ') }}\" />
", "forms/fields/hidden/hidden.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\forms\\fields\\hidden\\hidden.html.twig");
    }
}
