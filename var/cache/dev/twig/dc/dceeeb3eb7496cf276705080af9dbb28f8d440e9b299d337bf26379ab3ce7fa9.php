<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
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
        $__internal_feb5c1eed7c58dc406cb90552c7dd1f9a4c2b77b0f32aba36dc4e50796b050c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb5c1eed7c58dc406cb90552c7dd1f9a4c2b77b0f32aba36dc4e50796b050c2->enter($__internal_feb5c1eed7c58dc406cb90552c7dd1f9a4c2b77b0f32aba36dc4e50796b050c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c42a39d54cf9bf4323445f7bf961070ca55ad5982e55b3dffe7d745f4303d485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42a39d54cf9bf4323445f7bf961070ca55ad5982e55b3dffe7d745f4303d485->enter($__internal_c42a39d54cf9bf4323445f7bf961070ca55ad5982e55b3dffe7d745f4303d485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
  <html lang=\"en\">
    <head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t
\t\t<!-- Bootstrap -->
\t\t<link type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t<!-- CSS -->
\t\t<link type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t
\t\t";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
      <div class=\"container\">\t
\t    <div class=\"row\">
\t\t  <div class=\"col-sm-12\">
\t\t    <h1 class=\"text-center\">Clock Tower Bell Counter</h1>
\t\t  </div>
\t\t</div>
\t\t<div class=\"row\">
\t\t  <div class=\"col-sm-12\">
\t\t  ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "\t\t  </div>
\t\t</div> 
\t  </div>

\t  <!-- jQuery -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
      <!-- Bootstrap -->
      <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t  <!-- Bootstrap Time Picker -->
      <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
\t  <!-- Validation -->
\t  <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
\t  <!-- Main js for the application -->
\t  <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </body>
  </html>
";
        
        $__internal_feb5c1eed7c58dc406cb90552c7dd1f9a4c2b77b0f32aba36dc4e50796b050c2->leave($__internal_feb5c1eed7c58dc406cb90552c7dd1f9a4c2b77b0f32aba36dc4e50796b050c2_prof);

        
        $__internal_c42a39d54cf9bf4323445f7bf961070ca55ad5982e55b3dffe7d745f4303d485->leave($__internal_c42a39d54cf9bf4323445f7bf961070ca55ad5982e55b3dffe7d745f4303d485_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_3aff766081d80b63d440760832b3406f6e622ef3e55ec81c548d3d1848dc57b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aff766081d80b63d440760832b3406f6e622ef3e55ec81c548d3d1848dc57b1->enter($__internal_3aff766081d80b63d440760832b3406f6e622ef3e55ec81c548d3d1848dc57b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b19f4b4e3a2aac2f746e133a19fcb9d4bdebdca931c6b2a3e3e7366556f0798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b19f4b4e3a2aac2f746e133a19fcb9d4bdebdca931c6b2a3e3e7366556f0798->enter($__internal_1b19f4b4e3a2aac2f746e133a19fcb9d4bdebdca931c6b2a3e3e7366556f0798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clock Tower Bell Counter";
        
        $__internal_1b19f4b4e3a2aac2f746e133a19fcb9d4bdebdca931c6b2a3e3e7366556f0798->leave($__internal_1b19f4b4e3a2aac2f746e133a19fcb9d4bdebdca931c6b2a3e3e7366556f0798_prof);

        
        $__internal_3aff766081d80b63d440760832b3406f6e622ef3e55ec81c548d3d1848dc57b1->leave($__internal_3aff766081d80b63d440760832b3406f6e622ef3e55ec81c548d3d1848dc57b1_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2aeffb0daf3898cc8c8ec691e204e1b88993134347fb27e23489310a480f5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2aeffb0daf3898cc8c8ec691e204e1b88993134347fb27e23489310a480f5e1->enter($__internal_f2aeffb0daf3898cc8c8ec691e204e1b88993134347fb27e23489310a480f5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2ed468b03fbef32f0275d312b42f8286f9b7aef66f782e79992bc816e864ae23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed468b03fbef32f0275d312b42f8286f9b7aef66f782e79992bc816e864ae23->enter($__internal_2ed468b03fbef32f0275d312b42f8286f9b7aef66f782e79992bc816e864ae23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "\t\t    
\t\t";
        
        $__internal_2ed468b03fbef32f0275d312b42f8286f9b7aef66f782e79992bc816e864ae23->leave($__internal_2ed468b03fbef32f0275d312b42f8286f9b7aef66f782e79992bc816e864ae23_prof);

        
        $__internal_f2aeffb0daf3898cc8c8ec691e204e1b88993134347fb27e23489310a480f5e1->leave($__internal_f2aeffb0daf3898cc8c8ec691e204e1b88993134347fb27e23489310a480f5e1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_aad96a8515c3dd4e96ddc6999460ad63053f67a58a3262c7ee35765886bb5553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad96a8515c3dd4e96ddc6999460ad63053f67a58a3262c7ee35765886bb5553->enter($__internal_aad96a8515c3dd4e96ddc6999460ad63053f67a58a3262c7ee35765886bb5553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a18777458c5911a3b89382dc4c1fb6f48f6ed3edd2c82c572eec63b8b8b319b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a18777458c5911a3b89382dc4c1fb6f48f6ed3edd2c82c572eec63b8b8b319b->enter($__internal_9a18777458c5911a3b89382dc4c1fb6f48f6ed3edd2c82c572eec63b8b8b319b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "\t\t  ";
        
        $__internal_9a18777458c5911a3b89382dc4c1fb6f48f6ed3edd2c82c572eec63b8b8b319b->leave($__internal_9a18777458c5911a3b89382dc4c1fb6f48f6ed3edd2c82c572eec63b8b8b319b_prof);

        
        $__internal_aad96a8515c3dd4e96ddc6999460ad63053f67a58a3262c7ee35765886bb5553->leave($__internal_aad96a8515c3dd4e96ddc6999460ad63053f67a58a3262c7ee35765886bb5553_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_936c8738036d4e5f6c04118e4a6d040d8ccc50e95b968c726f0e3dde5f1624f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936c8738036d4e5f6c04118e4a6d040d8ccc50e95b968c726f0e3dde5f1624f8->enter($__internal_936c8738036d4e5f6c04118e4a6d040d8ccc50e95b968c726f0e3dde5f1624f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b43428e7ca6b94d32eaeee50ae9c72ce79f16100e312a3ae29c8d3170e1a6ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43428e7ca6b94d32eaeee50ae9c72ce79f16100e312a3ae29c8d3170e1a6ff7->enter($__internal_b43428e7ca6b94d32eaeee50ae9c72ce79f16100e312a3ae29c8d3170e1a6ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "\t  ";
        
        $__internal_b43428e7ca6b94d32eaeee50ae9c72ce79f16100e312a3ae29c8d3170e1a6ff7->leave($__internal_b43428e7ca6b94d32eaeee50ae9c72ce79f16100e312a3ae29c8d3170e1a6ff7_prof);

        
        $__internal_936c8738036d4e5f6c04118e4a6d040d8ccc50e95b968c726f0e3dde5f1624f8->leave($__internal_936c8738036d4e5f6c04118e4a6d040d8ccc50e95b968c726f0e3dde5f1624f8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 50,  174 => 49,  164 => 34,  155 => 33,  144 => 16,  135 => 15,  117 => 8,  105 => 51,  103 => 49,  99 => 48,  94 => 46,  89 => 44,  84 => 42,  75 => 35,  73 => 33,  56 => 18,  54 => 15,  49 => 13,  44 => 11,  38 => 8,  29 => 1,);
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
  <html lang=\"en\">
    <head>
      <meta charset=\"utf-8\">
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
        <title>{% block title %}Clock Tower Bell Counter{% endblock %}</title>
\t\t
\t\t<!-- Bootstrap -->
\t\t<link type=\"text/css\" href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
\t\t<!-- CSS -->
\t\t<link type=\"text/css\" href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
\t\t
\t\t{% block stylesheets %}
\t\t    
\t\t{% endblock %}

        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
      <div class=\"container\">\t
\t    <div class=\"row\">
\t\t  <div class=\"col-sm-12\">
\t\t    <h1 class=\"text-center\">Clock Tower Bell Counter</h1>
\t\t  </div>
\t\t</div>
\t\t<div class=\"row\">
\t\t  <div class=\"col-sm-12\">
\t\t  {% block body %}
\t\t  {% endblock %}
\t\t  </div>
\t\t</div> 
\t  </div>

\t  <!-- jQuery -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
      <!-- Bootstrap -->
      <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
\t  <!-- Bootstrap Time Picker -->
      <script src=\"{{ asset('js/bootstrap-timepicker.min.js') }}\"></script>
\t  <!-- Validation -->
\t  <script src=\"{{ asset('js/jquery.validate.min.js') }}\"></script>
\t  <!-- Main js for the application -->
\t  <script src=\"{{ asset('js/main.js') }}\"></script>
\t  {% block javascripts %}
\t  {% endblock %}
    </body>
  </html>
", "base.html.twig", "C:\\xampp\\htdocs\\sym_bell_counter\\app\\Resources\\views\\base.html.twig");
    }
}
