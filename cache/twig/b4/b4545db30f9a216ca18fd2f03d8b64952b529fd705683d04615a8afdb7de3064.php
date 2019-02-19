<?php

/* modular/our_customer.html.twig */
class __TwigTemplate_b3e623ebaee9feff3930babe7042aff362207028a992afd90d58974d2a2e6e09 extends Twig_Template
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
        echo "
<link href=\"";
        // line 2
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/css/slick.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"";
        // line 3
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/css/slick-theme.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        // line 4
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/our-customer.css"), "method");
        // line 5
        echo "<div class=\"container\">
    <div class=\"customer_branch\">
     ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "our_customers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["uc"]) {
            // line 8
            echo "        <div class=\"image-inside\"> ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["uc"], "branch", array()), array(), "array"), "html", array(), "method");
            echo "</div>
      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</div>

";
        // line 14
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/slick.min.js"), "method");
        // line 15
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/our-customer.js"), "method");
        // line 16
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular/our_customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  57 => 15,  55 => 14,  50 => 11,  40 => 8,  36 => 7,  32 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<link href=\"{{ base_url_absolute }}/user/themes/bootstrap/css/slick.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"{{ base_url_absolute }}/user/themes/bootstrap/css/slick-theme.css\" type=\"text/css\" rel=\"stylesheet\" />
{% do assets.add('theme://css/our-customer.css') %}
<div class=\"container\">
    <div class=\"customer_branch\">
     {% for uc in page.header.our_customers %}
        <div class=\"image-inside\"> {{ page.media.images[uc.branch].html() }}</div>
      
    {% endfor %}
    </div>
</div>

{% do assets.add('theme://js/slick.min.js') %}
{% do assets.add('theme://js/our-customer.js') %}

", "modular/our_customer.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/modular/our_customer.html.twig");
    }
}
