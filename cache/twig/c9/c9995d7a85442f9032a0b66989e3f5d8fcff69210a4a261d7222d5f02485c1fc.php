<?php

/* modular/case_study_slide.html.twig */
class __TwigTemplate_3a40daf6c0f58b0d43bb30f687cc44193d7a2fa30877c183d070025baf6ae763 extends Twig_Template
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
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/case-study-slide.css"), "method");
        // line 2
        echo "<div id=\"StudyCarousel\" style=\"background-image: url('";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "background_img", array()), array(), "array"), "url", array());
        echo "');\" class=\"carousel slide\" data-ride=\"carousel\">
  <div class=\"carousel-inner study container\">

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "studies", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["study"]) {
            // line 6
            echo "        ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 7
                echo "        <div class=\"item container active\">
        <div class=\"slide_run\">
            <div class=\"inside content-img\">
                ";
                // line 10
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["study"], "image", array()), array(), "array"), "html", array(), "method");
                echo "
            </div>
            <div class=\"inside text\">
                <div class=\"title\">
                    ";
                // line 14
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["study"], "title", array()));
                echo "
                </div>
                <div class=\"content\">
                    ";
                // line 17
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["study"], "content", array()));
                echo "
                    ";
                // line 18
                if (($this->getAttribute($context["study"], "url", array()) != "")) {
                    // line 19
                    echo "                        <a class='btn btn-default link' href=";
                    echo $this->getAttribute($context["study"], "url", array());
                    echo ">VIEW DETAIL</a>
                    ";
                }
                // line 21
                echo "                </div>
            </div>
        </div>
        </div>
        ";
            } else {
                // line 26
                echo "        <div class=\"item container\">
        <div class=\"slide_run\">
            <div class=\"inside content-img\">
                ";
                // line 29
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["study"], "image", array()), array(), "array"), "html", array(), "method");
                echo "
            </div>
            <div class=\"inside text\">
                <div class=\"title\">
                    ";
                // line 33
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["study"], "title", array()));
                echo "
                </div>
                <div class=\"content\">
                    ";
                // line 36
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["study"], "content", array()));
                echo "
                    ";
                // line 37
                if (($this->getAttribute($context["study"], "url", array()) != "")) {
                    // line 38
                    echo "                        <a class='btn btn-default link' href=";
                    echo $this->getAttribute($context["study"], "url", array());
                    echo ">VIEW DETAIL</a>
                    ";
                }
                // line 40
                echo "                </div>
            </div>
        </div>
        </div>
        ";
            }
            // line 45
            echo "
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['study'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "    </div>
  <!-- Left and right controls -->
  <a class=\"left carousel-control study\" href=\"#StudyCarousel\" data-slide=\"prev\">
        <span><img src=\"user/themes/bootstrap/assets/arrow-point-to-left.png\"></span>
        <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control study\" href=\"#StudyCarousel\" data-slide=\"next\">
        <span><img src=\"user/themes/bootstrap/assets/arrow-point-to-right.png\"></span>
        <span class=\"sr-only\">Next</span>
  </a>
</div>

";
        // line 59
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/case-study-slide.js"), "method");
    }

    public function getTemplateName()
    {
        return "modular/case_study_slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  137 => 47,  122 => 45,  115 => 40,  109 => 38,  107 => 37,  103 => 36,  97 => 33,  90 => 29,  85 => 26,  78 => 21,  72 => 19,  70 => 18,  66 => 17,  60 => 14,  53 => 10,  48 => 7,  45 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do assets.addCss('theme://css/case-study-slide.css') %}
<div id=\"StudyCarousel\" style=\"background-image: url('{{page.media.images[page.header.background_img].url}}');\" class=\"carousel slide\" data-ride=\"carousel\">
  <div class=\"carousel-inner study container\">

    {% for study in page.header.studies %}
        {% if(loop.index == 1) %}
        <div class=\"item container active\">
        <div class=\"slide_run\">
            <div class=\"inside content-img\">
                {{ page.media.images[study.image].html() }}
            </div>
            <div class=\"inside text\">
                <div class=\"title\">
                    {{study.title|markdown }}
                </div>
                <div class=\"content\">
                    {{study.content|markdown }}
                    {% if study.url != \"\" %}
                        <a class='btn btn-default link' href={{study.url}}>VIEW DETAIL</a>
                    {%endif%}
                </div>
            </div>
        </div>
        </div>
        {%else%}
        <div class=\"item container\">
        <div class=\"slide_run\">
            <div class=\"inside content-img\">
                {{ page.media.images[study.image].html() }}
            </div>
            <div class=\"inside text\">
                <div class=\"title\">
                    {{study.title|markdown }}
                </div>
                <div class=\"content\">
                    {{study.content|markdown }}
                    {% if study.url != \"\" %}
                        <a class='btn btn-default link' href={{study.url}}>VIEW DETAIL</a>
                    {%endif%}
                </div>
            </div>
        </div>
        </div>
        {%endif%}

    {%endfor%}
    </div>
  <!-- Left and right controls -->
  <a class=\"left carousel-control study\" href=\"#StudyCarousel\" data-slide=\"prev\">
        <span><img src=\"user/themes/bootstrap/assets/arrow-point-to-left.png\"></span>
        <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control study\" href=\"#StudyCarousel\" data-slide=\"next\">
        <span><img src=\"user/themes/bootstrap/assets/arrow-point-to-right.png\"></span>
        <span class=\"sr-only\">Next</span>
  </a>
</div>

{% do assets.add('theme://js/case-study-slide.js') %}", "modular/case_study_slide.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\modular\\case_study_slide.html.twig");
    }
}
