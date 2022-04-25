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

/* node--event--teaser--sky.html.twig */
class __TwigTemplate_73febd95dd1c5c2a77e7f6efa2367cffa373b0c15ac6ab4cd4975b8cf67ad410 extends \Twig\Template
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
        return "node--event--teaser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--event--teaser.html.twig", "node--event--teaser--sky.html.twig", 1);
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
        $this->loadTemplate("node--event--teaser--sky.html.twig", "node--event--teaser--sky.html.twig", 5, "1242564292")->display($context);
        // line 13
        echo "
  ";
        // line 14
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 14)))) {
            // line 15
            echo "    ";
            $this->loadTemplate("node--event--teaser--sky.html.twig", "node--event--teaser--sky.html.twig", 15, "357448044")->display($context);
            // line 23
            echo "  ";
        }
        // line 24
        echo "
  ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 25)) {
            // line 26
            echo "    ";
            $this->loadTemplate("node--event--teaser--sky.html.twig", "node--event--teaser--sky.html.twig", 26, "974750090")->display($context);
            // line 34
            echo "  ";
        }
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "node--event--teaser--sky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 35,  76 => 34,  73 => 26,  71 => 25,  68 => 24,  65 => 23,  62 => 15,  60 => 14,  57 => 13,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("embed" => 5, "if" => 14);
        static $filters = array("render" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['embed', 'if'],
                ['render'],
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


/* node--event--teaser--sky.html.twig */
class __TwigTemplate_73febd95dd1c5c2a77e7f6efa2367cffa373b0c15ac6ab4cd4975b8cf67ad410___1242564292 extends \Twig\Template
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
        // line 5
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser--sky.html.twig", 5);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "event";
    }

    // line 7
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("Event date", array());
    }

    // line 8
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "      <span class=\"sr-only\">";
        echo t("Event date", array());
        echo " </span>
      ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["event_date"] ?? null), 10, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--event--teaser--sky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 10,  186 => 9,  182 => 8,  175 => 7,  168 => 6,  157 => 5,  79 => 35,  76 => 34,  73 => 26,  71 => 25,  68 => 24,  65 => 23,  62 => 15,  60 => 14,  57 => 13,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 7);
        static $filters = array("escape" => 10);
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


/* node--event--teaser--sky.html.twig */
class __TwigTemplate_73febd95dd1c5c2a77e7f6efa2367cffa373b0c15ac6ab4cd4975b8cf67ad410___357448044 extends \Twig\Template
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
        // line 15
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser--sky.html.twig", 15);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "location";
    }

    // line 17
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("The event will take place at the", array());
    }

    // line 18
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<span class=\"sr-only\">";
        echo t("The event will take place at the", array());
        echo " </span>
        ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_event_location", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--event--teaser--sky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 20,  297 => 19,  293 => 18,  286 => 17,  279 => 16,  268 => 15,  191 => 10,  186 => 9,  182 => 8,  175 => 7,  168 => 6,  157 => 5,  79 => 35,  76 => 34,  73 => 26,  71 => 25,  68 => 24,  65 => 23,  62 => 15,  60 => 14,  57 => 13,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 17);
        static $filters = array("escape" => 20);
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


/* node--event--teaser--sky.html.twig */
class __TwigTemplate_73febd95dd1c5c2a77e7f6efa2367cffa373b0c15ac6ab4cd4975b8cf67ad410___974750090 extends \Twig\Template
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
        // line 26
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--event--teaser--sky.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "group";
    }

    // line 28
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("This event is posted in", array());
    }

    // line 29
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "<span class=\"sr-only\">";
        echo t("This event is posted in", array());
        echo " </span>
        ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--event--teaser--sky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 31,  408 => 30,  404 => 29,  397 => 28,  390 => 27,  379 => 26,  302 => 20,  297 => 19,  293 => 18,  286 => 17,  279 => 16,  268 => 15,  191 => 10,  186 => 9,  182 => 8,  175 => 7,  168 => 6,  157 => 5,  79 => 35,  76 => 34,  73 => 26,  71 => 25,  68 => 24,  65 => 23,  62 => 15,  60 => 14,  57 => 13,  55 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--event--teaser--sky.html.twig", "themes/contrib/socialblue/templates/node/event/node--event--teaser--sky.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 28);
        static $filters = array("escape" => 31);
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
