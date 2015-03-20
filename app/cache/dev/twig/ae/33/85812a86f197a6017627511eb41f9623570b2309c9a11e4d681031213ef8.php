<?php

/* PidevReaBundle:Stat:offreAgence.html.twig */
class __TwigTemplate_ae3385812a86f197a6017627511eb41f9623570b2309c9a11e4d681031213ef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevReaBundle:Stat/chart:JSON_areaStacked.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stat' => array($this, 'block_stat'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevReaBundle:Stat/chart:JSON_areaStacked.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stat($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        // line 31
        echo "       
";
        // line 32
        $context["zone"] = "";
        // line 33
        $context["test"] = 1;
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 35
            echo "     ";
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) != 1)) {
                // line 36
                echo "    ";
                if (((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")) != $this->getAttribute($context["stat"], "idZone", array(), "array"))) {
                    // line 37
                    echo "        },{
        \"zone\":\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "idZone", array(), "array"), "html", null, true);
                    echo "\" ,
        \"";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                    // line 40
                    $context["zone"] = $this->getAttribute($context["stat"], "idZone", array(), "array");
                    // line 41
                    echo "    ";
                } else {
                    // line 42
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                }
                // line 44
                echo "    ";
            } else {
                // line 45
                echo "        ";
                $context["test"] = 2;
                // line 46
                echo "            ";
                if (((isset($context["zone"]) ? $context["zone"] : $this->getContext($context, "zone")) != $this->getAttribute($context["stat"], "idZone", array(), "array"))) {
                    // line 47
                    echo "        {
        \"zone\":\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "idZone", array(), "array"), "html", null, true);
                    echo "\" ,
         \"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                    // line 50
                    $context["zone"] = $this->getAttribute($context["stat"], "idZone", array(), "array");
                    // line 51
                    echo "    ";
                } else {
                    // line 52
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                }
                // line 54
                echo "    ";
            }
            // line 55
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    }
    ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat:offreAgence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 56,  122 => 55,  119 => 54,  111 => 52,  108 => 51,  106 => 50,  100 => 49,  96 => 48,  93 => 47,  90 => 46,  87 => 45,  84 => 44,  76 => 42,  73 => 41,  71 => 40,  65 => 39,  61 => 38,  58 => 37,  55 => 36,  52 => 35,  48 => 34,  46 => 33,  44 => 32,  41 => 31,  39 => 3,  36 => 2,  11 => 1,);
    }
}
