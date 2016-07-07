<?php

/* forms/default/form.html.twig */
class __TwigTemplate_b2769cc2a732ece861bc4151610f5ab7ae0d9f7c0b6f747bd69a82b58970a35b extends Twig_Template
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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            echo "<div class=\"alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
            echo "</div>";
        }
        // line 2
        $context["multipart"] = "";
        // line 3
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "method", array())), "POST");
        // line 4
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 6
            echo "    ";
            if ((((isset($context["method"]) ? $context["method"] : null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 7
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 8
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
<form name=\"";
        // line 11
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array());
        echo "\"
      action=\"";
        // line 12
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array())) ? (((isset($context["base_url"]) ? $context["base_url"] : null) . $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "action", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array())));
        echo "\"
      method=\"";
        // line 13
        echo (isset($context["method"]) ? $context["method"] : null);
        echo "\"";
        echo (isset($context["multipart"]) ? $context["multipart"] : null);
        echo ">

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 16
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 17
            echo "    <div>
        ";
            // line 18
            $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 18)->display($context);
            // line 19
            echo "    </div>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
\t<div class=\"buttons\">
\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 24
            echo "\t    <button class=\"";
            echo (($this->getAttribute($context["button"], "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "classes", array()), "button")) : ("button"));
            echo "\" type=\"";
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\">";
            echo _twig_default_filter($this->env->getExtension('GravTwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "</button>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</div>

  ";
        // line 28
        echo $this->env->getExtension('GravTwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 28,  128 => 26,  115 => 24,  111 => 23,  107 => 21,  92 => 19,  90 => 18,  87 => 17,  84 => 16,  67 => 15,  60 => 13,  56 => 12,  52 => 11,  49 => 10,  42 => 8,  39 => 7,  36 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  19 => 1,);
    }
}
/* {% if form.message %}<div class="alert">{{ form.message }}</div>{% endif %}*/
/* {% set multipart = '' %}*/
/* {% set method = form.method|upper|default('POST') %}*/
/* */
/* {% for field in form.fields %}*/
/*     {% if (method == 'POST' and field.type == 'file') %}*/
/*         {% set multipart = ' enctype="multipart/form-data"' %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* */
/* <form name="{{ form.name }}"*/
/*       action="{{ form.action ? base_url ~ form.action : page.url }}"*/
/*       method="{{ method }}"{{ multipart }}>*/
/* */
/* {% for field in form.fields %}*/
/*     {% set value = form.value(field.name) %}*/
/*     <div>*/
/*         {% include "forms/fields/#{field.type}/#{field.type}.html.twig" %}*/
/*     </div>*/
/* {% endfor %}*/
/* */
/* 	<div class="buttons">*/
/* 	{% for button in form.buttons %}*/
/* 	    <button class="{{ button.classes|default('button') }}" type="{{ button.type|default('submit') }}">{{ button.value|t|default('Submit') }}</button>*/
/* 	{% endfor %}*/
/* 	</div>*/
/* */
/*   {{ nonce_field('form', 'form-nonce') }}*/
/* </form>*/
/* */
