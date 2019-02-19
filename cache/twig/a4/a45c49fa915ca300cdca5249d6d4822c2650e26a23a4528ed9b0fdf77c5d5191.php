<?php

/* modular/text.html.twig */
class __TwigTemplate_7642966b7a153a863112d5555d5caf045454aff8443057657ec4280a09968760 extends Twig_Template
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
        echo "<div class=\"modular-row callout\">
    <div class=\"container\" style=\"text-align: ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "text_align", array());
        echo "\">
        ";
        // line 3
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 4
        echo "        ";
        if (($context["image"] ?? null)) {
            // line 5
            echo "            ";
            echo $this->getAttribute($this->getAttribute(($context["image"] ?? null), "cropResize", array(0 => 400, 1 => 400), "method"), "html", array(0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "image_align", array()))), "method");
            echo "
        ";
        }
        // line 7
        echo "        ";
        echo ($context["content"] ?? null);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  31 => 5,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row callout\">
    <div class=\"container\" style=\"text-align: {{ page.header.text_align }}\">
        {% set image = page.media.images|first %}
        {% if image %}
            {{ image.cropResize(400,400).html('','','align-'~page.header.image_align) }}
        {% endif %}
        {{ content }}
    </div>
</div>
", "modular/text.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\modular\\text.html.twig");
    }
}
