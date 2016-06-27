<?php

/* blog.html.twig */
class __TwigTemplate_5ceea3686f586089f8979bbd725391869d555e92068a55abcfb8659fedf1189a extends Twig_Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1034062444")->display($context);
        // line 37
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 37,  19 => 1,);
    }
}


/* blog.html.twig */
class __TwigTemplate_5ceea3686f586089f8979bbd725391869d555e92068a55abcfb8659fedf1189a_1034062444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t\t";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "grayscale", array(), "method"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  -100), "method"), "colorize", array(0 =>  -35, 1 => 81, 2 => 122), "method");
        // line 7
        echo "
\t\t";
        // line 8
        if ((isset($context["blog_image"]) ? $context["blog_image"] : null)) {
            // line 9
            echo "\t\t<div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\">
\t\t";
        } else {
            // line 11
            echo "\t\t<div class=\"blog-header\">
\t\t";
        }
        // line 13
        echo "\t\t\t";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

\t\t\t";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 17
            echo "\t\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 17)->display($context);
            // line 18
            echo "\t\t\t";
        }
        // line 19
        echo "
\t\t<div class=\"content-wrapper blog-content-list grid pure-g\">
\t\t\t<div id=\"listing\" class=\"block pure-u-2-3\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo "\t\t\t        ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 23)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null), "page" => $context["child"], "truncate" => true)));
            // line 24
            echo "\t\t\t    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
                ";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 27
            echo "                    ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 27)->display(array_merge($context, array("base_url" => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))));
            // line 28
            echo "                ";
        }
        // line 29
        echo "\t\t\t</div>
\t\t\t<div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
\t\t\t\t";
        // line 31
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 31)->display(array_merge($context, array("blog" => (isset($context["page"]) ? $context["page"] : null))));
        // line 32
        echo "\t\t\t</div>
\t\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 32,  161 => 31,  157 => 29,  154 => 28,  151 => 27,  149 => 26,  146 => 25,  132 => 24,  129 => 23,  112 => 22,  107 => 19,  104 => 18,  101 => 17,  99 => 16,  92 => 13,  88 => 11,  82 => 9,  80 => 8,  77 => 7,  74 => 6,  71 => 5,  67 => 1,  65 => 3,  51 => 1,  21 => 37,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/* 	{% set collection = page.collection() %}*/
/* */
/* 	{% block content %}*/
/* 		{% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}*/
/* */
/* 		{% if blog_image %}*/
/* 		<div class="flush-top blog-header blog-header-image" style="background-image: url({{ blog_image.url }});">*/
/* 		{% else %}*/
/* 		<div class="blog-header">*/
/* 		{% endif %}*/
/* 			{{ page.content }}*/
/* 		</div>*/
/* */
/* 			{% if config.plugins.breadcrumbs.enabled %}*/
/* 				{% include 'partials/breadcrumbs.html.twig' %}*/
/* 			{% endif %}*/
/* */
/* 		<div class="content-wrapper blog-content-list grid pure-g">*/
/* 			<div id="listing" class="block pure-u-2-3">*/
/* 				{% for child in collection %}*/
/* 			        {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}*/
/* 			    {% endfor %}*/
/* */
/*                 {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*                     {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}*/
/*                 {% endif %}*/
/* 			</div>*/
/* 			<div id="sidebar" class="block size-1-3 pure-u-1-3">*/
/* 				{% include 'partials/sidebar.html.twig' with {'blog':page} %}*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endblock %}*/
/* */
/* {% endembed %}*/
/* */
/* */
/* */
