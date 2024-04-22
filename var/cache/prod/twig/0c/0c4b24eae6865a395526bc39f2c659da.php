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

/* @Contao_ContaoCoreBundle/content_element/_base.html.twig */
class __TwigTemplate_3921bcd2f4730962bd3f500498b91937 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("@Contao_ContaoCoreBundle/component/_headline.html.twig", "@Contao_ContaoCoreBundle/content_element/_base.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@Contao_ContaoCoreBundle/component/_headline.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'wrapper' => [$this, 'block_wrapper'],
                'wrapper_tag' => [$this, 'block_wrapper_tag'],
                'attributes' => [$this, 'block_attributes'],
                'inner' => [$this, 'block_inner'],
                'content' => [$this, 'block_content'],
                'metadata' => [$this, 'block_metadata'],
                'style' => [$this, 'block_style'],
                'script' => [$this, 'block_script'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        if ((array_key_exists("searchable", $context) &&  !($context["searchable"] ?? null))) {
            // line 4
            echo "<!-- indexer::stop -->";
        }
        // line 6
        echo "
";
        // line 9
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "setIfExists", ["id",         // line 10
($context["element_html_id"] ?? null)], "method", false, false, false, 9), "addClass", [[        // line 11
($context["element_css_classes"] ?? null), ("content-" . twig_replace_filter(($context["type"] ?? null), ["_" => "-"]))]], "method", false, false, false, 10), "mergeWith", [((        // line 12
array_key_exists("attributes", $context)) ? (_twig_default_filter(($context["attributes"] ?? null))) : (""))], "method", false, false, false, 11);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('wrapper', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        if ((array_key_exists("searchable", $context) &&  !($context["searchable"] ?? null))) {
            // line 29
            echo "<!-- indexer::continue -->
";
        }
        // line 31
        echo "
";
        // line 33
        $this->displayBlock('metadata', $context, $blocks);
        // line 34
        echo "
";
        // line 36
        $this->displayBlock('style', $context, $blocks);
        // line 37
        $this->displayBlock('script', $context, $blocks);
    }

    // line 15
    public function block_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        // line 17
        echo "    <";
        $this->displayBlock('wrapper_tag', $context, $blocks);
        $this->displayBlock('attributes', $context, $blocks);
        echo ">";
        // line 18
        $this->displayBlock('inner', $context, $blocks);
        // line 25
        echo "</";
        $this->displayBlock("wrapper_tag", $context, $blocks);
        echo ">
";
    }

    // line 17
    public function block_wrapper_tag($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "div";
    }

    public function block_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["attributes"] ?? null), "contao_html", null, true);
    }

    // line 18
    public function block_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["headline"] ?? null), "text", [], "any", false, false, false, 19)) {
            // line 20
            echo "                ";
            $this->displayBlock("headline_component", $context, $blocks);
            echo "
            ";
        }
        // line 22
        echo "
            ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "        ";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 33
    public function block_metadata($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 36
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 37
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Contao_ContaoCoreBundle/content_element/_base.html.twig";
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
        return array (  174 => 37,  168 => 36,  162 => 33,  156 => 23,  152 => 24,  150 => 23,  147 => 22,  141 => 20,  138 => 19,  134 => 18,  121 => 17,  114 => 25,  112 => 18,  107 => 17,  105 => 16,  101 => 15,  97 => 37,  95 => 36,  92 => 34,  90 => 33,  87 => 31,  83 => 29,  81 => 28,  78 => 27,  76 => 15,  73 => 14,  71 => 12,  70 => 11,  69 => 10,  68 => 9,  65 => 6,  62 => 4,  60 => 3,  57 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Contao_ContaoCoreBundle/content_element/_base.html.twig", "/var/www/html/vendor/contao/core-bundle/contao/templates/twig/content_element/_base.html.twig");
    }
}
