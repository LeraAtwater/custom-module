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

/* themes/contrib/uswds_base/templates/uswds/government-banner.html.twig */
class __TwigTemplate_d7c347cc73b59dc57961d1c4b00c6fc5941050fe1fddf59f0346fef80fc5e44f extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/contrib/uswds_base/templates/uswds/government-banner.html.twig"));

        // line 1
        echo "<div class=\"usa-banner\">
  <div class=\"usa-accordion\">
    <header class=\"usa-banner__header\">
      <div class=\"usa-banner__inner\">
        <div class=\"grid-col-auto\">
          <img class=\"usa-banner__header-flag\" src=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 6, $this->source), "html", null, true);
        echo "favicons/favicon-57.png\" alt=\"U.S. flag\">
        </div>
        <div class=\"grid-col-fill tablet:grid-col-auto\">
          <p class=\"usa-banner__header-text\">An official website of the United States government</p>
          <p class=\"usa-banner__header-action\" aria-hidden=\"true\">Here’s how you know</p>
        </div>
        <button class=\"usa-accordion__button usa-banner__button\" aria-expanded=\"false\" aria-controls=\"gov-banner\">
          <span class=\"usa-banner__button-text\">Here's how you know</span>
        </button>
      </div>
    </header>
    <div class=\"usa-banner__content usa-accordion__content\" id=\"gov-banner\" hidden=\"\">
      <div class=\"grid-row grid-gap-lg\">
        <div class=\"usa-banner__guidance tablet:grid-col-6\">
          <img class=\"usa-banner__icon usa-media-block__img\" src=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 20, $this->source), "html", null, true);
        echo "icon-dot-gov.svg\" alt=\"Dot gov\">
          <div class=\"usa-media-block__body\">
            <p>
              <strong>The .gov means it’s official.</strong>
              <br>
              Federal government websites often end in .gov or .mil. Before sharing sensitive information, make sure you’re on a federal government site.
            </p>
          </div>
        </div>
        <div class=\"usa-banner__guidance tablet:grid-col-6\">
          <img class=\"usa-banner__icon usa-media-block__img\" src=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uswds_images"] ?? null), 30, $this->source), "html", null, true);
        echo "icon-https.svg\" alt=\"Https\">
          <div class=\"usa-media-block__body\">
            <p>
              <strong>The site is secure.</strong>
              <br>
              The <strong>https://</strong> ensures that you are connecting to the official website and that any information you provide is encrypted and transmitted securely.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/uswds_base/templates/uswds/government-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  66 => 20,  49 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/uswds_base/templates/uswds/government-banner.html.twig", "/opt/drupal/web/web/themes/contrib/uswds_base/templates/uswds/government-banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
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
