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

/* themes/contrib/uswds_base/templates/layout/page.html.twig */
class __TwigTemplate_fd9d22ee01d76aa0e0d467f8b6d913220301fc59813cccb6450f0062b2aa7888 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/uswds_base/templates/layout/page.html.twig"));

        // line 51
        if (($context["government_banner"] ?? null)) {
            // line 52
            echo "  <section class=\"usa-banner\">
    ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["government_banner"] ?? null), 53, $this->source), "html", null, true);
            echo "
  </section>
";
        }
        // line 56
        echo "
<div class=\"usa-overlay\"></div>

<header class=\"";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_classes"] ?? null), 59, $this->source), "html", null, true);
        echo "\" id=\"header\" role=\"banner\">

  ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 61)) {
            // line 62
            echo "    <div class=\"usa-banner-inner\">
      ";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        if (($context["header_basic"] ?? null)) {
            // line 68
            echo "  <div class=\"usa-nav-container\">
    ";
        }
        // line 70
        echo "
    ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "

    <nav class=\"usa-nav\" role=\"navigation\">
      ";
        // line 74
        if (($context["header_extended"] ?? null)) {
            // line 75
            echo "      <div class=\"usa-nav__inner\">
        ";
        }
        // line 77
        echo "
        <button class=\"usa-nav__close\">
          <img src=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 79, $this->source), "html", null, true);
        echo "close.svg\" alt=\"close\"/>
        </button>

        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 82)) {
            // line 83
            echo "          <div class=\"usa-nav-mobile\">
            ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 87
        echo "
        ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 88)) {
            // line 89
            echo "        <div class=\"usa-nav-desktop\">
          ";
        }
        // line 91
        echo "
          ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 92)) {
            // line 93
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 95
        echo "
          ";
        // line 96
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 96)) {
            // line 97
            echo "            ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "
          ";
        }
        // line 99
        echo "
          ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "mobile_menu", [], "any", false, false, true, 100)) {
            // line 101
            echo "        </div>
        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (($context["header_extended"] ?? null)) {
            // line 105
            echo "      </div>
      ";
        }
        // line 107
        echo "    </nav>

    ";
        // line 109
        if (($context["header_basic"] ?? null)) {
            // line 110
            echo "  </div>
  ";
        }
        // line 112
        echo "
</header>

";
        // line 115
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 115)) {
            // line 116
            echo "  <section class=\"usa-hero\">
    <div class=\"grid-container\">
      ";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "
    </div>
  </section>
";
        }
        // line 122
        echo "
