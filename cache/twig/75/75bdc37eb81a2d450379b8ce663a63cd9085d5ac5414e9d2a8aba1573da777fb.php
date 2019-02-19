<?php

/* forms/contact_client_mail.html.twig */
class __TwigTemplate_564a4e6b98841a59b27aac2103550887dd430c7d2c4cfc5de4c25c46aa156ebb extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
    <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\" />
    <title>Thank you for your registration to download e-book</title>

    <style type=\"text/css\">
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            background: #ffffff;
            text-align: center;
        }
        
        html {
            width: 100%;
        }
        
        img {
            border: 0px;
            text-decoration: none;
            display: block;
            outline: none;
        }
        
        a,
        a:hover {
            color: #2c8fd6;
            text-decoration: none;
        }
        
        .ReadMsgBody {
            width: 100%;
            background-color: #ffffff;
        }
        
        .ExternalClass {
            width: 100%;
            background-color: #ffffff;
        }
        
        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        
        .main-bg {
            background: #444444;
        }
        
        @media only screen and (max-width:640px) {
            body {
                width: auto!important;
            }
            .main {
                width: 440px !important;
                margin: 0px;
                padding: 0px;
            }
            .two-column {
                width: 440px !important;
                margin: 0px;
                padding: 0px;
            }
            .mobileCenter {
                width: 440px !important;
                text-align: center!important;
            }
            .two-left {
                width: 384px !important;
                text-align: center!important;
            }
            .date {
                font: Bold 14px Arial, Helvetica, sans-serif;
                color: #2c8fd6;
            }
        }
        
        @media only screen and (max-width:479px) {
            body {
                width: auto!important;
            }
            .main {
                width: 280px !important;
                margin: 0px;
                padding: 0px;
            }
            .two-column {
                width: 280px !important;
                margin: 0px;
                padding: 0px;
            }
            .mobileCenter {
                width: 280px !important;
                text-align: center!important;
            }
            .two-left {
                width: 224px !important;
                text-align: center!important;
            }
            .date {
                font: Bold 14px Arial, Helvetica, sans-serif;
                color: #2c8fd6;
            }
        }
    </style>

</head>

