<?php

/* PidevReaBundle:Rss:Layout.html.twig */
class __TwigTemplate_69c1769fe703c7f31fbe2276cf619f4215bf694a34cac6e95504e6728eb871ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Latest Jobs\" href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("pidev_rea_rss");
        echo "\" />
</head>
";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Rss:Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
