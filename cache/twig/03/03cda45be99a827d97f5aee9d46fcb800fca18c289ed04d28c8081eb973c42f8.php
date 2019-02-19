<?php

/* partials/simplesearch_searchbox_blog.html.twig */
class __TwigTemplate_8c11452ebefa7c9091c6d031b59f3e0255bb1910b92c302234ae692aebd05e77 extends Twig_Template
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
        $context["min_chars"] = $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.simplesearch.min_query_length", 1 => 3), "method");
        // line 2
        echo "<div class=\"search-wrapper\">
    <form name=\"search\" data-simplesearch-form autocomplete=\"on\">
        <input
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            ";
        // line 8
        if ((($context["min_chars"] ?? null) > 0)) {
            echo " min=\"";
            echo ($context["min_chars"] ?? null);
            echo "\" ";
        }
        // line 9
        echo "            required
            value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["query"] ?? null));
        echo "\"
            data-search-invalid=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS", ($context["min_chars"] ?? null));
        echo "\"
            data-search-separator=\"";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
        echo "\"
            data-search-input=\"";
        // line 13
        echo ($context["base_url"] ?? null);
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array()) == "@self")) ? ("") : (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array()) == "/")) ? ("") : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array())))));
        echo "/query\"
        />
        ";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "display_button", array())) {
            // line 16
            echo "            <button class=\"search-button\" type=\"submit\">SEARCH</button>
        ";
        }
        // line 18
        echo "    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox_blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  58 => 16,  56 => 15,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  35 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set min_chars = config.get('plugins.simplesearch.min_query_length', 3) %}
<div class=\"search-wrapper\">
    <form name=\"search\" data-simplesearch-form autocomplete=\"on\">
        <input
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            {% if min_chars > 0 %} min=\"{{- min_chars -}}\" {% endif %}
            required
            value=\"{{ query|e }}\"
            data-search-invalid=\"{{ \"PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS\"|t(min_chars)|raw }}\"
            data-search-separator=\"{{ config.system.param_sep }}\"
            data-search-input=\"{{ base_url }}{{ config.plugins.simplesearch.route == '@self' ? '' : (config.plugins.simplesearch.route == '/' ? '' : config.plugins.simplesearch.route) }}/query\"
        />
        {% if config.plugins.simplesearch.display_button %}
            <button class=\"search-button\" type=\"submit\">SEARCH</button>
        {% endif %}
    </form>
</div>
", "partials/simplesearch_searchbox_blog.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\partials\\simplesearch_searchbox_blog.html.twig");
    }
}
