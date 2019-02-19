<?php

/* modular/engagement.html.twig */
class __TwigTemplate_a5528aef1ac60bc05c5c65c72df7829948199dbde5542098a818f0edb3ec225f extends Twig_Template
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
        echo "     <div class=\"container engagement-container\">        
        <div class=\"row engagement\" style=\"padding: ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "padding", array());
        echo "\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "engagements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["engagement"]) {
            // line 4
            echo "               <div class=\"col-sm-12\">
                        <div class=\"col-md-1 image\">
                            ";
            // line 6
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["engagement"], "thumbnail", array()), array(), "array"), "html", array(), "method");
            echo "
                        </div>
                        <div class='col-md-11 content'>
                            <div class=\"title\" style=\"font-size: 20px;\"> 
                                ";
            // line 10
            echo $this->getAttribute($context["engagement"], "text", array());
            echo "
                            </div>
                            <div class=\"info\">
                                ";
            // line 13
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["engagement"], "content", array()));
            echo "
                            </div>
                        </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['engagement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>
    </div>

  ";
    }

    public function getTemplateName()
    {
        return "modular/engagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  47 => 13,  41 => 10,  34 => 6,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("     <div class=\"container engagement-container\">        
        <div class=\"row engagement\" style=\"padding: {{ page.header.padding }}\">
        {% for engagement in page.header.engagements %}
               <div class=\"col-sm-12\">
                        <div class=\"col-md-1 image\">
                            {{ page.media.images[engagement.thumbnail].html() }}
                        </div>
                        <div class='col-md-11 content'>
                            <div class=\"title\" style=\"font-size: 20px;\"> 
                                {{ engagement.text }}
                            </div>
                            <div class=\"info\">
                                {{ engagement.content|markdown }}
                            </div>
                        </div>
                </div>
        {% endfor %}
        </div>
    </div>

  ", "modular/engagement.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\modular\\engagement.html.twig");
    }
}
