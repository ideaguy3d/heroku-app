<?php

/* forms/field.html.twig */
class __TwigTemplate_166415c433f4d61409a64c7ced90d64f1d0e43d86ae184a29e12b5ba8ce94795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? ((isset($context["originalValue"]) ? $context["originalValue"] : null)) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 4
        $context["vertical"] = true;
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"form-field ";
        if ((isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " vertical";
        }
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outerclasses", array(), "any", true, true)) {
            echo " ";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "outerclasses", array());
        }
        echo "\">
        ";
        // line 8
        $this->displayBlock('contents', $context, $blocks);
        // line 57
        echo "    </div>
";
    }

    // line 8
    public function block_contents($context, array $blocks = array())
    {
        // line 9
        echo "            <div class=\"form-label";
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-1-3";
        }
        echo "\">
                <label class=\"inline\" ";
        // line 10
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        echo " >
                ";
        // line 11
        $this->displayBlock('label', $context, $blocks);
        // line 19
        echo "                </label>
            </div>
            <div class=\"form-data";
        // line 21
        if ( !(isset($context["vertical"]) ? $context["vertical"] : null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 22
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 27
        echo "            >
                ";
        // line 28
        $this->displayBlock('group', $context, $blocks);
        // line 55
        echo "            </div>
        ";
    }

    // line 11
    public function block_label($context, array $blocks = array())
    {
        // line 12
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
            // line 13
            echo "                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo $this->env->getExtension('GravTwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())));
            echo "\">";
            echo $this->env->getExtension('GravTwigExtension')->translate((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))));
            echo "</span>
                    ";
        } else {
            // line 15
            echo "                    ";
            echo $this->env->getExtension('GravTwigExtension')->translate((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())))));
            echo "
                    ";
        }
        // line 17
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 22
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 23
        echo "                data-grav-field=\"";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 24
        echo (((null === (isset($context["originalValue"]) ? $context["originalValue"] : null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 28
    public function block_group($context, array $blocks = array())
    {
        // line 29
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 54
        echo "                ";
    }

    // line 29
    public function block_input($context, array $blocks = array())
    {
        // line 30
        echo "                        <div class=\"form-input-wrapper ";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array());
        echo "\">
                            <input
                                ";
        // line 33
        echo "                                name=\"";
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\"
                                value=\"";
        // line 34
        echo twig_join_filter(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html_attr"), ", ");
        echo "\"
                                ";
        // line 36
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 51
        echo "                                />
                        </div>
                    ";
    }

    // line 36
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 37
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array());
            echo "\" ";
        }
        // line 38
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
            echo "\" ";
        }
        // line 39
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
            echo "\" ";
        }
        // line 40
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array())) {
            echo "disabled=\"disabled\"";
        }
        // line 41
        echo "                                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder", array());
            echo "\"";
        }
        // line 42
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 43
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 44
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 45
        echo "                                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array());
            echo "\"";
        }
        // line 46
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 47
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "pattern", array());
            echo "\"";
        }
        // line 48
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo $this->env->getExtension('GravTwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 49
(isset($context["field"]) ? $context["field"] : null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo $this->env->getExtension('GravTwigExtension')->translate(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array())));
            echo "\" ";
        }
        // line 50
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 50,  260 => 49,  253 => 48,  246 => 47,  241 => 46,  234 => 45,  229 => 44,  224 => 43,  219 => 42,  212 => 41,  207 => 40,  200 => 39,  193 => 38,  186 => 37,  183 => 36,  177 => 51,  174 => 36,  170 => 34,  165 => 33,  159 => 30,  156 => 29,  152 => 54,  149 => 29,  146 => 28,  140 => 25,  136 => 24,  131 => 23,  128 => 22,  121 => 17,  115 => 15,  107 => 13,  104 => 12,  101 => 11,  96 => 55,  94 => 28,  91 => 27,  89 => 22,  83 => 21,  79 => 19,  77 => 11,  69 => 10,  62 => 9,  59 => 8,  54 => 57,  52 => 8,  41 => 7,  35 => 6,  32 => 5,  30 => 4,  28 => 2,  26 => 1,);
    }
}
/* {% set originalValue = originalValue is defined ? originalValue : value %}*/
/* {% set value = (value is null ? field.default : value) %}*/
/* {# {% set vertical = field.style == 'vertical' %} #}*/
/* {% set vertical = true %}*/
/* */
/* {% block field %}*/
/*     <div class="form-field {% if vertical %} vertical{% endif %}{% if field.outerclasses is defined %} {{ field.outerclasses }}{% endif %}">*/
/*         {% block contents %}*/
/*             <div class="form-label{% if not vertical %} block size-1-3{% endif %}">*/
/*                 <label class="inline" {% if field.id is defined %}for="{{ field.id|e }}" {% endif %} >*/
/*                 {% block label %}*/
/*                     {% if field.help %}*/
/*                     <span class="tooltip" data-asTooltip-position="w" title="{{ field.help|e|t }}">{{ field.label|default(field.name|capitalize)|t }}</span>*/
/*                     {% else %}*/
/*                     {{ field.label|default(field.name|capitalize)|t }}*/
/*                     {% endif %}*/
/*                     {{ field.validate.required in ['on', 'true', 1] ? '<span class="required">*</span>' }}*/
/*                 {% endblock %}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="form-data{% if not vertical %} block size-2-3{% endif %}"*/
/*                 {% block global_attributes %}*/
/*                 data-grav-field="{{ field.type }}"*/
/*                 data-grav-disabled="{{ originalValue is null ? 'true' : 'false' }}"*/
/*                 data-grav-default="{{ field.default|json_encode()|e('html_attr') }}"*/
/*                 {% endblock %}*/
/*             >*/
/*                 {% block group %}*/
/*                     {% block input %}*/
/*                         <div class="form-input-wrapper {{ field.size }}">*/
/*                             <input*/
/*                                 {# required attribute structures #}*/
/*                                 name="{{ (scope ~ field.name)|fieldName }}"*/
/*                                 value="{{ value|e('html_attr')|join(', ') }}"*/
/*                                 {# input attribute structures #}*/
/*                                 {% block input_attributes %}*/
/*                                     {% if field.classes is defined %}class="{{ field.classes }}" {% endif %}*/
/*                                     {% if field.id is defined %}id="{{ field.id|e }}" {% endif %}*/
/*                                     {% if field.style is defined %}style="{{ field.style|e }}" {% endif %}*/
/*                                     {% if field.disabled %}disabled="disabled"{% endif %}*/
/*                                     {% if field.placeholder %}placeholder="{{ field.placeholder }}"{% endif %}*/
/*                                     {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*                                     {% if field.novalidate in ['on', 'true', 1] %}novalidate="novalidate"{% endif %}*/
/*                                     {% if field.readonly in ['on', 'true', 1] %}readonly="readonly"{% endif %}*/
/*                                     {% if field.autocomplete in ['on', 'off'] %}autocomplete="{{ field.autocomplete }}"{% endif %}*/
/*                                     {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*                                     {% if field.validate.pattern %}pattern="{{ field.validate.pattern }}"{% endif %}*/
/*                                     {% if field.validate.message %}title="{{ field.validate.message|e|t }}"*/
/*                                     {% elseif field.title is defined %}title="{{ field.title|e|t }}" {% endif %}*/
/*                                 {% endblock %}*/
/*                                 />*/
/*                         </div>*/
/*                     {% endblock %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
