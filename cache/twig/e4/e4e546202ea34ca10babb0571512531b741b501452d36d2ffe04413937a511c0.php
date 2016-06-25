<?php

/* partials/ibase.html.twig */
class __TwigTemplate_c8a5cdce5d670ac8414ce9ebf9e25a663a9081d1257c4740ed6e14cd268e8292 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html lang=\"en\">

<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>


<body>

";
        // line 49
        $this->loadTemplate("partials/iheader.html.twig", "partials/ibase.html.twig", 49)->display($context);
        // line 50
        echo "

<div id=\"bar1\" class=\"container\">
    ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "</div>

<div class=\"footer\">
    <div class=\"container\">
        <p class=\"text-muted\">Built by <a href=\"https://juliusalvarado.info\" target=\"_blank\">Julius Alvarado</a>
             w/<a href=\"http://getgrav.org\" target=\"_blank\">Grav</a>
        </p>
    </div>
</div>

";
        // line 65
        $this->displayBlock('bottom', $context, $blocks);
        // line 66
        echo "
</body>

</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-COMPATIBLE\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        ";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 10
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 12
            echo "            <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 16
            echo "            <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 18
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 19
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <title>";
        // line 21
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo " ";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "    ";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        // line 25
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/bootstrap.css", 1 => 101), "method");
        // line 26
        echo "            ";
        // line 27
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/bootstrap-custom.css", 1 => 100), "method");
        // line 28
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", 1 => 101), "method");
        // line 33
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/bootstrap.js"), "method");
        // line 34
        echo "
            ";
        // line 35
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 36
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 37
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 38
            echo "            ";
        }
        // line 39
        echo "
            ";
        // line 40
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    // line 65
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/ibase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 65,  183 => 53,  177 => 40,  174 => 39,  171 => 38,  168 => 37,  165 => 36,  163 => 35,  160 => 34,  157 => 33,  154 => 32,  151 => 31,  144 => 28,  141 => 27,  139 => 26,  136 => 25,  134 => 24,  131 => 23,  127 => 42,  125 => 31,  122 => 30,  120 => 23,  110 => 21,  105 => 19,  102 => 18,  96 => 16,  94 => 15,  91 => 14,  85 => 12,  79 => 10,  77 => 9,  71 => 5,  68 => 4,  61 => 66,  59 => 65,  47 => 54,  45 => 53,  40 => 50,  38 => 49,  31 => 43,  29 => 4,  24 => 1,);
    }
}
/* <html lang="en">*/
/* */
/* <head>*/
/*     {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         {% if header.description %}*/
/*             <meta name="description" content="{{ header.description }}">*/
/*         {% else %}*/
/*             <meta name="description" content="{{ site.description }}">*/
/*         {% endif %}*/
/* */
/*         {% if header.robots %}*/
/*             <meta name="robots" content="{{ header.robots }}">*/
/*         {% endif %}*/
/* */
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png">*/
/* */
/*         <title>{% if header.title %}{{ header.title }} | {% endif %} {{ site.title }}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {# Bootstraps' core CSS #}*/
/*             {% do assets.add('theme://css/bootstrap.css', 101) %}*/
/*             {# My Custom Style #}*/
/*             {% do assets.add('theme://css/bootstrap-custom.css', 100) %}*/
/*             {{ assets.css() }}*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', 101) %}*/
/*             {% do assets.add('theme://js/bootstrap.js') %}*/
/* */
/*             {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*                 {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}*/
/*                 {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}*/
/*             {% endif %}*/
/* */
/*             {{ assets.js() }}*/
/*         {% endblock %}*/
/*     {% endblock head %}*/
/* </head>*/
/* */
/* */
/* <body>*/
/* */
/* {# include the nav & header #}*/
/* {% include 'partials/iheader.html.twig' %}*/
/* */
/* */
/* <div id="bar1" class="container">*/
/*     {% block content %}{% endblock %}*/
/* </div>*/
/* */
/* <div class="footer">*/
/*     <div class="container">*/
/*         <p class="text-muted">Built by <a href="https://juliusalvarado.info" target="_blank">Julius Alvarado</a>*/
/*              w/<a href="http://getgrav.org" target="_blank">Grav</a>*/
/*         </p>*/
/*     </div>*/
/* </div>*/
/* */
/* {# This is where the custom javascript will be put #}*/
/* {% block bottom %}{% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
