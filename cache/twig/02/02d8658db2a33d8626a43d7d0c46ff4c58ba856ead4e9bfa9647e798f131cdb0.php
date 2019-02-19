<?php

/* modular/policy_item.html.twig */
class __TwigTemplate_7b12bb8169f4d7b38281bb57379ba6713e0071bd372111c5c50b6dff99098e6c extends Twig_Template
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
<div class=\"modular-row\">
    <div class=\"container\">
        <div class=\"policy-content\">
            ";
        // line 5
        echo ($context["content"] ?? null);
        echo "
        </div>
        <div class=\"policy-items\">        
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "policy_items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["policy_item"]) {
            // line 9
            echo "                <div class=\"policy-item\">
                    ";
            // line 10
            if (($this->getAttribute($context["policy_item"], "layout", array()) == true)) {
                // line 11
                echo "                        <div class=\"policy-item-thumbnail col-sm-4\">
                            ";
                // line 12
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["policy_item"], "thumbnail", array()), array(), "array"), "html", array(), "method");
                echo "
                        </div>
                        <div class=\"policy-item-content col-sm-8\">
                            ";
                // line 15
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["policy_item"], "content", array()));
                echo "
                        </div>
                    ";
            } else {
                // line 18
                echo "                        <div class=\"policy-item-content col-sm-8\">
                            ";
                // line 19
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["policy_item"], "content", array()));
                echo "
                        </div>
                        <div class=\"policy-item-thumbnail col-sm-4\">
                            ";
                // line 22
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["policy_item"], "thumbnail", array()), array(), "array"), "html", array(), "method");
                echo "
                        </div>
                    ";
            }
            // line 25
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['policy_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/policy_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  70 => 25,  64 => 22,  58 => 19,  55 => 18,  49 => 15,  43 => 12,  40 => 11,  38 => 10,  35 => 9,  31 => 8,  25 => 5,  19 => 1,);
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
<div class=\"modular-row\">
    <div class=\"container\">
        <div class=\"policy-content\">
            {{ content }}
        </div>
        <div class=\"policy-items\">        
            {% for policy_item in page.header.policy_items %}
                <div class=\"policy-item\">
                    {% if policy_item.layout == true %}
                        <div class=\"policy-item-thumbnail col-sm-4\">
                            {{ page.media.images[policy_item.thumbnail].html() }}
                        </div>
                        <div class=\"policy-item-content col-sm-8\">
                            {{ policy_item.content|markdown }}
                        </div>
                    {% else %}
                        <div class=\"policy-item-content col-sm-8\">
                            {{ policy_item.content|markdown }}
                        </div>
                        <div class=\"policy-item-thumbnail col-sm-4\">
                            {{ page.media.images[policy_item.thumbnail].html() }}
                        </div>
                    {% endif %}
                </div>
            {% endfor %}
        </div>
    </div>
</div>
", "modular/policy_item.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\modular\\policy_item.html.twig");
    }
}
