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

/* node--teaser.html.twig */
class __TwigTemplate_b76f2728ae743b2ed61d52552002295d84bbd72c3d28bb0c9fed62009b02897e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'card_teaser_type' => [$this, 'block_card_teaser_type'],
            'card_image' => [$this, 'block_card_image'],
            'card_title' => [$this, 'block_card_title'],
            'card_body' => [$this, 'block_card_body'],
            'card_actionbar' => [$this, 'block_card_actionbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "
";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/teaser"), "html", null, true);
        echo "
";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("socialbase/page-node"), "html", null, true);
        echo "

";
        // line 73
        $context["classes"] = [0 => "teaser", 1 => ("teaser-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "bundle", [], "any", false, false, true, 75), 75, $this->source))), 2 => (((        // line 76
($context["view_mode"] ?? null) == "teaser")) ? ("card") : ("")), 3 => (((        // line 77
($context["view_mode"] ?? null) == "activity")) ? ("teaser--stream") : ("")), 4 => (((        // line 78
($context["view_mode"] ?? null) == "activity_comment")) ? ("teaser--stream") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 79
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 79)) ? ("promoted") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 80
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 80)) ? ("sticky") : ("")), 7 => (( !twig_get_attribute($this->env, $this->source,         // line 81
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 81)) ? ("teaser--unpublished") : ("")), 8 => ((        // line 82
($context["no_image"] ?? null)) ? ("no-image") : (""))];
        // line 85
        echo "
<div";
        // line 86
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 86), "removeAttribute", [0 => "dir"], "method", false, false, true, 86), 86, $this->source), "html", null, true);
        echo ">
  ";
        // line 87
        if (($context["status_label"] ?? null)) {
            // line 88
            echo "    <div class=\"node--unpublished__label\">
      ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["status_label"] ?? null), 89, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 92
        echo "
  <div class='teaser__image'>

    ";
        // line 95
        if (((($context["view_mode"] ?? null) == "teaser") || ($context["no_image"] ?? null))) {
            // line 96
            echo "      ";
            $this->displayBlock('card_teaser_type', $context, $blocks);
            // line 110
            echo "    ";
        }
        // line 111
        echo "
    ";
        // line 112
        $this->displayBlock('card_image', $context, $blocks);
        // line 115
        echo "
  </div>

  <div class='teaser__body'>
    <div class=\"teaser__content\">

      ";
        // line 121
        $this->displayBlock('card_title', $context, $blocks);
        // line 129
        $this->displayBlock('card_body', $context, $blocks);
        // line 173
        echo "    </div>

    <div class=\"card__actionbar\">
      ";
        // line 176
        $this->displayBlock('card_actionbar', $context, $blocks);
        // line 221
        echo "    </div>

  </div>

</div>

