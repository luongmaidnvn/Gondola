<?php

/* modular/info.html.twig */
class __TwigTemplate_82a9c6024f30dc25b825b9189ded6498a6ecfd1d511f06379ed4519b172f4276 extends Twig_Template
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
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/info.css"), "method");
        // line 3
        echo "   
    <div class=\"info-container\">        
         ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "infos", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            // line 6
            echo "            ";
            if (($this->getAttribute($context["info"], "postion_image", array()) == "right")) {
                // line 7
                echo "                ";
                if (($this->getAttribute($context["info"], "background", array()) != "")) {
                    // line 8
                    echo "                    <div class=\"info have-background left\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";background-image:url('";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["info"], "background", array()), array(), "array"), "url", array());
                    echo "');\">
                ";
                } else {
                    // line 10
                    echo "                    <div class=\"info\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";\">
                ";
                }
                // line 12
                echo "                
                    <div class=\"container main-row ";
                // line 13
                echo ($this->getAttribute($context["info"], "postion", array()) - ($context["image"] ?? null));
                echo " ";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" ";
                if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "padding", array()) != "")) {
                    echo " style=\"padding: ";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "padding", array());
                    echo "\"";
                }
                echo ">           
                        <div class=\"col first col-lg-6 no-padding\" style=\"color:";
                // line 14
                echo $this->getAttribute($context["info"], "content_color", array());
                echo "\">
                            ";
                // line 15
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "text", array()));
                echo "
                            ";
                // line 16
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "content", array()));
                echo "
                        </div>
                        <div class=\"col second col-lg-6 no-padding\">
                            ";
                // line 19
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["info"], "thumbnail", array()), array(), "array"), "cropZoom", array(0 => 570, 1 => 406), "method"), "html", array(), "method");
                echo "
                        </div>
                    </div>
                </div>
            ";
            } else {
                // line 24
                echo "                ";
                if (($this->getAttribute($context["info"], "background", array()) != "")) {
                    // line 25
                    echo "                    <div class=\"info have-background right\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";background-image:url('";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["info"], "background", array()), array(), "array"), "url", array());
                    echo "');\">
                ";
                } else {
                    // line 27
                    echo "                    <div class=\"info\" style=\"background-color:";
                    echo $this->getAttribute($context["info"], "color", array());
                    echo ";\">
                ";
                }
                // line 29
                echo "                    <div  class=\"container main-row ";
                echo ($this->getAttribute($context["info"], "postion", array()) - ($context["image"] ?? null));
                echo " ";
                echo $this->getAttribute($context["loop"], "index", array());
                echo "\" ";
                if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "padding", array()) != "")) {
                    echo " style=\"padding: ";
                    echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "padding", array());
                    echo "\"";
                }
                echo ">
                        <div class=\"col first col-lg-6 no-padding\">
                            ";
                // line 31
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["info"], "thumbnail", array()), array(), "array"), "cropZoom", array(0 => 570, 1 => 406), "method"), "html", array(), "method");
                echo "
                        </div>
                        <div class=\"col second col-lg-6 no-padding\" style=\"color:";
                // line 33
                echo $this->getAttribute($context["info"], "content_color", array());
                echo "\">
                            ";
                // line 34
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "text", array()));
                echo "
                            ";
                // line 35
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["info"], "content", array()));
                echo "
                        </div>
                    </div>
                </div>
            ";
            }
            // line 40
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>

  ";
    }

    public function getTemplateName()
    {
        return "modular/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 41,  154 => 40,  146 => 35,  142 => 34,  138 => 33,  133 => 31,  119 => 29,  113 => 27,  105 => 25,  102 => 24,  94 => 19,  88 => 16,  84 => 15,  80 => 14,  68 => 13,  65 => 12,  59 => 10,  51 => 8,  48 => 7,  45 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
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
{% do assets.add('theme://css/info.css') %}
   
    <div class=\"info-container\">        
         {% for info in page.header.infos %}
            {% if(info.postion_image == \"right\") %}
                {% if info.background !=\"\" %}
                    <div class=\"info have-background left\" style=\"background-color:{{info.color}};background-image:url('{{ page.media.images[info.background].url}}');\">
                {%else%}
                    <div class=\"info\" style=\"background-color:{{info.color}};\">
                {%endif%}
                
                    <div class=\"container main-row {{info.postion-image}} {{loop.index}}\" {% if page.header.padding !=\"\" %} style=\"padding: {{ page.header.padding }}\"{%endif%}>           
                        <div class=\"col first col-lg-6 no-padding\" style=\"color:{{info.content_color}}\">
                            {{ info.text|markdown }}
                            {{ info.content|markdown }}
                        </div>
                        <div class=\"col second col-lg-6 no-padding\">
                            {{ page.media.images[info.thumbnail].cropZoom(570, 406).html() }}
                        </div>
                    </div>
                </div>
            {% else %}
                {% if info.background !=\"\" %}
                    <div class=\"info have-background right\" style=\"background-color:{{info.color}};background-image:url('{{ page.media.images[info.background].url}}');\">
                {%else%}
                    <div class=\"info\" style=\"background-color:{{info.color}};\">
                {%endif%}
                    <div  class=\"container main-row {{info.postion-image}} {{loop.index}}\" {% if page.header.padding !=\"\" %} style=\"padding: {{ page.header.padding }}\"{%endif%}>
                        <div class=\"col first col-lg-6 no-padding\">
                            {{ page.media.images[info.thumbnail].cropZoom(570, 406).html() }}
                        </div>
                        <div class=\"col second col-lg-6 no-padding\" style=\"color:{{info.content_color}}\">
                            {{ info.text|markdown }}
                            {{ info.content|markdown }}
                        </div>
                    </div>
                </div>
            {% endif %}
        {% endfor %}
    </div>

  ", "modular/info.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/mowede/user/themes/bootstrap/templates/modular/info.html.twig");
    }
}
