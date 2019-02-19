<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_9dd11d231571ebf93df902e32d4f97684d71f60e229d86cbadb94b047f85bf6e extends Twig_Template
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
";
        // line 2
        $context["min_chars"] = $this->getAttribute(($context["config"] ?? null), "get", array(0 => "plugins.simplesearch.min_query_length", 1 => 3), "method");
        // line 3
        echo "<div class=\"search-wrapper\">
    <form name=\"search\" data-simplesearch-form autocomplete=\"on\">
        <input
                id =\"site-search-input\"
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            ";
        // line 10
        if ((($context["min_chars"] ?? null) > 0)) {
            echo " min=\"";
            echo ($context["min_chars"] ?? null);
            echo "\" ";
        }
        // line 11
        echo "            required

            value=\"";
        // line 13
        echo ((($this->getAttribute(($context["uri"] ?? null), "route", array()) == "/search")) ? (twig_escape_filter($this->env, ($context["query"] ?? null))) : (""));
        echo "\"
            data-search-invalid=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS", ($context["min_chars"] ?? null));
        echo "\"
            data-search-separator=\"";
        // line 15
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
        echo "\"
            data-search-input=\"";
        // line 16
        echo ($context["base_url"] ?? null);
        echo "/search/query\"
        />
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "display_button", array())) {
            // line 19
            echo "            <button class=\"search-button\" id=\"search-btn\">SEARCH</button>
        ";
        }
        // line 21
        echo "    </form>
</div>


";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  62 => 19,  60 => 18,  55 => 16,  51 => 15,  47 => 14,  43 => 13,  39 => 11,  33 => 10,  24 => 3,  22 => 2,  19 => 1,);
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
{% set min_chars = config.get('plugins.simplesearch.min_query_length', 3) %}
<div class=\"search-wrapper\">
    <form name=\"search\" data-simplesearch-form autocomplete=\"on\">
        <input
                id =\"site-search-input\"
            name=\"searchfield\"
            class=\"search-input\"
            type=\"text\"
            {% if min_chars > 0 %} min=\"{{- min_chars -}}\" {% endif %}
            required

            value=\"{{ uri.route == \"/search\" ? query|e : '' }}\"
            data-search-invalid=\"{{ \"PLUGIN_SIMPLESEARCH.SEARCH_FIELD_MINIMUM_CHARACTERS\"|t(min_chars)|raw }}\"
            data-search-separator=\"{{ config.system.param_sep }}\"
            data-search-input=\"{{ base_url }}/search/query\"
        />
        {% if config.plugins.simplesearch.display_button %}
            <button class=\"search-button\" id=\"search-btn\">SEARCH</button>
        {% endif %}
    </form>
</div>


{#{% do assets.add('theme://js/site-search.js') %}#}", "partials/simplesearch_searchbox.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/partials/simplesearch_searchbox.html.twig");
    }
}
