<?php

/* modules/ds/templates/ds-3col-stacked-equal-width.html.twig */
class __TwigTemplate_2309496ff15b819a0d2289bbd45c8bea1d60c343bca225c8ccacb9b978b7cf97 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 26
        echo "<";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "ds-3col-stacked-equal", 1 => "clearfix"), "method"), "html", null, true));
        echo ">

  ";
        // line 28
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_suffix"]) ? $context["title_suffix"] : null), "contextual_links", array()), "html", null, true));
        echo "

  <";
        // line 30
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_wrapper"]) ? $context["header_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["header_attributes"]) ? $context["header_attributes"] : null), "addClass", array(0 => "group-header"), "method"), "html", null, true));
        echo ">
    ";
        // line 31
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
        echo "
  </";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_wrapper"]) ? $context["header_wrapper"] : null), "html", null, true));
        echo ">

  <";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["left_attributes"]) ? $context["left_attributes"] : null), "addClass", array(0 => "group-left"), "method"), "html", null, true));
        echo ">
    ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left"]) ? $context["left"] : null), "html", null, true));
        echo "
  </";
        // line 36
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["left_wrapper"]) ? $context["left_wrapper"] : null), "html", null, true));
        echo ">

  <";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["middle_wrapper"]) ? $context["middle_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["middle_attributes"]) ? $context["middle_attributes"] : null), "addClass", array(0 => "group-middle"), "method"), "html", null, true));
        echo ">
    ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["middle"]) ? $context["middle"] : null), "html", null, true));
        echo "
  </";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["middle_wrapper"]) ? $context["middle_wrapper"] : null), "html", null, true));
        echo ">

  <";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["right_attributes"]) ? $context["right_attributes"] : null), "addClass", array(0 => "group-right"), "method"), "html", null, true));
        echo ">
    ";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right"]) ? $context["right"] : null), "html", null, true));
        echo "
  </";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["right_wrapper"]) ? $context["right_wrapper"] : null), "html", null, true));
        echo ">

  <";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_wrapper"]) ? $context["footer_wrapper"] : null), "html", null, true));
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["footer_attributes"]) ? $context["footer_attributes"] : null), "addClass", array(0 => "group-footer"), "method"), "html", null, true));
        echo ">
    ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
        echo "
  </";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_wrapper"]) ? $context["footer_wrapper"] : null), "html", null, true));
        echo ">

</";
        // line 50
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["outer_wrapper"]) ? $context["outer_wrapper"] : null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "modules/ds/templates/ds-3col-stacked-equal-width.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 50,  120 => 48,  116 => 47,  111 => 46,  106 => 44,  102 => 43,  97 => 42,  92 => 40,  88 => 39,  83 => 38,  78 => 36,  74 => 35,  69 => 34,  64 => 32,  60 => 31,  55 => 30,  50 => 28,  43 => 26,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Display Suite 3 column stacked template.*/
/*  **/
/*  * Available variables:*/
/*  * - outer_wrapper: outer wrapper element*/
/*  * - header_wrapper: wrapper element around header region*/
/*  * - left_wrapper: wrapper element around left region*/
/*  * - middle_wrapper: wrapper element around middle region*/
/*  * - right_wrapper: wrapper element around right region*/
/*  * - footer_wrapper: wrapper element around footer region*/
/*  * - attributes: layout attributes*/
/*  * - header_attributes: attributes for header region*/
/*  * - left_attributes: attributes for left region*/
/*  * - middle_attributes: attributes for middle region*/
/*  * - right_attributes: attributes for right region*/
/*  * - footer_attributes: attributes for footer region*/
/*  * - header: content of header region*/
/*  * - left: content of left region*/
/*  * - middle: content of middle region*/
/*  * - right: content of right region*/
/*  * - footer: content of footer region*/
/*  *//* */
/* #}*/
/* <{{ outer_wrapper }}{{ attributes.addClass('ds-3col-stacked-equal', 'clearfix') }}>*/
/* */
/*   {{ title_suffix.contextual_links }}*/
/* */
/*   <{{ header_wrapper }}{{ header_attributes.addClass('group-header') }}>*/
/*     {{ header }}*/
/*   </{{ header_wrapper }}>*/
/* */
/*   <{{ left_wrapper }}{{ left_attributes.addClass('group-left') }}>*/
/*     {{ left }}*/
/*   </{{ left_wrapper }}>*/
/* */
/*   <{{ middle_wrapper }}{{ middle_attributes.addClass('group-middle') }}>*/
/*     {{ middle }}*/
/*   </{{ middle_wrapper }}>*/
/* */
/*   <{{ right_wrapper }}{{ right_attributes.addClass('group-right') }}>*/
/*     {{ right }}*/
/*   </{{ right_wrapper }}>*/
/* */
/*   <{{ footer_wrapper }}{{ footer_attributes.addClass('group-footer') }}>*/
/*     {{ footer }}*/
/*   </{{ footer_wrapper }}>*/
/* */
/* </{{ outer_wrapper }}>*/
/* */
