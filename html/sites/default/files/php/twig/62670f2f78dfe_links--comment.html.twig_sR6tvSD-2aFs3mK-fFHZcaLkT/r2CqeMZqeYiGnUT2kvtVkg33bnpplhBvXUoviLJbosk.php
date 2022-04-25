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

/* themes/contrib/socialbase/templates/comment/links--comment.html.twig */
class __TwigTemplate_6496b25700372570d540cac45e3000ab3cf70d4be02cc34c48d137ceaf5189b9 extends \Twig\Template
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
        // line 36
        if ((($context["links"] ?? null) && ($context["logged_in"] ?? null))) {
            // line 37
            if (($context["heading"] ?? null)) {
                // line 38
                if (twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 38)) {
                    // line 39
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 41
                    echo "<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 45
            if ((((($__internal_compile_0 = ($context["links"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["comment-edit"] ?? null) : null) || (($__internal_compile_1 = ($context["links"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["comment-delete"] ?? null) : null)) || twig_get_attribute($this->env, $this->source, ($context["links"] ?? null), "report", [], "any", false, false, true, 45))) {
                // line 46
                echo "    <div class=\"comment__actions pull-right\">
      <button type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\" aria-haspopup=\"true\" class=\"btn btn-icon-toggle dropdown-toggle\" title=\"";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("More options"));
                echo "\">
        <svg class=\"btn-icon icon-gray\" aria-hidden=\"true\">
          <title>";
                // line 49
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("More options"));
                echo "</title>
          <use xlink:href=\"#icon-expand_more\"></use>
        </svg>
      </button>
      <ul";
                // line 53
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "dropdown-menu"], "method", false, false, true, 53), 53, $this->source), "html", null, true);
                echo ">";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["links"] ?? null)));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    if (($context["key"] != "comment-reply")) {
                        // line 55
                        echo "<li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 55), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"], 55, $this->source))], "method", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo ">";
                        // line 56
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 56)) {
                            // line 57
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 58
$context["item"], "text_attributes", [], "any", false, false, true, 58)) {
                            // line 59
                            echo "<span";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                            echo ">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                            echo "</span>";
                        } else {
                            // line 61
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                        }
                        // line 63
                        echo "</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "</ul>
    </div>
  ";
            } else {
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                    if (($context["key"] != "comment-reply")) {
                        // line 70
                        echo "<li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 70), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"], 70, $this->source))], "method", false, false, true, 70), 70, $this->source), "html", null, true);
                        echo ">";
                        // line 71
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 71)) {
                            // line 72
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                        } elseif (twig_get_attribute($this->env, $this->source,                         // line 73
$context["item"], "text_attributes", [], "any", false, false, true, 73)) {
                            // line 74
                            echo "<span";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                            echo ">";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                            echo "</span>";
                        } else {
                            // line 76
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                        }
                        // line 78
                        echo "</li>";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        // line 84
        echo "
";
        // line 85
        if ((($__internal_compile_2 = ($context["links"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["comment-reply"] ?? null) : null)) {
            // line 86
            echo "
  <div class=\"btn comment__reply-btn\">";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["links"] ?? null)));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                if (($context["key"] == "comment-reply")) {
                    // line 89
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 89)) {
                        // line 90
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 91
$context["item"], "text_attributes", [], "any", false, false, true, 91)) {
                        // line 92
                        echo "<span";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "</span>";
                    } else {
                        // line 94
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/links--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 97,  180 => 94,  173 => 92,  171 => 91,  169 => 90,  167 => 89,  162 => 88,  159 => 86,  157 => 85,  154 => 84,  145 => 78,  142 => 76,  135 => 74,  133 => 73,  131 => 72,  129 => 71,  125 => 70,  120 => 69,  115 => 65,  108 => 63,  105 => 61,  98 => 59,  96 => 58,  94 => 57,  92 => 56,  88 => 55,  83 => 54,  80 => 53,  73 => 49,  68 => 47,  65 => 46,  63 => 45,  55 => 41,  45 => 39,  43 => 38,  41 => 37,  39 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/links--comment.html.twig", "/opt/bitnami/apache2/sig/html/themes/contrib/socialbase/templates/comment/links--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 36, "for" => 54);
        static $filters = array("escape" => 39, "t" => 47, "reverse" => 54, "clean_class" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'reverse', 'clean_class'],
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
