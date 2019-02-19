<?php

/* partials/navigation.html.twig */
class __TwigTemplate_2be89b740f1c711e83b47ab6c250bfd34df2f99b084108d7d9bef3cd1c2aa2d8 extends Twig_Template
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
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://css/navigation.css"), "method");
        // line 2
        echo "<nav class=\"navbar m-menu navbar-default navbar-expand-xl navbar-fixed-top\" role=\"navigation\">
    <div class=\"container navbar-section-one\">
        <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
        // line 16
        echo "            <div>
                <a class=\"navbar-brand\" href=\"";
        // line 17
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
                    <img class=\"logo\" src=\"";
        // line 18
        echo ($context["base_url_absolute"] ?? null);
        echo "/user/themes/bootstrap/assets/Mowede-Logo-01.png\"></a>
                    <div class=\"navbar-menu\">
                        <button class=\"button gdlr-button nav-button free-download-button\">Free Download</button>
                        <button class=\"button dlr-button with-border nav-button buy-turnkey-button\">Buy Turnkey</button>
                        <button class=\"button dlr-button nav-link\">Blog</button>
                        <button class=\"button dlr-button nav-link\">About Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container navbar-section-two\">
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-left\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 34
            echo "                    ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
            // line 35
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), "bootstrap", array()), "dropdown", array()), "enabled", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()), "count", array()) > 0))) {
                // line 36
                echo "                    <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                        ";
                // line 37
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    echo " 
                            <a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
                    // line 38
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "
                            <span><i class=\"fa fa-angle-down\"></i></span></a>                                              
                            <ul class=\"dropdown-menu multi-level\">
                                ";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", array()), "visible", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["dropdownHeader"]) {
                        // line 42
                        echo "                                    ";
                        $context["current_sub_page"] = ((($this->getAttribute($context["dropdownHeader"], "active", array()) || $this->getAttribute($context["dropdownHeader"], "activeChild", array()))) ? ("active") : (""));
                        // line 43
                        echo "                                    ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["dropdownHeader"], "children", array()), "visible", array()), "count", array()) > 0)) {
                            // line 44
                            echo "                                    <li class=\"sub-menu dropdown-submenu ";
                            echo ($context["current_sub_page"] ?? null);
                            echo "\">                                        
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                            // line 45
                            echo $this->getAttribute($context["dropdownHeader"], "menu", array());
                            echo "</a>
                                        <ul class=\"dropdown-menu\">
                                            ";
                            // line 47
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["dropdownHeader"], "children", array()), "visible", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["dropdownItem"]) {
                                // line 48
                                echo "                                            ";
                                $context["current_sub_page"] = ((($this->getAttribute($context["dropdownItem"], "active", array()) || $this->getAttribute($context["dropdownItem"], "activeChild", array()))) ? ("active") : (""));
                                // line 49
                                echo "                                            <li class=\"dropdown-sub-item ";
                                echo ($context["current_sub_page"] ?? null);
                                echo "\">
                                                <a href=\"";
                                // line 50
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
                            // line 52
                            echo "                            
                                        </ul>                                        
                                    </li>    
                                    ";
                        } else {
                            // line 56
                            echo "                                        <li class=\"sub-menu ";
                            echo ($context["current_sub_page"] ?? null);
                            echo "\"><a href=\"";
                            echo $this->getAttribute($context["dropdownHeader"], "url", array());
                            echo "\">";
                            echo $this->getAttribute($context["dropdownHeader"], "menu", array());
                            echo "</a></li>
                                    ";
                        }
                        // line 57
                        echo "                                
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdownHeader'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "                            </ul>   
                        ";
                } else {
                    // line 61
                    echo "                            <a href=\"";
                    echo $this->getAttribute($context["page"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["page"], "menu", array());
                    echo "</a>
                        ";
                }
                // line 63
                echo "                    </li>
                    ";
            } else {
                // line 65
                echo "                        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "</a></li>
                    ";
            }
            // line 67
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 69
            echo "                    <li>
                        <a href=\"";
            // line 70
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
        // line 73
        echo "                ";
        // line 78
        echo "
                ";
        // line 79
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 80
            echo "                    <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 80)->display($context);
            echo "</li>
                ";
        }
        // line 82
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
        return array (  212 => 82,  206 => 80,  204 => 79,  201 => 78,  199 => 73,  188 => 70,  185 => 69,  180 => 68,  174 => 67,  164 => 65,  160 => 63,  152 => 61,  148 => 59,  141 => 57,  131 => 56,  125 => 52,  114 => 50,  109 => 49,  106 => 48,  102 => 47,  97 => 45,  92 => 44,  89 => 43,  86 => 42,  82 => 41,  76 => 38,  72 => 37,  67 => 36,  64 => 35,  61 => 34,  57 => 33,  39 => 18,  35 => 17,  32 => 16,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% do assets.add('theme://css/navigation.css') %}
<nav class=\"navbar m-menu navbar-default navbar-expand-xl navbar-fixed-top\" role=\"navigation\">
    <div class=\"container navbar-section-one\">
        <div class=\"navbar-header\">
            <button class=\"navbar-toggle\" data-target=\".navbar-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            {# <div class=\"site_search_mobile\">
                <span>
                    <img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/search.png\">
                </span>
            </div> #}
            <div>
                <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
                    <img class=\"logo\" src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/Mowede-Logo-01.png\"></a>
                    <div class=\"navbar-menu\">
                        <button class=\"button gdlr-button nav-button free-download-button\">Free Download</button>
                        <button class=\"button dlr-button with-border nav-button buy-turnkey-button\">Buy Turnkey</button>
                        <button class=\"button dlr-button nav-link\">Blog</button>
                        <button class=\"button dlr-button nav-link\">About Us</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container navbar-section-two\">
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-left\">
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
                {# <li class=\"\" id=\"site_search\">                    
                    <span>
                        <img src=\"{{ base_url_absolute }}/user/themes/bootstrap/assets/search.png\">
                    </span>
                </li> #}

                {% if config.plugins.login.enabled and grav.user.username %}
                    <li><i class=\"fa fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
", "partials/navigation.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/gondola/user/themes/bootstrap/templates/partials/navigation.html.twig");
    }
}
