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

/* themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig */
class __TwigTemplate_2b519bb4df6320a2d97a759a47f505aa942fc25cd199431f117b0af692c0bed7 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig"));

        // line 7
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), 0, ($context["footer_style"] ?? null)], 12, $context, $this->getSourceContext()));
        echo "

";
        // line 85
        echo "
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 14
    public function macro_menu_links($__items__ = null, $__menu_level__ = null, $__footer_style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "menu_level" => $__menu_level__,
            "footer_style" => $__footer_style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 15
            echo "  ";
            $macros["menus"] = $this;
            // line 16
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 17
                echo "
    ";
                // line 18
                if (((($context["footer_style"] ?? null) == "big") && (($context["menu_level"] ?? null) == 0))) {
                    // line 19
                    echo "      <div class=\"tablet:grid-col-12\">
    ";
                } elseif (((                // line 20
($context["footer_style"] ?? null) == "small") && (($context["menu_level"] ?? null) == 0))) {
                    // line 21
                    echo "        <div class=\"tablet:grid-col-8\">
    ";
                }
                // line 23
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 24
                    echo "              <nav class=\"usa-footer__nav\">
    ";
                }
                // line 26
                echo "
    ";
                // line 27
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) == "big"))) {
                    // line 28
                    echo "              <div class=\"grid-row grid-gap-4\">
    ";
                }
                // line 30
                echo "
    ";
                // line 31
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) != "big"))) {
                    // line 32
                    echo "      <ul class=\"add-list-reset grid-row grid-gap\">
    ";
                } elseif ((                // line 33
($context["footer_style"] ?? null) != "big")) {
                    // line 34
                    echo "      <ul class=\"usa-unstyled--list\">
    ";
                }
                // line 36
                echo "
    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "      ";
                    if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) == "big"))) {
                        // line 39
                        echo "        <div class=\"mobile-lg:grid-col-6 desktop:grid-col\">
          <section class=\"usa-footer__primary-content usa-footer__primary-content--collapsible\">
            <strong><a class=\"usa-footer__primary-link\" href=\"";
                        // line 41
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                        echo "</a></strong>
            <ul class=\"usa-list usa-list--unstyled\">
              ";
                        // line 43
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 43)) {
                            // line 44
                            echo "                ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 44), 1, ($context["footer_style"] ?? null)], 44, $context, $this->getSourceContext()));
                            echo "
              ";
                        }
                        // line 46
                        echo "            </ul>
          </section>
        </div>
      ";
                    } elseif ((                    // line 49
($context["footer_style"] ?? null) == "big")) {
                        // line 50
                        echo "        <li class=\"usa-footer__secondary-link\">
          <a href=\"";
                        // line 51
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                        echo "</a>
        </li>
      ";
                    } elseif ((                    // line 53
($context["footer_style"] ?? null) == "medium")) {
                        // line 54
                        echo "        <li class=\"mobile-lg:grid-col-4 desktop:grid-col-2 usa-footer__primary-content\">
          <a class=\"usa-footer__primary-link\" href=\"";
                        // line 55
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                        echo "</a>
        </li>
      ";
                    } else {
                        // line 58
                        echo "        <li class=\"mobile-lg:grid-col-6 desktop:grid-col-auto usa-footer__primary-content\">
          <a class=\"usa-footer__primary-link\" href=\"";
                        // line 59
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                        echo "</a>
        </li>
      ";
                    }
                    // line 62
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "
    ";
                // line 64
                if (((($context["footer_style"] ?? null) == "big") && (($context["menu_level"] ?? null) == 0))) {
                    // line 65
                    echo "      </div>
    ";
                } elseif (((                // line 66
($context["footer_style"] ?? null) == "small") && (($context["menu_level"] ?? null) == 0))) {
                    // line 67
                    echo "      </div>
    ";
                }
                // line 69
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 70
                    echo "      </nav>
    ";
                }
                // line 72
                echo "
    ";
                // line 73
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) == "big"))) {
                    // line 74
                    echo "      </div>
    ";
                }
                // line 76
                echo "
    ";
                // line 77
                if (((($context["menu_level"] ?? null) == 0) && (($context["footer_style"] ?? null) != "big"))) {
                    // line 78
                    echo "      </ul>
    ";
                } elseif ((                // line 79
($context["footer_style"] ?? null) != "big")) {
                    // line 80
                    echo "      </ul>
    ";
                }
                // line 82
                echo "
  ";
            }
            
            $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 82,  241 => 80,  239 => 79,  236 => 78,  234 => 77,  231 => 76,  227 => 74,  225 => 73,  222 => 72,  218 => 70,  215 => 69,  211 => 67,  209 => 66,  206 => 65,  204 => 64,  201 => 63,  195 => 62,  187 => 59,  184 => 58,  176 => 55,  173 => 54,  171 => 53,  164 => 51,  161 => 50,  159 => 49,  154 => 46,  148 => 44,  146 => 43,  139 => 41,  135 => 39,  132 => 38,  128 => 37,  125 => 36,  121 => 34,  119 => 33,  116 => 32,  114 => 31,  111 => 30,  107 => 28,  105 => 27,  102 => 26,  98 => 24,  95 => 23,  91 => 21,  89 => 20,  86 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  57 => 14,  49 => 85,  44 => 12,  42 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig", "/opt/drupal/web/web/themes/contrib/uswds_base/templates/navigation/menu--footer_menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 7, "macro" => 14, "if" => 16, "for" => 37);
        static $filters = array("escape" => 41);
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
