<?php

/* about.html.twig */
class __TwigTemplate_235c64058da0b83fcc77f3ab1c63bf8aeec41e8c68fe63792714f71a825f51c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/ibase.html.twig", "about.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/ibase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ~";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "~
    ";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
";
    }

    // line 8
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/ibase.html.twig' %}*/
/* */
/* {% block content %}*/
/*     ~{{ page.title }}~*/
/*     {{ page.content }}*/
/* {% endblock content %}*/
/* */
/* {% block bottom %}*/
/* {% endblock bottom %}*/
