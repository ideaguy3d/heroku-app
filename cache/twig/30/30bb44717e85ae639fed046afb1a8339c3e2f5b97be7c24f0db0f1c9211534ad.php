<?php

/* modular/callout.html.twig */
class __TwigTemplate_0c883e6ef444988964aa0a254f94a1a38268f087c11d3be4dd144b35f2e3e623 extends Twig_Template
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
        echo "<section id=\"call-to-action\">
    <div class=\"row\">
        <div class=\"two columns header-col\">
            <h1>Homes. Done. Right.</h1>
        </div>
        <div class=\"seven columns\">
            ";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
        <div class=\"three columns action\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 11
            echo "                <a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"button\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/callout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  37 => 11,  33 => 10,  27 => 7,  19 => 1,);
    }
}
/* <section id="call-to-action">*/
/*     <div class="row">*/
/*         <div class="two columns header-col">*/
/*             <h1>Homes. Done. Right.</h1>*/
/*         </div>*/
/*         <div class="seven columns">*/
/*             {{ content }}*/
/*         </div>*/
/*         <div class="three columns action">*/
/*             {% for button in page.header.buttons %}*/
/*                 <a href="{{ button.url }}" class="button">{{ button.text }}</a>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* </section>*/
