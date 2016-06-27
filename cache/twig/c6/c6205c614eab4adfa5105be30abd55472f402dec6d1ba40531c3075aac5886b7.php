<?php

/* partials/social.html.twig */
class __TwigTemplate_6fd7f04835bf6f6a901759b42a37fea125cb436df058628f33d809bac116b646 extends Twig_Template
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
        echo "<ul class=\"header-social\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"></i></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="header-social">*/
/*     {% for item in site.social %}*/
/*         <li><a href="{{ item.url }}"><i class="fa fa-{{ item.icon }}"></i></a></li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
