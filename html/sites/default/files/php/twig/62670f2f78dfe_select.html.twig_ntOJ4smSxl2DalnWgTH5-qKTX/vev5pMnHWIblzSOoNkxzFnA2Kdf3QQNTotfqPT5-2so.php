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

/* themes/contrib/socialbase/templates/form/select.html.twig */
class __TwigTemplate_a9179ff1ebc988085b2c0c835ec6de8e9215b5456c00e203fa571bf973de8f31 extends \Twig\Template
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
        // line 16
        ob_start(function () { return ''; });
        // line 17
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 18
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/form--input-groups"), "html", null, true);
            echo "
    <div class=\"input-group\">
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if (($context["prefix"] ?? null)) {
            // line 23
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 23, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if (($context["multiselect"] ?? null)) {
            // line 27
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/select2"), "html", null, true);
            echo "
  ";
        } else {
            // line 29
            echo "    ";
            // line 33
            echo "    <div class=\"select-wrapper\">
  ";
        }
        // line 35
        echo "
    ";
        // line 36
        $context["classes"] = [0 => "form-control"];
        // line 37
        echo "    <select";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "html", null, true);
        echo ">
      ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 39
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 39) == "optgroup")) {
                // line 40
                echo "          <optgroup label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "\">
            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 41));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 42
                    echo "              <option
                value=\"";
                    // line 43
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 43)) ? (" selected=\"selected\"") : ("")));
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "          </optgroup>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 46
$context["option"], "type", [], "any", false, false, true, 46) == "option")) {
                // line 47
                echo "          <option
            value=\"";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 48)) ? (" selected=\"selected\"") : ("")));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "</option>
        ";
            }
            // line 50
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </select>

  ";
        // line 53
        if ( !($context["multiselect"] ?? null)) {
            // line 54
            echo "    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if (($context["suffix"] ?? null)) {
            // line 58
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 58, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if (($context["input_group"] ?? null)) {
            // line 62
            echo "    </div>
  ";
        }
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_0_));
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/form/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 16,  169 => 62,  167 => 61,  164 => 60,  158 => 58,  156 => 57,  153 => 56,  149 => 54,  147 => 53,  143 => 51,  137 => 50,  128 => 48,  125 => 47,  123 => 46,  120 => 45,  108 => 43,  105 => 42,  101 => 41,  96 => 40,  93 => 39,  89 => 38,  84 => 37,  82 => 36,  79 => 35,  75 => 33,  73 => 29,  67 => 27,  65 => 26,  62 => 25,  56 => 23,  54 => 22,  51 => 21,  44 => 18,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/form/select.html.twig", "/opt/bitnami/apache2/sig/html/themes/contrib/socialbase/templates/form/select.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 16, "if" => 17, "set" => 36, "for" => 38);
        static $filters = array("escape" => 18, "spaceless" => 16);
        static $functions = array("attach_library" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'if', 'set', 'for'],
                ['escape', 'spaceless'],
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
