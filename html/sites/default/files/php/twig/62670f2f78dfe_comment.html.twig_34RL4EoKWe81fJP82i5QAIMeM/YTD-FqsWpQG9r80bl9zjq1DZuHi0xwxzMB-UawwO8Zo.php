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

/* themes/contrib/socialbase/templates/comment/comment.html.twig */
class __TwigTemplate_cfb29db0b75992c4dbc023d08b1b5e61c1ce56f832394ed4455cfb09171da988 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'comment_author' => [$this, 'block_comment_author'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/comment"), "html", null, true);
        echo "
";
        // line 71
        $context["classes"] = [0 => "comment", 1 => "js-comment", 2 => ((        // line 74
($context["status"] ?? null)) ? (("comment-" . $this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 74, $this->source))) : (""))];
        // line 77
        echo "
<article";
        // line 78
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 78), 78, $this->source), "html", null, true);
        echo ">
  <div class=\"comment__avatar\"> ";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 79, $this->source), "html", null, true);
        echo " </div>

  <div class=\"comment__content\">
    ";
        // line 82
        $this->displayBlock('comment_author', $context, $blocks);
        // line 91
        echo "    <div class=\"comment__text iframe-container\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 91, $this->source), "html", null, true);
        echo " </div>
    ";
        // line 92
        if (($context["comment_attachments_count"] ?? null)) {
            // line 93
            echo "      <div class=\"btn-link\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_attachments_count"] ?? null), 93, $this->source), "html", null, true);
            echo " </div>
    ";
        }
        // line 95
        echo "  </div>
</article>
";
    }

    // line 82
    public function block_comment_author($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "    <div class=\"comment__author\"> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 83, $this->source), "html", null, true);
        echo "
      <span class=\"comment__metadata\">&bullet; ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted"] ?? null), 84, $this->source), "html", null, true);
        echo " </span>
      <mark class=\"badge badge-default badge--pill hidden\" data-comment-timestamp=\"";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 85, $this->source), "html", null, true);
        echo "\"></mark>
      ";
        // line 86
        if ((($context["status"] ?? null) == "unpublished")) {
            // line 87
            echo "        <span class=\"badge badge-default badge--pill\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["status"] ?? null), 87, $this->source)));
            echo "</span>
      ";
        }
        // line 89
        echo "    </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/socialbase/templates/comment/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 89,  100 => 87,  98 => 86,  94 => 85,  90 => 84,  85 => 83,  81 => 82,  75 => 95,  69 => 93,  67 => 92,  62 => 91,  60 => 82,  54 => 79,  50 => 78,  47 => 77,  45 => 74,  44 => 71,  40 => 69,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/socialbase/templates/comment/comment.html.twig", "/opt/bitnami/apache2/sig/html/themes/contrib/socialbase/templates/comment/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71, "block" => 82, "if" => 92);
        static $filters = array("escape" => 69, "trans" => 87);
        static $functions = array("attach_library" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'trans'],
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