<main class=\"main-content usa-layout-docs usa-section ";
        // line 123
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_classes"] ?? null), 123, $this->source), "html", null, true);
        echo "\" role=\"main\"
      id=\"main-content\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 126
        echo "
  <div class=\"grid-container\">

    ";
        // line 129
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 129) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 129)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 129))) {
            // line 130
            echo "      <div class=\"grid-row\">
        ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
      </div>

      <div class=\"\">
        ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
      </div>

      ";
            // line 139
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 139)) {
                // line 140
                echo "        <div class=\"grid-row \">
          ";
                // line 141
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 144
            echo "    ";
        }
        // line 145
        echo "
    <div class=\"grid-row grid-gap\">
      ";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 147)) {
            // line 148
            echo "        <aside
          class=\"usa-layout-docs__sidenav desktop:grid-col-3 layout-sidebar-first\"
          role=\"complementary\">
          ";
            // line 151
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 151), 151, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 154
        echo "
      <div class=\"usa-layout-docs__main desktop:grid-col-";
        // line 155
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 155) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 155))) {
            echo "9";
        } else {
            echo "fill";
        }
        echo "\">
        ";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
        echo "
      </div>";
        // line 158
        echo "
      ";
        // line 159
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 159)) {
            // line 160
            echo "        <aside
          class=\"usa-layout-docs__sidenav desktop:grid-col-3 layout-sidebar-second\"
          role=\"complementary\">
          ";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 166
        echo "    </div>
  </div>
</main>

<footer class=\"";
        // line 170
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 170, $this->source), "html", null, true);
        echo "\" role=\"contentinfo\">
  <div class=\"grid-container usa-footer__return-to-top\">
    <a href=\"#\">Return to top</a>
  </div>

  ";
        // line 175
        if (($context["display_footer_primary"] ?? null)) {
            // line 176
            echo "    <div class=\"usa-footer__primary-section\">

      <div class=\"usa-footer__primary-content\">
        ";
            // line 179
            if ((($context["footer_style"] ?? null) != "medium")) {
                // line 180
                echo "        <div class=\"grid-container\">
          <div class=\"grid-row grid-gap\">
            ";
            }
            // line 183
            echo "
            ";
            // line 184
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 184)) {
                // line 185
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 187
            echo "
            ";
            // line 188
            if ((($context["footer_slim"] ?? null) && (($context["footer_phone"] ?? null) || ($context["footer_email"] ?? null)))) {
                // line 189
                echo "              <div class=\"mobile-lg:grid-col-4\">
                <address class=\"usa-footer__address\">
                  <div class=\"grid-row grid-gap mobile-lg:grid-gap-0\">

                    ";
                // line 193
                if (($context["footer_phone"] ?? null)) {
                    // line 194
                    echo "                      <div
                        class=\"grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto\">
                        <div class=\"usa-footer-contact_info\">
                          <a
                            href=\"tel:";
                    // line 198
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_phone"] ?? null), 198, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_phone"] ?? null), 198, $this->source), "html", null, true);
                    echo "</a>
                        </div>
                      </div>
                    ";
                }
                // line 202
                echo "
                    ";
                // line 203
                if (($context["footer_email"] ?? null)) {
                    // line 204
                    echo "                      <div
                        class=\"grid-col-auto mobile-lg:grid-col-12 desktop:grid-col-auto\">
                        <div class=\"usa-footer-contact_info\">
                          <a
                            href=\"mailto:";
                    // line 208
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_email"] ?? null), 208, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_email"] ?? null), 208, $this->source), "html", null, true);
                    echo "</a>
                        </div>
                      </div>
                    ";
                }
                // line 212
                echo "                  </div>
                </address>
              </div>
            ";
            }
            // line 216
            echo "
            ";
            // line 217
            if ((($context["footer_style"] ?? null) != "medium")) {
                // line 218
                echo "          </div>
        </div>
        ";
            }
            // line 221
            echo "
        ";
            // line 222
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 222)) {
                // line 223
                echo "          <div class=\"grid-container\">
            <div class=\"grid-row grid-gap\">
              <div class=\"grid-col-fill\">
                ";
                // line 226
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 226), 226, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 231
            echo "      </div>

    </div>
  ";
        }
        // line 235
        echo "
  ";
        // line 236
        if (($context["display_footer_secondary"] ?? null)) {
            // line 237
            echo "    <div class=\"usa-footer__secondary-section\">
      <div class=\"grid-container\">
        <div class=\"grid-row grid-gap\">
          ";
            // line 240
            if (($context["display_footer_agency"] ?? null)) {
                // line 241
                echo "          <div
            class=\"usa-footer__logo grid-row mobile-lg:grid-col-6 mobile-lg:grid-gap-2\">

            ";
                // line 244
                if (($context["footer_agency_url"] ?? null)) {
                    // line 245
                    echo "            <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_agency_url"] ?? null), 245, $this->source), "html", null, true);
                    echo "\">
            ";
                }
                // line 247
                echo "
              ";
                // line 248
                if (($context["footer_agency_logo"] ?? null)) {
                    // line 249
                    echo "                <div class=\"mobile-lg:grid-col-auto\">
                  <img class=\"usa-footer__logo-img\"
                       src=\"";
                    // line 251
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_agency_logo"] ?? null), 251, $this->source), "html", null, true);
                    echo "\"
                       alt=\"";
                    // line 252
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Agency logo"));
                    echo "\">
                </div>
              ";
                }
                // line 255
                echo "
              ";
                // line 256
                if (($context["footer_agency_name"] ?? null)) {
                    // line 257
                    echo "                <div class=\"mobile-lg:grid-col-auto\">
                  <h3
                    class=\"usa-footer__logo-heading\">";
                    // line 259
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_agency_name"] ?? null), 259, $this->source), "html", null, true);
                    echo "</h3>
                </div>
              ";
                }
                // line 262
                echo "
            ";
                // line 263
                if (($context["footer_agency_url"] ?? null)) {
                    // line 264
                    echo "            </a>
            ";
                }
                // line 266
                echo "
          </div>

          ";
                // line 269
                if ( !($context["footer_slim"] ?? null)) {
                    // line 270
                    echo "            <div class=\"usa-footer__contact-links desktop:grid-col-6\">
              ";
                    // line 271
                    if ((((($context["facebook"] ?? null) || ($context["twitter"] ?? null)) || ($context["youtube"] ?? null)) || ($context["rss"] ?? null))) {
                        // line 272
                        echo "              <div class=\"usa-footer__social-links grid-row grid-gap-1\">
              ";
                        // line 273
                        if (($context["facebook"] ?? null)) {
                            // line 274
                            echo "                <div class=\"grid-col-auto\">
                <a class=\"usa-social-link usa-social-link--facebook\" href=\"";
                            // line 275
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 275, $this->source), "html", null, true);
                            echo "\">
                  <span>Facebook</span>
                </a>
                </div>
              ";
                        }
                        // line 280
                        echo "
              ";
                        // line 281
                        if (($context["twitter"] ?? null)) {
                            // line 282
                            echo "                <div class=\"grid-col-auto\">
                <a class=\"usa-social-link usa-social-link--twitter\" href=\"";
                            // line 283
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 283, $this->source), "html", null, true);
                            echo "\">
                  <span>Twitter</span>
                </a>
                </div>
              ";
                        }
                        // line 288
                        echo "
              ";
                        // line 289
                        if (($context["youtube"] ?? null)) {
                            // line 290
                            echo "                  <div class=\"grid-col-auto\">
                <a class=\"usa-social-link usa-social-link--youtube\" href=\"";
                            // line 291
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 291, $this->source), "html", null, true);
                            echo "\">
                  <span>YouTube</span>
                </a>
                  </div>
              ";
                        }
                        // line 296
                        echo "
              ";
                        // line 297
                        if (($context["rss"] ?? null)) {
                            // line 298
                            echo "                <div class=\"grid-col-auto\">
                <a class=\"usa-social-link usa-social-link--rss\" href=\"";
                            // line 299
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss"] ?? null), 299, $this->source), "html", null, true);
                            echo "\">
                  <span>RSS</span>
                </a>
                </div>
              ";
                        }
                        // line 304
                        echo "              </div>
              ";
                    }
                    // line 306
                    echo "              ";
                    if (($context["contact_center"] ?? null)) {
                        // line 307
                        echo "                <h3
                  class=\"usa-footer__contact-heading\">";
                        // line 308
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact_center"] ?? null), 308, $this->source), "html", null, true);
                        echo "</h3>
              ";
                    }
                    // line 310
                    echo "              <address class=\"usa-footer__address\">
                <div class=\"usa-footer__contact-info grid-row grid-gap\">
                  ";
                    // line 312
                    if (($context["phone"] ?? null)) {
                        // line 313
                        echo "                    <div class=\"grid-col-auto\">
                      <a href=\"tel:";
                        // line 314
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 314, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 314, $this->source), "html", null, true);
                        echo "</a>
                    </div>
                  ";
                    }
                    // line 317
                    echo "
                  ";
                    // line 318
                    if (($context["email"] ?? null)) {
                        // line 319
                        echo "                    <div class=\"grid-col-auto\">
                      <a href=\"mailto:";
                        // line 320
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 320, $this->source), "html", null, true);
                        echo "\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 320, $this->source), "html", null, true);
                        echo "</a>
                    </div>
                  ";
                    }
                    // line 323
                    echo "                </div>
              </address>
            </div>
          ";
                }
                // line 327
                echo "
        </div>
        ";
            }
            // line 330
            echo "
        ";
            // line 331
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_secondary", [], "any", false, false, true, 331)) {
                // line 332
                echo "          <div class=\"grid-container\">
            <div class=\"grid-row grid-gap\">
              <div class=\"grid-col-fill\">
                ";
                // line 335
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_secondary", [], "any", false, false, true, 335), 335, $this->source), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            }
            // line 340
            echo "      </div>
    </div>
  ";
        }
        // line 343
        echo "
