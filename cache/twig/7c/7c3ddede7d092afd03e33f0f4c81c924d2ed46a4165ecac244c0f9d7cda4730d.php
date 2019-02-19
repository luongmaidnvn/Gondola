<?php

/* forms/fields/select/select.html.twig */
class __TwigTemplate_ab3143b2843d63c654b140199e87a273601cc61097df7278d0c543e9b41a3bd4 extends Twig_Template
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
        <select class=\"form-control\" name=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\"
                ";
        // line 14
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 16
        echo "                ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 17
        echo "                >
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 19
            echo "            <option ";
            if (($context["key"] == ($context["value"] ?? null))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo $context["key"];
            echo "\">
                ";
            // line 20
            echo $context["text"];
            echo "
            </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </select>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/select/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  83 => 20,  74 => 19,  70 => 18,  67 => 17,  62 => 16,  57 => 15,  53 => 14,  49 => 13,  42 => 10,  36 => 8,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
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
        <select class=\"form-control\" name=\"{{ (scope ~ field.name)|fieldName }}\"
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                >
            {% for key, text in field.options %}
            <option {% if key == value %}selected=\"selected\"{% endif %} value=\"{{ key }}\">
                {{ text }}
            </option>
            {% endfor %}
        </select>
    </div>
</div>
", "forms/fields/select/select.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/gondola/user/themes/bootstrap/templates/forms/fields/select/select.html.twig");
    }
}
