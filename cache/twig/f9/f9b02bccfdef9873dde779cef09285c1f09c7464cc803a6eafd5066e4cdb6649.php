<?php

/* modular/showcase.html.twig */
class __TwigTemplate_47cc0d178046b32661e6ae4c48e8b7d0e35afe7687813d9800f2f9ff753c187a extends Twig_Template
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
        echo "<section id=\"hero\">
    <div class=\"row\">
        <div class=\"twelve columns\">
            <div class=\"hero-text\">
                <h1 class=\"responsive-headline\">";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
        echo "</h1>
                ";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
            </div>

            ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array())) {
            // line 10
            echo "                <div class=\"buttons\">
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 12
                echo "                        <a class=\"";
                echo $this->getAttribute($context["button"], "class", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["button"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["button"], "text", array());
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                </div>
            ";
        }
        // line 16
        echo "
            <div class=\"hero-image\">
                ";
        // line 18
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "showcase_image", array()), array(), "array"), "html", array(), "method");
        echo "
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  61 => 16,  57 => 14,  44 => 12,  40 => 11,  37 => 10,  35 => 9,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section id="hero">*/
/*     <div class="row">*/
/*         <div class="twelve columns">*/
/*             <div class="hero-text">*/
/*                 <h1 class="responsive-headline">{{ page.header.title }}</h1>*/
/*                 {{ content }}*/
/*             </div>*/
/* */
/*             {% if page.header.buttons %}*/
/*                 <div class="buttons">*/
/*                     {% for button in page.header.buttons %}*/
/*                         <a class="{{ button.class }}" href="{{ button.url }}">{{ button.text }}</a>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <div class="hero-image">*/
/*                 {{ page.media[page.header.showcase_image].html() }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
