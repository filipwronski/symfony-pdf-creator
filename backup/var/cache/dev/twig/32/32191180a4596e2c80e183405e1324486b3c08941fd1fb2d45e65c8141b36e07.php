<?php

/* pages/business.html.twig */
class __TwigTemplate_829b969581cb3e0c7a8ad916b4be3547b8dcba002988dbbd7b94ddd5b5968e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/business.html.twig", 1);
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
        $__internal_2d114a8f45519369133d47e3bf019fdefe0a91f812f76ff363c16e30e6f323aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d114a8f45519369133d47e3bf019fdefe0a91f812f76ff363c16e30e6f323aa->enter($__internal_2d114a8f45519369133d47e3bf019fdefe0a91f812f76ff363c16e30e6f323aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/business.html.twig"));

        $__internal_5b8b8855c817fb01186cd78811c402415aef9d824a3161f0969460aed258acf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8b8855c817fb01186cd78811c402415aef9d824a3161f0969460aed258acf4->enter($__internal_5b8b8855c817fb01186cd78811c402415aef9d824a3161f0969460aed258acf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/business.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d114a8f45519369133d47e3bf019fdefe0a91f812f76ff363c16e30e6f323aa->leave($__internal_2d114a8f45519369133d47e3bf019fdefe0a91f812f76ff363c16e30e6f323aa_prof);

        
        $__internal_5b8b8855c817fb01186cd78811c402415aef9d824a3161f0969460aed258acf4->leave($__internal_5b8b8855c817fb01186cd78811c402415aef9d824a3161f0969460aed258acf4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a13f810c94394d1b5e065d4f019e144d70a2a599b20fe47db76468b1237c50aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13f810c94394d1b5e065d4f019e144d70a2a599b20fe47db76468b1237c50aa->enter($__internal_a13f810c94394d1b5e065d4f019e144d70a2a599b20fe47db76468b1237c50aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72bf7172f08b196f1665ee450d6dc3d743116f734e73f6fd8e756173ebecccf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72bf7172f08b196f1665ee450d6dc3d743116f734e73f6fd8e756173ebecccf0->enter($__internal_72bf7172f08b196f1665ee450d6dc3d743116f734e73f6fd8e756173ebecccf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  <div class=\"grid\">
    <div class=\"col-6\">
      ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label');
        echo "
      ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
      ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    </div>
    <div class=\"col-6\">
      ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'label');
        echo "
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'errors');
        echo "
      ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "surname", array()), 'widget');
        echo "
    </div>
  </div>
  ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
  ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  ";
        // line 19
        if (($context["fileurl"] ?? $this->getContext($context, "fileurl"))) {
            // line 20
            echo "    <a href=\"/";
            echo twig_escape_filter($this->env, ($context["fileurl"] ?? $this->getContext($context, "fileurl")), "html", null, true);
            echo "\" class=\"button-fill\">Plik</a>
  ";
        }
        // line 22
        echo "
";
        
        $__internal_72bf7172f08b196f1665ee450d6dc3d743116f734e73f6fd8e756173ebecccf0->leave($__internal_72bf7172f08b196f1665ee450d6dc3d743116f734e73f6fd8e756173ebecccf0_prof);

        
        $__internal_a13f810c94394d1b5e065d4f019e144d70a2a599b20fe47db76468b1237c50aa->leave($__internal_a13f810c94394d1b5e065d4f019e144d70a2a599b20fe47db76468b1237c50aa_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_770f335a35f25ccf0e9b68f76955773493c69112bfbe5cd127f7c84c18de7e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770f335a35f25ccf0e9b68f76955773493c69112bfbe5cd127f7c84c18de7e34->enter($__internal_770f335a35f25ccf0e9b68f76955773493c69112bfbe5cd127f7c84c18de7e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c13f8176c8e1e0be80d72b88be84a475e23280b70b396668873e31dcb2f933c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13f8176c8e1e0be80d72b88be84a475e23280b70b396668873e31dcb2f933c4->enter($__internal_c13f8176c8e1e0be80d72b88be84a475e23280b70b396668873e31dcb2f933c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "

";
        
        $__internal_c13f8176c8e1e0be80d72b88be84a475e23280b70b396668873e31dcb2f933c4->leave($__internal_c13f8176c8e1e0be80d72b88be84a475e23280b70b396668873e31dcb2f933c4_prof);

        
        $__internal_770f335a35f25ccf0e9b68f76955773493c69112bfbe5cd127f7c84c18de7e34->leave($__internal_770f335a35f25ccf0e9b68f76955773493c69112bfbe5cd127f7c84c18de7e34_prof);

    }

    public function getTemplateName()
    {
        return "pages/business.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 26,  112 => 25,  101 => 22,  95 => 20,  93 => 19,  89 => 18,  85 => 17,  79 => 14,  75 => 13,  71 => 12,  65 => 9,  61 => 8,  57 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
  {{ form_start(form) }}
  <div class=\"grid\">
    <div class=\"col-6\">
      {{ form_label(form.name) }}
      {{ form_errors(form.name) }}
      {{ form_widget(form.name) }}
    </div>
    <div class=\"col-6\">
      {{ form_label(form.surname) }}
      {{ form_errors(form.surname) }}
      {{ form_widget(form.surname) }}
    </div>
  </div>
  {{ form_widget(form.save) }}
  {{ form_end(form) }}
  {% if fileurl %}
    <a href=\"/{{fileurl}}\" class=\"button-fill\">Plik</a>
  {% endif %}

{% endblock %}

{% block stylesheets %}


{% endblock %}
", "pages/business.html.twig", "/var/www/html/murapol/app/Resources/views/pages/business.html.twig");
    }
}
