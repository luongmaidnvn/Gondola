<?php

/* partials/navigation.html.twig */
class __TwigTemplate_69cb92577986d5b8a41b3cbf2a66d2f32a8a7392c157ebde44087dfde573b8b7 extends Twig_Template
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
<nav class=\"navbar m-menu navbar-default navbar-expand-xl navbar-fixed-top\" role=\"navigation\">    
    <div class=\"container\">
        <div class=\"navbar-header\">
            
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <div class=\"site_search_mobile\">
                <span>
                    <img src=\"";
        // line 14
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/search.png\">
                </span>
            </div>
            <a class=\"navbar-brand\" href=\"";
        // line 17
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                <img class=\"logo\" src=\"";
        // line 18
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/Mowede-Logo-01.png\">
            </a>
        </div>
        
        <div class=\"navbar-collapse collapse\">
            
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 27
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "bootstrap", array()), "dropdown", array()), "enabled", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()), "count", array()) > 0))) {
                // line 28
                echo "                    <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                        ";
                // line 29
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    echo " 
                            <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
                    // line 30
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                            <span><i class=\"fa fa-angle-down\"></i></span></a>                                              
                            <ul class=\"dropdown-menu multi-level\">
                                ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["dropdownHeader"]) {
                        // line 34
                        echo "                                    ";
                        $context["current_sub_page"] = ((($this->getAttribute($context["dropdownHeader"], "active", array()) || $this->getAttribute($context["dropdownHeader"], "activeChild", array()))) ? ("active") : (""));
                        // line 35
                        echo "                                    ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["dropdownHeader"], "children", array()), "visible", array()), "count", array()) > 0)) {
                            // line 36
                            echo "                                    <li class=\"sub-menu dropdown-submenu ";
                            echo ($context["current_sub_page"] ?? null);
                            echo "\">                                        
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                            // line 37
                            echo $this->getAttribute($context["dropdownHeader"], "menu", array());
                            echo "</a>
                                        <ul class=\"dropdown-menu\">
                                            ";
                            // line 39
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["dropdownHeader"], "children", array()), "visible", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["dropdownItem"]) {
                                // line 40
                                echo "                                            ";
                                $context["current_sub_page"] = ((($this->getAttribute($context["dropdownItem"], "active", array()) || $this->getAttribute($context["dropdownItem"], "activeChild", array()))) ? ("active") : (""));
                                // line 41
                                echo "                                            <li class=\"dropdown-sub-item ";
                                echo ($context["current_sub_page"] ?? null);
                                echo "\">
                                                <a href=\"";
                                // line 42
                                echo $this->getAttribute($context["dropdownItem"], "url", array());
                                echo "\">";
                                echo $this->getAttribute($context["dropdownItem"], "menu", array());
                                echo "</a>
                                            </li>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdownItem'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 44
                            echo "                            
                                        </ul>                                        
                                    </li>    
                                    ";
                        } else {
                            // line 48
                            echo "                                        <li class=\"sub-menu ";
                            echo ($context["current_sub_page"] ?? null);
                            echo "\"><a href=\"";
                            echo $this->getAttribute($context["dropdownHeader"], "url", array());
                            echo "\">";
                            echo $this->getAttribute($context["dropdownHeader"], "menu", array());
                            echo "</a></li>
                                    ";
                        }
                        // line 49
                        echo "                                
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdownHeader'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                            </ul>   
                        ";
                } else {
                    // line 53
                    echo "                            <a href=\"";
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "</a>
                        ";
                }
                // line 55
                echo "                    </li>
                    ";
            } else {
                // line 57
                echo "                        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                    ";
            }
            // line 59
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 61
            echo "                    <li>
                        <a href=\"";
            // line 62
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                <li class=\"\" id=\"site_search\">                    
                    <span>
                        <img src=\"";
        // line 67
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/search.png\">
                    </span>
                </li>

                ";
        // line 71
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 72
            echo "                    <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 72)->display($context);
            echo "</li>
                ";
        }
        // line 74
        echo "            </ul>
        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 74,  209 => 72,  207 => 71,  200 => 67,  196 => 65,  185 => 62,  182 => 61,  177 => 60,  171 => 59,  161 => 57,  157 => 55,  149 => 53,  145 => 51,  138 => 49,  128 => 48,  122 => 44,  111 => 42,  106 => 41,  103 => 40,  99 => 39,  94 => 37,  89 => 36,  86 => 35,  83 => 34,  79 => 33,  73 => 30,  69 => 29,  64 => 28,  61 => 27,  58 => 26,  54 => 25,  44 => 18,  40 => 17,  34 => 14,  19 => 1,);
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
<nav class=\"navbar m-menu navbar-default navbar-expand-xl navbar-fixed-top\" role=\"navigation\">    
    <div class=\"container\">
        <div class=\"navbar-header\">
            
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <div class=\"site_search_mobile\">
                <span>
                    <img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/search.png\">
                </span>
            </div>
            <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                <img class=\"logo\" src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/Mowede-Logo-01.png\">
            </a>
        </div>
        
        <div class=\"navbar-collapse collapse\">
            
            <ul class=\"nav navbar-nav navbar-right\">
                {% for page in pages.children.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    {% if config.themes.bootstrap.dropdown.enabled and page.children.visible.count > 0 %}
                    <li class=\"{{ current_page }}\">
                        {% if page.children.visible.count > 0 %} 
                            <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">{{ page.menu }}
                            <span><i class=\"fa fa-angle-down\"></i></span></a>                                              
                            <ul class=\"dropdown-menu multi-level\">
                                {% for dropdownHeader in page.children.visible %}
                                    {% set current_sub_page = (dropdownHeader.active or dropdownHeader.activeChild) ? 'active' : '' %}
                                    {% if dropdownHeader.children.visible.count > 0 %}
                                    <li class=\"sub-menu dropdown-submenu {{ current_sub_page }}\">                                        
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ dropdownHeader.menu }}</a>
                                        <ul class=\"dropdown-menu\">
                                            {% for dropdownItem in dropdownHeader.children.visible %}
                                            {% set current_sub_page = (dropdownItem.active or dropdownItem.activeChild) ? 'active' : '' %}
                                            <li class=\"dropdown-sub-item {{ current_sub_page }}\">
                                                <a href=\"{{ dropdownItem.url }}\">{{ dropdownItem.menu }}</a>
                                            </li>
                                            {% endfor %}                            
                                        </ul>                                        
                                    </li>    
                                    {% else %}
                                        <li class=\"sub-menu {{ current_sub_page }}\"><a href=\"{{ dropdownHeader.url }}\">{{ dropdownHeader.menu }}</a></li>
                                    {% endif %}                                
                                {% endfor %}
                            </ul>   
                        {% else %}
                            <a href=\"{{ page.url }}\">{{ page.menu }}</a>
                        {% endif %}
                    </li>
                    {% else %}
                        <li class=\"{{ current_page }}\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                    {% endif %}
                {% endfor %}
                {% for mitem in site.menu %}
                    <li>
                        <a href=\"{{ mitem.url }}\">{{ mitem.text }}</a>
                    </li>
                {% endfor %}
                <li class=\"\" id=\"site_search\">                    
                    <span>
                        <img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/search.png\">
                    </span>
                </li>

                {% if config.plugins.login.enabled and grav.user.username %}
                    <li><i class=\"fa fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
", "partials/navigation.html.twig", "D:\\wamp64\\www\\mowede\\user\\themes\\bootstrap\\templates\\partials\\navigation.html.twig");
    }
}