";
        // line 227
        if (((($context["view_mode"] ?? null) == "activity") && twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_book_comments", [], "any", false, false, true, 227))) {
            // line 228
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_book_comments", [], "any", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "
";
        }
    }

    // line 96
    public function block_card_teaser_type($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "        <a href=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 97, $this->source), "html", null, true);
        echo "\" aria-hidden=\"true\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_capitalize_string_filter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 97), 97, $this->source))), "html", null, true);
        echo ": &nbsp;";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 97, $this->source)))), "html", null, true);
        echo "\">
          <div class=\"teaser__teaser-type\">
            <svg class=\"teaser__teaser-type-icon\">
              <title>";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_capitalize_string_filter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 100), 100, $this->source))), "html", null, true);
        echo ": &nbsp;";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_trim_filter(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 100, $this->source)))), "html", null, true);
        echo "</title>
              ";
        // line 101
        if (($context["topic_type_icon"] ?? null)) {
            // line 102
            echo "                <use xlink:href=\"#";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topic_type_icon"] ?? null), 102, $this->source), "html", null, true);
            echo "\"></use>
              ";
        } else {
            // line 104
            echo "                <use xlink:href=\"#icon-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 104), 104, $this->source)), "html", null, true);
            echo "\"></use>
              ";
        }
        // line 106
        echo "            </svg>
          </div>
        </a>
      ";
    }

    // line 112
    public function block_card_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["node_image"] ?? null), 113, $this->source), "html", null, true);
        echo "
    ";
    }

    // line 121
    public function block_card_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "        ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 122, $this->source), "html", null, true);
        echo "
          <h4";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 123, $this->source), "html", null, true);
        echo " class=\"teaser__title\">
            <a href=\"";
        // line 124
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 124, $this->source), "html", null, true);
        echo "\" rel=\"bookmark\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 124, $this->source), "html", null, true);
        echo "</a>
          </h4>
        ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 126, $this->source), "html", null, true);
    }

    // line 129
    public function block_card_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "
        ";
        // line 131
        if (($context["display_submitted"] ?? null)) {
            // line 132
            echo "          ";
            $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 132, "1514055060")->display($context);
            // line 144
            echo "        ";
        }
        // line 145
        echo "
        ";
        // line 146
        if (($context["topic_type"] ?? null)) {
            // line 147
            echo "          ";
            $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 147, "602826385")->display($context);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 157
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 157)) {
            // line 158
            echo "          ";
            $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 158, "1822769209")->display($context);
            // line 166
            echo "        ";
        }
        // line 167
        echo "
        ";
        // line 168
        $this->loadTemplate("node--teaser.html.twig", "node--teaser.html.twig", 168, "771174992")->display($context);
        // line 171
        echo "
      ";
    }

    // line 176
    public function block_card_actionbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "
        ";
        // line 178
        if ((($context["visibility_icon"] ?? null) && ($context["visibility_label"] ?? null))) {
            // line 179
            echo "          <div class=\"badge teaser__badge\">
            <span class=\"badge__container\">
                <svg class=\"badge__icon\">
                  <title>";
            // line 182
            echo t("Visibility", array());
            echo "</title>
                  <use xlink:href=\"#icon-";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_icon"] ?? null), 183, $this->source), "html", null, true);
            echo "\"></use>
                </svg>
                <span class=\"badge__label text-gray\">";
            // line 185
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_capitalize_string_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["visibility_label"] ?? null), 185, $this->source)), "html", null, true);
            echo "</span>
            </span>
          </div>
        ";
        }
        // line 189
        echo "

        ";
        // line 191
        if ( !twig_test_empty(($context["likes_count"] ?? null))) {
            // line 192
            echo "          <div class=\"badge teaser__badge\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\">
                <title>";
            // line 195
            echo t("Total amount of likes", array());
            echo "</title>
                <use xlink:href=\"#icon-like\"></use>
              </svg>
              <span class=\"badge__label text-gray\">
                ";
            // line 199
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["likes_count"] ?? null), 199, $this->source), "html", null, true);
            echo "
              </span>
            </span>
          </div>
        ";
        }
        // line 204
        echo "
        ";
        // line 205
        if ( !twig_test_empty(($context["comment_count"] ?? null))) {
            // line 206
            echo "          <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 206, $this->source), "html", null, true);
            echo "#section-comments\" class=\"badge badge--pill teaser__badge\"
             title=\"";
            // line 207
            echo t("Total amount of comments", array());
            echo "\">
            <span class=\"badge__container\">
              <svg class=\"badge__icon\" aria-hidden=\"true\">
                <title>";
            // line 210
            echo t("Total amount of comments", array());
            echo "</title>
                <use xlink:href=\"#icon-comment\"></use>
              </svg>
              <span class=\"badge__label text-gray\">";
            // line 213
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 213, $this->source), "html", null, true);
            echo "</span>
            </span>
          </a>
        ";
        }
        // line 217
        echo "
        ";
        // line 218
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "links", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
        echo "

      ";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 218,  348 => 217,  341 => 213,  335 => 210,  329 => 207,  324 => 206,  322 => 205,  319 => 204,  311 => 199,  304 => 195,  299 => 192,  297 => 191,  293 => 189,  286 => 185,  281 => 183,  277 => 182,  272 => 179,  270 => 178,  267 => 177,  263 => 176,  258 => 171,  256 => 168,  253 => 167,  250 => 166,  247 => 158,  245 => 157,  242 => 156,  239 => 155,  236 => 147,  234 => 146,  231 => 145,  228 => 144,  225 => 132,  223 => 131,  220 => 130,  216 => 129,  212 => 126,  205 => 124,  201 => 123,  196 => 122,  192 => 121,  185 => 113,  181 => 112,  174 => 106,  168 => 104,  162 => 102,  160 => 101,  154 => 100,  143 => 97,  139 => 96,  131 => 228,  129 => 227,  121 => 221,  119 => 176,  114 => 173,  112 => 129,  110 => 121,  102 => 115,  100 => 112,  97 => 111,  94 => 110,  91 => 96,  89 => 95,  84 => 92,  78 => 89,  75 => 88,  73 => 87,  69 => 86,  66 => 85,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  60 => 78,  59 => 77,  58 => 76,  57 => 75,  56 => 73,  51 => 70,  47 => 69,  44 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 73, "if" => 87, "block" => 96, "embed" => 132, "trans" => 182);
        static $filters = array("escape" => 69, "clean_class" => 75, "capitalize" => 97, "trim" => 97, "striptags" => 97, "render" => 97);
        static $functions = array("attach_library" => 69);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'embed', 'trans'],
                ['escape', 'clean_class', 'capitalize', 'trim', 'striptags', 'render'],
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


