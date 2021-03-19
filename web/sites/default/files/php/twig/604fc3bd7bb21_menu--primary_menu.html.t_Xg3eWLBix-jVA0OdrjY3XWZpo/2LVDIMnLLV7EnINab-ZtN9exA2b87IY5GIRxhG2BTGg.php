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

/* themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig */
class __TwigTemplate_3275549a5c434e231b696bf8082837897029b0921dc63c277b175fb2430d6364 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig"));

        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["megamenu"] ?? null), 0, null, ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null)], 27, $context, $this->getSourceContext()));
        echo "

";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 29
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__megamenu__ = null, $__button_id__ = null, $__parent__ = null, $__duplicate_parent__ = null, $__region__ = null, $__mega_display_second__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "megamenu" => $__megamenu__,
            "button_id" => $__button_id__,
            "parent" => $__parent__,
            "duplicate_parent" => $__duplicate_parent__,
            "region" => $__region__,
            "mega_display_second" => $__mega_display_second__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 30
            echo "  ";
            $macros["menus"] = $this;
            // line 31
            echo "
  ";
            // line 32
            if (($context["items"] ?? null)) {
                // line 33
                echo "
    ";
                // line 34
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul class=\"usa-nav__primary usa-accordion\" role=\"navigation\">
    ";
                } elseif ((                // line 36
($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 37
                    echo "      <div id=\"extended-mega-nav-section-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_id"] ?? null), 37, $this->source), "html", null, true);
                    echo "\" class=\"usa-nav__submenu usa-megamenu\" hidden=\"\">

      ";
                    // line 39
                    if (($context["duplicate_parent"] ?? null)) {
                        // line 40
                        echo "        <div class=\"grid-row grid-gap-4\">
          <div class=\"desktop:grid-col-3\">
            <div class=\"usa-nav__submenu-item\">
              <a href=\"";
                        // line 43
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                        echo "\">
                <span><h3>";
                        // line 44
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                        echo "</h3></span>
              </a>
            </div>
          </div>
        </div>
      ";
                    }
                    // line 50
                    echo "
        <div class=\"grid-row grid-gap-4\">
    ";
                } else {
                    // line 53
                    echo "      <ul id=\"basic-nav-section-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["button_id"] ?? null), 53, $this->source), "html", null, true);
                    echo "\" class=\"usa-nav__submenu";
                    if ((($context["menu_level"] ?? null) > 1)) {
                        echo "-list";
                    }
                    echo "\"";
                    if ((($context["menu_level"] ?? null) == 1)) {
                        echo " hidden=\"\"";
                    }
                    echo ">

      ";
                    // line 55
                    if ((($context["duplicate_parent"] ?? null) && (($context["megamenu"] ?? null) == 0))) {
                        // line 56
                        echo "        <li class=\"usa-nav__submenu-item\">
          <a href=\"";
                        // line 57
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "url", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                        echo "\">
            <span><strong>";
                        // line 58
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                        echo "</strong></span>
          </a>
        </li>
      ";
                    }
                    // line 62
                    echo "    ";
                }
                // line 63
                echo "
    ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 65
                    echo "
      ";
                    // line 66
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 67
                        echo "        <div class=\"desktop:grid-col-3\">

        ";
                        // line 69
                        if ((($context["mega_display_second"] ?? null) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 69))) {
                            // line 70
                            echo "          <div class=\"usa-nav__submenu-item\">
            <a href=\"";
                            // line 71
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                            echo "\" class=\"usa-nav__link\">
              <span><strong>";
                            // line 72
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                            echo "</strong></span>
            </a>
          </div>
        ";
                        }
                        // line 76
                        echo "      ";
                    } else {
                        // line 77
                        echo "        <li class=\"";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            echo "usa-nav__primary-item";
                        } else {
                            echo "usa-nav__submenu-item";
                        }
                        echo "\">
      ";
                    }
                    // line 79
                    echo "
      ";
                    // line 80
                    if (((($context["menu_level"] ?? null) == 0) && twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 80))) {
                        // line 81
                        echo "        <button class=\"usa-accordion__button usa-nav__link ";
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 81)) {
                            echo "usa-current";
                        }
                        echo "\" aria-expanded=\"false\" aria-controls=\"";
                        if (($context["megamenu"] ?? null)) {
                            echo "extended-mega-nav-section-";
                        } else {
                            echo "basic-nav-section-";
                        }
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                        echo "\">
          <span>";
                        // line 82
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "</span>
        </button>
      ";
                    }
                    // line 85
                    echo "
      ";
                    // line 86
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 86) && ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1)) || (($context["menu_level"] ?? null) == 0)))) {
                        // line 87
                        echo "        ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 87), (($context["menu_level"] ?? null) + 1), ($context["megamenu"] ?? null), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 87), $context["item"], ($context["duplicate_parent"] ?? null), null, ($context["mega_display_second"] ?? null)], 87, $context, $this->getSourceContext()));
                        echo "
      ";
                    } else {
                        // line 89
                        echo "        ";
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 90
                            echo "          <div class=\"usa-nav__submenu-item\">
        ";
                        }
                        // line 92
                        echo "        <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "\"";
                        if ((($context["menu_level"] ?? null) == 0)) {
                            echo " class=\"usa-nav__link";
                            if (twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 92)) {
                                echo " usa-current";
                            }
                            echo "\" ";
                        }
                        echo ">
          <span>";
                        // line 93
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                        echo "</span>
        </a>
        ";
                        // line 95
                        if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                            // line 96
                            echo "          </div>
        ";
                        }
                        // line 98
                        echo "      ";
                    }
                    // line 99
                    echo "
      ";
                    // line 100
                    if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                        // line 101
                        echo "        </div>
      ";
                    } else {
                        // line 103
                        echo "        </li>
      ";
                    }
                    // line 105
                    echo "
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "
    ";
                // line 108
                if ((($context["megamenu"] ?? null) && (($context["menu_level"] ?? null) == 1))) {
                    // line 109
                    echo "        </div>
      </div>
    ";
                } else {
                    // line 112
                    echo "      </ul>
    ";
                }
                // line 114
                echo "
  ";
            }
            // line 116
            echo "
";
            
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 116,  329 => 114,  325 => 112,  320 => 109,  318 => 108,  315 => 107,  300 => 105,  296 => 103,  292 => 101,  290 => 100,  287 => 99,  284 => 98,  280 => 96,  278 => 95,  273 => 93,  260 => 92,  256 => 90,  253 => 89,  247 => 87,  245 => 86,  242 => 85,  236 => 82,  222 => 81,  220 => 80,  217 => 79,  207 => 77,  204 => 76,  197 => 72,  193 => 71,  190 => 70,  188 => 69,  184 => 67,  182 => 66,  179 => 65,  162 => 64,  159 => 63,  156 => 62,  149 => 58,  145 => 57,  142 => 56,  140 => 55,  126 => 53,  121 => 50,  112 => 44,  108 => 43,  103 => 40,  101 => 39,  95 => 37,  93 => 36,  90 => 35,  88 => 34,  85 => 33,  83 => 32,  80 => 31,  77 => 30,  54 => 29,  44 => 27,  42 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig", "/opt/drupal/web/web/themes/contrib/uswds_base/templates/navigation/menu--primary_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 22, "macro" => 29, "if" => 32, "for" => 64);
        static $filters = array("escape" => 37);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
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
