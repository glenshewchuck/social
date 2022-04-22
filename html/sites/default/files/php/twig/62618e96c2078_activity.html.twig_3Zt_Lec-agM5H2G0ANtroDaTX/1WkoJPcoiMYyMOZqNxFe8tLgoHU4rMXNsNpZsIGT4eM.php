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

/* themes/contrib/socialbase/templates/activity/activity.html.twig */
class __TwigTemplate_4fd58eed09efed3d6eb5407d02b7822d71dcd4cfe435b17b862d6bd05890bb7a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/stream"), "html", null, true);
        echo "

";
        // line 22
        $context["classes"] = [0 => "media", 1 => (((        // line 24
($context["post"] ?? null) &&  !($context["published"] ?? null))) ? ("post-unpublished") : (""))];
        // line 27
        echo "
<li class=\"stream-item\">

  <i class=\"stream-icon\"></i>

  <div class=\"card card--stream ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["extra_stream_class"] ?? null), 32, $this->source), "html", null, true);
        echo "\">

    <div class=\"card__block\">

      <div class=\"media-wrapper\">

        <div ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ">

          <div class=\"media-left avatar\" aria-hidden=\"true\">
            ";
        // line 41
        if (($context["actor"] ?? null)) {
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["actor"] ?? null), 42, $this->source), "html", null, true);
        }
        // line 44
        echo "          </div>

          <div class=\"media-body\">
            <div class=\"media-heading text-m\">
              ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_activity_output_text", [], "any", false, false, true, 48)) {
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_activity_output_text", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        }
        // line 51
        echo "
              <div class=\"post-date\">
                ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 53, $this->source), "html", null, true);
        echo "
                ";
        // line 54
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 55
            echo "                  <svg class=\"margin-left-s icon-visibility\">
                    <title>";
            // line 56
            echo t("Visibility", array());
            echo "</title>
                    <use xlink:href=\"#icon-";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null), 57, $this->source), "html", null, true);
            echo "\"></use>
                  </svg>
                  <strong>";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null), 59, $this->source), "html", null, true);
            echo "</strong>
                ";
        }
        // line 61
        echo "                ";
        if ((($context["post"] ?? null) &&  !($context["published"] ?? null))) {
            // line 62
            echo "                  <span class=\"badge badge-default badge--pill\">
                    ";
            // line 63
            echo t("unpublished", array());
            // line 64
            echo "                  </span>
                ";
        }
        // line 66
        echo "
              </div>
            </div>

          </div>

        </div>

        ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_activity_entity", [], "any", false, false, true, 74)) {
            // line 75
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_activity_entity", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 77
        echo "
      </div>

    </div>

  </div>


</li>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/activity/activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 77,  139 => 75,  137 => 74,  127 => 66,  123 => 64,  121 => 63,  118 => 62,  115 => 61,  110 => 59,  105 => 57,  101 => 56,  98 => 55,  96 => 54,  92 => 53,  88 => 51,  85 => 49,  83 => 48,  77 => 44,  74 => 42,  72 => 41,  66 => 38,  57 => 32,  50 => 27,  48 => 24,  47 => 22,  42 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/activity/activity.html.twig", "/Users/glenshewchuck/Sites/social/html/themes/contrib/socialbase/templates/activity/activity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "if" => 41, "trans" => 56);
        static $filters = array("escape" => 19);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
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
