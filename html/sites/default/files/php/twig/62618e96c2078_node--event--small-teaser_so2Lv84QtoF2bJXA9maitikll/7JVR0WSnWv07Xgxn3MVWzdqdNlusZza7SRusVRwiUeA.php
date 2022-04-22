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

/* themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig */
class __TwigTemplate_93aeeeb93b6bd0011030e8e9697dce5ea12c1d3fdb902fcc6c655e8d64a4f6f6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("node--small-teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_extra_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"card__text\">
    <span class=\"text-muted\">
      ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date"] ?? null), 6, $this->source), "html", null, true);
        echo "
      ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "ongoing", [], "any", false, false, true, 7)) {
            // line 8
            echo "        <span class=\"badge badge-primary teaser__badge\">
          ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "ongoing", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
        </span>
      ";
        }
        // line 12
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "enrolled", [], "any", false, false, true, 12)) {
            // line 13
            echo "        <span class=\"badge badge-default\">
          ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "enrolled", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
        </span>
      ";
        }
        // line 17
        echo "    </span>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  77 => 14,  74 => 13,  71 => 12,  65 => 9,  62 => 8,  60 => 7,  56 => 6,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig", "/Users/glenshewchuck/Sites/social/html/themes/contrib/socialbase/templates/node/event/node--event--small-teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
