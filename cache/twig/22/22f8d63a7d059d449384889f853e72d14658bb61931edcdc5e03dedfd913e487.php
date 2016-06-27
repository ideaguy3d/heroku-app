<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_b3661e44f2d6a9dbb0846d413d2f95706846faa3b30f19f8aadefaa21dfd328e extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/") || ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null)))) ? ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "slug", array()))) : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/")) ? ("") : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 5
            echo "<div class=\"sidebar-content\">
    <h4>SimpleSearch</h4>
    ";
            // line 7
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 7)->display($context);
            // line 8
            echo "</div>
";
        }
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, (isset($context["related_pages"]) ? $context["related_pages"] : null)) > 0))) {
            // line 11
            echo "    <h4>Related Posts</h4>
    ";
            // line 12
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 12)->display($context);
        }
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 15
            echo "<div class=\"sidebar-content\">
\t<h4>Random Article</h4>
\t<a class=\"button\" href=\"";
            // line 17
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
";
        }
        // line 20
        echo "<div class=\"sidebar-content\">
\t<h4>Some Text Widget</h4>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>
";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 25
            echo "<div class=\"sidebar-content\">
    <h4>Popular Tags</h4>
    ";
            // line 27
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 27)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "tag")));
            // line 28
            echo "</div>
";
        }
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 31
            echo "<div class=\"sidebar-content\">
    <h4>Archives</h4>
\t";
            // line 33
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 33)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null))));
            // line 34
            echo "</div>
";
        }
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 37
            echo "<div class=\"sidebar-content syndicate\">
    <h4>Syndicate</h4>
    <a class=\"button\" href=\"";
            // line 39
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 40
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  94 => 39,  90 => 37,  88 => 36,  84 => 34,  82 => 33,  78 => 31,  76 => 30,  72 => 28,  70 => 27,  66 => 25,  64 => 24,  58 => 20,  52 => 17,  48 => 15,  46 => 14,  43 => 12,  40 => 11,  38 => 10,  34 => 8,  32 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}*/
/* {% set new_base_url = blog.url == '/' ? '' : blog.url %}*/
/* */
/* {% if config.plugins.simplesearch.enabled %}*/
/* <div class="sidebar-content">*/
/*     <h4>SimpleSearch</h4>*/
/*     {% include 'partials/simplesearch_searchbox.html.twig' %}*/
/* </div>*/
/* {% endif %}*/
/* {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}*/
/*     <h4>Related Posts</h4>*/
/*     {% include 'partials/relatedpages.html.twig' %}*/
/* {% endif %}*/
/* {% if config.plugins.random.enabled %}*/
/* <div class="sidebar-content">*/
/* 	<h4>Random Article</h4>*/
/* 	<a class="button" href="{{ base_url }}/random"><i class="fa fa-retweet"></i> I'm Feeling Lucky!</a>*/
/* </div>*/
/* {% endif %}*/
/* <div class="sidebar-content">*/
/* 	<h4>Some Text Widget</h4>*/
/* 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>*/
/* </div>*/
/* {% if config.plugins.taxonomylist.enabled %}*/
/* <div class="sidebar-content">*/
/*     <h4>Popular Tags</h4>*/
/*     {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}*/
/* </div>*/
/* {% endif %}*/
/* {% if config.plugins.archives.enabled %}*/
/* <div class="sidebar-content">*/
/*     <h4>Archives</h4>*/
/* 	{% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}*/
/* </div>*/
/* {% endif %}*/
/* {% if config.plugins.feed.enabled %}*/
/* <div class="sidebar-content syndicate">*/
/*     <h4>Syndicate</h4>*/
/*     <a class="button" href="{{ feed_url }}.atom"><i class="fa fa-rss-square"></i> Atom 1.0</a>*/
/*     <a class="button" href="{{ feed_url }}.rss"><i class="fa fa-rss-square"></i> RSS</a>*/
/* </div>*/
/* {% endif %}*/
