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

/* themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig */
class __TwigTemplate_d95ac7937a88476cb70fdcfa24c07f3f2985db6c7ca3b93c5fcafe157ddcf324 extends \Twig\Template
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
<div class=\"vote-widget vote-widget--like-and-dislike\">
  <div class=\"vote__wrapper\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["icons"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["icon"]) {
            // line 22
            echo "
      ";
            // line 23
            $context["count"] = twig_get_attribute($this->env, $this->source, $context["icon"], "count", [], "any", false, false, true, 23);
            // line 24
            echo "
      ";
            // line 25
            if (($context["type"] == "dislike")) {
                // line 26
                echo "        <div class=\"vote-dislike type-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 26, $this->source), "html", null, true);
                echo "\" id=\"dislike-container-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 26, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null), 26, $this->source), "html", null, true);
                echo "\">
          <a ";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["icon"], "attributes", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo " title=\"";
                echo t("Number of likes", array());
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["icon"], "label", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</a>
          <span class=\"count\">";
                // line 28
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 28, $this->source), "html", null, true);
                echo "</span>
        </div>
      ";
            }
            // line 31
            echo "
      ";
            // line 32
            if (($context["type"] == "like")) {
                // line 33
                echo "        <div class=\"vote-like type-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 33, $this->source), "html", null, true);
                echo "\" id=\"like-container-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_type"] ?? null), 33, $this->source), "html", null, true);
                echo "-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["entity_id"] ?? null), 33, $this->source), "html", null, true);
                echo "\">
          <a ";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["icon"], "attributes", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo " title=\"";
                echo t("Number of likes", array());
                echo "\">
            <svg class=\"icon-vote\" aria-hidden=\"true\">
              <title>";
                // line 36
                echo t("Total amount of likes", array());
                echo "</title>
              <use xlink:href=\"#icon-like\"></use>
            </svg>
          </a>
        </div>

        <div class=\"vote__count\">
          ";
                // line 43
                if (($context["logged_in"] ?? null)) {
                    // line 44
                    echo "            <a class=\"use-ajax\" data-dialog-options='{\"title\":\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modal_title"] ?? null), 44, $this->source), "html", null, true);
                    echo "\",\"width\":\"auto\"}' data-dialog-type=\"modal\" href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 44, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo t("Number of likes", array());
                    echo "\">
              ";
                    // line 45
                    echo \Drupal::translation()->formatPlural(abs(($context["count"] ?? null)), "@count like", "@count likes", array("@count" => ($context["count"] ?? null), "@count" => ($context["count"] ?? null), ));
                    // line 46
                    echo "            </a>
          ";
                } else {
                    // line 48
                    echo "            ";
                    echo \Drupal::translation()->formatPlural(abs(($context["count"] ?? null)), "@count like", "@count likes", array("@count" => ($context["count"] ?? null), "@count" => ($context["count"] ?? null), ));
                    // line 49
                    echo "          ";
                }
                // line 50
                echo "        </div>
      ";
            }
            // line 52
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  139 => 52,  135 => 50,  132 => 49,  129 => 48,  125 => 46,  123 => 45,  114 => 44,  112 => 43,  102 => 36,  95 => 34,  86 => 33,  84 => 32,  81 => 31,  75 => 28,  67 => 27,  58 => 26,  56 => 25,  53 => 24,  51 => 23,  48 => 22,  44 => 21,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig", "/Users/glenshewchuck/Sites/social/html/themes/contrib/socialbase/templates/like/like-and-dislike-icons.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21, "set" => 23, "if" => 25, "trans" => 27);
        static $filters = array("escape" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if', 'trans'],
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
