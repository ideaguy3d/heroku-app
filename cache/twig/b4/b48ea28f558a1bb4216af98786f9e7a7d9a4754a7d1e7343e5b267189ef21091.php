<?php

/* listings.html.twig */
class __TwigTemplate_18f7f39dcc436f9ab433df724426ca746848e94ba7d7968ea7c337c067ee917e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "listings.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section id=\"screenshots\">
        <div class=\"row section-head\">
            ";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
        <div class=\"row\">
            <div class=\"twelve columns\">
                <div id=\"screenshots-wrapper\" class=\"bgrid-quarters s-bgrid-thirds cf\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "                        <div class=\"columns item\">
                            <div class=\"item-wrap\">
                                <a href=\"";
            // line 14
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["item"], "filename", array());
            echo "\" data-imagelightbox=\"a\" >
                                    ";
            // line 15
            echo $this->getAttribute($this->getAttribute($context["item"], "cropZoom", array(0 => 700, 1 => 700), "method"), "html", array(0 => twig_replace_filter($this->getAttribute($context["item"], "filename", array()), array("-" => " ")), 1 => twig_replace_filter($this->getAttribute(            // line 16
$context["item"], "filename", array()), array("-" => " "))), "method");
            echo "
                                    <div class=\"overlay\"></div>
                                    <div class=\"link-icon\"><i class=\"icon-plus\"></i></div>
                                </a>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "listings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  58 => 16,  57 => 15,  51 => 14,  47 => 12,  43 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <section id="screenshots">*/
/*         <div class="row section-head">*/
/*             {{ content }}*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="twelve columns">*/
/*                 <div id="screenshots-wrapper" class="bgrid-quarters s-bgrid-thirds cf">*/
/*                     {% for item in page.media.images %}*/
/*                         <div class="columns item">*/
/*                             <div class="item-wrap">*/
/*                                 <a href="{{ page.url(true) }}/{{ item.filename }}" data-imagelightbox="a" >*/
/*                                     {{ item.cropZoom(700, 700).html( item.filename|replace({'-': " "}),*/
/*                                     item.filename|replace({'-': " "})) }}*/
/*                                     <div class="overlay"></div>*/
/*                                     <div class="link-icon"><i class="icon-plus"></i></div>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
