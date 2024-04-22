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

/* @Contao/content_element/html.html.twig */
class __TwigTemplate_22b8d442ca8a1a90ebd60042d4292d3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'editor_view' => [$this, 'block_editor_view'],
            'html' => [$this, 'block_html'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["as_editor_view"] ?? null)) {
            // line 2
            echo "    ";
            $this->displayBlock('editor_view', $context, $blocks);
        } else {
            // line 6
            echo "    ";
            $this->displayBlock('html', $context, $blocks);
        }
    }

    // line 2
    public function block_editor_view($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "        <pre>";
        echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["html"] ?? null), "contao_html", null, true);
        echo "</pre>
    ";
    }

    // line 6
    public function block_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTags($context, ((array_key_exists("html", $context)) ? (_twig_default_filter(($context["html"] ?? null))) : ("")));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Contao/content_element/html.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  62 => 6,  55 => 3,  51 => 2,  45 => 6,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Contao/content_element/html.html.twig", "/var/www/html/vendor/contao/core-bundle/contao/templates/twig/content_element/html.html.twig");
    }
}
