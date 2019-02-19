<?php

/* modular/what_people_say.html.twig */
class __TwigTemplate_0625eaf1326d547c4946f474db999f17009df7bc1d4d330363fd51b0b060f52e extends Twig_Template
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/what-people-say.css"), "method");
        // line 2
        echo "<div id=\"part_wps\" style=\"background-image: url('";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background_img", array()), array(), "array"), "url", array());
        echo "');\">
    <div class=\"container\">
        <div class=\"left_part\">
            ";
        // line 5
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title_left", array()));
        echo "
            ";
        // line 6
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content_left", array()));
        echo "
        </div>
        <div class=\"right_part\">
              <div id=\"wps\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators wps\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "what_people_say", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["wps"]) {
            // line 13
            echo "                    ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 14
                echo "                         <li data-target=\"#wps\" data-slide-to=\"";
                echo ($this->getAttribute($context["loop"], "index", array()) - 1);
                echo "\" class=\"active\"></li>
                    ";
            } else {
                // line 16
                echo "                         <li data-target=\"#wps\" data-slide-to=\"";
                echo ($this->getAttribute($context["loop"], "index", array()) - 1);
                echo "\"></li>
                    ";
            }
            // line 18
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wps'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </ol>
                <div class=\"carousel-inner\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "what_people_say", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["wps"]) {
            // line 22
            echo "                ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 23
                echo "                    <div class=\"item active\">
                        <div class=\"inside p_inside\">
                            <div>
                                <p class=\"p_say\" style=\"font-style: italic;background: ";
                // line 26
                echo $this->getAttribute($context["wps"], "color", array());
                echo ";\">
                                    ";
                // line 27
                echo $this->getAttribute($context["wps"], "content", array());
                echo "
                                </p>
                            </div>
                            <div>
                                <p class=\"author f_left\">
                                    ";
                // line 32
                echo $this->getAttribute($context["wps"], "who", array());
                echo "
                                </p>
                            </div>
                            <div>
                                <p class=\"address f_left\">
                                    ";
                // line 37
                echo $this->getAttribute($context["wps"], "address", array());
                echo "
                                </p>
                            </div>
                            
                        </div>
                    </div>
                ";
            } else {
                // line 44
                echo "                    <div class=\"item\">
                        <div class=\"inside p_inside\">
                            <div>
                                <p class=\"p_say\" style=\"font-style: italic;background:";
                // line 47
                echo $this->getAttribute($context["wps"], "color", array());
                echo ";\">
                                    ";
                // line 48
                echo $this->getAttribute($context["wps"], "content", array());
                echo "
                                </p>
                            </div>
                            <div>
                                <p class=\"author f_left\">
                                    ";
                // line 53
                echo $this->getAttribute($context["wps"], "who", array());
                echo "
                                </p>
                            </div>
                            <div>
                                <p class=\"address f_left\">
                                    ";
                // line 58
                echo $this->getAttribute($context["wps"], "address", array());
                echo "
                                </p>
                            </div>
                            
                        </div>
                    </div>
                ";
            }
            // line 65
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wps'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </div>
            </div> 
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/what_people_say.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 66,  181 => 65,  171 => 58,  163 => 53,  155 => 48,  151 => 47,  146 => 44,  136 => 37,  128 => 32,  120 => 27,  116 => 26,  111 => 23,  108 => 22,  91 => 21,  87 => 19,  73 => 18,  67 => 16,  61 => 14,  58 => 13,  41 => 12,  32 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do assets.addCss('theme://css/what-people-say.css') %}
<div id=\"part_wps\" style=\"background-image: url('{{page.media.images[page.header.background_img].url}}');\">
    <div class=\"container\">
        <div class=\"left_part\">
            {{ page.header.title_left|markdown }}
            {{ page.header.content_left|markdown }}
        </div>
        <div class=\"right_part\">
              <div id=\"wps\" class=\"carousel slide\" data-ride=\"carousel\">
                    <!-- Indicators -->
                    <ol class=\"carousel-indicators wps\">
                    {% for wps in page.header.what_people_say %}
                    {% if(loop.index==1) %}
                         <li data-target=\"#wps\" data-slide-to=\"{{ loop.index - 1}}\" class=\"active\"></li>
                    {% else %}
                         <li data-target=\"#wps\" data-slide-to=\"{{ loop.index - 1 }}\"></li>
                    {% endif %}
                    {% endfor %}
                    </ol>
                <div class=\"carousel-inner\">
                {% for wps in page.header.what_people_say %}
                {% if(loop.index==1) %}
                    <div class=\"item active\">
                        <div class=\"inside p_inside\">
                            <div>
                                <p class=\"p_say\" style=\"font-style: italic;background: {{ wps.color }};\">
                                    {{ wps.content }}
                                </p>
                            </div>
                            <div>
                                <p class=\"author f_left\">
                                    {{ wps.who }}
                                </p>
                            </div>
                            <div>
                                <p class=\"address f_left\">
                                    {{ wps.address }}
                                </p>
                            </div>
                            
                        </div>
                    </div>
                {% else %}
                    <div class=\"item\">
                        <div class=\"inside p_inside\">
                            <div>
                                <p class=\"p_say\" style=\"font-style: italic;background:{{ wps.color }};\">
                                    {{ wps.content}}
                                </p>
                            </div>
                            <div>
                                <p class=\"author f_left\">
                                    {{ wps.who }}
                                </p>
                            </div>
                            <div>
                                <p class=\"address f_left\">
                                    {{ wps.address }}
                                </p>
                            </div>
                            
                        </div>
                    </div>
                {% endif %}
                {% endfor %}
                </div>
            </div> 
        </div>
    </div>
</div>", "modular/what_people_say.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\modular\\what_people_say.html.twig");
    }
}
