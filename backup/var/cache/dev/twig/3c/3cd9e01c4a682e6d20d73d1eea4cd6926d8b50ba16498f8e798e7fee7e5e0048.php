<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f687b5fcf22f9b48b5308e17dd36d7c6eb8891c77d0fb80dfa2aec43da424943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f687b5fcf22f9b48b5308e17dd36d7c6eb8891c77d0fb80dfa2aec43da424943->enter($__internal_f687b5fcf22f9b48b5308e17dd36d7c6eb8891c77d0fb80dfa2aec43da424943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a05718e799e5ae0e4a7a92ebc5896e00cf85de325cea926dbf5600eaa1189096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05718e799e5ae0e4a7a92ebc5896e00cf85de325cea926dbf5600eaa1189096->enter($__internal_a05718e799e5ae0e4a7a92ebc5896e00cf85de325cea926dbf5600eaa1189096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f687b5fcf22f9b48b5308e17dd36d7c6eb8891c77d0fb80dfa2aec43da424943->leave($__internal_f687b5fcf22f9b48b5308e17dd36d7c6eb8891c77d0fb80dfa2aec43da424943_prof);

        
        $__internal_a05718e799e5ae0e4a7a92ebc5896e00cf85de325cea926dbf5600eaa1189096->leave($__internal_a05718e799e5ae0e4a7a92ebc5896e00cf85de325cea926dbf5600eaa1189096_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_92b8f33cb8f9ea95a1589221e2dc151549308090e9863aa30faa5d63a2e3c4c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b8f33cb8f9ea95a1589221e2dc151549308090e9863aa30faa5d63a2e3c4c5->enter($__internal_92b8f33cb8f9ea95a1589221e2dc151549308090e9863aa30faa5d63a2e3c4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ea073b0735961dadcd7f1a8899ba3e1d5edf7b9074a2011c1e57e95ad09e3ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea073b0735961dadcd7f1a8899ba3e1d5edf7b9074a2011c1e57e95ad09e3ddd->enter($__internal_ea073b0735961dadcd7f1a8899ba3e1d5edf7b9074a2011c1e57e95ad09e3ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ea073b0735961dadcd7f1a8899ba3e1d5edf7b9074a2011c1e57e95ad09e3ddd->leave($__internal_ea073b0735961dadcd7f1a8899ba3e1d5edf7b9074a2011c1e57e95ad09e3ddd_prof);

        
        $__internal_92b8f33cb8f9ea95a1589221e2dc151549308090e9863aa30faa5d63a2e3c4c5->leave($__internal_92b8f33cb8f9ea95a1589221e2dc151549308090e9863aa30faa5d63a2e3c4c5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fe4405756727ee3d02e292492dbe3c1ae4e27c786b278c4038a671070e302fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fe4405756727ee3d02e292492dbe3c1ae4e27c786b278c4038a671070e302fe->enter($__internal_1fe4405756727ee3d02e292492dbe3c1ae4e27c786b278c4038a671070e302fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6336869a2155361cd89495ef598f4ca076b9644e84d9b64b056956829b06b5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6336869a2155361cd89495ef598f4ca076b9644e84d9b64b056956829b06b5e4->enter($__internal_6336869a2155361cd89495ef598f4ca076b9644e84d9b64b056956829b06b5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6336869a2155361cd89495ef598f4ca076b9644e84d9b64b056956829b06b5e4->leave($__internal_6336869a2155361cd89495ef598f4ca076b9644e84d9b64b056956829b06b5e4_prof);

        
        $__internal_1fe4405756727ee3d02e292492dbe3c1ae4e27c786b278c4038a671070e302fe->leave($__internal_1fe4405756727ee3d02e292492dbe3c1ae4e27c786b278c4038a671070e302fe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_891b99177634409c307e7aa41ed16fac6508609fb1f3e8c131e6c67bf17b4f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891b99177634409c307e7aa41ed16fac6508609fb1f3e8c131e6c67bf17b4f4f->enter($__internal_891b99177634409c307e7aa41ed16fac6508609fb1f3e8c131e6c67bf17b4f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f54902beef5d5f01058bd027edea92b5ecb5bd8a96516ac6683d4dc9b1bdae21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54902beef5d5f01058bd027edea92b5ecb5bd8a96516ac6683d4dc9b1bdae21->enter($__internal_f54902beef5d5f01058bd027edea92b5ecb5bd8a96516ac6683d4dc9b1bdae21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f54902beef5d5f01058bd027edea92b5ecb5bd8a96516ac6683d4dc9b1bdae21->leave($__internal_f54902beef5d5f01058bd027edea92b5ecb5bd8a96516ac6683d4dc9b1bdae21_prof);

        
        $__internal_891b99177634409c307e7aa41ed16fac6508609fb1f3e8c131e6c67bf17b4f4f->leave($__internal_891b99177634409c307e7aa41ed16fac6508609fb1f3e8c131e6c67bf17b4f4f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/murapol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
