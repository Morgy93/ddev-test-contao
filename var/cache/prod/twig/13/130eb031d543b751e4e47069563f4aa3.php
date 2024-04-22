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

/* @Contao_ContaoCoreBundle/component/_figure.html.twig */
class __TwigTemplate_5b9e42aa8f136572786f22e5bb4b832d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 30
        $_trait_0 = $this->loadTemplate("@Contao_ContaoCoreBundle/component/_picture.html.twig", "@Contao_ContaoCoreBundle/component/_figure.html.twig", 30);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@Contao_ContaoCoreBundle/component/_picture.html.twig".'" cannot be used as a trait.', 30, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'figure_component' => [$this, 'block_figure_component'],
                'media' => [$this, 'block_media'],
                'media_link' => [$this, 'block_media_link'],
                'caption' => [$this, 'block_caption'],
                'caption_inner' => [$this, 'block_caption_inner'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "
";
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('figure_component', $context, $blocks);
    }

    public function block_figure_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    ";
        $context["figure_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "mergeWith", [((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 34
($context["figure"] ?? null), "options", [], "any", false, true, false, 34), "attr", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 34), "attr", [], "any", false, false, false, 34))) : (""))], "method", false, false, false, 33), "mergeWith", [((        // line 35
array_key_exists("figure_attributes", $context)) ? (_twig_default_filter(($context["figure_attributes"] ?? null))) : (""))], "method", false, false, false, 34);
        // line 37
        echo "    <figure";
        echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["figure_attributes"] ?? null), "contao_html", null, true);
        echo ">
        ";
        // line 38
        if ( !((twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "linkHref", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "linkHref", [], "any", false, false, false, 38))) : (""))) {
            // line 39
            echo "            ";
            // line 40
            echo "            ";
            $this->displayBlock('media', $context, $blocks);
            // line 43
            echo "        ";
        } else {
            // line 44
            echo "            ";
            // line 45
            echo "            ";
            $this->displayBlock('media_link', $context, $blocks);
            // line 53
            echo "        ";
        }
        // line 54
        echo "
        ";
        // line 56
        echo "        ";
        $this->displayBlock('caption', $context, $blocks);
        // line 69
        echo "    </figure>
";
    }

    // line 40
    public function block_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                ";
        $this->displayBlock("picture_component", $context, $blocks);
        echo "
            ";
    }

    // line 45
    public function block_media_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                ";
        $context["link_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(((twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "linkAttributes", [true], "method", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "linkAttributes", [true], "method", false, false, false, 46))) : (""))), "setIfExists", ["title", (((twig_get_attribute($this->env, $this->source,         // line 47
($context["figure"] ?? null), "hasLightbox", [], "any", false, false, false, 47) && twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 47))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 47), "title", [], "any", false, false, false, 47)) : (null))], "method", false, false, false, 46), "mergeWith", [((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["figure"] ?? null), "options", [], "any", false, true, false, 48), "link_attr", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 48), "link_attr", [], "any", false, false, false, 48))) : (""))], "method", false, false, false, 47), "mergeWith", [((        // line 49
array_key_exists("link_attributes", $context)) ? (_twig_default_filter(($context["link_attributes"] ?? null))) : (""))], "method", false, false, false, 48);
        // line 51
        echo "                <a";
        echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["link_attributes"] ?? null), "contao_html", null, true);
        echo ">";
        $this->displayBlock("media", $context, $blocks);
        echo "</a>
            ";
    }

    // line 56
    public function block_caption($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 57) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 57), "caption", [], "any", false, false, false, 57))) {
            // line 58
            echo "                ";
            $context["caption_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "mergeWith", [((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 59
($context["figure"] ?? null), "options", [], "any", false, true, false, 59), "caption_attr", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 59), "caption_attr", [], "any", false, false, false, 59))) : (""))], "method", false, false, false, 58), "mergeWith", [((            // line 60
array_key_exists("caption_attributes", $context)) ? (_twig_default_filter(($context["caption_attributes"] ?? null))) : (""))], "method", false, false, false, 59);
            // line 62
            echo "                <figcaption";
            echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["caption_attributes"] ?? null), "contao_html", null, true);
            echo ">";
            // line 63
            $this->displayBlock('caption_inner', $context, $blocks);
            // line 66
            echo "</figcaption>
            ";
        }
        // line 68
        echo "        ";
    }

    // line 63
    public function block_caption_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 64
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 64), "caption", [], "any", false, false, false, 64);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Contao_ContaoCoreBundle/component/_figure.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  166 => 64,  162 => 63,  158 => 68,  154 => 66,  152 => 63,  148 => 62,  146 => 60,  145 => 59,  143 => 58,  140 => 57,  136 => 56,  127 => 51,  125 => 49,  124 => 48,  123 => 47,  121 => 46,  117 => 45,  110 => 41,  106 => 40,  101 => 69,  98 => 56,  95 => 54,  92 => 53,  89 => 45,  87 => 44,  84 => 43,  81 => 40,  79 => 39,  77 => 38,  72 => 37,  70 => 35,  69 => 34,  67 => 33,  60 => 32,  57 => 31,  54 => 29,  30 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Contao_ContaoCoreBundle/component/_figure.html.twig", "/var/www/html/vendor/contao/core-bundle/contao/templates/twig/component/_figure.html.twig");
    }
}
