<?php

/* error.html.twig */
class __TwigTemplate_109dd74fc489ab49d5df5454face794f07550cb8156d219c2cfc02be528253f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<section id=\"error\" style=\"padding: 90px 0 72px; background: #fff;\">
    <div class=\"row section-head\">
        <h1>Error ";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
        ";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* {% block content %}*/
/* <section id="error" style="padding: 90px 0 72px; background: #fff;">*/
/*     <div class="row section-head">*/
/*         <h1>Error {{ page.header.http_response_code }}</h1>*/
/*         {{ page.content }}*/
/*     </div>*/
/* </section>*/
/* {% endblock %}*/
/*     */
