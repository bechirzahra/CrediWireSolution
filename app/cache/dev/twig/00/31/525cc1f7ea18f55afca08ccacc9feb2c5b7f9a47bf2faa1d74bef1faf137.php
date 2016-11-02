<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_0031525cc1f7ea18f55afca08ccacc9feb2c5b7f9a47bf2faa1d74bef1faf137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  90 => 32,  84 => 29,  76 => 17,  53 => 11,  170 => 59,  165 => 56,  127 => 28,  114 => 47,  34 => 14,  77 => 41,  97 => 46,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 34,  67 => 33,  63 => 32,  59 => 13,  38 => 6,  94 => 34,  89 => 20,  85 => 39,  75 => 35,  68 => 26,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 44,  88 => 31,  78 => 26,  46 => 8,  27 => 4,  44 => 12,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 55,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 43,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 38,  69 => 37,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 52,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 59,  98 => 31,  96 => 31,  83 => 35,  74 => 14,  66 => 15,  55 => 29,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 53,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 64,  109 => 34,  106 => 61,  103 => 60,  99 => 31,  95 => 28,  92 => 53,  86 => 28,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 24,  57 => 12,  54 => 20,  51 => 28,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 3,);
    }
}
