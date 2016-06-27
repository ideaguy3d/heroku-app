<?php

/* default.html.twig */
class __TwigTemplate_898cf38546212e46c444fcf7c4417b890f86442a817d8f818b29c242bfcad7c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
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
        echo "    <a id=\"hero\" href=\"#\" style=\"visibility: hidden;\"></a>
    <section id=\"styles\" style=\"padding: 90px 0 72px; background: #fff;\">
        <div class=\"row\">
            ";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <a id="hero" href="#" style="visibility: hidden;"></a>*/
/*     <section id="styles" style="padding: 90px 0 72px; background: #fff;">*/
/*         <div class="row">*/
/*             {{ page.content }}*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
