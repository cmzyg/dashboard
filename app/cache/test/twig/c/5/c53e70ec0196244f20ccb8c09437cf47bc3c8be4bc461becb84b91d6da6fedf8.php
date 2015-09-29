<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c6f3f857f6cc50aafbd4b3e0b471fb555893d4b6b543031331f27d30bd0ddc0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5cbe647cc03eecb47bc81427dfe5025555c14494dbb4e6f31a3bd2b5d3463d4 = $this->env->getExtension("native_profiler");
        $__internal_c5cbe647cc03eecb47bc81427dfe5025555c14494dbb4e6f31a3bd2b5d3463d4->enter($__internal_c5cbe647cc03eecb47bc81427dfe5025555c14494dbb4e6f31a3bd2b5d3463d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5cbe647cc03eecb47bc81427dfe5025555c14494dbb4e6f31a3bd2b5d3463d4->leave($__internal_c5cbe647cc03eecb47bc81427dfe5025555c14494dbb4e6f31a3bd2b5d3463d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f0ee13b538bb3a79d3f59da13393e63e61091a8d04c8dd9469825eb2bd591ee = $this->env->getExtension("native_profiler");
        $__internal_2f0ee13b538bb3a79d3f59da13393e63e61091a8d04c8dd9469825eb2bd591ee->enter($__internal_2f0ee13b538bb3a79d3f59da13393e63e61091a8d04c8dd9469825eb2bd591ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f0ee13b538bb3a79d3f59da13393e63e61091a8d04c8dd9469825eb2bd591ee->leave($__internal_2f0ee13b538bb3a79d3f59da13393e63e61091a8d04c8dd9469825eb2bd591ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d5ba7593d8a79422a4e33a9a04203f6e06476e4cf56e80e59567525a6202380 = $this->env->getExtension("native_profiler");
        $__internal_5d5ba7593d8a79422a4e33a9a04203f6e06476e4cf56e80e59567525a6202380->enter($__internal_5d5ba7593d8a79422a4e33a9a04203f6e06476e4cf56e80e59567525a6202380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d5ba7593d8a79422a4e33a9a04203f6e06476e4cf56e80e59567525a6202380->leave($__internal_5d5ba7593d8a79422a4e33a9a04203f6e06476e4cf56e80e59567525a6202380_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_837290fcb7e34590f904acba969a8924ccad7ef4c2833c26321bd019fc746357 = $this->env->getExtension("native_profiler");
        $__internal_837290fcb7e34590f904acba969a8924ccad7ef4c2833c26321bd019fc746357->enter($__internal_837290fcb7e34590f904acba969a8924ccad7ef4c2833c26321bd019fc746357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_837290fcb7e34590f904acba969a8924ccad7ef4c2833c26321bd019fc746357->leave($__internal_837290fcb7e34590f904acba969a8924ccad7ef4c2833c26321bd019fc746357_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
