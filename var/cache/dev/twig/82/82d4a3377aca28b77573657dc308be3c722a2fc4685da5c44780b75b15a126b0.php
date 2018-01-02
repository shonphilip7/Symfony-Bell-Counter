<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
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
        $__internal_d184ae9847c9d1f0e67ed630dcb2e3cd7d6aa8a0e711e561e3bf284193a91f45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d184ae9847c9d1f0e67ed630dcb2e3cd7d6aa8a0e711e561e3bf284193a91f45->enter($__internal_d184ae9847c9d1f0e67ed630dcb2e3cd7d6aa8a0e711e561e3bf284193a91f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_080c54ed4243ba735f3df519dd3563df45a71d8f34e4a804c6a7785ecb5971b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080c54ed4243ba735f3df519dd3563df45a71d8f34e4a804c6a7785ecb5971b5->enter($__internal_080c54ed4243ba735f3df519dd3563df45a71d8f34e4a804c6a7785ecb5971b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d184ae9847c9d1f0e67ed630dcb2e3cd7d6aa8a0e711e561e3bf284193a91f45->leave($__internal_d184ae9847c9d1f0e67ed630dcb2e3cd7d6aa8a0e711e561e3bf284193a91f45_prof);

        
        $__internal_080c54ed4243ba735f3df519dd3563df45a71d8f34e4a804c6a7785ecb5971b5->leave($__internal_080c54ed4243ba735f3df519dd3563df45a71d8f34e4a804c6a7785ecb5971b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_808fbcb8ac6912ed51e7c353232cb3891f9096ab61a030b8dabdd0602e8ad425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808fbcb8ac6912ed51e7c353232cb3891f9096ab61a030b8dabdd0602e8ad425->enter($__internal_808fbcb8ac6912ed51e7c353232cb3891f9096ab61a030b8dabdd0602e8ad425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_538f5d276d7f5aa0638d07b6e786ed39f877bcfb7dc364dcd38aa23191d76533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_538f5d276d7f5aa0638d07b6e786ed39f877bcfb7dc364dcd38aa23191d76533->enter($__internal_538f5d276d7f5aa0638d07b6e786ed39f877bcfb7dc364dcd38aa23191d76533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_538f5d276d7f5aa0638d07b6e786ed39f877bcfb7dc364dcd38aa23191d76533->leave($__internal_538f5d276d7f5aa0638d07b6e786ed39f877bcfb7dc364dcd38aa23191d76533_prof);

        
        $__internal_808fbcb8ac6912ed51e7c353232cb3891f9096ab61a030b8dabdd0602e8ad425->leave($__internal_808fbcb8ac6912ed51e7c353232cb3891f9096ab61a030b8dabdd0602e8ad425_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_394117cd634fb6103c9633671926d5b5f88e918b167d0b02fd2426122b0db4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394117cd634fb6103c9633671926d5b5f88e918b167d0b02fd2426122b0db4f6->enter($__internal_394117cd634fb6103c9633671926d5b5f88e918b167d0b02fd2426122b0db4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ad52df57c7b726217ab3e3e8564ab4e8e5edd93e052d6da4584bff724cf0afae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad52df57c7b726217ab3e3e8564ab4e8e5edd93e052d6da4584bff724cf0afae->enter($__internal_ad52df57c7b726217ab3e3e8564ab4e8e5edd93e052d6da4584bff724cf0afae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad52df57c7b726217ab3e3e8564ab4e8e5edd93e052d6da4584bff724cf0afae->leave($__internal_ad52df57c7b726217ab3e3e8564ab4e8e5edd93e052d6da4584bff724cf0afae_prof);

        
        $__internal_394117cd634fb6103c9633671926d5b5f88e918b167d0b02fd2426122b0db4f6->leave($__internal_394117cd634fb6103c9633671926d5b5f88e918b167d0b02fd2426122b0db4f6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_343fe18848b8dd179850295f27d0ac16a8a1eeaf5d3b03a52f15e1889d7a717a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343fe18848b8dd179850295f27d0ac16a8a1eeaf5d3b03a52f15e1889d7a717a->enter($__internal_343fe18848b8dd179850295f27d0ac16a8a1eeaf5d3b03a52f15e1889d7a717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b25effbeb862f09a2fe201d9bec35beea795194050810f61c76359942594fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b25effbeb862f09a2fe201d9bec35beea795194050810f61c76359942594fde->enter($__internal_9b25effbeb862f09a2fe201d9bec35beea795194050810f61c76359942594fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b25effbeb862f09a2fe201d9bec35beea795194050810f61c76359942594fde->leave($__internal_9b25effbeb862f09a2fe201d9bec35beea795194050810f61c76359942594fde_prof);

        
        $__internal_343fe18848b8dd179850295f27d0ac16a8a1eeaf5d3b03a52f15e1889d7a717a->leave($__internal_343fe18848b8dd179850295f27d0ac16a8a1eeaf5d3b03a52f15e1889d7a717a_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\sym_bell_counter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
