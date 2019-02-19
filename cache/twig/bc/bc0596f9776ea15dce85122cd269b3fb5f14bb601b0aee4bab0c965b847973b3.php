<?php

/* forms/fields/captcha/captcha.html.twig */
class __TwigTemplate_08a23dc392c021fce0621661fff482000fea82ca7f3bf08205453956cc428703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/captcha/captcha.html.twig", 1);
        $this->blocks = array(
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        echo "    
    <script>
    \$(document).ready(function () {
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeNFogUAAAAACapIHbXE2T2QXOIkpEw-ubfFK7m', {action: 'action_name'})
            .then(function(token) {
                \$('#g-recaptcha-response').val(token);
            });
        });
    });
    </script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha\">
        <input type=\"hidden\" class=\"g-recaptcha-response\"  value=\"\" name=\"g-recaptcha-response\" id=\"g-recaptcha-response\">
        <label id=\"g-recaptcha-error\" class=\"error\" for=\"g-recaptcha-response\"></label>
        This site is protected by reCAPTCHA and the Google
        <a href=\"https://policies.google.com/privacy\">Privacy Policy</a> and
        <a href=\"https://policies.google.com/terms\">Terms of Service</a> apply.
    </div>
";
    }

    public function getTemplateName()
    {
        return "forms/fields/captcha/captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/field.html.twig\" %}

{% block input %}    
    <script>
    \$(document).ready(function () {
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeNFogUAAAAACapIHbXE2T2QXOIkpEw-ubfFK7m', {action: 'action_name'})
            .then(function(token) {
                \$('#g-recaptcha-response').val(token);
            });
        });
    });
    </script>
    <div class=\"g-recaptcha\" id=\"g-recaptcha\">
        <input type=\"hidden\" class=\"g-recaptcha-response\"  value=\"\" name=\"g-recaptcha-response\" id=\"g-recaptcha-response\">
        <label id=\"g-recaptcha-error\" class=\"error\" for=\"g-recaptcha-response\"></label>
        This site is protected by reCAPTCHA and the Google
        <a href=\"https://policies.google.com/privacy\">Privacy Policy</a> and
        <a href=\"https://policies.google.com/terms\">Terms of Service</a> apply.
    </div>
{% endblock %}
", "forms/fields/captcha/captcha.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/gondola/user/plugins/form/templates/forms/fields/captcha/captcha.html.twig");
    }
}
