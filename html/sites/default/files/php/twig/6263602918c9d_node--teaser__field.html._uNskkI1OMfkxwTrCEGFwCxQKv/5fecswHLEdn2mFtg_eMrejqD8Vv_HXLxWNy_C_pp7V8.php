<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* node--teaser__field.html.twig */
class __TwigTemplate_a967463418f4c753c32e1ca2b4df542eac7e5f7a612f08915a75d5adf3fa3116 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'svg_title' => [$this, 'block_svg_title'],
            'field_icon' => [$this, 'block_field_icon'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"teaser__content-line\">
  <svg class=\"teaser__content-type-icon\" aria-hidden=\"true\">
    ";
        // line 3
        $this->displayBlock('svg_title', $context, $blocks);
        // line 4
        echo "    <use xlink:href=\"#icon-";
        $this->displayBlock('field_icon', $context, $blocks);
        echo "\"></use>
  </svg>
  <div class=\"teaser__content-text\">
    ";
        // line 7
        $this->displayBlock('field_value', $context, $blocks);
        // line 8
        echo "  </div>
</div>
";
    }

    // line 3
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    // line 4
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "label";
    }

    // line 7
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
    }

    public function getTemplateName()
    {
        return "node--teaser__field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 7,  70 => 4,  63 => 3,  57 => 8,  55 => 7,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser__field.html.twig", "themes/contrib/socialbase/templates/node/node--teaser__field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 3);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
