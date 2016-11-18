<?php

/* gesGfctBundle:Empresa:new.html.twig */
class __TwigTemplate_2b5d76f4e9d7bef117977940a66c831d2734b6e422fbdc4d370ff5d89a1124ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:Empresa:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6073f8812ba5dca9978b178c64dace006d26c580acb580cd236a7796b222667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6073f8812ba5dca9978b178c64dace006d26c580acb580cd236a7796b222667->enter($__internal_f6073f8812ba5dca9978b178c64dace006d26c580acb580cd236a7796b222667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Empresa:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6073f8812ba5dca9978b178c64dace006d26c580acb580cd236a7796b222667->leave($__internal_f6073f8812ba5dca9978b178c64dace006d26c580acb580cd236a7796b222667_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_26b2d5dd8de0a8dbd23d3bcb91e1f41b9a40178823472b44476168086943a455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b2d5dd8de0a8dbd23d3bcb91e1f41b9a40178823472b44476168086943a455->enter($__internal_26b2d5dd8de0a8dbd23d3bcb91e1f41b9a40178823472b44476168086943a455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Empresa:new.html.twig"));

        // line 3
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Panel de creación de empresa</div>
  <body>
    <div class=\"contenedor\">
    ";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form');
        echo "
    </div>
";
        
        $__internal_26b2d5dd8de0a8dbd23d3bcb91e1f41b9a40178823472b44476168086943a455->leave($__internal_26b2d5dd8de0a8dbd23d3bcb91e1f41b9a40178823472b44476168086943a455_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Empresa:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">Panel de creación de empresa</div>
  <body>
    <div class=\"contenedor\">
    {{form(formulario)}}
    </div>
{% endblock %}
", "gesGfctBundle:Empresa:new.html.twig", "C:\\xampp\\symfony\\Gfct2\\src\\gesGfctBundle/Resources/views/Empresa/new.html.twig");
    }
}
