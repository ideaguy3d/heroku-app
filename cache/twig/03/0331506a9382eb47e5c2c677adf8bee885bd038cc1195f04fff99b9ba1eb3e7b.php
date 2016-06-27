<?php

/* modular/features.html.twig */
class __TwigTemplate_6a230aa570afdc04a07043928f56d31b19dadac847a468777fee9c596aa75b2a extends Twig_Template
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
        echo "<section id='features'>
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "rows", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 3
            echo "    <div class=\"row feature ";
            echo $this->getAttribute($context["row"], "name", array());
            echo "\">

      <div class=\"";
            // line 5
            if (($this->getAttribute($context["row"], "image", array()) || $this->getAttribute($context["row"], "video", array()))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns ";
            echo $this->getAttribute($context["row"], "description_position", array());
            echo "\">
        <h3>";
            // line 6
            echo $this->getAttribute($context["row"], "title", array());
            echo "</h3>
        <p>";
            // line 7
            echo $this->getAttribute($context["row"], "description", array());
            echo "</p>
      </div>

      <div class=\"";
            // line 10
            if (($this->getAttribute($context["row"], "image", array()) || $this->getAttribute($context["row"], "video", array()))) {
                echo "six";
            } else {
                echo "twelve";
            }
            echo " columns feature-media ";
            if (($this->getAttribute($context["row"], "description_position", array()) == "right")) {
                echo "left";
            } else {
                echo "right";
            }
            echo "\">
        ";
            // line 11
            if ($this->getAttribute($context["row"], "image", array())) {
                // line 12
                echo "          ";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($context["row"], "image", array()), array(), "array"), "html", array(), "method");
                echo "
        ";
            }
            // line 14
            echo "        ";
            if ($this->getAttribute($context["row"], "video", array())) {
                // line 15
                echo "          <div class=\"fluid-video-wrapper\">
            <iframe src=\"";
                // line 16
                echo $this->getAttribute($context["row"], "video", array());
                echo "?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39\" width=\"500\" height=\"281\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
          </div>
        ";
            }
            // line 19
            echo "      </div>

    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  <div class=\"row feature\">
    ";
        // line 24
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  95 => 23,  86 => 19,  80 => 16,  77 => 15,  74 => 14,  68 => 12,  66 => 11,  52 => 10,  46 => 7,  42 => 6,  32 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <section id='features'>*/
/*   {% for row in page.header.rows %}*/
/*     <div class="row feature {{row.name}}">*/
/* */
/*       <div class="{% if row.image or row.video %}six{% else %}twelve{% endif %} columns {{ row.description_position }}">*/
/*         <h3>{{ row.title }}</h3>*/
/*         <p>{{ row.description }}</p>*/
/*       </div>*/
/* */
/*       <div class="{% if row.image or row.video %}six{% else %}twelve{% endif %} columns feature-media {% if row.description_position == 'right' %}left{% else %}right{% endif %}">*/
/*         {% if row.image %}*/
/*           {{ page.media[row.image].html() }}*/
/*         {% endif %}*/
/*         {% if row.video %}*/
/*           <div class="fluid-video-wrapper">*/
/*             <iframe src="{{ row.video }}?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> */
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*     </div>*/
/*   {% endfor %}*/
/*   <div class="row feature">*/
/*     {{ content }}*/
/*   </div>*/
/* </section>*/