/* node--teaser.html.twig */
class __TwigTemplate_b76f2728ae743b2ed61d52552002295d84bbd72c3d28bb0c9fed62009b02897e___1514055060 extends \Twig\Template
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
        // line 132
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 132);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 133
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "account_circle";
    }

    // line 134
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("Author name", array());
    }

    // line 135
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "              <div class=\"teaser__published\">
                <span class=\"sr-only\">";
        // line 137
        echo t("Created on", array());
        echo " </span>
                <div class=\"teaser__published-date\">";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 138, $this->source), "html", null, true);
        echo " <span aria-hidden=\"true\">&bullet;</span></div>
                <span class=\"sr-only\"> ";
        // line 139
        echo t("by", array());
        echo " </span>
                <div class=\"teaser__published-author\">";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author"] ?? null), 140, $this->source), "html", null, true);
        echo "</div>
              </div>";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 140,  471 => 139,  467 => 138,  463 => 137,  460 => 136,  456 => 135,  449 => 134,  442 => 133,  431 => 132,  351 => 218,  348 => 217,  341 => 213,  335 => 210,  329 => 207,  324 => 206,  322 => 205,  319 => 204,  311 => 199,  304 => 195,  299 => 192,  297 => 191,  293 => 189,  286 => 185,  281 => 183,  277 => 182,  272 => 179,  270 => 178,  267 => 177,  263 => 176,  258 => 171,  256 => 168,  253 => 167,  250 => 166,  247 => 158,  245 => 157,  242 => 156,  239 => 155,  236 => 147,  234 => 146,  231 => 145,  228 => 144,  225 => 132,  223 => 131,  220 => 130,  216 => 129,  212 => 126,  205 => 124,  201 => 123,  196 => 122,  192 => 121,  185 => 113,  181 => 112,  174 => 106,  168 => 104,  162 => 102,  160 => 101,  154 => 100,  143 => 97,  139 => 96,  131 => 228,  129 => 227,  121 => 221,  119 => 176,  114 => 173,  112 => 129,  110 => 121,  102 => 115,  100 => 112,  97 => 111,  94 => 110,  91 => 96,  89 => 95,  84 => 92,  78 => 89,  75 => 88,  73 => 87,  69 => 86,  66 => 85,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  60 => 78,  59 => 77,  58 => 76,  57 => 75,  56 => 73,  51 => 70,  47 => 69,  44 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 134);
        static $filters = array("escape" => 138);
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


/* node--teaser.html.twig */
class __TwigTemplate_b76f2728ae743b2ed61d52552002295d84bbd72c3d28bb0c9fed62009b02897e___602826385 extends \Twig\Template
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
        // line 147
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 147);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 148
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "label";
    }

    // line 149
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("Topic type:", array());
    }

    // line 150
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "<span class=\"sr-only\">";
        echo t("Topic type:", array());
        echo "</span>
              ";
        // line 152
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topic_type"] ?? null), 152, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 152,  583 => 151,  579 => 150,  572 => 149,  565 => 148,  554 => 147,  475 => 140,  471 => 139,  467 => 138,  463 => 137,  460 => 136,  456 => 135,  449 => 134,  442 => 133,  431 => 132,  351 => 218,  348 => 217,  341 => 213,  335 => 210,  329 => 207,  324 => 206,  322 => 205,  319 => 204,  311 => 199,  304 => 195,  299 => 192,  297 => 191,  293 => 189,  286 => 185,  281 => 183,  277 => 182,  272 => 179,  270 => 178,  267 => 177,  263 => 176,  258 => 171,  256 => 168,  253 => 167,  250 => 166,  247 => 158,  245 => 157,  242 => 156,  239 => 155,  236 => 147,  234 => 146,  231 => 145,  228 => 144,  225 => 132,  223 => 131,  220 => 130,  216 => 129,  212 => 126,  205 => 124,  201 => 123,  196 => 122,  192 => 121,  185 => 113,  181 => 112,  174 => 106,  168 => 104,  162 => 102,  160 => 101,  154 => 100,  143 => 97,  139 => 96,  131 => 228,  129 => 227,  121 => 221,  119 => 176,  114 => 173,  112 => 129,  110 => 121,  102 => 115,  100 => 112,  97 => 111,  94 => 110,  91 => 96,  89 => 95,  84 => 92,  78 => 89,  75 => 88,  73 => 87,  69 => 86,  66 => 85,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  60 => 78,  59 => 77,  58 => 76,  57 => 75,  56 => 73,  51 => 70,  47 => 69,  44 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 149);
        static $filters = array("escape" => 152);
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


