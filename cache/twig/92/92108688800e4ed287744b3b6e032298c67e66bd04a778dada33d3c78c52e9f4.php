<?php

/* modular/header_slide.html.twig */
class __TwigTemplate_c9b397783956560ba36debf6cbaed4e18c8d66acb0fac8c44dbf0b16e7ba51ed extends Twig_Template
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/header-slide.css"), "method");
        // line 2
        echo "
<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <div id=\"header_carousel\" class=\"carousel-inner\">
     ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "slides", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 6
            echo "        ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 7
                echo "            <div class=\"item active justify-content-between\" style=\"
                height: 36vw;
                background-color: ";
                // line 9
                echo $this->getAttribute($context["slide"], "color", array());
                echo ";
                background: url('";
                // line 10
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["slide"], "background", array()), array(), "array"), "url", array());
                echo "');
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center;
            \">
                <div class=\"carousel-content\" style=\"color:";
                // line 15
                echo $this->getAttribute($context["slide"], "content_color", array());
                echo "\">
                    ";
                // line 16
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["slide"], "content", array()));
                echo "
                </div>
            </div>
        ";
            } else {
                // line 20
                echo "            <div class=\"item justify-content-between\" style=\"
                height: 36vw;
                background-color: ";
                // line 22
                echo $this->getAttribute($context["slide"], "color", array());
                echo ";
                background: url('";
                // line 23
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["slide"], "background", array()), array(), "array"), "url", array());
                echo "');
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center;
            \">
                <div class=\"carousel-content\" style=\"color:";
                // line 28
                echo $this->getAttribute($context["slide"], "content_color", array());
                echo "\">
                    ";
                // line 29
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["slide"], "content", array()));
                echo "
                </div>
            </div>
        ";
            }
            // line 33
            echo "     ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
        <span><img src=\"user/themes/bootstrap/assets/arrow-point-to-left.png\"></span>
        <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
        <span><img src=\"user/themes/bootstrap/assets/arrow-point-to-right.png\"></span>
        <span class=\"sr-only\">Next</span>
  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "modular/header_slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  100 => 33,  93 => 29,  89 => 28,  81 => 23,  77 => 22,  73 => 20,  66 => 16,  62 => 15,  54 => 10,  50 => 9,  46 => 7,  43 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do assets.addCss('theme://css/header-slide.css') %}

<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <div id=\"header_carousel\" class=\"carousel-inner\">
     {% for slide in page.header.slides %}
        {% if(loop.index == 1) %}
            <div class=\"item active justify-content-between\" style=\"
                height: 36vw;
                background-color: {{ slide.color }};
                background: url('{{ page.media.images[slide.background].url }}');
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center;
            \">
                <div class=\"carousel-content\" style=\"color:{{slide.content_color}}\">
                    {{ slide.content|markdown }}
                </div>
            </div>
        {%else%}
            <div class=\"item justify-content-between\" style=\"
                height: 36vw;
                background-color: {{ slide.color }};
                background: url('{{ page.media.images[slide.background].url }}');
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center;
            \">
                <div class=\"carousel-content\" style=\"color:{{ slide.content_color }}\">
                    {{ slide.content|markdown }}
                </div>
            </div>
        {%endif%}
     {% endfor %}
    </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
        <span><img src=\"user/themes/bootstrap/assets/arrow-point-to-left.png\"></span>
        <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
        <span><img src=\"user/themes/bootstrap/assets/arrow-point-to-right.png\"></span>
        <span class=\"sr-only\">Next</span>
  </a>
</div>", "modular/header_slide.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\modular\\header_slide.html.twig");
    }
}
