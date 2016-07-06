<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_280b45f4e8edce4f56c09d7fecb27fd8e61730fd1f80292f756085f1b996a207 extends Twig_Template
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
        echo "<div class=\"list-item\">

    ";
        // line 3
        $context["header_image"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image", array()), true);
        // line 4
        echo "    ";
        $context["header_image_width"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_width", array()), 900);
        // line 5
        echo "    ";
        $context["header_image_height"] = $this->env->getExtension('GravTwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_height", array()), 300);
        // line 6
        echo "    ";
        $context["header_image_file"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "header_image_file", array());
        // line 7
        echo "
    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <span>";
        // line 10
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span>
            <em>";
        // line 11
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</em>
        </span>
        ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 14
            echo "            <h4>
                ";
            // line 15
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 16
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 18
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 21
            echo "            <h4><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h4>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 25
            echo "        <span class=\"tags\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 27
                echo "            <a href=\"";
                echo $this->env->getExtension('GravTwigExtension')->rtrimFilter($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        </span>
        ";
        }
        // line 31
        echo "        ";
        if ((isset($context["header_image"]) ? $context["header_image"] : null)) {
            // line 32
            echo "            ";
            if ((isset($context["header_image_file"]) ? $context["header_image_file"] : null)) {
                // line 33
                echo "                ";
                $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), (isset($context["header_image_file"]) ? $context["header_image_file"] : null), array(), "array");
                // line 34
                echo "            ";
            } else {
                // line 35
                echo "                ";
                $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
                // line 36
                echo "            ";
            }
            // line 37
            echo "            ";
            echo $this->getAttribute($this->getAttribute((isset($context["header_image_media"]) ? $context["header_image_media"] : null), "cropZoom", array(0 => (isset($context["header_image_width"]) ? $context["header_image_width"] : null), 1 => (isset($context["header_image_height"]) ? $context["header_image_height"] : null)), "method"), "html", array());
            echo "
        ";
        }
        // line 39
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 45
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 46
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 47
                echo "        ";
                $context["show_prev_next"] = true;
                // line 48
                echo "        ";
            }
            // line 49
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 50
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "
        <p><a href=\"";
            // line 51
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 52
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 53
            echo "        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 54
                echo "            ";
                echo call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550));
                echo "
        ";
            } else {
                // line 56
                echo "            ";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "
        ";
            }
            // line 58
            echo "        <p><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 60
            echo "        ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "
        ";
            // line 61
            $context["show_prev_next"] = true;
            // line 62
            echo "    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 65
            echo "
        <p class=\"prev-next\">
            ";
            // line 67
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 68
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            ";
            }
            // line 70
            echo "
            ";
            // line 71
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 72
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 74
            echo "        </p>
    ";
        }
        // line 76
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 76,  227 => 74,  221 => 72,  219 => 71,  216 => 70,  210 => 68,  208 => 67,  204 => 65,  202 => 64,  199 => 63,  196 => 62,  194 => 61,  189 => 60,  183 => 58,  177 => 56,  171 => 54,  168 => 53,  166 => 52,  162 => 51,  157 => 50,  154 => 49,  151 => 48,  148 => 47,  146 => 46,  141 => 45,  139 => 44,  132 => 39,  126 => 37,  123 => 36,  120 => 35,  117 => 34,  114 => 33,  111 => 32,  108 => 31,  104 => 29,  90 => 27,  86 => 26,  83 => 25,  81 => 24,  78 => 23,  70 => 21,  61 => 18,  55 => 16,  53 => 15,  50 => 14,  48 => 13,  43 => 11,  39 => 10,  34 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="list-item">*/
/* */
/*     {% set header_image = page.header.header_image|defined(true) %}*/
/*     {% set header_image_width  = page.header.header_image_width|defined(900) %}*/
/*     {% set header_image_height = page.header.header_image_height|defined(300) %}*/
/*     {% set header_image_file = page.header.header_image_file %}*/
/* */
/*     <div class="list-blog-header">*/
/*         <span class="list-blog-date">*/
/*             <span>{{ page.date|date("d") }}</span>*/
/*             <em>{{ page.date|date("M") }}</em>*/
/*         </span>*/
/*         {% if page.header.link %}*/
/*             <h4>*/
/*                 {% if page.header.continue_link is not sameas(false) %}*/
/*                 <a href="{{ page.url }}"><i class="fa fa-angle-double-right"></i></a>*/
/*                 {% endif %}*/
/*                 <a href="{{ page.header.link }}">{{ page.title }}</a>*/
/*             </h4>*/
/*         {% else %}*/
/*             <h4><a href="{{ page.url }}">{{ page.title }}</a></h4>*/
/*         {% endif %}*/
/* */
/*         {% if page.taxonomy.tag %}*/
/*         <span class="tags">*/
/*             {% for tag in page.taxonomy.tag %}*/
/*             <a href="{{ blog.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}">{{ tag }}</a>*/
/*             {% endfor %}*/
/*         </span>*/
/*         {% endif %}*/
/*         {% if header_image %}*/
/*             {% if header_image_file %}*/
/*                 {% set header_image_media = page.media.images[header_image_file] %}*/
/*             {% else %}*/
/*                 {% set header_image_media = page.media.images|first %}*/
/*             {% endif %}*/
/*             {{ header_image_media.cropZoom(header_image_width, header_image_height).html }}*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     <div class="list-blog-padding">*/
/* */
/*     {% if page.header.continue_link is sameas(false) %}*/
/*         {{ page.content }}*/
/*         {% if not truncate %}*/
/*         {% set show_prev_next = true %}*/
/*         {% endif %}*/
/*     {% elseif truncate and page.summary != page.content %}*/
/*         {{ page.summary }}*/
/*         <p><a href="{{ page.url }}">Continue Reading...</a></p>*/
/*     {% elseif truncate %}*/
/*         {% if page.summary != page.content %}*/
/*             {{ page.content|truncate(550) }}*/
/*         {% else %}*/
/*             {{ page.content }}*/
/*         {% endif %}*/
/*         <p><a href="{{ page.url }}">Continue Reading...</a></p>*/
/*     {% else %}*/
/*         {{ page.content }}*/
/*         {% set show_prev_next = true %}*/
/*     {% endif %}*/
/* */
/*     {% if show_prev_next %}*/
/* */
/*         <p class="prev-next">*/
/*             {% if not page.isFirst %}*/
/*                 <a class="button" href="{{ page.nextSibling.url }}"><i class="fa fa-chevron-left"></i> Next Post</a>*/
/*             {% endif %}*/
/* */
/*             {% if not page.isLast %}*/
/*                 <a class="button" href="{{ page.prevSibling.url }}">Previous Post <i class="fa fa-chevron-right"></i></a>*/
/*             {% endif %}*/
/*         </p>*/
/*     {% endif %}*/
/* */
/*     </div>*/
/* </div>*/
/* */
