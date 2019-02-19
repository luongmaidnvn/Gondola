<?php

/* modular/discrible.html.twig */
class __TwigTemplate_37446122cb122f62cf6c72e212fe11dbdf2956761743fb4e9a4a3341a96d6959 extends Twig_Template
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/discrible.css"), "method");
        echo " 

    <div class=\"container discrible-container\">        
        <div class=\"row discrible\" style=\"padding: ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "padding", array());
        echo "\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "discribles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["discrible"]) {
            // line 6
            echo "               <div class=\"col-sm-4\">
                        <div class=\"image\">
                            ";
            // line 8
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["discrible"], "thumbnail", array()), array(), "array"), "html", array(), "method");
            echo "
                        </div>
                        <div class='content'>
                            <div class=\"title\"> 
                                ";
            // line 12
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["discrible"], "text", array()));
            echo "
                            </div>
                            <div class=\"info\">
                                ";
            // line 15
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["discrible"], "content", array()));
            echo "
                            </div>
                        </div>
                </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discrible'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
    </div>

  ";
    }

    public function getTemplateName()
    {
        return "modular/discrible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  50 => 15,  44 => 12,  37 => 8,  33 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do assets.addCss('theme://css/discrible.css') %} 

    <div class=\"container discrible-container\">        
        <div class=\"row discrible\" style=\"padding: {{ page.header.padding }}\">
        {% for discrible in page.header.discribles %}
               <div class=\"col-sm-4\">
                        <div class=\"image\">
                            {{ page.media.images[discrible.thumbnail].html() }}
                        </div>
                        <div class='content'>
                            <div class=\"title\"> 
                                {{ discrible.text|markdown }}
                            </div>
                            <div class=\"info\">
                                {{ discrible.content|markdown }}
                            </div>
                        </div>
                </div>
        {% endfor %}
        </div>
    </div>

  ", "modular/discrible.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/modular/discrible.html.twig");
    }
}
