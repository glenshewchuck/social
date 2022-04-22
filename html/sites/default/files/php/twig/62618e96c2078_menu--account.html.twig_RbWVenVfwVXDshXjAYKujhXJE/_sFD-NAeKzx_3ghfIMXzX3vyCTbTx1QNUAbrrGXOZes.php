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

/* themes/contrib/socialbase/templates/navigation/menu--account.html.twig */
class __TwigTemplate_599a8e0006970ca15f962e11b6c1732fc3c76afc894a9ef27e12f78ca3fad40a extends \Twig\Template
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
        // line 21
        echo "
";
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 23
        echo "
";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 28, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 30
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 31
            echo "  ";
            $macros["menus"] = $this;
            // line 32
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 33
                echo "

  <ul";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "nav navbar-nav navbar-user"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                echo " role=\"navigation\">

    <li class=\"dropdown profile not-logged-in\">
      <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\" aria-haspopup=\"true\" role=\"button\" title=\"";
                // line 38
                echo t("User menu", array());
                echo "\">
        <svg class=\"icon-medium\" aria-hidden=\"true\">
          <title>";
                // line 40
                echo t("User menu", array());
                echo "</title>
          <use xlink:href=\"#icon-account_circle\"></use>
        </svg>
        <span class=\"sr-only\">";
                // line 43
                echo t("User menu", array());
                echo "</span>
      </a>
      <ul class=\"dropdown-menu\">
        ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "          <li> ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 47), 47, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 47), 47, $this->source)), "html", null, true);
                    echo "
            ";
                    // line 48
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 48)) {
                        // line 49
                        echo "              ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 49), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 49, $context, $this->getSourceContext()));
                        echo "
            ";
                    }
                    // line 51
                    echo "          </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "      </ul>
    </li>

  </ul>

  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/navigation/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  119 => 51,  113 => 49,  111 => 48,  106 => 47,  102 => 46,  96 => 43,  90 => 40,  85 => 38,  79 => 35,  75 => 33,  72 => 32,  69 => 31,  54 => 30,  47 => 28,  44 => 23,  42 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/navigation/menu--account.html.twig", "/Users/glenshewchuck/Sites/social/html/themes/contrib/socialbase/templates/navigation/menu--account.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 30, "if" => 32, "trans" => 38, "for" => 46);
        static $filters = array("escape" => 35);
        static $functions = array("link" => 47);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'trans', 'for'],
                ['escape'],
                ['link']
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
