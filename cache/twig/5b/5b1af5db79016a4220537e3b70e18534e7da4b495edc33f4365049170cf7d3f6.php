<?php

/* form.html.twig */
class __TwigTemplate_e5abad62185c96c093a54c7ab3df1e1af9c478bd3c155b4d1ca7ce7e9f77ad6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
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
        echo "
    <section id=\"styles\" style=\"padding: 90px 70px; background: #fff;\">
        ";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        ";
        // line 7
        $this->loadTemplate("forms/form.html.twig", "form.html.twig", 7)->display($context);
        // line 8
        echo "    </section>

    <small>We will never share you information</small>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     <section id="styles" style="padding: 90px 70px; background: #fff;">*/
/*         {{ page.content }}*/
/*         {% include "forms/form.html.twig" %}*/
/*     </section>*/
/* */
/*     <small>We will never share you information</small>*/
/* {% endblock %}*/
