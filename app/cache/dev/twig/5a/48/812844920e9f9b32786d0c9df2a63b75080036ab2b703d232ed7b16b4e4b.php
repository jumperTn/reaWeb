<?php

/* PidevReaBundle:Stat/chart:pyramidChart3D.html.twig */
class __TwigTemplate_5a48812844920e9f9b32786d0c9df2a63b75080036ab2b703d232ed7b16b4e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stat' => array($this, 'block_stat'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>

    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <title>amCharts examples</title>
        <link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\">
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/funnel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">

            var chart;
            var data = [
            ";
        // line 14
        $this->displayBlock('stat', $context, $blocks);
        // line 17
        echo "\t\t\t];

            AmCharts.ready(function () {

                chart = new AmCharts.AmFunnelChart();
                chart.rotate = true;
                chart.titleField = \"client\";
                chart.balloon.fixedPosition = true;
                chart.marginRight = 210;
                chart.marginLeft = 15;
                chart.labelPosition = \"right\";
                chart.funnelAlpha = 0.9;
                chart.valueField = \"value\";
                chart.startX = -500;
                chart.dataProvider = data;
                chart.startAlpha = 0;
                chart.depth3D = 100;
                chart.angle = 30;
                chart.outlineAlpha = 1;
                chart.outlineThickness = 2;
                chart.outlineColor = \"#FFFFFF\";
                chart.write(\"chartdiv\");
            });
        </script>
    </head>

    <body>
        <div id=\"chartdiv\" style=\"width: 700px; height: 500px;\"></div>
    </body>

</html>";
    }

    // line 14
    public function block_stat($context, array $blocks = array())
    {
        echo "        

                ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat/chart:pyramidChart3D.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  43 => 17,  41 => 14,  33 => 9,  29 => 8,  20 => 1,);
    }
}