/* node--teaser.html.twig */
class __TwigTemplate_b76f2728ae743b2ed61d52552002295d84bbd72c3d28bb0c9fed62009b02897e___1822769209 extends \Twig\Template
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
        // line 158
        return "node--teaser__field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__field.html.twig", "node--teaser.html.twig", 158);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 159
    public function block_field_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "group";
    }

    // line 160
    public function block_svg_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo t("Group", array());
    }

    // line 161
    public function block_field_value($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 162
        echo "<span class=\"sr-only\">";
        echo t("This content is posted in", array());
        echo " </span>
              ";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "group_name", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 163,  694 => 162,  690 => 161,  683 => 160,  676 => 159,  665 => 158,  588 => 152,  583 => 151,  579 => 150,  572 => 149,  565 => 148,  554 => 147,  475 => 140,  471 => 139,  467 => 138,  463 => 137,  460 => 136,  456 => 135,  449 => 134,  442 => 133,  431 => 132,  351 => 218,  348 => 217,  341 => 213,  335 => 210,  329 => 207,  324 => 206,  322 => 205,  319 => 204,  311 => 199,  304 => 195,  299 => 192,  297 => 191,  293 => 189,  286 => 185,  281 => 183,  277 => 182,  272 => 179,  270 => 178,  267 => 177,  263 => 176,  258 => 171,  256 => 168,  253 => 167,  250 => 166,  247 => 158,  245 => 157,  242 => 156,  239 => 155,  236 => 147,  234 => 146,  231 => 145,  228 => 144,  225 => 132,  223 => 131,  220 => 130,  216 => 129,  212 => 126,  205 => 124,  201 => 123,  196 => 122,  192 => 121,  185 => 113,  181 => 112,  174 => 106,  168 => 104,  162 => 102,  160 => 101,  154 => 100,  143 => 97,  139 => 96,  131 => 228,  129 => 227,  121 => 221,  119 => 176,  114 => 173,  112 => 129,  110 => 121,  102 => 115,  100 => 112,  97 => 111,  94 => 110,  91 => 96,  89 => 95,  84 => 92,  78 => 89,  75 => 88,  73 => 87,  69 => 86,  66 => 85,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  60 => 78,  59 => 77,  58 => 76,  57 => 75,  56 => 73,  51 => 70,  47 => 69,  44 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 160);
        static $filters = array("escape" => 163);
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


/* node--teaser.html.twig */
class __TwigTemplate_b76f2728ae743b2ed61d52552002295d84bbd72c3d28bb0c9fed62009b02897e___771174992 extends \Twig\Template
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
        // line 168
        return "node--teaser__body.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("node--teaser__body.html.twig", "node--teaser.html.twig", 168);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 169
    public function block_field_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 169), 169, $this->source), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "node--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  785 => 169,  774 => 168,  699 => 163,  694 => 162,  690 => 161,  683 => 160,  676 => 159,  665 => 158,  588 => 152,  583 => 151,  579 => 150,  572 => 149,  565 => 148,  554 => 147,  475 => 140,  471 => 139,  467 => 138,  463 => 137,  460 => 136,  456 => 135,  449 => 134,  442 => 133,  431 => 132,  351 => 218,  348 => 217,  341 => 213,  335 => 210,  329 => 207,  324 => 206,  322 => 205,  319 => 204,  311 => 199,  304 => 195,  299 => 192,  297 => 191,  293 => 189,  286 => 185,  281 => 183,  277 => 182,  272 => 179,  270 => 178,  267 => 177,  263 => 176,  258 => 171,  256 => 168,  253 => 167,  250 => 166,  247 => 158,  245 => 157,  242 => 156,  239 => 155,  236 => 147,  234 => 146,  231 => 145,  228 => 144,  225 => 132,  223 => 131,  220 => 130,  216 => 129,  212 => 126,  205 => 124,  201 => 123,  196 => 122,  192 => 121,  185 => 113,  181 => 112,  174 => 106,  168 => 104,  162 => 102,  160 => 101,  154 => 100,  143 => 97,  139 => 96,  131 => 228,  129 => 227,  121 => 221,  119 => 176,  114 => 173,  112 => 129,  110 => 121,  102 => 115,  100 => 112,  97 => 111,  94 => 110,  91 => 96,  89 => 95,  84 => 92,  78 => 89,  75 => 88,  73 => 87,  69 => 86,  66 => 85,  64 => 82,  63 => 81,  62 => 80,  61 => 79,  60 => 78,  59 => 77,  58 => 76,  57 => 75,  56 => 73,  51 => 70,  47 => 69,  44 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("", "node--teaser.html.twig", "themes/contrib/socialbase/templates/node/node--teaser.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 169);
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
