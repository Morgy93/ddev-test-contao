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

/* @Contao/content_element/text/slider.html.twig */
class __TwigTemplate_d26874c33316acf3f9f167fe7749caf4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headline_attributes' => [$this, 'block_headline_attributes'],
            'inner' => [$this, 'block_inner'],
            'content' => [$this, 'block_content'],
            'text' => [$this, 'block_text'],
            'text_attributes' => [$this, 'block_text_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Contao_ContaoCoreBundle/content_element/text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Contao_ContaoCoreBundle/content_element/text.html.twig", "@Contao/content_element/text/slider.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headline_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " class=\"title\"";
    }

    // line 6
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    ";
        $this->displayBlock("content", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        $this->displayBlock('text', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock("text_media", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        ";
        $context["text_attributes"] = twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(((array_key_exists("text_attributes", $context)) ? (_twig_default_filter(($context["text_attributes"] ?? null))) : (""))), "addClass", ["text-wrapper"], "method", false, false, false, 13);
        // line 14
        echo "        <div";
        $this->displayBlock('text_attributes', $context, $blocks);
        echo ">
            ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["headline"] ?? null), "text", [], "any", false, false, false, 15)) {
            // line 16
            echo "                ";
            $this->displayBlock("headline_component", $context, $blocks);
            echo "
            ";
        }
        // line 18
        echo "            ";
        echo $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTags($context, ($context["text"] ?? null));
        echo "
        </div>
    ";
    }

    // line 14
    public function block_text_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["text_attributes"] ?? null), "contao_html", null, true);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Contao/content_element/text/slider.html.twig";
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
        return array (  114 => 14,  106 => 18,  100 => 16,  98 => 15,  93 => 14,  90 => 13,  86 => 12,  80 => 22,  77 => 21,  74 => 12,  72 => 11,  68 => 10,  61 => 7,  57 => 6,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Contao/content_element/text/slider.html.twig", "/var/www/html/templates/content_element/text/slider.html.twig");
    }
}
