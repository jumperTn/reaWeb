<?php

/* PidevReaBundle:Stat:nbrOffreClientAgence.html.twig */
class __TwigTemplate_b7184e7b6c5c84baefdacfd756191085e38a3434a4cc507dacb5f5d4a1f7e22e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevReaBundle:Stat/chart:column3dStacked.html.twig");
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
        return "PidevReaBundle:Stat/chart:column3dStacked.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stat($context, array $blocks = array())
    {
        // line 3
        echo "   ";
        // line 72
        $context["client"] = "";
        // line 73
        $context["test"] = 1;
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stats"]) ? $context["stats"] : $this->getContext($context, "stats")));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 75
            echo "     ";
            if (((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")) != 1)) {
                // line 76
                echo "    ";
                if (((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")) != $this->getAttribute($context["stat"], "prenom", array(), "array"))) {
                    // line 77
                    echo "        },{
        \"client\":\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                    echo "\" ,
        \"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                    // line 80
                    $context["client"] = $this->getAttribute($context["stat"], "prenom", array(), "array");
                    // line 81
                    echo "    ";
                } else {
                    // line 82
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                }
                // line 84
                echo "    ";
            } else {
                // line 85
                echo "        ";
                $context["test"] = 2;
                // line 86
                echo "            ";
                if (((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")) != $this->getAttribute($context["stat"], "prenom", array(), "array"))) {
                    // line 87
                    echo "        {
        \"client\":\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "prenom", array(), "array"), "html", null, true);
                    echo "\" ,
         \"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                    // line 90
                    $context["client"] = $this->getAttribute($context["stat"], "prenom", array(), "array");
                    // line 91
                    echo "    ";
                } else {
                    // line 92
                    echo "     \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "type", array(), "array"), "html", null, true);
                    echo "\":";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "nbr", array(), "array"), "html", null, true);
                    echo ",
    ";
                }
                // line 94
                echo "    ";
            }
            // line 95
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "    }
    ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat:nbrOffreClientAgence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 96,  119 => 95,  116 => 94,  108 => 92,  105 => 91,  103 => 90,  97 => 89,  93 => 88,  90 => 87,  87 => 86,  84 => 85,  81 => 84,  73 => 82,  70 => 81,  68 => 80,  62 => 79,  58 => 78,  55 => 77,  52 => 76,  49 => 75,  45 => 74,  43 => 73,  41 => 72,  39 => 3,  36 => 2,  11 => 1,);
    }
}
