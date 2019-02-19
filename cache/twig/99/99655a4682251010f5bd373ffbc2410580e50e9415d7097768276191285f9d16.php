<?php

/* modular/team.html.twig */
class __TwigTemplate_846dd8eafdebf35b204d73870a190473e5a5a33f494a3c10a71721ee39f6f66c extends Twig_Template
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
        echo "<div class=\"modular-row\">
    <div class=\"container\">              
        ";
        // line 3
        $context["total"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "teams", array()));
        echo " 
        ";
        // line 4
        $context["col"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "layouts", array());
        // line 5
        echo "        ";
        $context["rows"] = (($context["total"] ?? null) / ($context["col"] ?? null));
        // line 6
        echo "        ";
        $context["remainder"] = (($context["total"] ?? null) % ($context["col"] ?? null));
        // line 7
        echo "        ";
        if ((($context["remainder"] ?? null) > 0)) {
            // line 8
            echo "            ";
            $context["rows"] = (($context["rows"] ?? null) + 1);
            // line 9
            echo "        ";
        }
        // line 10
        echo "        ";
        $context["start"] = 0;
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["rows"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 12
            echo "            ";
            $context["start"] = (($context["row"] - 1) * ($context["col"] ?? null));
            // line 13
            echo "            ";
            $context["end"] = (($context["row"] * ($context["col"] ?? null)) - 1);
            // line 14
            echo "            ";
            if ((($context["end"] ?? null) >= ($context["total"] ?? null))) {
                // line 15
                echo "            ";
                $context["end"] = ($context["total"] ?? null);
                // line 16
                echo "            ";
            }
            // line 17
            echo "            <h2 class=\"section-team-title\"> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["header"] ?? null), "title", array()));
            echo " </h2>
            <div class=\"col-xs-12 teams\">
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["start"] ?? null), ($context["end"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "                    <div class=\"col-sm-";
                echo (12 / ($context["col"] ?? null));
                echo "\">
                        <div class=\"team-thumbnail\">
                            ";
                // line 22
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "teams", array()), $context["item"], array(), "array"), "thumbnail", array()), array(), "array"), "html", array(), "method");
                echo "
                        </div>
                        <p class=\"team-name\"> ";
                // line 24
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "teams", array()), $context["item"], array(), "array"), "name", array());
                echo " </p>
                        <p class=\"team-title\"> ";
                // line 25
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "teams", array()), $context["item"], array(), "array"), "title", array());
                echo " </p>
                        <div class=\"team-bio\"> ";
                // line 26
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "teams", array()), $context["item"], array(), "array"), "dec", array()));
                echo " </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  105 => 29,  96 => 26,  92 => 25,  88 => 24,  83 => 22,  77 => 20,  73 => 19,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  47 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row\">
    <div class=\"container\">              
        {% set total = page.header.teams|length %} 
        {% set col = page.header.layouts %}
        {% set rows = total/col %}
        {% set remainder  = total%col %}
        {% if remainder > 0 %}
            {% set rows = rows + 1 %}
        {% endif %}
        {% set start = 0 %}
        {% for row in 1..rows %}
            {% set start = ((row-1)*col) %}
            {% set end = row*col - 1 %}
            {% if end >= total %}
            {% set end = total %}
            {% endif %}
            <h2 class=\"section-team-title\"> {{ header.title|markdown }} </h2>
            <div class=\"col-xs-12 teams\">
                {% for item in start..end %}
                    <div class=\"col-sm-{{ 12/col }}\">
                        <div class=\"team-thumbnail\">
                            {{ page.media.images[page.header.teams[item].thumbnail].html() }}
                        </div>
                        <p class=\"team-name\"> {{ page.header.teams[item].name }} </p>
                        <p class=\"team-title\"> {{ page.header.teams[item].title }} </p>
                        <div class=\"team-bio\"> {{ page.header.teams[item].dec|markdown }} </div>
                    </div>
                {% endfor %}
            </div>
        {% endfor %}
    </div>
</div>
", "modular/team.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/modular/team.html.twig");
    }
}
