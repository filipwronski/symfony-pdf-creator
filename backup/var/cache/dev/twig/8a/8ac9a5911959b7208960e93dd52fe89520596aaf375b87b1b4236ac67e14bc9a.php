<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb8f878379f248b011d174b580947d969957e5c2cd4899074a24fe871c473663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8f878379f248b011d174b580947d969957e5c2cd4899074a24fe871c473663->enter($__internal_eb8f878379f248b011d174b580947d969957e5c2cd4899074a24fe871c473663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c4ab593656788c29924d7299b1f5af066ef62cc8ee8cac2ce70ad151022bcbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ab593656788c29924d7299b1f5af066ef62cc8ee8cac2ce70ad151022bcbcf->enter($__internal_c4ab593656788c29924d7299b1f5af066ef62cc8ee8cac2ce70ad151022bcbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb8f878379f248b011d174b580947d969957e5c2cd4899074a24fe871c473663->leave($__internal_eb8f878379f248b011d174b580947d969957e5c2cd4899074a24fe871c473663_prof);

        
        $__internal_c4ab593656788c29924d7299b1f5af066ef62cc8ee8cac2ce70ad151022bcbcf->leave($__internal_c4ab593656788c29924d7299b1f5af066ef62cc8ee8cac2ce70ad151022bcbcf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de68d6187b64ae8553b393976935091056d7feae6f4244e72779c2ba2cb49fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de68d6187b64ae8553b393976935091056d7feae6f4244e72779c2ba2cb49fd7->enter($__internal_de68d6187b64ae8553b393976935091056d7feae6f4244e72779c2ba2cb49fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_abdd4fc8d135cf7cc250aaf7811696a2dd331d30c479480c4cab1b16f190b3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdd4fc8d135cf7cc250aaf7811696a2dd331d30c479480c4cab1b16f190b3a9->enter($__internal_abdd4fc8d135cf7cc250aaf7811696a2dd331d30c479480c4cab1b16f190b3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_abdd4fc8d135cf7cc250aaf7811696a2dd331d30c479480c4cab1b16f190b3a9->leave($__internal_abdd4fc8d135cf7cc250aaf7811696a2dd331d30c479480c4cab1b16f190b3a9_prof);

        
        $__internal_de68d6187b64ae8553b393976935091056d7feae6f4244e72779c2ba2cb49fd7->leave($__internal_de68d6187b64ae8553b393976935091056d7feae6f4244e72779c2ba2cb49fd7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_848c75eb5d9de3976f2f69118f4021e8bf464d2551bb64a4d2923efcfa136dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848c75eb5d9de3976f2f69118f4021e8bf464d2551bb64a4d2923efcfa136dcc->enter($__internal_848c75eb5d9de3976f2f69118f4021e8bf464d2551bb64a4d2923efcfa136dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb69922df602302f88d7d99ad955b343d27f094a011c8ed1134ed5435f40eea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb69922df602302f88d7d99ad955b343d27f094a011c8ed1134ed5435f40eea3->enter($__internal_eb69922df602302f88d7d99ad955b343d27f094a011c8ed1134ed5435f40eea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_eb69922df602302f88d7d99ad955b343d27f094a011c8ed1134ed5435f40eea3->leave($__internal_eb69922df602302f88d7d99ad955b343d27f094a011c8ed1134ed5435f40eea3_prof);

        
        $__internal_848c75eb5d9de3976f2f69118f4021e8bf464d2551bb64a4d2923efcfa136dcc->leave($__internal_848c75eb5d9de3976f2f69118f4021e8bf464d2551bb64a4d2923efcfa136dcc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3b5165d8e5c60baf8408b48921f3c8527e7688186edd16ed1f14ebf3f047233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b5165d8e5c60baf8408b48921f3c8527e7688186edd16ed1f14ebf3f047233->enter($__internal_f3b5165d8e5c60baf8408b48921f3c8527e7688186edd16ed1f14ebf3f047233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d1fbaa7b24edd3cf55f4637ad930be8bf2e6718bd9055806ccaa2541d7d31e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1fbaa7b24edd3cf55f4637ad930be8bf2e6718bd9055806ccaa2541d7d31e7->enter($__internal_3d1fbaa7b24edd3cf55f4637ad930be8bf2e6718bd9055806ccaa2541d7d31e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3d1fbaa7b24edd3cf55f4637ad930be8bf2e6718bd9055806ccaa2541d7d31e7->leave($__internal_3d1fbaa7b24edd3cf55f4637ad930be8bf2e6718bd9055806ccaa2541d7d31e7_prof);

        
        $__internal_f3b5165d8e5c60baf8408b48921f3c8527e7688186edd16ed1f14ebf3f047233->leave($__internal_f3b5165d8e5c60baf8408b48921f3c8527e7688186edd16ed1f14ebf3f047233_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/murapol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
