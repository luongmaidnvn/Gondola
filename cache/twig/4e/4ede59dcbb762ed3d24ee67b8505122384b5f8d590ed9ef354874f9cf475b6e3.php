<?php

/* form-messages.html.twig */
class __TwigTemplate_9f6914fa7d6df8f2d5124bac1cb74d5fbab40868cdd676e936406b8007b433e9 extends Twig_Template
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
        $this->loadTemplate("partials/form-messages.html.twig", "form-messages.html.twig", 1)->display($context);
        // line 2
        http_response_code($this->getAttribute(($context["form"] ?? null), "responseCode", array()));
    }

    public function getTemplateName()
    {
        return "form-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'partials/form-messages.html.twig' %}
{% do http_response_code(form.responseCode) %}
", "form-messages.html.twig", "D:\\wamp64\\www\\mowede\\user\\plugins\\form\\templates\\form-messages.html.twig");
    }
}
