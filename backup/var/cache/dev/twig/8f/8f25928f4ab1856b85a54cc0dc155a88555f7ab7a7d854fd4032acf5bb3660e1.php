<?php

/* pages/index.html.twig */
class __TwigTemplate_8726d75acae0b211f07eb72636c8cbbfc75bb8ce31da0cdda09d4265b9f20e8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a4194180bc8875cb0b8898dfe3390deb4ad8a74fbcc2ceb827d6e7a7493926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a4194180bc8875cb0b8898dfe3390deb4ad8a74fbcc2ceb827d6e7a7493926->enter($__internal_60a4194180bc8875cb0b8898dfe3390deb4ad8a74fbcc2ceb827d6e7a7493926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $__internal_4fc949969f191becaef47c5e637b436094344aa3e6507163df4cf45eb095cb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc949969f191becaef47c5e637b436094344aa3e6507163df4cf45eb095cb35->enter($__internal_4fc949969f191becaef47c5e637b436094344aa3e6507163df4cf45eb095cb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a4194180bc8875cb0b8898dfe3390deb4ad8a74fbcc2ceb827d6e7a7493926->leave($__internal_60a4194180bc8875cb0b8898dfe3390deb4ad8a74fbcc2ceb827d6e7a7493926_prof);

        
        $__internal_4fc949969f191becaef47c5e637b436094344aa3e6507163df4cf45eb095cb35->leave($__internal_4fc949969f191becaef47c5e637b436094344aa3e6507163df4cf45eb095cb35_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a369de3b8168f3f87d26f88ae925912d599bd72bfafe6057d3e44dc5caf443c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a369de3b8168f3f87d26f88ae925912d599bd72bfafe6057d3e44dc5caf443c->enter($__internal_6a369de3b8168f3f87d26f88ae925912d599bd72bfafe6057d3e44dc5caf443c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef2b14d58f007a4c5b97b336d5b1f46ec299a86d3084fa482ac7e25b5ff276ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2b14d58f007a4c5b97b336d5b1f46ec299a86d3084fa482ac7e25b5ff276ae->enter($__internal_ef2b14d58f007a4c5b97b336d5b1f46ec299a86d3084fa482ac7e25b5ff276ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<section class=\"grid\">
  <div class=\"col-12\">
    <h1 class=\"title\">
      Tytuł
    </h1>
  </div>
  <div class=\"col-6\">
    <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("individual");
        echo "\" class=\"client-button client-button--individual\">Klient Indywidualny</a>
  </div>
  <div class=\"col-6\">
    <a  href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("business");
        echo "\" class=\"client-button client-button--business\">Klient Biznesowy</a>
  </div>
</section>
";
        
        $__internal_ef2b14d58f007a4c5b97b336d5b1f46ec299a86d3084fa482ac7e25b5ff276ae->leave($__internal_ef2b14d58f007a4c5b97b336d5b1f46ec299a86d3084fa482ac7e25b5ff276ae_prof);

        
        $__internal_6a369de3b8168f3f87d26f88ae925912d599bd72bfafe6057d3e44dc5caf443c->leave($__internal_6a369de3b8168f3f87d26f88ae925912d599bd72bfafe6057d3e44dc5caf443c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_61e5c46756c08e47ee25a1e86530077a1f24f6a23f34ec261c572763da8daddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e5c46756c08e47ee25a1e86530077a1f24f6a23f34ec261c572763da8daddc->enter($__internal_61e5c46756c08e47ee25a1e86530077a1f24f6a23f34ec261c572763da8daddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7e8cffe76c85300f10006792997bb95166ba5659cf098b5a9aebced482c983b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8cffe76c85300f10006792997bb95166ba5659cf098b5a9aebced482c983b6->enter($__internal_7e8cffe76c85300f10006792997bb95166ba5659cf098b5a9aebced482c983b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "

";
        
        $__internal_7e8cffe76c85300f10006792997bb95166ba5659cf098b5a9aebced482c983b6->leave($__internal_7e8cffe76c85300f10006792997bb95166ba5659cf098b5a9aebced482c983b6_prof);

        
        $__internal_61e5c46756c08e47ee25a1e86530077a1f24f6a23f34ec261c572763da8daddc->leave($__internal_61e5c46756c08e47ee25a1e86530077a1f24f6a23f34ec261c572763da8daddc_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 20,  79 => 19,  65 => 14,  59 => 11,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<section class=\"grid\">
  <div class=\"col-12\">
    <h1 class=\"title\">
      Tytuł
    </h1>
  </div>
  <div class=\"col-6\">
    <a href=\"{{ path('individual') }}\" class=\"client-button client-button--individual\">Klient Indywidualny</a>
  </div>
  <div class=\"col-6\">
    <a  href=\"{{ path('business') }}\" class=\"client-button client-button--business\">Klient Biznesowy</a>
  </div>
</section>
{% endblock %}

{% block stylesheets %}


{% endblock %}
", "pages/index.html.twig", "/var/www/html/murapol/app/Resources/views/pages/index.html.twig");
    }
}
