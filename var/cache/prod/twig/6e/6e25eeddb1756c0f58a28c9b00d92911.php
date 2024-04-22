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

/* @Contao_ContaoCoreBundle/content_element/text.html.twig */
class __TwigTemplate_b634268e9dbed7da665505eed9d5cbb7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $_trait_0 = $this->loadTemplate("@Contao_ContaoCoreBundle/component/_figure.html.twig", "@Contao_ContaoCoreBundle/content_element/text.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@Contao_ContaoCoreBundle/component/_figure.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'text_media' => [$this, 'block_text_media'],
                'content' => [$this, 'block_content'],
                'text' => [$this, 'block_text'],
                'text_attributes' => [$this, 'block_text_attributes'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Contao_ContaoCoreBundle/content_element/_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["content_layout_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "addClass", [("media media--" .         // line 5
($context["layout"] ?? null)), (($context["layout"] ?? null) && ($context["image"] ?? null))], "method", false, false, false, 4), "mergeWith", [((        // line 6
array_key_exists("content_layout_attributes", $context)) ? (_twig_default_filter(($context["content_layout_attributes"] ?? null))) : (""))], "method", false, false, false, 5);
        // line 11
        $context["attributes"] = twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(((array_key_exists("attributes", $context)) ? (_twig_default_filter(($context["attributes"] ?? null))) : (""))), "mergeWith", [        // line 12
($context["content_layout_attributes"] ?? null), ( !array_key_exists("default_content_layout", $context) || ($context["default_content_layout"] ?? null))], "method", false, false, false, 11);
        // line 1
        $this->parent = $this->loadTemplate("@Contao_ContaoCoreBundle/content_element/_base.html.twig", "@Contao_ContaoCoreBundle/content_element/text.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_text_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        if (($context["image"] ?? null)) {
            // line 18
            echo "        ";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["figure" => ($context["image"] ?? null)];
            if (!is_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 18, $this->getSourceContext());
            }
            $__internal_compile_1 = twig_to_array($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            $this->displayBlock("figure_component", $context, $blocks);
            $context = $__internal_compile_0;
            // line 19
            echo "    ";
        }
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        if ((($context["layout"] ?? null) != "below")) {
            // line 24
            echo "        ";
            $this->displayBlock("text_media", $context, $blocks);
            echo "
    ";
        }
        // line 26
        echo "
    ";
        // line 28
        echo "    ";
        $this->displayBlock('text', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        if ((($context["layout"] ?? null) == "below")) {
            // line 39
            echo "        ";
            $this->displayBlock("text_media", $context, $blocks);
            echo "
    ";
        }
    }

    // line 28
    public function block_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "        ";
        $context["text_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "addClass", ["rte"], "method", false, false, false, 29), "mergeWith", [((        // line 31
array_key_exists("text_attributes", $context)) ? (_twig_default_filter(($context["text_attributes"] ?? null))) : (""))], "method", false, false, false, 30);
        // line 33
        echo "        <div";
        $this->displayBlock('text_attributes', $context, $blocks);
        echo ">
            ";
        // line 34
        echo $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\StringRuntime')->encodeEmail($this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTags($context, $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\CspRuntime')->inlineStyles(($context["text"] ?? null))));
        echo "
        </div>
    ";
    }

    // line 33
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
        return "@Contao_ContaoCoreBundle/content_element/text.html.twig";
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
        return array (  144 => 33,  137 => 34,  132 => 33,  130 => 31,  128 => 29,  124 => 28,  116 => 39,  114 => 38,  111 => 37,  108 => 28,  105 => 26,  99 => 24,  96 => 23,  92 => 22,  87 => 19,  76 => 18,  73 => 17,  69 => 16,  64 => 1,  62 => 12,  61 => 11,  59 => 6,  58 => 5,  57 => 4,  50 => 1,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Contao_ContaoCoreBundle/content_element/text.html.twig", "/var/www/html/vendor/contao/core-bundle/contao/templates/twig/content_element/text.html.twig");
    }
}
