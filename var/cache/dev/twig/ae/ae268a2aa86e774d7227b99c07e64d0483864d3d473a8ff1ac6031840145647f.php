<?php

/* ::base.html.twig */
class __TwigTemplate_b19cf493f8af06278ce352f5485e1a5902414618d3ddae26d072db833e4d5652 extends Twig_Template
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
        $__internal_ecafb9cd93f69b8f74b2ccef747457cb4853c41fdf935ac30682f09c79b6cb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecafb9cd93f69b8f74b2ccef747457cb4853c41fdf935ac30682f09c79b6cb65->enter($__internal_ecafb9cd93f69b8f74b2ccef747457cb4853c41fdf935ac30682f09c79b6cb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <div id=\"wrapper\">

            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\">
                        <a href=\"#\">
                            Gestor de Empresas
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/alumno/all"), "html", null, true);
        echo "\">Alumnos</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/empresa/all"), "html", null, true);
        echo "\">Empresa</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/empresa/new"), "html", null, true);
        echo "\">Crear empresas</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id=\"page-content-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src=\"js/jquery.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"js/bootstrap.min.js\"></script>

        <!-- Menu Toggle Script -->
        <script>
        \$(\"#menu-toggle\").click(function(e) {
            e.preventDefault();
            \$(\"#wrapper\").toggleClass(\"toggled\");
        });
        </script>

    </body>
        ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "</html>
";
        
        $__internal_ecafb9cd93f69b8f74b2ccef747457cb4853c41fdf935ac30682f09c79b6cb65->leave($__internal_ecafb9cd93f69b8f74b2ccef747457cb4853c41fdf935ac30682f09c79b6cb65_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ddc88bff1a73aaf347322bca9a3974dc6b991079f41f8b9433d9a8ca91fcae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ddc88bff1a73aaf347322bca9a3974dc6b991079f41f8b9433d9a8ca91fcae3->enter($__internal_7ddc88bff1a73aaf347322bca9a3974dc6b991079f41f8b9433d9a8ca91fcae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "GFCT";
        
        $__internal_7ddc88bff1a73aaf347322bca9a3974dc6b991079f41f8b9433d9a8ca91fcae3->leave($__internal_7ddc88bff1a73aaf347322bca9a3974dc6b991079f41f8b9433d9a8ca91fcae3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7354c311e0ca6cb29774c8009e9cc29faef2e2248888e42960eb1cf376911a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7354c311e0ca6cb29774c8009e9cc29faef2e2248888e42960eb1cf376911a30->enter($__internal_7354c311e0ca6cb29774c8009e9cc29faef2e2248888e42960eb1cf376911a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" media=\"screen\" title=\"no title\">
        <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" media=\"screen\" title=\"no title\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/simple-sidebar.css"), "html", null, true);
        echo "\" media=\"screen\" title=\"no title\">
      ";
        
        $__internal_7354c311e0ca6cb29774c8009e9cc29faef2e2248888e42960eb1cf376911a30->leave($__internal_7354c311e0ca6cb29774c8009e9cc29faef2e2248888e42960eb1cf376911a30_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_f75a81328f642d69e39d6e2e0457d6d197f529f6355a941ffbb6a45aff0706ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75a81328f642d69e39d6e2e0457d6d197f529f6355a941ffbb6a45aff0706ad->enter($__internal_f75a81328f642d69e39d6e2e0457d6d197f529f6355a941ffbb6a45aff0706ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_f75a81328f642d69e39d6e2e0457d6d197f529f6355a941ffbb6a45aff0706ad->leave($__internal_f75a81328f642d69e39d6e2e0457d6d197f529f6355a941ffbb6a45aff0706ad_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5daa8fa53b008c4a9f5b6f50025fc13769cc154c35a0b40b8a147154388e895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5daa8fa53b008c4a9f5b6f50025fc13769cc154c35a0b40b8a147154388e895->enter($__internal_e5daa8fa53b008c4a9f5b6f50025fc13769cc154c35a0b40b8a147154388e895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_e5daa8fa53b008c4a9f5b6f50025fc13769cc154c35a0b40b8a147154388e895->leave($__internal_e5daa8fa53b008c4a9f5b6f50025fc13769cc154c35a0b40b8a147154388e895_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 67,  151 => 43,  142 => 10,  137 => 7,  131 => 6,  119 => 5,  111 => 68,  109 => 67,  84 => 44,  82 => 43,  69 => 33,  63 => 30,  57 => 27,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}GFCT{% endblock %}</title>
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" media=\"screen\" title=\"no title\">
        <link href=\"https://fonts.googleapis.com/css?family=Inconsolata\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" media=\"screen\" title=\"no title\">
        <link rel=\"stylesheet\" href=\"{{asset('css/simple-sidebar.css')}}\" media=\"screen\" title=\"no title\">
      {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <div id=\"wrapper\">

            <!-- Sidebar -->
            <div id=\"sidebar-wrapper\">
                <ul class=\"sidebar-nav\">
                    <li class=\"sidebar-brand\">
                        <a href=\"#\">
                            Gestor de Empresas
                        </a>
                    </li>
                    <li>
                        <a href=\"{{asset('/alumno/all')}}\">Alumnos</a>
                    </li>
                    <li>
                        <a href=\"{{asset('/empresa/all')}}\">Empresa</a>
                    </li>
                    <li>
                        <a href=\"{{asset('/empresa/new')}}\">Crear empresas</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id=\"page-content-wrapper\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        {% block body %}{% endblock %}
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src=\"js/jquery.js\"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src=\"js/bootstrap.min.js\"></script>

        <!-- Menu Toggle Script -->
        <script>
        \$(\"#menu-toggle\").click(function(e) {
            e.preventDefault();
            \$(\"#wrapper\").toggleClass(\"toggled\");
        });
        </script>

    </body>
        {% block javascripts %}{% endblock %}
</html>
", "::base.html.twig", "C:\\xampp\\symfony\\Gfct2\\app/Resources\\views/base.html.twig");
    }
}
