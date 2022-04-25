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

/* themes/contrib/socialbase/templates/comment/form--comment.html.twig */
class __TwigTemplate_363db61839fe4f867d5bccc5abee2550da81c0b43228920e5eae48b909e3817a extends \Twig\Template
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
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/comment"), "html", null, true);
        echo "

";
        // line 18
        $context["classes"] = [0 => "js-comment", 1 => "comment", 2 => "comment-form__wrapper"];
        // line 24
        echo "
";
        // line 26
        if ( !twig_test_empty(($context["comment_reply_form_wrapper"] ?? null))) {
            // line 27
            echo "<div ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_reply_form_wrapper"] ?? null), 27, $this->source), "html", null, true);
            echo ">
";
        }
        // line 29
        echo "
<div ";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["comment_wrapper"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo ">
  <div class=\"comment__avatar\">";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_user_picture"] ?? null), 31, $this->source), "html", null, true);
        echo "</div>
  <div class=\"comment__content\">
    <form";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 33, $this->source), "html", null, true);
        echo ">
      <div class=\"form-group-inline\">
        ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 35, $this->source), "html", null, true);
        echo "
      </div>
    </form>
  </div>
</div>

";
        // line 41
        if ( !twig_test_empty(($context["comment_reply_form_wrapper"] ?? null))) {
            // line 42
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/form--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 42,  83 => 41,  74 => 35,  69 => 33,  64 => 31,  60 => 30,  57 => 29,  51 => 27,  49 => 26,  46 => 24,  44 => 18,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/form--comment.html.twig", "/opt/bitnami/apache2/sig/html/themes/contrib/socialbase/templates/comment/form--comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 18, "if" => 26);
        static $filters = array("escape" => 15);
        static $functions = array("attach_library" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
