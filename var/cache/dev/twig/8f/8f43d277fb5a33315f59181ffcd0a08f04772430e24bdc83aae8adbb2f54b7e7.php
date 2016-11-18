<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0188b57dce673c67d60f6c09d46c2b9f6dbbafbc8ba78226f80354fce2e6994 extends Twig_Template
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
        $__internal_9031889d2649f0b5e6d41b220ea7362a09694a3ad6697fb7ca18cb4f41b731c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9031889d2649f0b5e6d41b220ea7362a09694a3ad6697fb7ca18cb4f41b731c2->enter($__internal_9031889d2649f0b5e6d41b220ea7362a09694a3ad6697fb7ca18cb4f41b731c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9031889d2649f0b5e6d41b220ea7362a09694a3ad6697fb7ca18cb4f41b731c2->leave($__internal_9031889d2649f0b5e6d41b220ea7362a09694a3ad6697fb7ca18cb4f41b731c2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2fedf52fe73d921059aae0754fafc6f271b73b68915463f5ee20151e9f6d4a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fedf52fe73d921059aae0754fafc6f271b73b68915463f5ee20151e9f6d4a91->enter($__internal_2fedf52fe73d921059aae0754fafc6f271b73b68915463f5ee20151e9f6d4a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_2fedf52fe73d921059aae0754fafc6f271b73b68915463f5ee20151e9f6d4a91->leave($__internal_2fedf52fe73d921059aae0754fafc6f271b73b68915463f5ee20151e9f6d4a91_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0abb1b6087b12397369e06e4ea89f88e9aef20f48a4464947f572c5a238e137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0abb1b6087b12397369e06e4ea89f88e9aef20f48a4464947f572c5a238e137->enter($__internal_f0abb1b6087b12397369e06e4ea89f88e9aef20f48a4464947f572c5a238e137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f0abb1b6087b12397369e06e4ea89f88e9aef20f48a4464947f572c5a238e137->leave($__internal_f0abb1b6087b12397369e06e4ea89f88e9aef20f48a4464947f572c5a238e137_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_254fb90290dbb54a22b8682292da9a47f1455a36b671fa3064fa41a2f5367d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254fb90290dbb54a22b8682292da9a47f1455a36b671fa3064fa41a2f5367d25->enter($__internal_254fb90290dbb54a22b8682292da9a47f1455a36b671fa3064fa41a2f5367d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_254fb90290dbb54a22b8682292da9a47f1455a36b671fa3064fa41a2f5367d25->leave($__internal_254fb90290dbb54a22b8682292da9a47f1455a36b671fa3064fa41a2f5367d25_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\Gfct2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
