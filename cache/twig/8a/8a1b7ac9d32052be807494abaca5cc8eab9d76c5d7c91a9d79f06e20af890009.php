<?php

/* @Var:{% include 'forms/contact_client_mail.html.twig' %} */
class __TwigTemplate_2fc41230abc02b7b9cbc4a03b4d8d7b2f859226e0600eb14784c63cec3c323eb extends Twig_Template
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
        $this->loadTemplate("forms/contact_client_mail.html.twig", "@Var:{% include 'forms/contact_client_mail.html.twig' %}", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@Var:{% include 'forms/contact_client_mail.html.twig' %}";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'forms/contact_client_mail.html.twig' %}", "@Var:{% include 'forms/contact_client_mail.html.twig' %}", "");
    }
}
