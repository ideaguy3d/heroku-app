<?php

/* forms/default/data.txt.twig */
class __TwigTemplate_5b24b378a334ffc8e70a093279e7ba561e0a13fcb85f73cb4bf50dc4d6207c80 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 3
            echo $this->getAttribute($context["field"], "name", array());
            echo ": ";
            echo twig_replace_filter($this->env->getExtension('GravTwigExtension')->stringFunc(nl2br(twig_escape_filter($this->env, ((twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) ? (twig_jsonencode_filter((isset($context["value"]) ? $context["value"] : null))) : ((isset($context["value"]) ? $context["value"] : null)))))), array("
" => " ", "" => " "));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/default/data.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for field in form.fields %}*/
/* {% set value = form.value(field.name) %}*/
/* {{ field.name }}: {{ string((value is iterable ? value|json_encode : value)|e|nl2br)|replace({"\n":' ', "\r":' '}) }}*/
/* {% endfor %}*/
/* */
