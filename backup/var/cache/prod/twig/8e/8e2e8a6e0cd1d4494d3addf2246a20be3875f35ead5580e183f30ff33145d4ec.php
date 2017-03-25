<?php

/* :pages:index.html.twig */
class __TwigTemplate_e8703b5f1537ac93631d7dfe2c76fc1ce69dc2d108fb86746ae59e1a37f3e525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pages:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "

";
    }

    public function getTemplateName()
    {
        return ":pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 19,  47 => 14,  41 => 11,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":pages:index.html.twig", "/var/www/html/murapol/app/Resources/views/pages/index.html.twig");
    }
}
