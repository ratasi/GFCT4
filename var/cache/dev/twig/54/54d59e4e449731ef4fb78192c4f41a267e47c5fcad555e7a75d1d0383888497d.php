<?php

/* gesGfctBundle:Empresa:all.html.twig */
class __TwigTemplate_677d1fb2a273508601112a615c48d1c44cf349a1a9732e81bd49d764867099d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:Empresa:all.html.twig", 1);
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
        $__internal_0e0fd6eaff0d6f0e6db1e457977e42fabd88e94d63c84433e878823feb71dcd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0fd6eaff0d6f0e6db1e457977e42fabd88e94d63c84433e878823feb71dcd1->enter($__internal_0e0fd6eaff0d6f0e6db1e457977e42fabd88e94d63c84433e878823feb71dcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Empresa:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e0fd6eaff0d6f0e6db1e457977e42fabd88e94d63c84433e878823feb71dcd1->leave($__internal_0e0fd6eaff0d6f0e6db1e457977e42fabd88e94d63c84433e878823feb71dcd1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_69e4c55a1a2490d69e79aabc9486f1c2f4ea799b6eb1e36da7050b14d10cbd2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e4c55a1a2490d69e79aabc9486f1c2f4ea799b6eb1e36da7050b14d10cbd2a->enter($__internal_69e4c55a1a2490d69e79aabc9486f1c2f4ea799b6eb1e36da7050b14d10cbd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Empresa:all.html.twig"));

        // line 3
        echo "      <h1>GFCT</h1><br>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">Panel de empresa</div>
            <table class=\"table\">
        <tr>
          <th><b>id</b></th>
          <th><b>nombre</b></th>
          <th><b>direccion</b></th>
          <th><b>codigopostal</b></th>
          <th><b>telefono1</b></th>
          <th><b>telefono2</b></th>
          <th><b>fechaCreacion</b></th>

        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NumEmpresas"]) ? $context["NumEmpresas"] : $this->getContext($context, "NumEmpresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa1"]) {
            // line 18
            echo "        <tr>
          <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "direccion", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "cp", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "telefono1", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["empresa1"], "telefono2", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["empresa1"], "fechaCreacion", array()), "date", array()), "html", null, true);
            echo "</td>

        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </table>
    </div>
    ";
        
        $__internal_69e4c55a1a2490d69e79aabc9486f1c2f4ea799b6eb1e36da7050b14d10cbd2a->leave($__internal_69e4c55a1a2490d69e79aabc9486f1c2f4ea799b6eb1e36da7050b14d10cbd2a_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Empresa:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
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
      <h1>GFCT</h1><br>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">Panel de empresa</div>
            <table class=\"table\">
        <tr>
          <th><b>id</b></th>
          <th><b>nombre</b></th>
          <th><b>direccion</b></th>
          <th><b>codigopostal</b></th>
          <th><b>telefono1</b></th>
          <th><b>telefono2</b></th>
          <th><b>fechaCreacion</b></th>

        </tr>
        {% for empresa1 in NumEmpresas %}
        <tr>
          <td>{{ empresa1.id}}</td>
          <td>{{ empresa1.nombre }}</td>
          <td>{{ empresa1.direccion }}</td>
          <td>{{ empresa1.cp }}</td>
          <td>{{ empresa1.telefono1 }}</td>
          <td>{{ empresa1.telefono2 }}</td>
          <td>{{ empresa1.fechaCreacion.date }}</td>

        </tr>
        {% endfor %}
      </table>
    </div>
    {% endblock %}
", "gesGfctBundle:Empresa:all.html.twig", "C:\\xampp\\symfony\\Gfct2\\src\\gesGfctBundle/Resources/views/Empresa/all.html.twig");
    }
}
