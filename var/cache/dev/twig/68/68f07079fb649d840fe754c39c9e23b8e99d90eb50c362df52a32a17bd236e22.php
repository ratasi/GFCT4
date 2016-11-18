<?php

/* gesGfctBundle:Alumno:all.html.twig */
class __TwigTemplate_46743a0ac04ae747cb7707c228bf927dfb213cbd7339b0164f0ec53f2b66c34d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "gesGfctBundle:Alumno:all.html.twig", 1);
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
        $__internal_0a516f0c7e10f2629534aefbaa17bb6ed06f3a93ca990b9bee1c0ebb764ae05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a516f0c7e10f2629534aefbaa17bb6ed06f3a93ca990b9bee1c0ebb764ae05f->enter($__internal_0a516f0c7e10f2629534aefbaa17bb6ed06f3a93ca990b9bee1c0ebb764ae05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "gesGfctBundle:Alumno:all.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a516f0c7e10f2629534aefbaa17bb6ed06f3a93ca990b9bee1c0ebb764ae05f->leave($__internal_0a516f0c7e10f2629534aefbaa17bb6ed06f3a93ca990b9bee1c0ebb764ae05f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a99a2644aa5a39f0dbc971bae423c63d31e0a3eb821ef4d6416c6dcc3bce18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a99a2644aa5a39f0dbc971bae423c63d31e0a3eb821ef4d6416c6dcc3bce18e->enter($__internal_8a99a2644aa5a39f0dbc971bae423c63d31e0a3eb821ef4d6416c6dcc3bce18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "gesGfctBundle:Alumno:all.html.twig"));

        // line 3
        echo "  <body>
  <h1>GFCT</h1><br>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Panel de alumnos</div>
      <table class=\"table\">
        <tr>
          <th><b>id</b></th>
          <th><b>nombre</b></th>
          <th><b>apellido1</b></th>
          <th><b>apellido2</b></th>
          <th><b>ciclo</b></th>
          <th><b>empresa_id</b></th>

        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["NumAlumnos"]) ? $context["NumAlumnos"] : $this->getContext($context, "NumAlumnos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno1"]) {
            // line 18
            echo "        <tr>
          <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "id", array()), "html", null, true);
            echo "</th>
          <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "apellido1", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "apellido2", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["alumno1"], "ciclo", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["alumno1"], "empresa", array()), "id", array()), "html", null, true);
            echo "</td>

        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "      </table>
    </div>
    </div>
    </body>
    ";
        
        $__internal_8a99a2644aa5a39f0dbc971bae423c63d31e0a3eb821ef4d6416c6dcc3bce18e->leave($__internal_8a99a2644aa5a39f0dbc971bae423c63d31e0a3eb821ef4d6416c6dcc3bce18e_prof);

    }

    public function getTemplateName()
    {
        return "gesGfctBundle:Alumno:all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  83 => 24,  79 => 23,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 17,  40 => 3,  34 => 2,  11 => 1,);
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
  <body>
  <h1>GFCT</h1><br>
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">Panel de alumnos</div>
      <table class=\"table\">
        <tr>
          <th><b>id</b></th>
          <th><b>nombre</b></th>
          <th><b>apellido1</b></th>
          <th><b>apellido2</b></th>
          <th><b>ciclo</b></th>
          <th><b>empresa_id</b></th>

        </tr>
        {% for alumno1 in NumAlumnos %}
        <tr>
          <td>{{ alumno1.id}}</th>
          <td>{{ alumno1.nombre }}</td>
          <td>{{ alumno1.apellido1 }}</td>
          <td>{{ alumno1.apellido2 }}</td>
          <td>{{ alumno1.ciclo }}</td>
          <td>{{ alumno1.empresa.id }}</td>

        </tr>
        {% endfor %}
      </table>
    </div>
    </div>
    </body>
    {% endblock %}
", "gesGfctBundle:Alumno:all.html.twig", "C:\\xampp\\symfony\\Gfct2\\src\\gesGfctBundle/Resources/views/Alumno/all.html.twig");
    }
}
