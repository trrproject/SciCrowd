<?php

/* ObsCoreBundle:Default:index.html.twig */
class __TwigTemplate_7ba5ce28efa2bcf033a97b7ef0ae06bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Esta página é a página para convidados e/ou utilizadores registados</h1>

";
        // line 7
        if (((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")) == null)) {
            // line 8
            echo "    <h1>Zero Publications</h1>
";
        }
        // line 10
        if (((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")) != null)) {
            echo "    
    <h1>Publication list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Year</th>
                <th>Volume</th>
                <th>Number</th>
                <th>Pages</th>
                <th>Edition</th>
                <th>Keywords</th>
                <th>Doi</th>
                <th>Approvedflag</th>
                <th>Isn</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 32
                echo "            <tr>
                <td><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
                echo "</a></td>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title"), "html", null, true);
                echo "</td>
                <td>";
                // line 35
                if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "year")) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "year"), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "volume"), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "number"), "html", null, true);
                echo "</td>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pages"), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "edition"), "html", null, true);
                echo "</td>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "keywords"), "html", null, true);
                echo "</td>
                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "doi"), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "approvedFlag"), "html", null, true);
                echo "</td>
                <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ISN"), "html", null, true);
                echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                echo "\">show</a>
                    </li>
                    
                    ";
                // line 50
                if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                    echo "                     
                        <li>
                            <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
                    echo "\">edit</a>
                        </li>
                    ";
                }
                // line 55
                echo "                </ul>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </tbody>
    </table>
";
        }
        // line 62
        if (((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")) == null)) {
            // line 63
            echo "        <ul>
        <li>
            ";
            // line 65
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 66
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publication_new"), "html", null, true);
                echo "\">
                    Create a new entry
                </a>
            ";
            }
            // line 69
            echo "                    
        </li>
    </ul>
";
        }
        // line 73
        echo "    ";
    }

    public function getTemplateName()
    {
        return "ObsCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 69,  160 => 65,  134 => 52,  129 => 50,  104 => 40,  100 => 39,  90 => 46,  70 => 25,  34 => 14,  81 => 37,  77 => 33,  65 => 31,  53 => 16,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 21,  38 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 22,  63 => 21,  59 => 20,  94 => 28,  89 => 36,  85 => 21,  75 => 17,  68 => 14,  56 => 21,  87 => 25,  21 => 3,  26 => 6,  93 => 28,  88 => 36,  78 => 34,  46 => 14,  27 => 5,  44 => 15,  31 => 5,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 63,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 41,  62 => 30,  49 => 19,  24 => 4,  25 => 5,  19 => 1,  79 => 18,  72 => 33,  69 => 32,  47 => 12,  40 => 17,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 41,  101 => 32,  98 => 31,  96 => 38,  83 => 25,  74 => 26,  66 => 23,  55 => 15,  52 => 15,  50 => 18,  43 => 17,  41 => 10,  35 => 7,  32 => 7,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 73,  173 => 65,  168 => 72,  164 => 59,  162 => 66,  154 => 62,  149 => 59,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 43,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 40,  95 => 48,  92 => 37,  86 => 39,  82 => 35,  80 => 29,  73 => 18,  64 => 26,  60 => 22,  57 => 18,  54 => 25,  51 => 17,  48 => 16,  45 => 11,  42 => 8,  39 => 10,  36 => 13,  33 => 6,  30 => 5,);
    }
}
