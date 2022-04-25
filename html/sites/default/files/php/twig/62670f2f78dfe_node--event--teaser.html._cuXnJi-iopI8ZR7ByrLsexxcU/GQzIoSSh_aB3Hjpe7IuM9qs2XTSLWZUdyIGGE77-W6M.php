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

/* node--event--teaser.html.twig */
class __TwigTemplate_6d495df518604d01e09342ec4824676f8e3e6521588db7f406000ebd3c71835a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'card_teaser_type' => [$this, 'block_card_teaser_type'],
            'card_body' => [$this, 'block_card_body'],
            'card_actionbar' => [$this, 'block_card_actionbar'],
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
        $this->parent = $this->loadTemplate("node--teaser.html.twig", "node--event--teaser.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_card_teaser_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 4, $this->source), "html", null, true);
        echo "\" aria-hidden=\"true\" title=\"";
        echo t("Event: &nbsp;", array());
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 4, $this->source)))), "html", null, true);
        echo "\">
    <div class=\"teaser__teaser-type\">
      <svg class=\"teaser__teaser-type-icon\" aria-hidden=\"true\">
        <title>";
        // line 7
        echo t("Event: &nbsp;", array());
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 7, $this->source)))), "html", null, true);
        echo "</title>
        ";
        // line 8
        if (($context["event_type_icon"] ?? null)) {
            // line 9
            echo "          <use xlink:href=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_type_icon"] ?? null), 9, $this->source), "html", null, true);
            echo "\"></use>
        ";
        } else {
            // line 11
            echo "          <use xlink:href=\"#icon-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 11), 11, $this->source)), "html", null, true);
            echo "\"></use>
        ";
        }
        // line 13
        echo "      </svg>
    </div>
  </a>
";
    }

    // line 18
    public function block_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "
  ";
        // line 20
        $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 20, "15038994")->display($context);
        // line 28
        echo "
  ";
        // line 29
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 29)))) {
            // line 30
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 30, "538373410")->display($context);
            // line 38
            echo "  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if (($context["event_type"] ?? null)) {
            // line 41
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 41, "1767342628")->display($context);
            // line 49
            echo "  ";
        }
        // line 50
        echo "
  ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 51)) {
            // line 52
            echo "    ";
            $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser.html.twig", 52, "897273765")->display($context);
            // line 60
            echo "  ";
        }
        // line 61
        echo "
";
    }

    // line 64
    public function block_card_actionbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "
  ";
        // line 66
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 67
            echo "    <div class=\"badge teaser__badge\">
      <span class=\"badge__container\">
        <svg class=\"badge__icon\">
           <title>";
            // line 70
            echo t("Visibility", array());
            echo "</title>
          <use xlink:href=\"#icon-";
            // line 71
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null), 71, $this->source), "html", null, true);
            echo "\"></use>
        </svg>
        <span class=\"badge__label text-gray\">";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_capitalize_string_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null), 73, $this->source)), "html", null, true);
            echo "</span>
      </span>
    </div>
  ";
        }
        // line 77
        echo "
  ";
        // line 78
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "enrollments_count", [], "any", false, false, true, 78))) {
            // line 79
            echo "    <div class=\"badge teaser__badge\">
      <span class=\"badge__container\">
        <svg class=\"badge__icon\">
          <title>";
            // line 82
            echo t("Total amount of enrollments", array());
            echo "</title>
          <use xlink:href=\"#icon-person\"></use>
        </svg>
        <span class=\"badge__label text-gray\">
          ";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "enrollments_count", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
            echo "
        </span>
      </span>
    </div>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "ongoing", [], "any", false, false, true, 92)) {
            // line 93
            echo "    <span class=\"badge badge-primary teaser__badge\">
          ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "ongoing", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
        </span>
  ";
        }
        // line 97
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "enrolled", [], "any", false, false, true, 97)) {
            // line 98
            echo "    <span class=\"badge badge-default teaser__badge\">
      ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "enrolled", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
    </span>
  ";
        }
        // line 102
        echo "
  ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 103,  218 => 102,  212 => 99,  209 => 98,  206 => 97,  200 => 94,  197 => 93,  195 => 92,  192 => 91,  184 => 86,  177 => 82,  172 => 79,  170 => 78,  167 => 77,  160 => 73,  155 => 71,  151 => 70,  146 => 67,  144 => 66,  141 => 65,  137 => 64,  132 => 61,  129 => 60,  126 => 52,  124 => 51,  121 => 50,  118 => 49,  115 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 30,  102 => 29,  99 => 28,  97 => 20,  94 => 19,  90 => 18,  83 => 13,  77 => 11,  71 => 9,  69 => 8,  64 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 4, "if" => 8, "embed" => 20);
        static $filters = array("escape" => 4, "trim" => 4, "striptags" => 4, "render" => 4, "clean_class" => 11, "capitalize" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans', 'if', 'embed'],
                ['escape', 'trim', 'striptags', 'render', 'clean_class', 'capitalize'],
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


/* node--event--teaser.html.twig */
class __TwigTemplate_6d495df518604d01e09342ec4824676f8e3e6521588db7f406000ebd3c71835a___15038994 extends \Twig\Template
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
        // line 20
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "event";
    }

    // line 22
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<title>";
        echo t("Event date", array());
        echo "</title>";
    }

    // line 23
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "      <span class=\"sr-only\">";
        echo t("Event date", array());
        echo " </span>
      ";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date"] ?? null), 25, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 25,  332 => 24,  328 => 23,  319 => 22,  312 => 21,  301 => 20,  221 => 103,  218 => 102,  212 => 99,  209 => 98,  206 => 97,  200 => 94,  197 => 93,  195 => 92,  192 => 91,  184 => 86,  177 => 82,  172 => 79,  170 => 78,  167 => 77,  160 => 73,  155 => 71,  151 => 70,  146 => 67,  144 => 66,  141 => 65,  137 => 64,  132 => 61,  129 => 60,  126 => 52,  124 => 51,  121 => 50,  118 => 49,  115 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 30,  102 => 29,  99 => 28,  97 => 20,  94 => 19,  90 => 18,  83 => 13,  77 => 11,  71 => 9,  69 => 8,  64 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 22);
        static $filters = array("escape" => 25);
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


