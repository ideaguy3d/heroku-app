<?php

/* partials/header.html.twig */
class __TwigTemplate_e258d433dbf85382b2f50c69e72dc8ddad6d721038c40005151700a8a235d68a extends Twig_Template
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
        echo "<header id=\"header\">
  <div class=\"logo\">
    <a ";
        // line 3
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            echo "class=\"smoothscroll\"";
        }
        echo " href=\"";
        if ((isset($context["page"]) ? $context["page"] : null)) {
            echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
            echo "/#hero";
        } else {
            echo "#hero";
        }
        echo "\"><img alt=\"\" src=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/logo.png\"></a>
  </div>

  ";
        // line 6
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 6)->display($context);
        // line 7
        echo "  ";
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array())) {
            // line 8
            echo "    ";
            $this->loadTemplate("partials/social.html.twig", "partials/header.html.twig", 8)->display($context);
            // line 9
            echo "  ";
        }
        // line 10
        echo "</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  48 => 9,  45 => 8,  42 => 7,  40 => 6,  23 => 3,  19 => 1,);
    }
}
/* <header id="header">*/
/*   <div class="logo">*/
/*     <a {% if not page %}class="smoothscroll"{% endif %} href="{% if page %}{{ base_url_absolute }}/#hero{% else %}#hero{% endif %}"><img alt="" src="{{ theme_url }}/images/logo.png"></a>*/
/*   </div>*/
/* */
/*   {% include 'partials/navigation.html.twig' %}*/
/*   {% if site.social %}*/
/*     {% include 'partials/social.html.twig' %}*/
/*   {% endif %}*/
/* </header>*/
