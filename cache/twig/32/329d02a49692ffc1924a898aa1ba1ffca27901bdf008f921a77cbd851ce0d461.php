<?php

/* @Var:[Feedback] {{ form.value.name|e }} */
class __TwigTemplate_f9adf9c649fc60a8d21939ebe4d9352a1dc60deb8ff1ddb81aef1a49b7cb9cc3 extends Twig_Template
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
        echo "[Feedback] ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array()), "name", array()));
    }

    public function getTemplateName()
    {
        return "@Var:[Feedback] {{ form.value.name|e }}";
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
/* [Feedback] {{ form.value.name|e }}*/