</footer>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 343,  638 => 340,  630 => 335,  625 => 332,  623 => 331,  620 => 330,  615 => 327,  609 => 323,  601 => 320,  598 => 319,  596 => 318,  593 => 317,  585 => 314,  582 => 313,  580 => 312,  576 => 310,  571 => 308,  568 => 307,  565 => 306,  561 => 304,  553 => 299,  550 => 298,  548 => 297,  545 => 296,  537 => 291,  534 => 290,  532 => 289,  529 => 288,  521 => 283,  518 => 282,  516 => 281,  513 => 280,  505 => 275,  502 => 274,  500 => 273,  497 => 272,  495 => 271,  492 => 270,  490 => 269,  485 => 266,  481 => 264,  479 => 263,  476 => 262,  470 => 259,  466 => 257,  464 => 256,  461 => 255,  455 => 252,  451 => 251,  447 => 249,  445 => 248,  442 => 247,  436 => 245,  434 => 244,  429 => 241,  427 => 240,  422 => 237,  420 => 236,  417 => 235,  411 => 231,  403 => 226,  398 => 223,  396 => 222,  393 => 221,  388 => 218,  386 => 217,  383 => 216,  377 => 212,  368 => 208,  362 => 204,  360 => 203,  357 => 202,  348 => 198,  342 => 194,  340 => 193,  334 => 189,  332 => 188,  329 => 187,  323 => 185,  321 => 184,  318 => 183,  313 => 180,  311 => 179,  306 => 176,  304 => 175,  296 => 170,  290 => 166,  284 => 163,  279 => 160,  277 => 159,  274 => 158,  270 => 156,  262 => 155,  259 => 154,  253 => 151,  248 => 148,  246 => 147,  242 => 145,  239 => 144,  233 => 141,  230 => 140,  227 => 139,  221 => 135,  214 => 131,  211 => 130,  209 => 129,  204 => 126,  199 => 123,  196 => 122,  189 => 118,  185 => 116,  183 => 115,  178 => 112,  174 => 110,  172 => 109,  168 => 107,  164 => 105,  162 => 104,  159 => 103,  155 => 101,  153 => 100,  150 => 99,  144 => 97,  142 => 96,  139 => 95,  133 => 93,  131 => 92,  128 => 91,  124 => 89,  122 => 88,  119 => 87,  113 => 84,  110 => 83,  108 => 82,  102 => 79,  98 => 77,  94 => 75,  92 => 74,  86 => 71,  83 => 70,  79 => 68,  77 => 67,  74 => 66,  68 => 63,  65 => 62,  63 => 61,  58 => 59,  53 => 56,  47 => 53,  44 => 52,  42 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/layout/page.html.twig", "/opt/drupal/web/web/themes/contrib/uswds_base/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 51);
        static $filters = array("escape" => 53, "t" => 252);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
