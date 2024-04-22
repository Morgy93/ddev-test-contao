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

/* @Contao_ContaoCoreBundle/component/_picture.html.twig */
class __TwigTemplate_07ac96c846e67054ab9df96d73026d8c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'picture_component' => [$this, 'block_picture_component'],
            'image' => [$this, 'block_image'],
            'sources' => [$this, 'block_sources'],
            'source' => [$this, 'block_source'],
            'schema_org' => [$this, 'block_schema_org'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('picture_component', $context, $blocks);
    }

    public function block_picture_component($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 26), "sources", [], "any", false, false, false, 26)) {
            // line 27
            echo "        ";
            // line 28
            echo "        ";
            $this->displayBlock('image', $context, $blocks);
            // line 46
            echo "    ";
        } else {
            // line 47
            echo "        ";
            // line 48
            echo "        ";
            $context["picture_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "mergeWith", [((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 49
($context["figure"] ?? null), "options", [], "any", false, true, false, 49), "picture_attr", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 49), "picture_attr", [], "any", false, false, false, 49))) : (""))], "method", false, false, false, 48), "mergeWith", [((            // line 50
array_key_exists("picture_attributes", $context)) ? (_twig_default_filter(($context["picture_attributes"] ?? null))) : (""))], "method", false, false, false, 49);
            // line 52
            echo "        <picture";
            echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["picture_attributes"] ?? null), "contao_html", null, true);
            echo ">
            ";
            // line 53
            $this->displayBlock('sources', $context, $blocks);
            // line 71
            echo "
            ";
            // line 72
            $this->displayBlock("image", $context, $blocks);
            echo "
        </picture>
    ";
        }
        // line 75
        echo "
    ";
        // line 77
        echo "    ";
        $this->displayBlock('schema_org', $context, $blocks);
    }

    // line 28
    public function block_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "            ";
        $context["img"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 29), "img", [], "any", false, false, false, 29);
        // line 30
        echo "            ";
        $context["defineProportions"] = (((twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", false, false, false, 30), false)) : (false)) && ((twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", false, false, false, 30), false)) : (false)));
        // line 31
        echo "            ";
        $context["img_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "set", ["src", twig_get_attribute($this->env, $this->source,         // line 32
($context["img"] ?? null), "src", [], "any", false, false, false, 32)], "method", false, false, false, 31), "set", ["alt", ((twig_get_attribute($this->env, $this->source,         // line 33
($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 33)) ? ($this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTags($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 33), "alt", [], "any", false, false, false, 33))) : (""))], "method", false, false, false, 32), "setIfExists", ["title", ((twig_get_attribute($this->env, $this->source,         // line 34
($context["figure"] ?? null), "hasMetadata", [], "any", false, false, false, 34)) ? ($this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\InsertTagRuntime')->replaceInsertTags($context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "metadata", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34))) : (null))], "method", false, false, false, 33), "setIfExists", ["srcset", (((twig_get_attribute($this->env, $this->source,         // line 35
($context["img"] ?? null), "srcset", [], "any", true, true, false, 35) && (twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "srcset", [], "any", false, false, false, 35) != twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "src", [], "any", false, false, false, 35)))) ? (twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "srcset", [], "any", false, false, false, 35)) : (null))], "method", false, false, false, 34), "setIfExists", ["sizes", ((twig_get_attribute($this->env, $this->source,         // line 36
($context["img"] ?? null), "sizes", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "sizes", [], "any", false, false, false, 36))) : (""))], "method", false, false, false, 35), "setIfExists", ["width", ((        // line 37
($context["defineProportions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "width", [], "any", false, false, false, 37)) : (null))], "method", false, false, false, 36), "setIfExists", ["height", ((        // line 38
($context["defineProportions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "height", [], "any", false, false, false, 38)) : (null))], "method", false, false, false, 37), "setIfExists", ["loading", ((twig_get_attribute($this->env, $this->source,         // line 39
($context["img"] ?? null), "loading", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "loading", [], "any", false, false, false, 39))) : (""))], "method", false, false, false, 38), "addClass", [((twig_get_attribute($this->env, $this->source,         // line 40
($context["img"] ?? null), "class", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), "class", [], "any", false, false, false, 40))) : (""))], "method", false, false, false, 39), "mergeWith", [((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["figure"] ?? null), "options", [], "any", false, true, false, 41), "img_attr", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 41), "img_attr", [], "any", false, false, false, 41))) : (""))], "method", false, false, false, 40), "mergeWith", [((        // line 42
array_key_exists("img_attributes", $context)) ? (_twig_default_filter(($context["img_attributes"] ?? null))) : (""))], "method", false, false, false, 41);
        // line 44
        echo "            <img";
        echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["img_attributes"] ?? null), "contao_html", null, true);
        echo ">
        ";
    }

    // line 53
    public function block_sources($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "image", [], "any", false, false, false, 54), "sources", [], "any", false, false, false, 54));
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
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 55
            echo "                    ";
            $this->displayBlock('source', $context, $blocks);
            // line 69
            echo "                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            ";
    }

    // line 55
    public function block_source($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                        ";
        $context["defineProportions"] = (((twig_get_attribute($this->env, $this->source, ($context["source"] ?? null), "width", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["source"] ?? null), "width", [], "any", false, false, false, 56), false)) : (false)) && ((twig_get_attribute($this->env, $this->source, ($context["source"] ?? null), "height", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["source"] ?? null), "height", [], "any", false, false, false, 56), false)) : (false)));
        // line 57
        echo "                        ";
        $context["source_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $this->env->getFunction('attrs')->getCallable()(), "set", ["srcset", twig_get_attribute($this->env, $this->source,         // line 58
($context["source"] ?? null), "srcset", [], "any", false, false, false, 58)], "method", false, false, false, 57), "setIfExists", ["sizes", ((twig_get_attribute($this->env, $this->source,         // line 59
($context["source"] ?? null), "sizes", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["source"] ?? null), "sizes", [], "any", false, false, false, 59))) : (""))], "method", false, false, false, 58), "setIfExists", ["media", ((twig_get_attribute($this->env, $this->source,         // line 60
($context["source"] ?? null), "media", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["source"] ?? null), "media", [], "any", false, false, false, 60))) : (""))], "method", false, false, false, 59), "setIfExists", ["type", ((twig_get_attribute($this->env, $this->source,         // line 61
($context["source"] ?? null), "type", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["source"] ?? null), "type", [], "any", false, false, false, 61))) : (""))], "method", false, false, false, 60), "setIfExists", ["width", ((        // line 62
($context["defineProportions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["source"] ?? null), "width", [], "any", false, false, false, 62)) : (null))], "method", false, false, false, 61), "setIfExists", ["height", ((        // line 63
($context["defineProportions"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["source"] ?? null), "height", [], "any", false, false, false, 63)) : (null))], "method", false, false, false, 62), "mergeWith", [((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 64
($context["figure"] ?? null), "options", [], "any", false, true, false, 64), "picture_attr", [], "any", true, true, false, 64)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "options", [], "any", false, true, false, 64), "picture_attr", [], "any", false, false, false, 64))) : (""))], "method", false, false, false, 63), "mergeWith", [((        // line 65
array_key_exists("source_attributes", $context)) ? (_twig_default_filter(($context["source_attributes"] ?? null))) : (""))], "method", false, false, false, 64);
        // line 67
        echo "                        <source";
        echo $this->env->getFilter('escape')->getCallable()($this->env, ($context["source_attributes"] ?? null), "contao_html", null, true);
        echo ">
                    ";
    }

    // line 77
    public function block_schema_org($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "schemaOrgData", [], "any", true, true, false, 78)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "schemaOrgData", [], "any", false, false, false, 78), false)) : (false))) {
            // line 79
            echo "            ";
            $this->env->getRuntime('Contao\CoreBundle\Twig\Runtime\SchemaOrgRuntime')->add(twig_get_attribute($this->env, $this->source, ($context["figure"] ?? null), "schemaOrgData", [], "any", false, false, false, 79));
            // line 80
            echo "        ";
        }
        // line 81
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Contao_ContaoCoreBundle/component/_picture.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  206 => 81,  203 => 80,  200 => 79,  197 => 78,  193 => 77,  186 => 67,  184 => 65,  183 => 64,  182 => 63,  181 => 62,  180 => 61,  179 => 60,  178 => 59,  177 => 58,  175 => 57,  172 => 56,  168 => 55,  164 => 70,  150 => 69,  147 => 55,  129 => 54,  125 => 53,  118 => 44,  116 => 42,  115 => 41,  114 => 40,  113 => 39,  112 => 38,  111 => 37,  110 => 36,  109 => 35,  108 => 34,  107 => 33,  106 => 32,  104 => 31,  101 => 30,  98 => 29,  94 => 28,  89 => 77,  86 => 75,  80 => 72,  77 => 71,  75 => 53,  70 => 52,  68 => 50,  67 => 49,  65 => 48,  63 => 47,  60 => 46,  57 => 28,  55 => 27,  52 => 26,  45 => 25,  42 => 24,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Contao_ContaoCoreBundle/component/_picture.html.twig", "/var/www/html/vendor/contao/core-bundle/contao/templates/twig/component/_picture.html.twig");
    }
}
