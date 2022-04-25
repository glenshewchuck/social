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

/* node--teaser--sky.html.twig */
class __TwigTemplate_8b3715c45a9e60d5a6b828d4a11544f45893932d8d4dbe47d80978fec8aa9e58 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'card_body' => [$this, 'block_card_body'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "node--teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser.html.twig", "node--teaser--sky.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
  ";
        // line 5
        if (($context["display_submitted"] ?? null)) {
            // line 6
            echo "    <div class=\"teaser__not-icon\">
      ";
            // line 7
            $this->loadTemplate("node--teaser--sky.html.twig", "node--teaser--sky.html.twig", 7, "288893937")->display($context);
            // line 19
            echo "    </div>
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 22)) {
            // line 23
            echo "    ";
            $this->loadTemplate("node--teaser--sky.html.twig", "node--teaser--sky.html.twig", 23, "263620320")->display($context);
            // line 31
            echo "  ";
        }
        // line 32
        echo "
  ";
        // line 33
        $this->loadTemplate("node--teaser--sky.html.twig", "node--teaser--sky.html.twig", 33, "830598829")->display($context);
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "node--teaser--sky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 36,  80 => 33,  77 => 32,  74 => 31,  71 => 23,  69 => 22,  66 => 21,  62 => 19,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/node--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "embed" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'embed'],
                [],
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


/* node--teaser--sky.html.twig */
class __TwigTemplate_8b3715c45a9e60d5a6b828d4a11544f45893932d8d4dbe47d80978fec8aa9e58___288893937 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field_icon' => [$this, 'block_field_icon'],
            'svg_title' => [$this, 'block_svg_title'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser--sky.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "account_circle";
    }

    // line 9
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<title>";
        echo t("Author name", array());
        echo "</title>";
    }

    // line 10
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "          <div class=\"teaser__published\">
            <span class=\"sr-only\">";
        // line 12
        echo t("Created on", array());
        echo " </span>
            <div class=\"teaser__published-date\">";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 13, $this->source), "html", null, true);
        echo " <span aria-hidden=\"true\">&bullet;</span></div>
            <span class=\"sr-only\"> ";
        // line 14
        echo t("by", array());
        echo " </span>
            <div class=\"teaser__published-author\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 15, $this->source), "html", null, true);
        echo "</div>
          </div>";
    }

    public function getTemplateName()
    {
        return "node--teaser--sky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 15,  202 => 14,  198 => 13,  194 => 12,  191 => 11,  187 => 10,  178 => 9,  171 => 8,  160 => 7,  82 => 36,  80 => 33,  77 => 32,  74 => 31,  71 => 23,  69 => 22,  66 => 21,  62 => 19,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/node--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 9);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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


/* node--teaser--sky.html.twig */
class __TwigTemplate_8b3715c45a9e60d5a6b828d4a11544f45893932d8d4dbe47d80978fec8aa9e58___263620320 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field_icon' => [$this, 'block_field_icon'],
            'svg_title' => [$this, 'block_svg_title'],
            'field_value' => [$this, 'block_field_value'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 23
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser--sky.html.twig", 23);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "group";
    }

    // line 25
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " <title>";
        echo t("This content is posted in", array());
        echo "</title>";
    }

    // line 26
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "<span class=\"sr-only\">";
        echo t("This content is posted in", array());
        echo " </span>
        ";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--teaser--sky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 28,  316 => 27,  312 => 26,  303 => 25,  296 => 24,  285 => 23,  206 => 15,  202 => 14,  198 => 13,  194 => 12,  191 => 11,  187 => 10,  178 => 9,  171 => 8,  160 => 7,  82 => 36,  80 => 33,  77 => 32,  74 => 31,  71 => 23,  69 => 22,  66 => 21,  62 => 19,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/node--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 25);
        static $filters = array("escape" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
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


/* node--teaser--sky.html.twig */
class __TwigTemplate_8b3715c45a9e60d5a6b828d4a11544f45893932d8d4dbe47d80978fec8aa9e58___830598829 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'field_body' => [$this, 'block_field_body'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 33
        return "node--teaser__body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__body.html.twig", "node--teaser--sky.html.twig", 33);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_field_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "node--teaser--sky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 34,  396 => 33,  321 => 28,  316 => 27,  312 => 26,  303 => 25,  296 => 24,  285 => 23,  206 => 15,  202 => 14,  198 => 13,  194 => 12,  191 => 11,  187 => 10,  178 => 9,  171 => 8,  160 => 7,  82 => 36,  80 => 33,  77 => 32,  74 => 31,  71 => 23,  69 => 22,  66 => 21,  62 => 19,  60 => 7,  57 => 6,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/node--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 34);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
