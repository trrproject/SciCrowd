<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ced961fbc09d942f4409f68950c25f07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 160,  382 => 159,  367 => 156,  359 => 153,  354 => 151,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  317 => 135,  311 => 131,  308 => 130,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  261 => 105,  249 => 100,  244 => 97,  242 => 96,  237 => 93,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  206 => 77,  180 => 63,  148 => 46,  363 => 155,  357 => 152,  353 => 121,  351 => 150,  344 => 119,  332 => 116,  324 => 139,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  303 => 128,  300 => 105,  297 => 104,  291 => 102,  274 => 97,  265 => 107,  263 => 95,  255 => 103,  231 => 89,  212 => 79,  190 => 68,  174 => 59,  178 => 66,  175 => 65,  161 => 63,  118 => 49,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  348 => 153,  334 => 145,  327 => 140,  293 => 118,  288 => 101,  276 => 113,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  202 => 77,  195 => 71,  191 => 67,  188 => 68,  185 => 66,  172 => 64,  165 => 60,  153 => 56,  150 => 55,  113 => 48,  97 => 23,  110 => 22,  76 => 17,  84 => 24,  58 => 14,  127 => 60,  170 => 69,  160 => 65,  134 => 54,  129 => 49,  104 => 32,  100 => 24,  90 => 27,  70 => 15,  34 => 5,  81 => 23,  77 => 33,  65 => 31,  53 => 12,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 157,  341 => 147,  337 => 103,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 129,  298 => 125,  294 => 90,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  229 => 87,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 42,  132 => 51,  128 => 49,  107 => 27,  61 => 12,  38 => 7,  273 => 112,  269 => 94,  254 => 92,  243 => 92,  240 => 92,  238 => 85,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  221 => 85,  219 => 84,  217 => 75,  208 => 68,  204 => 76,  179 => 69,  159 => 53,  143 => 43,  135 => 62,  119 => 40,  102 => 40,  71 => 30,  67 => 14,  63 => 18,  59 => 14,  94 => 34,  89 => 36,  85 => 24,  75 => 19,  68 => 14,  56 => 11,  87 => 34,  21 => 3,  26 => 9,  93 => 28,  88 => 20,  78 => 26,  46 => 13,  27 => 3,  44 => 10,  31 => 4,  28 => 3,  196 => 90,  183 => 82,  171 => 58,  166 => 56,  163 => 62,  158 => 62,  156 => 62,  151 => 47,  142 => 59,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 33,  62 => 20,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 35,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 27,  66 => 23,  55 => 9,  52 => 12,  50 => 18,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 78,  203 => 78,  199 => 73,  193 => 69,  189 => 71,  187 => 67,  182 => 66,  176 => 73,  173 => 65,  168 => 57,  164 => 59,  162 => 54,  154 => 60,  149 => 59,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 39,  125 => 42,  122 => 41,  116 => 31,  112 => 36,  109 => 35,  106 => 45,  103 => 25,  99 => 31,  95 => 42,  92 => 21,  86 => 39,  82 => 19,  80 => 27,  73 => 16,  64 => 23,  60 => 22,  57 => 16,  54 => 25,  51 => 13,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
