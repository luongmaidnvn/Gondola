<?php

/* forms/fields/textarea/textarea.html.twig */
class __TwigTemplate_30de13642903147fe3fecef8e9176b5f18f270cb37f67a031bded4d09c190eb8 extends Twig_Template
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
<div class=\"form-field\">
    <label class=\"control-label col-sm-2\">
            ";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 6
            echo "            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", array()));
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))));
            echo "</span>
            ";
        } else {
            // line 8
            echo "            ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))));
            echo "
            ";
        }
        // line 10
        echo "            ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
    </label>
    <div class=\"col-sm-10\">
        <textarea rows=\"10\" class=\"form-control\" ";
        // line 13
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->getAttribute(($context["field"] ?? null), "placeholder", array());
            echo "\"";
        }
        echo " name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\">";
        echo twig_join_filter(($context["value"] ?? null), "
");
        echo "</textarea>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/textarea/textarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 13,  42 => 10,  36 => 8,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
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

<div class=\"form-field\">
    <label class=\"control-label col-sm-2\">
            {% if field.help %}
            <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
            {% else %}
            {{ field.label|default(field.name|capitalize)|t }}
            {% endif %}
            {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
    </label>
    <div class=\"col-sm-10\">
        <textarea rows=\"10\" class=\"form-control\" {% if field.placeholder %}placeholder=\"{{ field.placeholder }}\"{% endif %} name=\"{{ (scope ~ field.name)|fieldName }}\">{{ value|join(\"\\n\") }}</textarea>
    </div>
</div>
", "forms/fields/textarea/textarea.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\forms\\fields\\textarea\\textarea.html.twig");
    }
}
