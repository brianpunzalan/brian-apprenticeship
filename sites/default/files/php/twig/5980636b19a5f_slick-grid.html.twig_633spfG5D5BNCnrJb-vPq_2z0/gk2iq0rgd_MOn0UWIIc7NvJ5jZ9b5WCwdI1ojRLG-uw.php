<?php

/* modules/slick/templates/slick-grid.html.twig */
class __TwigTemplate_45a9844fc3112ce8e61809bfea7fe65111ac4a553772661aff059315c1391d29 extends Twig_Template
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
        $tags = array("set" => 13, "for" => 33);
        $filters = array("clean_class" => 26);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for'),
                array('clean_class'),
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

        // line 13
        $context["classes"] = array(0 => (($this->getAttribute(        // line 14
(isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) ? ("slick__grid") : ("slide__content")), 1 => "block-columngrid", 2 => ("block-" .         // line 16
(isset($context["grid_id"]) ? $context["grid_id"] : null)), 3 => (($this->getAttribute(        // line 17
(isset($context["settings"]) ? $context["settings"] : null), "grid_small", array())) ? (((("small-block-" . (isset($context["grid_id"]) ? $context["grid_id"] : null)) . "-") . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "grid_small", array()))) : ("")), 4 => (($this->getAttribute(        // line 18
(isset($context["settings"]) ? $context["settings"] : null), "grid_medium", array())) ? (((("medium-block-" . (isset($context["grid_id"]) ? $context["grid_id"] : null)) . "-") . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "grid_medium", array()))) : ("")), 5 => (($this->getAttribute(        // line 19
(isset($context["settings"]) ? $context["settings"] : null), "grid", array())) ? (((("large-block-" . (isset($context["grid_id"]) ? $context["grid_id"] : null)) . "-") . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "grid", array()))) : ("")));
        // line 23
        $context["item_classes"] = array(0 => (( !$this->getAttribute(        // line 24
(isset($context["settings"]) ? $context["settings"] : null), "unslick", array())) ? ("slide__grid") : ("")), 1 => "grid", 2 => (($this->getAttribute(        // line 26
(isset($context["settings"]) ? $context["settings"] : null), "type", array())) ? (("grid--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "type", array())))) : ("")), 3 => (($this->getAttribute(        // line 27
(isset($context["settings"]) ? $context["settings"] : null), "media_switch", array())) ? (("grid--" . $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "media_switch", array()))) : ("")), 4 => ((($this->getAttribute(        // line 28
(isset($context["settings"]) ? $context["settings"] : null), "media_switch", array()) && twig_in_filter("box", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "media_switch", array())))) ? ("grid--litebox") : ("")));
        // line 31
        echo "
<ul";
        // line 32
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["delta"] => $context["item"]) {
            // line 34
            echo "    <li";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null), 1 => ("grid--" . $context["delta"])), "method"), "html", null, true));
            echo ">
      <div class=\"grid__content\">
        ";
            // line 36
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "
      </div>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['delta'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "modules/slick/templates/slick-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 40,  73 => 36,  67 => 34,  63 => 33,  59 => 32,  56 => 31,  54 => 28,  53 => 27,  52 => 26,  51 => 24,  50 => 23,  48 => 19,  47 => 18,  46 => 17,  45 => 16,  44 => 14,  43 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for the slick-grid items template.
 *
 * Available variables:
 * - attributes: An array of attributes to apply to the element.
 * - items: A renderable array containing chunks of slick-slide.html.twig.
 * - settings: A renderable array containing the given settings.
 */
#}
{%
  set classes = [
    settings.unslick ? 'slick__grid' : 'slide__content',
    'block-columngrid',
    'block-' ~ grid_id,
    settings.grid_small ? 'small-block-' ~ grid_id ~ '-' ~ settings.grid_small,
    settings.grid_medium ? 'medium-block-' ~ grid_id ~ '-' ~ settings.grid_medium,
    settings.grid ? 'large-block-' ~ grid_id ~ '-' ~ settings.grid
  ]
%}
{%
  set item_classes = [
    not settings.unslick ? 'slide__grid',
    'grid',
    settings.type ? 'grid--' ~ settings.type|clean_class,
    settings.media_switch ? 'grid--' ~ settings.media_switch,
    settings.media_switch and 'box' in settings.media_switch ? 'grid--litebox',
  ]
%}

<ul{{ attributes.addClass(classes) }}>
  {% for delta, item in items %}
    <li{{ item.attributes.addClass(item_classes, 'grid--' ~ delta) }}>
      <div class=\"grid__content\">
        {{ item.content }}
      </div>
    </li>
  {% endfor %}
</ul>

";
    }
}
