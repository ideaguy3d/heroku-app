<?php

/* partials/base.html.twig */
class __TwigTemplate_a9251a5f121663b49350fc5853ac12f2e5cc70aec11fa843a7394a57f259202a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]>
<html class=\"no-js ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]>
<html class=\"no-js ie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]>
<html class=\"no-js ie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "</head>


<body>

<div id=\"preloader\">
    <div id=\"status\">
        <img src=\"";
        // line 39
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/preloader.gif\" height=\"64\" width=\"64\" alt=\"\">
    </div>
</div>

";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "
";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "
<!-- JavaScript -->
";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
</body>
</html>
";
    }

    // line 11
    public function block_head($context, array $blocks = array())
    {
        // line 12
        echo "        <meta charset=\"utf-8\"/>
        <title>
            ";
        // line 14
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            // line 15
            echo "                ";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " |
            ";
        }
        // line 16
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "
        </title>
        ";
        // line 18
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 18)->display($context);
        // line 19
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 20
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\"/>

        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        <script src=\"";
        // line 30
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/modernizr.js\"></script>
    ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/default.css"), "method");
        // line 24
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/layout.css"), "method");
        // line 25
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/media-queries.css"), "method");
        // line 26
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/animate.css"), "method");
        // line 27
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/prettyPhoto.css"), "method");
        // line 28
        echo "        ";
    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 44)->display($context);
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 52)->display($context);
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 58
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery-migrate-1.2.1.min.js"), "method");
        // line 59
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.flexslider.js"), "method");
        // line 60
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.js"), "method");
        // line 61
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fittext.js"), "method");
        // line 62
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fitvids.js"), "method");
        // line 63
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/imagelightbox.js"), "method");
        // line 64
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.prettyPhoto.js"), "method");
        // line 65
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js"), "method");
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 65,  199 => 64,  196 => 63,  193 => 62,  190 => 61,  187 => 60,  184 => 59,  181 => 58,  178 => 57,  175 => 56,  170 => 52,  167 => 51,  158 => 48,  155 => 47,  150 => 44,  147 => 43,  143 => 28,  140 => 27,  137 => 26,  134 => 25,  131 => 24,  128 => 23,  125 => 22,  119 => 30,  114 => 29,  112 => 22,  107 => 20,  104 => 19,  102 => 18,  97 => 16,  91 => 15,  89 => 14,  85 => 12,  82 => 11,  74 => 67,  72 => 56,  68 => 54,  66 => 51,  63 => 50,  61 => 47,  58 => 46,  56 => 43,  49 => 39,  40 => 32,  38 => 11,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 8 ]>*/
/* <html class="no-js ie ie7" lang="en"> <![endif]-->*/
/* <!--[if IE 8 ]>*/
/* <html class="no-js ie ie8" lang="en"> <![endif]-->*/
/* <!--[if IE 9 ]>*/
/* <html class="no-js ie ie9" lang="en"> <![endif]-->*/
/* <!--[if (gte IE 8)|!(IE)]><!-->*/
/* <html class="no-js" lang="en"> <!--<![endif]-->*/
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8"/>*/
/*         <title>*/
/*             {% if header.title %}*/
/*                 {{ header.title }} |*/
/*             {% endif %}{{ site.title }}*/
/*         </title>*/
/*         {% include 'partials/metadata.html.twig' %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png"/>*/
/* */
/*         {% block stylesheets %}*/
/*             {% do assets.addCss('theme://css/default.css') %}*/
/*             {% do assets.addCss('theme://css/layout.css') %}*/
/*             {% do assets.addCss('theme://css/media-queries.css') %}*/
/*             {% do assets.addCss('theme://css/animate.css') %}*/
/*             {% do assets.addCss('theme://css/prettyPhoto.css') %}*/
/*         {% endblock %}*/
/*         {{ assets.css() }}*/
/*         <script src="{{ theme_url }}/js/modernizr.js"></script>*/
/*     {% endblock head %}*/
/* </head>*/
/* */
/* */
/* <body>*/
/* */
/* <div id="preloader">*/
/*     <div id="status">*/
/*         <img src="{{ theme_url }}/images/preloader.gif" height="64" width="64" alt="">*/
/*     </div>*/
/* </div>*/
/* */
/* {% block header %}*/
/*     {% include 'partials/header.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% block content %}{% endblock %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     {% include 'partials/footer.html.twig' %}*/
/* {% endblock %}*/
/* */
/* <!-- JavaScript -->*/
/* {% block javascripts %}*/
/*     {% do assets.add('jquery',101) %}*/
/*     {% do assets.addJs('theme://js/jquery-migrate-1.2.1.min.js') %}*/
/*     {% do assets.addJs('theme://js/jquery.flexslider.js') %}*/
/*     {% do assets.addJs('theme://js/waypoints.js') %}*/
/*     {% do assets.addJs('theme://js/jquery.fittext.js') %}*/
/*     {% do assets.addJs('theme://js/jquery.fitvids.js') %}*/
/*     {% do assets.addJs('theme://js/imagelightbox.js') %}*/
/*     {% do assets.addJs('theme://js/jquery.prettyPhoto.js') %}*/
/*     {% do assets.addJs('theme://js/main.js') %}*/
/* {% endblock %}*/
/* {{ assets.js() }}*/
/* </body>*/
/* </html>*/
/* */