/* node--event--teaser.html.twig */
class __TwigTemplate_6d495df518604d01e09342ec4824676f8e3e6521588db7f406000ebd3c71835a___538373410 extends \Twig\Template
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
        // line 30
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 30);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "location";
    }

    // line 32
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<title>";
        echo t("Located at:", array());
        echo "</title>";
    }

    // line 33
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "<span class=\"sr-only\">";
        echo t("The event will take place at the", array());
        echo " </span>
        ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 35,  445 => 34,  441 => 33,  432 => 32,  425 => 31,  414 => 30,  337 => 25,  332 => 24,  328 => 23,  319 => 22,  312 => 21,  301 => 20,  221 => 103,  218 => 102,  212 => 99,  209 => 98,  206 => 97,  200 => 94,  197 => 93,  195 => 92,  192 => 91,  184 => 86,  177 => 82,  172 => 79,  170 => 78,  167 => 77,  160 => 73,  155 => 71,  151 => 70,  146 => 67,  144 => 66,  141 => 65,  137 => 64,  132 => 61,  129 => 60,  126 => 52,  124 => 51,  121 => 50,  118 => 49,  115 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 30,  102 => 29,  99 => 28,  97 => 20,  94 => 19,  90 => 18,  83 => 13,  77 => 11,  71 => 9,  69 => 8,  64 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 32);
        static $filters = array("escape" => 35);
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


/* node--event--teaser.html.twig */
class __TwigTemplate_6d495df518604d01e09342ec4824676f8e3e6521588db7f406000ebd3c71835a___1767342628 extends \Twig\Template
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
        // line 41
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 41);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 42
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "label";
    }

    // line 43
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<title>";
        echo t("Event type", array());
        echo "</title>";
    }

    // line 44
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "<span class=\"sr-only\">";
        echo t("This event has type", array());
        echo " </span>
        ";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_type"] ?? null), 46, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 46,  558 => 45,  554 => 44,  545 => 43,  538 => 42,  527 => 41,  450 => 35,  445 => 34,  441 => 33,  432 => 32,  425 => 31,  414 => 30,  337 => 25,  332 => 24,  328 => 23,  319 => 22,  312 => 21,  301 => 20,  221 => 103,  218 => 102,  212 => 99,  209 => 98,  206 => 97,  200 => 94,  197 => 93,  195 => 92,  192 => 91,  184 => 86,  177 => 82,  172 => 79,  170 => 78,  167 => 77,  160 => 73,  155 => 71,  151 => 70,  146 => 67,  144 => 66,  141 => 65,  137 => 64,  132 => 61,  129 => 60,  126 => 52,  124 => 51,  121 => 50,  118 => 49,  115 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 30,  102 => 29,  99 => 28,  97 => 20,  94 => 19,  90 => 18,  83 => 13,  77 => 11,  71 => 9,  69 => 8,  64 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 43);
        static $filters = array("escape" => 46);
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


/* node--event--teaser.html.twig */
class __TwigTemplate_6d495df518604d01e09342ec4824676f8e3e6521588db7f406000ebd3c71835a___897273765 extends \Twig\Template
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
        // line 52
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser.html.twig", 52);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 53
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "group";
    }

    // line 54
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<title>";
        echo t("Group", array());
        echo "</title>";
    }

    // line 55
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "<span class=\"sr-only\">";
        echo t("This event is posted in", array());
        echo " </span>
        ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 57,  671 => 56,  667 => 55,  658 => 54,  651 => 53,  640 => 52,  563 => 46,  558 => 45,  554 => 44,  545 => 43,  538 => 42,  527 => 41,  450 => 35,  445 => 34,  441 => 33,  432 => 32,  425 => 31,  414 => 30,  337 => 25,  332 => 24,  328 => 23,  319 => 22,  312 => 21,  301 => 20,  221 => 103,  218 => 102,  212 => 99,  209 => 98,  206 => 97,  200 => 94,  197 => 93,  195 => 92,  192 => 91,  184 => 86,  177 => 82,  172 => 79,  170 => 78,  167 => 77,  160 => 73,  155 => 71,  151 => 70,  146 => 67,  144 => 66,  141 => 65,  137 => 64,  132 => 61,  129 => 60,  126 => 52,  124 => 51,  121 => 50,  118 => 49,  115 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 30,  102 => 29,  99 => 28,  97 => 20,  94 => 19,  90 => 18,  83 => 13,  77 => 11,  71 => 9,  69 => 8,  64 => 7,  54 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser.html.twig", "themes/contrib/socialbase/templates/node/event/node--event--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 54);
        static $filters = array("escape" => 57);
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
