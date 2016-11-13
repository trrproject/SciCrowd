<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_f5312aee930da003459a761b6bfd279d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_1fc4be3a7c5b44c99eca5402597ad3c7212ef0c4"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            echo $context["__internal_1fc4be3a7c5b44c99eca5402597ad3c7212ef0c4"]->getdisplay_listener((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    ";
        // line 39
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners")) {
            // line 40
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            $context["listeners"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners");
            // line 48
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                echo $context["__internal_1fc4be3a7c5b44c99eca5402597ad3c7212ef0c4"]->getdisplay_listener($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        }
    }

    // line 58
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            echo "    ";
            if (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Closure")) {
                // line 60
                echo "        Closure
    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Function")) {
                // line 62
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 63
                echo "        ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                }
                // line 64
                echo "    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Method")) {
                // line 65
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 66
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "class"));
                echo "::";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                }
                // line 67
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  175 => 65,  161 => 63,  118 => 49,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  376 => 169,  369 => 165,  348 => 153,  334 => 145,  327 => 141,  293 => 118,  288 => 116,  276 => 113,  271 => 111,  262 => 104,  259 => 103,  251 => 97,  248 => 96,  202 => 75,  195 => 71,  191 => 67,  188 => 68,  185 => 67,  172 => 64,  165 => 60,  153 => 56,  150 => 55,  113 => 48,  97 => 41,  110 => 22,  76 => 31,  84 => 24,  58 => 17,  127 => 60,  170 => 69,  160 => 65,  134 => 54,  129 => 49,  104 => 36,  100 => 39,  90 => 27,  70 => 19,  34 => 14,  81 => 23,  77 => 33,  65 => 31,  53 => 12,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 157,  341 => 149,  337 => 103,  322 => 101,  314 => 99,  312 => 129,  309 => 97,  305 => 125,  298 => 121,  294 => 90,  285 => 115,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 87,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  38 => 6,  273 => 112,  269 => 94,  254 => 92,  243 => 93,  240 => 92,  238 => 85,  235 => 89,  230 => 82,  227 => 81,  224 => 71,  221 => 85,  219 => 84,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 40,  102 => 40,  71 => 30,  67 => 24,  63 => 19,  59 => 14,  94 => 34,  89 => 36,  85 => 32,  75 => 27,  68 => 14,  56 => 11,  87 => 34,  21 => 3,  26 => 9,  93 => 28,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 15,  31 => 3,  28 => 3,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 54,  136 => 54,  121 => 50,  117 => 19,  105 => 34,  91 => 41,  62 => 20,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 35,  72 => 31,  69 => 24,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 19,  101 => 43,  98 => 31,  96 => 37,  83 => 33,  74 => 27,  66 => 23,  55 => 16,  52 => 14,  50 => 18,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 79,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 73,  173 => 65,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 59,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 42,  109 => 50,  106 => 45,  103 => 32,  99 => 31,  95 => 42,  92 => 33,  86 => 39,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 12,  54 => 25,  51 => 17,  48 => 9,  45 => 10,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
