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
        $__internal_b9e44a9a9db6451d9f2d772e422d8fd34ce1b65b52aefccbc15922d31da96199 = $this->env->getExtension("native_profiler");
        $__internal_b9e44a9a9db6451d9f2d772e422d8fd34ce1b65b52aefccbc15922d31da96199->enter($__internal_b9e44a9a9db6451d9f2d772e422d8fd34ce1b65b52aefccbc15922d31da96199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e44a9a9db6451d9f2d772e422d8fd34ce1b65b52aefccbc15922d31da96199->leave($__internal_b9e44a9a9db6451d9f2d772e422d8fd34ce1b65b52aefccbc15922d31da96199_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_358350c5609d84d6e5019b3996a36045add49b240eeecaf797d1e862054d484b = $this->env->getExtension("native_profiler");
        $__internal_358350c5609d84d6e5019b3996a36045add49b240eeecaf797d1e862054d484b->enter($__internal_358350c5609d84d6e5019b3996a36045add49b240eeecaf797d1e862054d484b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_358350c5609d84d6e5019b3996a36045add49b240eeecaf797d1e862054d484b->leave($__internal_358350c5609d84d6e5019b3996a36045add49b240eeecaf797d1e862054d484b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1f8a137c6a186c6cd20af408d42db5aaab59b19a617b18062dcfe526b7b7c2c = $this->env->getExtension("native_profiler");
        $__internal_b1f8a137c6a186c6cd20af408d42db5aaab59b19a617b18062dcfe526b7b7c2c->enter($__internal_b1f8a137c6a186c6cd20af408d42db5aaab59b19a617b18062dcfe526b7b7c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1f8a137c6a186c6cd20af408d42db5aaab59b19a617b18062dcfe526b7b7c2c->leave($__internal_b1f8a137c6a186c6cd20af408d42db5aaab59b19a617b18062dcfe526b7b7c2c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b821ba8cd510936f469b27756afe419669357c5c8e72cd293170d02b91076340 = $this->env->getExtension("native_profiler");
        $__internal_b821ba8cd510936f469b27756afe419669357c5c8e72cd293170d02b91076340->enter($__internal_b821ba8cd510936f469b27756afe419669357c5c8e72cd293170d02b91076340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b821ba8cd510936f469b27756afe419669357c5c8e72cd293170d02b91076340->leave($__internal_b821ba8cd510936f469b27756afe419669357c5c8e72cd293170d02b91076340_prof);

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
