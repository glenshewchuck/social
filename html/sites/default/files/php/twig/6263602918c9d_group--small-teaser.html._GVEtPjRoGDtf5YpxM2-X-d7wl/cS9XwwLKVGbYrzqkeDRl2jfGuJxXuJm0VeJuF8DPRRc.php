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

/* themes/contrib/socialbase/templates/group/group--small-teaser.html.twig */
class __TwigTemplate_4eee7b043ea8855e1bc318369d76d2ec82f92175958988295f222c03f32c0a07 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'teaser_image' => [$this, 'block_teaser_image'],
            'extra_text' => [$this, 'block_extra_text'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--small-teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--small-teaser.html.twig", "themes/contrib/socialbase/templates/group/group--small-teaser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_teaser_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"teaser--small__media\">
    ";
        // line 5
        if ( !twig_test_empty(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((($__internal_compile_0 = ($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["field_group_image"] ?? null) : null)), "<img>"))) {
            // line 6
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = ($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["field_group_image"] ?? null) : null), 6, $this->source), "html", null, true);
            echo "
    ";
        } else {
            // line 8
            echo "      <svg class=\"teaser--small__type-icon\">
        <title>";
            // line 9
            echo t("Group", array());
            echo "</title>
        <use xlink:href=\"#icon-group\"></use>
      </svg>
    ";
        }
        // line 13
        echo "  </div>
";
    }

    // line 16
    public function block_extra_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "  <div class=\"teaser--small__meta\">
    ";
        // line 18
        if (($context["closed_group_lock"] ?? null)) {
            // line 19
            echo "      <svg class=\"icon-gray icon-small\" aria-hidden=\"true\">
        <title>";
            // line 20
            echo t("Closed group", array());
            echo "</title>
        <use xlink:href=\"#icon-lock\"></use>
      </svg>
    ";
        } elseif (        // line 23
($context["secret_group_shield"] ?? null)) {
            // line 24
            echo "      <svg class=\"icon-gray icon-small\" aria-hidden=\"true\">
        <title>";
            // line 25
            echo t("Secret group", array());
            echo "</title>
        <use xlink:href=\"#icon-shield\"></use>
      </svg>
    ";
        }
        // line 29
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["group_type"] ?? null), 29, $this->source), "html", null, true);
        echo " &middot; ";
        echo \Drupal::translation()->formatPlural(abs(($context["group_members"] ?? null)), "1 member", "@count members", array());
        // line 30
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/group/group--small-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  109 => 29,  102 => 25,  99 => 24,  97 => 23,  91 => 20,  88 => 19,  86 => 18,  83 => 17,  79 => 16,  74 => 13,  67 => 9,  64 => 8,  58 => 6,  56 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/group/group--small-teaser.html.twig", "/Users/glenshewchuck/Sites/social/html/themes/contrib/socialbase/templates/group/group--small-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "trans" => 9);
        static $filters = array("striptags" => 5, "render" => 5, "escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['striptags', 'render', 'escape'],
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
