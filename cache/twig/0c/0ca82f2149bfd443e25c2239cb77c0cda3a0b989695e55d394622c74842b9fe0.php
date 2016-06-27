<?php

/* partials/footer.html.twig */
class __TwigTemplate_71cb255b8e0948ceb64d955c7e7e545850145fbae7617579a2ad04213762610f extends Twig_Template
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
        echo "<footer>
    <div class=\"row\">         
        <div class=\"six columns info\">
            <div class=\"footer-logo\">
                <a href=\"";
        // line 5
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
                    Reno Real Estate Team
                </a>
            </div>
            <p> ";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "text", array());
        echo " </p>
        </div>

        <div class=\"six columns right-cols\">
            <div class=\"row\">
                <div class=\"columns\">
                    <h3 class=\"address\">";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "address", array()), "title", array());
        echo "</h3>
                    <p>
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "address", array()), "lines", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                           ";
            echo $this->getAttribute($context["item"], "line", array());
            echo " <br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "                    </p>
                </div>
                <div class=\"columns\">
                    <h3 class=\"social\">";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "social_title", array());
        echo "</h3>
                    <ul>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo twig_capitalize_string_filter($this->env, $this->getAttribute($context["item"], "icon", array()));
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </ul>
                </div>
                <div class=\"columns last\">
                    <h3 class=\"contact\">";
        // line 31
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "contact", array()), "title", array());
        echo "</h3>
                    <ul>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "footer", array()), "contact", array()), "lines", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "text", array());
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div id=\"go-top\">
            <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#hero\"><i class=\"icon-up-open\"></i></a>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  98 => 34,  94 => 33,  89 => 31,  84 => 28,  73 => 26,  69 => 25,  64 => 23,  59 => 20,  50 => 18,  46 => 17,  41 => 15,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <footer>*/
/*     <div class="row">         */
/*         <div class="six columns info">*/
/*             <div class="footer-logo">*/
/*                 <a href="{{ base_url_absolute }}">*/
/*                     Reno Real Estate Team*/
/*                 </a>*/
/*             </div>*/
/*             <p> {{ site.footer.text }} </p>*/
/*         </div>*/
/* */
/*         <div class="six columns right-cols">*/
/*             <div class="row">*/
/*                 <div class="columns">*/
/*                     <h3 class="address">{{ site.footer.address.title }}</h3>*/
/*                     <p>*/
/*                         {% for item in site.footer.address.lines %}*/
/*                            {{ item.line }} <br>*/
/*                         {% endfor %}*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="columns">*/
/*                     <h3 class="social">{{ site.footer.social_title }}</h3>*/
/*                     <ul>*/
/*                         {% for item in site.social %}*/
/*                             <li><a href="{{ item.url }}">{{ item.icon|capitalize }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="columns last">*/
/*                     <h3 class="contact">{{ site.footer.contact.title }}</h3>*/
/*                     <ul>*/
/*                         {% for item in site.footer.contact.lines %}*/
/*                             <li><a href="{{ item.url }}">{{ item.text }}</a></li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="go-top">*/
/*             <a class="smoothscroll" title="Back to Top" href="#hero"><i class="icon-up-open"></i></a>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
