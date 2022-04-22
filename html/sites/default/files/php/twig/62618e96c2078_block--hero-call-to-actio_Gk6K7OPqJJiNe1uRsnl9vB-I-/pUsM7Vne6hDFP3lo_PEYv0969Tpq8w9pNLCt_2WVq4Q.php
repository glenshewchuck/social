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

/* themes/contrib/socialbase/templates/block/block--hero-call-to-action-block.html.twig */
class __TwigTemplate_3782793587ecbd78360592b00a80df55d05821b853531c54fe3f4221e52d3092 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "
";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/hero"), "html", null, true);
        echo "

";
        // line 52
        $context["classes"] = [0 => "cover", 1 => "cover-with-canvas", 2 => ((        // line 55
($context["has_image"] ?? null)) ? ("cover-img") : (""))];
        // line 58
        echo "
";
        // line 59
        if (($context["has_image"] ?? null)) {
            // line 60
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
            echo " style=\"background-image: url(";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image_url"] ?? null), 60, $this->source), "html", null, true);
            echo ")\">
";
        } else {
            // line 62
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 62), 62, $this->source), "html", null, true);
            echo ">
";
        }
        // line 64
        echo "
  ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 65, $this->source), "html", null, true);
        echo "

  ";
        // line 67
        if (($context["content"] ?? null)) {
            // line 68
            echo "    <div class=\"cover-wrap\">
      <div class=\"hero-canvas\">
        ";
            // line 70
            $this->displayBlock('content', $context, $blocks);
            // line 73
            echo "      </div>
    </div>
  ";
        }
        // line 76
        echo "
</div>
";
    }

    // line 70
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "          ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 71, $this->source), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/block/block--hero-call-to-action-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 71,  97 => 70,  91 => 76,  86 => 73,  84 => 70,  80 => 68,  78 => 67,  73 => 65,  70 => 64,  64 => 62,  56 => 60,  54 => 59,  51 => 58,  49 => 55,  48 => 52,  43 => 49,  40 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/block/block--hero-call-to-action-block.html.twig", "/Users/glenshewchuck/Sites/social/html/themes/contrib/socialbase/templates/block/block--hero-call-to-action-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 52, "if" => 59, "block" => 70);
        static $filters = array("escape" => 49);
        static $functions = array("attach_library" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape'],
                ['attach_library']
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