<body style=\"background:#F0F2F1;\">
    <table width=\"100%\" height=\"100vh\" border=\"0\" align=\"center\" class=\"main-bg\" style=\"background:#F0F2F1;\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            <td align=\"center\" valign=\"top\" style=\"padding-top:60px; padding-bottom:60px;\">

                <!--Table Start-->

                <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"main\">
                    <tr>
                        <td align=\"left\" valign=\"top\">
                            <table width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"main\">

                                <tr>
                                    <td align=\"center\" valign=\"top\" bgcolor=\"#ffffff\" style=\"background:#ffffff;\">

                                        <table width=\"600\" border=\"\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"main\">
                                            <tr>
                                                <td align=\"left\" valign=\"top\">
                                                    <!--Banner Part Start-->
                                                    <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"main\">
                                                        <tr>
                                                            <td align=\"center\" valign=\"top\" style=\"padding:1px 0px 1px 0px;\" mc:edit=\"banner\"><img src=\"";
        // line 134
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/images/email-header.png\" width=\"600\" alt=\"\" style=\"display:block;width:100% !important; height:auto !important; \" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" valign=\"top\" style=\"padding:16px 0px 16px 0px;\">
                                                                <table width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"main\">
                                                                    <tr>
                                                                        <td align=\"left\" valign=\"top\" style=\"padding-left:25px; padding-top:8px; padding-right:12px;  font:Normal 14px Arial, Helvetica, sans-serif; color:#616060; line-height:20px;\" mc:edit=\"banner-inner\">
                                                                            <p><strong>Hello ";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "value", array()), "firstName", array()));
        echo ",</strong></p>

                                                                            <p><strong>Thank you for contacting MOWEDE.</strong></p>

                                                                            <p>Your inquiry has been received and someone will respond to you shortly.</p>

                                                                            <p>Regards,</p>
                                                                            <strong>The MOWEDE Team</strong>
                                                                            <p><i>Please do not reply to this email. Emailed replies to this notification message will not be received by MOWEDE.</i></p>
                                                                            <p style=\"width: 100%;text-align: center;display: block; margin-top: 25px\">
                                                                                <a href=\"";
        // line 151
        echo ($context["base_url_absolute"] ?? null);
        echo "\" class=\"button-radius btn-scroll\"><img src=\"";
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/images/goto.png\"></a>
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"left\" valign=\"top\">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!--Table End-->

            </td>
        </tr>
    </table>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "forms/contact_client_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 151,  164 => 141,  154 => 134,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
    <meta name=\"viewport\" content=\"width=device-width; initial-scale=1.0; maximum-scale=1.0;\" />
    <title>Thank you for your registration to download e-book</title>

    <style type=\"text/css\">
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            background: #ffffff;
            text-align: center;
        }
        
        html {
            width: 100%;
        }
        
        img {
            border: 0px;
            text-decoration: none;
            display: block;
            outline: none;
        }
        
        a,
        a:hover {
            color: #2c8fd6;
            text-decoration: none;
        }
        
        .ReadMsgBody {
            width: 100%;
            background-color: #ffffff;
        }
        
        .ExternalClass {
            width: 100%;
            background-color: #ffffff;
        }
        
        table {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        
        .main-bg {
            background: #444444;
        }
        
        @media only screen and (max-width:640px) {
            body {
                width: auto!important;
            }
            .main {
                width: 440px !important;
                margin: 0px;
                padding: 0px;
            }
            .two-column {
                width: 440px !important;
                margin: 0px;
                padding: 0px;
            }
            .mobileCenter {
                width: 440px !important;
                text-align: center!important;
            }
            .two-left {
                width: 384px !important;
                text-align: center!important;
            }
            .date {
                font: Bold 14px Arial, Helvetica, sans-serif;
                color: #2c8fd6;
            }
        }
        
        @media only screen and (max-width:479px) {
            body {
                width: auto!important;
            }
            .main {
                width: 280px !important;
                margin: 0px;
                padding: 0px;
            }
            .two-column {
                width: 280px !important;
                margin: 0px;
                padding: 0px;
            }
            .mobileCenter {
                width: 280px !important;
                text-align: center!important;
            }
            .two-left {
                width: 224px !important;
                text-align: center!important;
            }
            .date {
                font: Bold 14px Arial, Helvetica, sans-serif;
                color: #2c8fd6;
            }
        }
    </style>

</head>

<body style=\"background:#F0F2F1;\">
    <table width=\"100%\" height=\"100vh\" border=\"0\" align=\"center\" class=\"main-bg\" style=\"background:#F0F2F1;\" cellpadding=\"0\" cellspacing=\"0\">
        <tr>
            <td align=\"center\" valign=\"top\" style=\"padding-top:60px; padding-bottom:60px;\">

                <!--Table Start-->

                <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"main\">
                    <tr>
                        <td align=\"left\" valign=\"top\">
                            <table width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"main\">

                                <tr>
                                    <td align=\"center\" valign=\"top\" bgcolor=\"#ffffff\" style=\"background:#ffffff;\">

                                        <table width=\"600\" border=\"\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"main\">
                                            <tr>
                                                <td align=\"left\" valign=\"top\">
                                                    <!--Banner Part Start-->
                                                    <table width=\"600\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" class=\"main\">
                                                        <tr>
                                                            <td align=\"center\" valign=\"top\" style=\"padding:1px 0px 1px 0px;\" mc:edit=\"banner\"><img src=\"{{ base_url_absolute }}/user/themes/bootstrap/images/email-header.png\" width=\"600\" alt=\"\" style=\"display:block;width:100% !important; height:auto !important; \" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td align=\"left\" valign=\"top\" style=\"padding:16px 0px 16px 0px;\">
                                                                <table width=\"600\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" class=\"main\">
                                                                    <tr>
                                                                        <td align=\"left\" valign=\"top\" style=\"padding-left:25px; padding-top:8px; padding-right:12px;  font:Normal 14px Arial, Helvetica, sans-serif; color:#616060; line-height:20px;\" mc:edit=\"banner-inner\">
                                                                            <p><strong>Hello {{ form.value.firstName|e }},</strong></p>

                                                                            <p><strong>Thank you for contacting MOWEDE.</strong></p>

                                                                            <p>Your inquiry has been received and someone will respond to you shortly.</p>

                                                                            <p>Regards,</p>
                                                                            <strong>The MOWEDE Team</strong>
                                                                            <p><i>Please do not reply to this email. Emailed replies to this notification message will not be received by MOWEDE.</i></p>
                                                                            <p style=\"width: 100%;text-align: center;display: block; margin-top: 25px\">
                                                                                <a href=\"{{ base_url_absolute }}\" class=\"button-radius btn-scroll\"><img src=\"{{ base_url_absolute }}/user/themes/bootstrap/images/goto.png\"></a>
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td align=\"left\" valign=\"top\">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!--Table End-->

            </td>
        </tr>
    </table>
</body>

</html>", "forms/contact_client_mail.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\forms\\contact_client_mail.html.twig");
    }
}
