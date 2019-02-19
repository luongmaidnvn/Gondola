<?php

/* error.html.twig */
class __TwigTemplate_f9f162da23356d2afd62518e39dc68f624bcff1ee6be15ce0960529e12e51d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"modular-row\">
    \t<div class=\"container\">
\t\t\t<div class=\"err-page\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<p style=\"font-size: 60px\"><b>Oops!</b></p>
\t\t\t\t\t<p>The page you're looking for doesn't exist</p>
\t\t\t\t\t<p>Don't panic, just click big button to return home</p>
\t\t\t\t\t<a class=\"mwd-btn\" href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "\">
\t\t\t\t\t\t\tGO HOME
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<img src=\"";
        // line 16
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/images/404.gif\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
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

{% block content %}
\t<div class=\"modular-row\">
    \t<div class=\"container\">
\t\t\t<div class=\"err-page\">
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<p style=\"font-size: 60px\"><b>Oops!</b></p>
\t\t\t\t\t<p>The page you're looking for doesn't exist</p>
\t\t\t\t\t<p>Don't panic, just click big button to return home</p>
\t\t\t\t\t<a class=\"mwd-btn\" href=\"{{ base_url_absolute }}\">
\t\t\t\t\t\t\tGO HOME
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t<img src=\"{{ base_url_absolute }}/user/themes/bootstrap/images/404.gif\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
{% endblock %}
", "error.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\error.html.twig");
    }
}
