<?php

/* forms/default/data.html.twig */
class __TwigTemplate_8018787dc5a702bbff464753d873f684377f227c7ef628de58b247aebc5db45d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_label' => array($this, 'block_field_label'),
            'field_value' => array($this, 'block_field_value'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
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
            // line 2
            $this->displayBlock('field', $context, $blocks);
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
    }

    public function block_field($context, array $blocks = array())
    {
        // line 3
        echo "    <div>";
        $this->displayBlock('field_label', $context, $blocks);
        echo ": ";
        $this->displayBlock('field_value', $context, $blocks);
        echo "</div>
";
    }

    public function block_field_label($context, array $blocks = array())
    {
        echo "<strong>";
        echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array());
        echo "</strong>";
    }

    public function block_field_value($context, array $blocks = array())
    {
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->stringFunc(twig_escape_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "value", array(0 => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())), "method"))), "html", null, true));
    }

    public function getTemplateName()
    {
        return "forms/default/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 3,  39 => 2,  22 => 1,);
    }
}
/* {% for field in form.fields %}*/
/* {% block field %}*/
/*     <div>{% block field_label %}<strong>{{ field.label }}</strong>{% endblock %}: {% block field_value %}{{ string(form.value(field.name)|e)|nl2br }}{% endblock %}</div>*/
/* {% endblock %}*/
/* {% endfor %}*/
/* */
