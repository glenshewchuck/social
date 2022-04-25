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

/* themes/contrib/socialbase/templates/post/post--activity.html.twig */
class __TwigTemplate_eed88dff55069b0a00a2d04b6da4e315330ae9b63e8a731e0e05d85df9a087f4 extends \Twig\Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/comment"), "html", null, true);
        echo "
";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/page-node"), "html", null, true);
        echo "

";
        // line 23
        $context["classes"] = [0 => "margin-top-m", 1 => "iframe-container", 2 => ((        // line 26
($context["logged_in"] ?? null)) ? ("margin-bottom-m") : (""))];
        // line 29
        echo "
";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 30)) {
            // line 31
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
";
        }
        // line 33
        echo "
<div";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        echo ">

  ";
        // line 37
        echo "  <div class=\"body-text\">
    ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 38, $this->source), "links", "field_post_comments", "like_and_dislike", "field_post_image", "user_id", "field_album"), "html", null, true);
        echo "
  </div>

  ";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_post_image", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "

  <div class=\"clearfix\"></div>

  <div class=\"footer-post\">
    ";
        // line 46
        if ((($context["dashboard"] ?? null) && (($context["comment_count"] ?? null) > 0))) {
            // line 47
            echo "      <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_url"] ?? null), 47, $this->source), "html", null, true);
            echo "\" class=\"badge badge--pill badge--post\" title=\"";
            echo t("Total amount of comments", array());
            echo "\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\" aria-hidden=\"true\">
                <title>";
            // line 50
            echo t("Total amount of comments", array());
            echo "</title>
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label\">
                ";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 54, $this->source), "html", null, true);
            echo "
              </span>
            </span>
      </a>
    ";
        }
        // line 59
        echo "
    ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "like_and_dislike", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "

    ";
        // line 62
        if (($context["dashboard"] ?? null)) {
            // line 63
            echo "      <div class=\"card__link\">
        ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more_link"] ?? null), 64, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 67
        echo "
    <div class=\"album-name\">
      ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_album", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
    </div>

    ";
        // line 72
        if (($context["share_post"] ?? null)) {
            // line 73
            echo "      <div class=\"share-button\">
        ";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["share_post"] ?? null), 74, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 77
        echo "  </div>

</div>

";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_post_comments", [], "any", false, false, true, 81)) {
            // line 82
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_post_comments", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/post/post--activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 82,  162 => 81,  156 => 77,  150 => 74,  147 => 73,  145 => 72,  139 => 69,  135 => 67,  129 => 64,  126 => 63,  124 => 62,  119 => 60,  116 => 59,  108 => 54,  101 => 50,  92 => 47,  90 => 46,  82 => 41,  76 => 38,  73 => 37,  68 => 34,  65 => 33,  59 => 31,  57 => 30,  54 => 29,  52 => 26,  51 => 23,  46 => 20,  42 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/post/post--activity.html.twig", "/Users/glenshewchuck/Sites/social/html/themes/contrib/socialbase/templates/post/post--activity.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 23, "if" => 30, "trans" => 47);
        static $filters = array("escape" => 19, "without" => 38);
        static $functions = array("attach_library" => 19);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['escape', 'without'],
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
