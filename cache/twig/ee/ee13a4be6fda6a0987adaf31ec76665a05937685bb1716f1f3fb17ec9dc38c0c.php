<?php

/* modular/become_a_partner.html.twig */
class __TwigTemplate_888ae6895232b160304cf6d38b1c5b24e9469297ab251a10404cdbaf1826bc88 extends Twig_Template
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
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/contact-us-form.css"), "method");
        // line 2
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/bootstrap-multiselect.css"), "method");
        // line 3
        echo "<script type=\"text/javascript\" src=\"";
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/js/jquery.validate.min.js\"></script>
<div id=\"sumit-form-preload\"></div>
<div class=\"contact-us-form container\">
    <div class=\"text-contact-form\">
         <h1>Become a <strong>Partner</strong></h1>
    </div>
";
        // line 9
        $this->loadTemplate("forms/form.html.twig", "modular/become_a_partner.html.twig", 9)->display($context);
        // line 10
        echo "</div>
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
<div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
    </div>
    <div class=\"modal-body\">
        <div class=\"inside-body\">
            <img class=\"inside-img p-class\" src=\"";
        // line 21
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/email.png\">
        </div>
        <div class=\"inside-text\">
            <p class=\"big p-class\" ><strong>Thank you for contacting us!</strong></p>
            <p class=\"below p-class\">We have sent your email to a member of our sales team, and you can expect a reply soon.
<p class=\"below p-class\">A copy has been emailed directly to the email address that you have been provided.</p>
            <p class=\"if-you-need\">If you need to reach us sooner, please call us at<strong> +84 2363 655 336</strong></p>
            <p class=\"learn-more\"><strong>Learn more about MoWeDe</strong></p>
            <div class=\"row email-phone-row\">
                <div class=\"col-xs-6\">
                    <div class=\"row phone-popup\">
                            <p>+84 2363 655 336</p>
                            <img src=\"";
        // line 33
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/phone-popup.png\">
                    </div>
                </div>
                 <div class=\"col-xs-6\">
                     <div class=\"row email-popup\">
                            <img src=\"";
        // line 38
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/email-popup.png\">
                            <p><a href=\"mailto:sales@mowede.com\">sales@mowede.com</a></p>
                    </div>
                </div>
            </div>
            <div class=\"by-submit\">
                <p><i>By submitting this form, you agree that you have read and understand MoWeDe's Privacy Policy. You can Opt-Out of communications at any time. We respect your privacy.</i></p>
            </div>
            <button type=\"button\" class=\"btn btn-default p-class\" data-dismiss=\"modal\">OK</button>
        </div>
    </div>
    </div>
    
</div>
</div>
<input type=\"hidden\" class=\"hid-competitor\" value=";
        // line 53
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "competitor", array()));
        echo ">
<input type=\"hidden\" class=\"hid-exitingcustomer\" value=";
        // line 54
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "existingcustomer", array()));
        echo ">
<input type=\"hidden\" class=\"hid-blacklist\" value=";
        // line 55
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "blacklist", array()));
        echo ">

";
        // line 57
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/jquery.validate.min.js"), "method");
        // line 58
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/bootstrap-multiselect.js"), "method");
        // line 59
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/partner-form.js"), "method");
        // line 60
        echo "


";
    }

    public function getTemplateName()
    {
        return "modular/become_a_partner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 60,  106 => 59,  104 => 58,  102 => 57,  97 => 55,  93 => 54,  89 => 53,  71 => 38,  63 => 33,  48 => 21,  35 => 10,  33 => 9,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do assets.add('theme://css/contact-us-form.css') %}
{% do assets.add('theme://css/bootstrap-multiselect.css') %}
<script type=\"text/javascript\" src=\"{{ base_url_absolute }}/user/themes/bootstrap/js/jquery.validate.min.js\"></script>
<div id=\"sumit-form-preload\"></div>
<div class=\"contact-us-form container\">
    <div class=\"text-contact-form\">
         <h1>Become a <strong>Partner</strong></h1>
    </div>
{% include \"forms/form.html.twig\" %}
</div>
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
<div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
    <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
    </div>
    <div class=\"modal-body\">
        <div class=\"inside-body\">
            <img class=\"inside-img p-class\" src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/email.png\">
        </div>
        <div class=\"inside-text\">
            <p class=\"big p-class\" ><strong>Thank you for contacting us!</strong></p>
            <p class=\"below p-class\">We have sent your email to a member of our sales team, and you can expect a reply soon.
<p class=\"below p-class\">A copy has been emailed directly to the email address that you have been provided.</p>
            <p class=\"if-you-need\">If you need to reach us sooner, please call us at<strong> +84 2363 655 336</strong></p>
            <p class=\"learn-more\"><strong>Learn more about MoWeDe</strong></p>
            <div class=\"row email-phone-row\">
                <div class=\"col-xs-6\">
                    <div class=\"row phone-popup\">
                            <p>+84 2363 655 336</p>
                            <img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/phone-popup.png\">
                    </div>
                </div>
                 <div class=\"col-xs-6\">
                     <div class=\"row email-popup\">
                            <img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/email-popup.png\">
                            <p><a href=\"mailto:sales@mowede.com\">sales@mowede.com</a></p>
                    </div>
                </div>
            </div>
            <div class=\"by-submit\">
                <p><i>By submitting this form, you agree that you have read and understand MoWeDe's Privacy Policy. You can Opt-Out of communications at any time. We respect your privacy.</i></p>
            </div>
            <button type=\"button\" class=\"btn btn-default p-class\" data-dismiss=\"modal\">OK</button>
        </div>
    </div>
    </div>
    
</div>
</div>
<input type=\"hidden\" class=\"hid-competitor\" value={{ page.header.competitor|json_encode }}>
<input type=\"hidden\" class=\"hid-exitingcustomer\" value={{ page.header.existingcustomer|json_encode }}>
<input type=\"hidden\" class=\"hid-blacklist\" value={{ page.header.blacklist|json_encode }}>

{% do assets.add('theme://js/jquery.validate.min.js') %}
{% do assets.add('theme://js/bootstrap-multiselect.js') %}
{% do assets.add('theme://js/partner-form.js') %}



", "modular/become_a_partner.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\modular\\become_a_partner.html.twig");
    }
}
