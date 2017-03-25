<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8ca20e184b2bc8a1e2f9f3f544baad32883b34b65b24cebc7d34c21a51e6c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ca20e184b2bc8a1e2f9f3f544baad32883b34b65b24cebc7d34c21a51e6c61->enter($__internal_c8ca20e184b2bc8a1e2f9f3f544baad32883b34b65b24cebc7d34c21a51e6c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_24bf6acfd55b2d7e3d1fb673d039ae4632b4d67ac738efd5db85b73632f5bc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24bf6acfd55b2d7e3d1fb673d039ae4632b4d67ac738efd5db85b73632f5bc6d->enter($__internal_24bf6acfd55b2d7e3d1fb673d039ae4632b4d67ac738efd5db85b73632f5bc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app/css/styles.css"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_c8ca20e184b2bc8a1e2f9f3f544baad32883b34b65b24cebc7d34c21a51e6c61->leave($__internal_c8ca20e184b2bc8a1e2f9f3f544baad32883b34b65b24cebc7d34c21a51e6c61_prof);

        
        $__internal_24bf6acfd55b2d7e3d1fb673d039ae4632b4d67ac738efd5db85b73632f5bc6d->leave($__internal_24bf6acfd55b2d7e3d1fb673d039ae4632b4d67ac738efd5db85b73632f5bc6d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d3f17a65812a9305cfa0f961b6cb7135393789ee841c1a53d571a378c5bef75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3f17a65812a9305cfa0f961b6cb7135393789ee841c1a53d571a378c5bef75->enter($__internal_8d3f17a65812a9305cfa0f961b6cb7135393789ee841c1a53d571a378c5bef75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9c550736eabba864e95ec3549e02cb24822efe05620881876d8a7b08b7db431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c550736eabba864e95ec3549e02cb24822efe05620881876d8a7b08b7db431->enter($__internal_c9c550736eabba864e95ec3549e02cb24822efe05620881876d8a7b08b7db431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c9c550736eabba864e95ec3549e02cb24822efe05620881876d8a7b08b7db431->leave($__internal_c9c550736eabba864e95ec3549e02cb24822efe05620881876d8a7b08b7db431_prof);

        
        $__internal_8d3f17a65812a9305cfa0f961b6cb7135393789ee841c1a53d571a378c5bef75->leave($__internal_8d3f17a65812a9305cfa0f961b6cb7135393789ee841c1a53d571a378c5bef75_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_511be8582b4ce04ed6a69bea9e765970e195e4249e03e68ecd441c17d2d49d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511be8582b4ce04ed6a69bea9e765970e195e4249e03e68ecd441c17d2d49d9e->enter($__internal_511be8582b4ce04ed6a69bea9e765970e195e4249e03e68ecd441c17d2d49d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5a1c2f970cdd474933ac0bd4359bd9c12a2f412dc54beedd182b050f29ee7bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1c2f970cdd474933ac0bd4359bd9c12a2f412dc54beedd182b050f29ee7bb1->enter($__internal_5a1c2f970cdd474933ac0bd4359bd9c12a2f412dc54beedd182b050f29ee7bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a1c2f970cdd474933ac0bd4359bd9c12a2f412dc54beedd182b050f29ee7bb1->leave($__internal_5a1c2f970cdd474933ac0bd4359bd9c12a2f412dc54beedd182b050f29ee7bb1_prof);

        
        $__internal_511be8582b4ce04ed6a69bea9e765970e195e4249e03e68ecd441c17d2d49d9e->leave($__internal_511be8582b4ce04ed6a69bea9e765970e195e4249e03e68ecd441c17d2d49d9e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fb83ede1ee77637fa8e62346da312a1af3a6b23cc8148fbd1c56f836fd500e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb83ede1ee77637fa8e62346da312a1af3a6b23cc8148fbd1c56f836fd500e4->enter($__internal_1fb83ede1ee77637fa8e62346da312a1af3a6b23cc8148fbd1c56f836fd500e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf4a8dac36b4afd4e99b06cbb38609bb2a8800737662fe3531d9bd4bc0a72269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4a8dac36b4afd4e99b06cbb38609bb2a8800737662fe3531d9bd4bc0a72269->enter($__internal_cf4a8dac36b4afd4e99b06cbb38609bb2a8800737662fe3531d9bd4bc0a72269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf4a8dac36b4afd4e99b06cbb38609bb2a8800737662fe3531d9bd4bc0a72269->leave($__internal_cf4a8dac36b4afd4e99b06cbb38609bb2a8800737662fe3531d9bd4bc0a72269_prof);

        
        $__internal_1fb83ede1ee77637fa8e62346da312a1af3a6b23cc8148fbd1c56f836fd500e4->leave($__internal_1fb83ede1ee77637fa8e62346da312a1af3a6b23cc8148fbd1c56f836fd500e4_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ce7dff378364f3fb40dd0da3e37566d58e766a9ead4f00991328eafd3733f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce7dff378364f3fb40dd0da3e37566d58e766a9ead4f00991328eafd3733f7e->enter($__internal_4ce7dff378364f3fb40dd0da3e37566d58e766a9ead4f00991328eafd3733f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_044d6b25f46e02b6d5c3f88e0ca2a5e5ed95dda19540691a0c7bee0f56e01a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044d6b25f46e02b6d5c3f88e0ca2a5e5ed95dda19540691a0c7bee0f56e01a68->enter($__internal_044d6b25f46e02b6d5c3f88e0ca2a5e5ed95dda19540691a0c7bee0f56e01a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_044d6b25f46e02b6d5c3f88e0ca2a5e5ed95dda19540691a0c7bee0f56e01a68->leave($__internal_044d6b25f46e02b6d5c3f88e0ca2a5e5ed95dda19540691a0c7bee0f56e01a68_prof);

        
        $__internal_4ce7dff378364f3fb40dd0da3e37566d58e766a9ead4f00991328eafd3733f7e->leave($__internal_4ce7dff378364f3fb40dd0da3e37566d58e766a9ead4f00991328eafd3733f7e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 12,  104 => 11,  87 => 6,  69 => 5,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" href=\"{{ asset('app/css/styles.css') }}\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/murapol/app/Resources/views/base.html.twig");
    }
}
