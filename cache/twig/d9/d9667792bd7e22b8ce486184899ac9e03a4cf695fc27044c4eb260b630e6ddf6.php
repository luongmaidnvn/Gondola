<?php

/* partials/footer.html.twig */
class __TwigTemplate_3d7024ed049a4693e82543a17434d1e4bbbaa7f98478e3c88bb0c54919f6492d extends Twig_Template
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
        echo "<footer class=\"footer-distributed \">
    <div class=\"container\">
\t\t\t<div class=\"col-sm-4 footer-left no-padding\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                \t<img class=\"logo\" src=\"";
        // line 5
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/Mowede-Logo-white.png\">
                </a>
\t\t\t\t<div>
\t\t\t\t\t<i class=\"phone-footer\"><img src=\"";
        // line 8
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/phone-footer.png\"></i>
\t\t\t\t\t<p>+84 2363 655 336 </p>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<i class=\"mail-footer\"><img src=\"";
        // line 13
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/mail-footer.png\"></i>
\t\t\t\t\t<p><a href=\"mailto:sales@mowede.com\">sales@mowede.com</a></p>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<i class=\"location-footer\"><img src=\"";
        // line 18
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/location-footer.png\"></i>
\t\t\t\t\t<p>8th floor, 346 2/9 Street, Hai Chau District, Da Nang, Vietnam</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-4 footer-center no-padding\">
                <ul class=\"list-unstyled\">
                   ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "\t\t\t\t   \t\t";
            $context["url"] = $this->getAttribute($context["page"], "url", array());
            // line 27
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()), "count", array()) > 0)) {
                echo " 
\t\t\t\t\t\t\t";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 30
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["url"] = $this->getAttribute($context["child"], "url", array());
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "children", array()), "visible", array()), "count", array()) > 0)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                            // line 32
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["child"], "children", array()), "visible", array()));
                            $context['loop'] = array(
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            );
                            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                                $length = count($context['_seq']);
                                $context['loop']['revindex0'] = $length - 1;
                                $context['loop']['revindex'] = $length;
                                $context['loop']['length'] = $length;
                                $context['loop']['last'] = 1 === $length;
                            }
                            foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                                // line 33
                                echo "\t\t\t\t\t\t\t\t\t\t\t";
                                if ($this->getAttribute($context["loop"], "last", array())) {
                                    // line 34
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                    $context["url"] = $this->getAttribute($context["sub"], "url", array());
                                    // line 35
                                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 36
                                echo "\t\t\t\t\t\t\t\t\t\t";
                                ++$context['loop']['index0'];
                                ++$context['loop']['index'];
                                $context['loop']['first'] = false;
                                if (isset($context['loop']['length'])) {
                                    --$context['loop']['revindex0'];
                                    --$context['loop']['revindex'];
                                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "\t\t\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "\t\t\t\t\t\t";
            }
            // line 41
            echo "                        <li>
                           <a href=\"";
            // line 42
            echo ($context["url"] ?? null);
            echo "\">";
            echo $this->getAttribute($context["page"], "menu", array());
            echo "</a>
                        </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </ul>
\t\t\t</div>

\t\t\t<div class=\"col-sm-4 footer-right no-padding\">
\t\t\t\t<div class=\"footer-icons\">
\t\t\t\t\t<a class=\"linkedin\" href=\"https://www.linkedin.com/company/mowede/\" target=\"_blank\"><img src=\"";
        // line 50
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/linkedin.png\"></a>
\t\t\t\t\t<a href=\"https://www.facebook.com/MOWEDE-215261059074489/\" target=\"_blank\"><img src=\"";
        // line 51
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/facebook.png\"></a>
\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UC7DHzxzqTTaUn0KybjG7zww/featured?view_as=subscriber\" target=\"_blank\"><img src=\"";
        // line 52
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/youtube.png\"></a>
\t\t\t\t\t<a href=\"https://twitter.com/mowedecompany\" target=\"_blank\"><img src=\"";
        // line 53
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/twitter.png\"></a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>\t\t\t
            </div>\t
<div class=\"copyright\">
\t<div class=\"container\">
\t\t<div class=\"col-xs-8 cp no-padding\">© ";
        // line 60
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " MOWEDE. All rights reserved.</div>
\t\t<div class=\"col-xs-4 security no-padding\"><a href=\"";
        // line 61
        echo ($context["base_url_absolute"] ?? null);
        echo "/security-policy\">Security Policy</a></div>
\t</div>
</div>\t\t
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 61,  206 => 60,  196 => 53,  192 => 52,  188 => 51,  184 => 50,  177 => 45,  166 => 42,  163 => 41,  160 => 40,  146 => 39,  143 => 38,  140 => 37,  126 => 36,  123 => 35,  120 => 34,  117 => 33,  100 => 32,  95 => 31,  92 => 30,  89 => 29,  72 => 28,  67 => 27,  64 => 26,  60 => 25,  50 => 18,  42 => 13,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"footer-distributed \">
    <div class=\"container\">
\t\t\t<div class=\"col-sm-4 footer-left no-padding\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                \t<img class=\"logo\" src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/Mowede-Logo-white.png\">
                </a>
\t\t\t\t<div>
\t\t\t\t\t<i class=\"phone-footer\"><img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/phone-footer.png\"></i>
\t\t\t\t\t<p>+84 2363 655 336 </p>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<i class=\"mail-footer\"><img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/mail-footer.png\"></i>
\t\t\t\t\t<p><a href=\"mailto:sales@mowede.com\">sales@mowede.com</a></p>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<i class=\"location-footer\"><img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/location-footer.png\"></i>
\t\t\t\t\t<p>8th floor, 346 2/9 Street, Hai Chau District, Da Nang, Vietnam</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-4 footer-center no-padding\">
                <ul class=\"list-unstyled\">
                   {% for page in pages.children.visible %}
\t\t\t\t   \t\t{% set url = page.url %}
\t\t\t\t\t\t{% if page.children.visible.count > 0 %} 
\t\t\t\t\t\t\t{% for child in page.children.visible %}
\t\t\t\t\t\t\t\t{% if loop.last %}
\t\t\t\t\t\t\t\t\t{% set url = child.url %}
\t\t\t\t\t\t\t\t\t{% if child.children.visible.count > 0 %} 
\t\t\t\t\t\t\t\t\t\t{% for sub in child.children.visible %}
\t\t\t\t\t\t\t\t\t\t\t{% if loop.last %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set url = sub.url %}
\t\t\t\t\t\t\t\t\t\t\t{%endif%}
\t\t\t\t\t\t\t\t\t\t{%endfor%}
\t\t\t\t\t\t\t\t\t{%endif%}
\t\t\t\t\t\t\t\t{%endif%}
\t\t\t\t\t\t\t{%endfor%}
\t\t\t\t\t\t{%endif%}
                        <li>
                           <a href=\"{{ url }}\">{{ page.menu }}</a>
                        </li>
                {% endfor %}
                </ul>
\t\t\t</div>

\t\t\t<div class=\"col-sm-4 footer-right no-padding\">
\t\t\t\t<div class=\"footer-icons\">
\t\t\t\t\t<a class=\"linkedin\" href=\"https://www.linkedin.com/company/mowede/\" target=\"_blank\"><img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/linkedin.png\"></a>
\t\t\t\t\t<a href=\"https://www.facebook.com/MOWEDE-215261059074489/\" target=\"_blank\"><img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/facebook.png\"></a>
\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UC7DHzxzqTTaUn0KybjG7zww/featured?view_as=subscriber\" target=\"_blank\"><img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/youtube.png\"></a>
\t\t\t\t\t<a href=\"https://twitter.com/mowedecompany\" target=\"_blank\"><img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/twitter.png\"></a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>\t\t\t
            </div>\t
<div class=\"copyright\">
\t<div class=\"container\">
\t\t<div class=\"col-xs-8 cp no-padding\">© {{\"now\"|date(\"Y\")}} MOWEDE. All rights reserved.</div>
\t\t<div class=\"col-xs-4 security no-padding\"><a href=\"{{ base_url_absolute }}/security-policy\">Security Policy</a></div>
\t</div>
</div>\t\t
</footer>
", "partials/footer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/partials/footer.html.twig");
    }
}
