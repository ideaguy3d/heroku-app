<?php

/* @Var:{{ form.value.email }} */
class __TwigTemplate_71734f3f4cbfa7c740a210b99f98d1217c749f95e04b2ce4c2e59db4b8a9bed5 extends Twig_Template
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
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "email", array());
    }

    public function getTemplateName()
    {
        return "@Var:{{ form.value.email }}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ form.value.email }}*/
