<?php

/* base.html.twig */
class __TwigTemplate_9bd972ce2da840a428e3d0032afde2b5be7b6a3f5bee0cbdf3b1d35b6a4136e8 extends Twig_Template
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
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Clock Tower Bell Counter";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "\t\t    
\t\t";
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        // line 34
        echo "\t\t  ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "\t  ";
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
        return array (  129 => 50,  126 => 49,  122 => 34,  119 => 33,  114 => 16,  111 => 15,  105 => 8,  99 => 51,  97 => 49,  93 => 48,  88 => 46,  83 => 44,  78 => 42,  69 => 35,  67 => 33,  50 => 18,  48 => 15,  43 => 13,  38 => 11,  32 => 8,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\sym_bell_counter\\app\\Resources\\views\\base.html.twig");
    }
}
