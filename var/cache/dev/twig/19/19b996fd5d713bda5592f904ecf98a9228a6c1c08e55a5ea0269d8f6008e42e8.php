<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2aa3a0641cce386df59e09988f74e143c215dec8630ebd5175800405b296e158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90c17bde7acdfde4c4c146722b8190fa9390e49c7d5463f817db7be2e3abfbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c17bde7acdfde4c4c146722b8190fa9390e49c7d5463f817db7be2e3abfbaf->enter($__internal_90c17bde7acdfde4c4c146722b8190fa9390e49c7d5463f817db7be2e3abfbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90c17bde7acdfde4c4c146722b8190fa9390e49c7d5463f817db7be2e3abfbaf->leave($__internal_90c17bde7acdfde4c4c146722b8190fa9390e49c7d5463f817db7be2e3abfbaf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d592fcafd680f43faaef04c2deea8297afb3b84457a57926c597585cf9a67a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d592fcafd680f43faaef04c2deea8297afb3b84457a57926c597585cf9a67a3->enter($__internal_2d592fcafd680f43faaef04c2deea8297afb3b84457a57926c597585cf9a67a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d592fcafd680f43faaef04c2deea8297afb3b84457a57926c597585cf9a67a3->leave($__internal_2d592fcafd680f43faaef04c2deea8297afb3b84457a57926c597585cf9a67a3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_246ec0161c594692c233f609b37db7ef2b501e96a629ab7fd4374fe18b4fed8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246ec0161c594692c233f609b37db7ef2b501e96a629ab7fd4374fe18b4fed8a->enter($__internal_246ec0161c594692c233f609b37db7ef2b501e96a629ab7fd4374fe18b4fed8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_246ec0161c594692c233f609b37db7ef2b501e96a629ab7fd4374fe18b4fed8a->leave($__internal_246ec0161c594692c233f609b37db7ef2b501e96a629ab7fd4374fe18b4fed8a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bca49be2b0735d62b590c24cac27af354224a924096a38b978e0e89c69ac0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bca49be2b0735d62b590c24cac27af354224a924096a38b978e0e89c69ac0ad->enter($__internal_7bca49be2b0735d62b590c24cac27af354224a924096a38b978e0e89c69ac0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7bca49be2b0735d62b590c24cac27af354224a924096a38b978e0e89c69ac0ad->leave($__internal_7bca49be2b0735d62b590c24cac27af354224a924096a38b978e0e89c69ac0ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\symfony\\Gfct2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
