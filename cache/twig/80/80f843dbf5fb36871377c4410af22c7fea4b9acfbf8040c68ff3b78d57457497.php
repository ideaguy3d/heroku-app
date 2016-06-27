<?php

/* modular/pricing.html.twig */
class __TwigTemplate_bcd8d7ac27b0822da13a29e6ff11d551e589277e055f36c0cbb73b1dc9439878 extends Twig_Template
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
        echo "<section id=\"pricing\">

  <div class=\"row section-head\">
    ";
        // line 4
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
  </div>

  <div class=\"row\">
    <div class=\"pricing-tables bgrid-quarters s-bgrid-halves\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "columns", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 10
            echo "        <div class=\"column\">
          <div class=\"price-block\">
            <h3 class=\"plan-title\"><i class=\"fa fa-";
            // line 12
            echo $this->getAttribute($context["column"], "icon", array());
            echo "\"></i>";
            echo $this->getAttribute($context["column"], "title", array());
            echo "</h3>
            <p class=\"plan-price\">";
            // line 13
            echo $this->getAttribute($context["column"], "price1", array());
            echo " <span>";
            echo $this->getAttribute($context["column"], "price2", array());
            echo "</span></p>

            <ul class=\"features\">
              ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "features", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 17
                echo "               <li>";
                echo $this->getAttribute($context["feature"], "name", array());
                echo "</li> 
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            </ul>

            <footer class=\"plan-sign-up\">
              ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 23
                echo "               <a class=\"button\" href=\"";
                echo $this->getAttribute($context["button"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["button"], "text", array());
                echo "</a>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </footer>
       </div> 
     </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo " </div>
</div>

</section> ";
    }

    public function getTemplateName()
    {
        return "modular/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  87 => 25,  76 => 23,  72 => 22,  67 => 19,  58 => 17,  54 => 16,  46 => 13,  40 => 12,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
/* <section id="pricing">*/
/* */
/*   <div class="row section-head">*/
/*     {{ content }}*/
/*   </div>*/
/* */
/*   <div class="row">*/
/*     <div class="pricing-tables bgrid-quarters s-bgrid-halves">*/
/*       {% for column in page.header.columns %}*/
/*         <div class="column">*/
/*           <div class="price-block">*/
/*             <h3 class="plan-title"><i class="fa fa-{{ column.icon }}"></i>{{ column.title }}</h3>*/
/*             <p class="plan-price">{{ column.price1 }} <span>{{ column.price2 }}</span></p>*/
/* */
/*             <ul class="features">*/
/*               {% for feature in column.features %}*/
/*                <li>{{ feature.name }}</li> */
/*              {% endfor %}*/
/*             </ul>*/
/* */
/*             <footer class="plan-sign-up">*/
/*               {% for button in column.buttons %}*/
/*                <a class="button" href="{{ button.url }}">{{ button.text }}</a>*/
/*               {% endfor %}*/
/*             </footer>*/
/*        </div> */
/*      </div>*/
/*    {% endfor %}*/
/*  </div>*/
/* </div>*/
/* */
/* </section> */
