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

/* @Contao_ContaoCoreBundle/component/_headline.html.twig */
class __TwigTemplate_d1a9b48751bbb8bcbac8f85ce499cad9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'headline_component' => [$this, 'block_headline_component'],
            'headline_attributes' => [$this, 'block_headline_attributes'],
            'headline_inner' => [$this, 'block_headline_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('headline_component', $context, $blocks);
    }

    public function block_headline_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    ";
        $context["headline"] = ((array_key_exists("headline", $context)) ? (_twig_default_filter(($context["headline"] ?? null), $context)) : ($context));
        // line 20
        echo "    ";
        $context["tag_name"] = ((twig_get_attribute($this->env, $this->source, ($context["headline"] ?? null), "tag_name", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["headline"] ?? null), "tag_name", [], "any", false, false, false, 20), "h1")) : ("h1"));
        // line 21
        echo "
    <";
        // line 22
        echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["tag_name"] ?? null), "contao_html", null, true);
        $this->displayBlock('headline_attributes', $context, $blocks);
        echo ">";
        // line 23
        $this->displayBlock('headline_inner', $context, $blocks);
        // line 26
        echo "</";
        echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["tag_name"] ?? null), "contao_html", null, true);
        echo ">
";
    }

    // line 22
    public function block_headline_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getFilter('escape')->getCallable()($this->env, ((twig_get_attribute($this->env, $this->source, ($context["headline"] ?? null), "attributes", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["headline"] ?? null), "attributes", [], "any", false, false, false, 22))) : ("")), "contao_html", null, true);
    }

    // line 23
    public function block_headline_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo $this->env->getFilter('escape')->getCallable()($this->env, $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTagsChunkedRaw($context, twig_get_attribute($this->env, $this->source, ($context["headline"] ?? null), "text", [], "any", false, false, false, 24)), "contao_html", null, true);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Contao_ContaoCoreBundle/component/_headline.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  83 => 24,  79 => 23,  72 => 22,  65 => 26,  63 => 23,  59 => 22,  56 => 21,  53 => 20,  50 => 19,  43 => 18,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Contao_ContaoCoreBundle/component/_headline.html.twig", "/var/www/html/vendor/contao/core-bundle/contao/templates/twig/component/_headline.html.twig");
    }
}
