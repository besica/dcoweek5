<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/contrib/radix_layouts/plugins/layouts/radix_sanderson/radix-sanderson.html.twig */
class __TwigTemplate_601a6bec4ecf6c5386534af8616d64f7b75156ff8719f36a1c976c15cab34601 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 19];
        $filters = ["merge" => 20, "escape" => 26];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 13
        $context["container_classes"] = [0 => "panel-display", 1 => "sanderson", 2 => "clearfix"];
        // line 19
        if (($context["classes"] ?? null)) {
            // line 20
            echo "    ";
            $context["container_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["container_classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)));
        }
        // line 22
        if (($context["class"] ?? null)) {
            // line 23
            echo "    ";
            $context["container_classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["container_classes"] ?? null)), $this->sandbox->ensureToStringAllowed(($context["class"] ?? null)));
        }
        // line 25
        echo "
<div ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["container_classes"] ?? null)], "method")), "html", null, true);
        if (($context["css_id"] ?? null)) {
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css_id"] ?? null)), "html", null, true);
        }
        echo ">

  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-6 radix-layouts-column1 panel-panel\">
        <div ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "column1", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "column1", [])), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"col-md-6 radix-layouts-column2 panel-panel\">
        <div ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "column2", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "column2", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
    
    <div class=\"row\">
      <div class=\"col-md-4 radix-layouts-secondarycolumn1 panel-panel\">
        <div ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "secondarycolumn1", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "secondarycolumn1", [])), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"col-md-4 radix-layouts-secondarycolumn2 panel-panel\">
        <div ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "secondarycolumn2", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "secondarycolumn2", [])), "html", null, true);
        echo "
        </div>
      </div>
      <div class=\"col-md-4 radix-layouts-secondarycolumn3 panel-panel\">
        <div ";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "secondarycolumn3", []), "addClass", [0 => "panel-panel-inner"], "method")), "html", null, true);
        echo ">
          ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "secondarycolumn3", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
  
</div><!-- /.sanderson -->
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/radix_layouts/plugins/layouts/radix_sanderson/radix-sanderson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 55,  130 => 54,  123 => 50,  119 => 49,  112 => 45,  108 => 44,  98 => 37,  94 => 36,  87 => 32,  83 => 31,  72 => 26,  69 => 25,  65 => 23,  63 => 22,  59 => 20,  57 => 19,  55 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/radix_layouts/plugins/layouts/radix_sanderson/radix-sanderson.html.twig", "/var/www/html/web/modules/contrib/radix_layouts/plugins/layouts/radix_sanderson/radix-sanderson.html.twig");
    }
}
