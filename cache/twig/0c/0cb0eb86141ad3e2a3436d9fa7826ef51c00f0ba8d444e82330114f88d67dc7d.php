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
        // line 37
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/preloader.gif\" height=\"64\" width=\"64\" alt=\"\">
    </div>
</div>

";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
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

    // line 41
    public function block_header($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 42)->display($context);
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 50)->display($context);
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 55
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery-migrate-1.2.1.min.js"), "method");
        // line 56
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.flexslider.js"), "method");
        // line 57
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/waypoints.js"), "method");
        // line 58
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fittext.js"), "method");
        // line 59
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.fitvids.js"), "method");
        // line 60
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/imagelightbox.js"), "method");
        // line 61
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/jquery.prettyPhoto.js"), "method");
        // line 62
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/main.js"), "method");
        // line 63
        echo "
";
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
        return array (  202 => 63,  199 => 62,  196 => 61,  193 => 60,  190 => 59,  187 => 58,  184 => 57,  181 => 56,  178 => 55,  175 => 54,  172 => 53,  167 => 50,  164 => 49,  155 => 46,  152 => 45,  147 => 42,  144 => 41,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  122 => 22,  116 => 30,  111 => 29,  109 => 22,  104 => 20,  101 => 19,  99 => 18,  94 => 16,  88 => 15,  86 => 14,  82 => 12,  79 => 11,  71 => 65,  69 => 53,  66 => 52,  64 => 49,  61 => 48,  59 => 45,  56 => 44,  54 => 41,  47 => 37,  40 => 32,  38 => 11,  26 => 1,);
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
/* */
/* {% endblock %}*/
/* {{ assets.js() }}*/
/* </body>*/
/* </html>*/
/* */
