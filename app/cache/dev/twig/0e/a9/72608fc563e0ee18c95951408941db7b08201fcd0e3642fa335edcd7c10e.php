<?php

/* PidevReaBundle:Stat/chart:column3dStacked.html.twig */
class __TwigTemplate_0ea972608fc563e0ee18c95951408941db7b08201fcd0e3642fa335edcd7c10e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <script type=\"text/javascript\">
            var chart;

            var chartData = [
            ";
        // line 15
        $this->displayBlock('stat', $context, $blocks);
        // line 18
        echo "            ];


            AmCharts.ready(function() {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = \"client\";
                chart.color = \"#FFFFFF\";
                chart.fontSize = 14;
                chart.startDuration = 1;
                chart.plotAreaFillAlphas = 0.2;
                // the following two lines makes chart 3D
                chart.angle = 30;
                chart.depth3D = 60;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridAlpha = 0.2;
                categoryAxis.gridPosition = \"start\";
                categoryAxis.gridColor = \"#FFFFFF\";
                categoryAxis.axisColor = \"#FFFFFF\";
                categoryAxis.axisAlpha = 0.5;
                categoryAxis.dashLength = 5;

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.gridAlpha = 0.2;
                valueAxis.gridColor = \"#FFFFFF\";
                valueAxis.axisColor = \"#FFFFFF\";
                valueAxis.axisAlpha = 0.5;
                valueAxis.dashLength = 5;
                valueAxis.title = \"nombre des offres\";
                valueAxis.titleColor = \"#FFFFFF\";
                //valueAxis.unit = \"%\";
                chart.addValueAxis(valueAxis);

                // GRAPHS         
                // first graph
                var graph1 = new AmCharts.AmGraph();
                graph1.title = \"terrain\";
                graph1.valueField = \"terrain\";
                graph1.type = \"column\";
                graph1.lineAlpha = 0;
                graph1.lineColor = \"#D2CB00\";
                graph1.fillAlphas = 1;
                graph1.balloonText = \"nombre des offres de type terrain pour le client [[category]] : <b>[[value]]</b>\";
                chart.addGraph(graph1);

                // second graph
                var graph2 = new AmCharts.AmGraph();
                graph2.title = \"maison\";
                graph2.valueField = \"maison\";
                graph2.type = \"column\";
                graph2.lineAlpha = 0;
                graph2.lineColor = \"#BEDF66\";
                graph2.fillAlphas = 1;
                graph2.balloonText = \"nombre des offres de type maison pour le client [[category]] : <b>[[value]]</b>\";
                chart.addGraph(graph2);
                //*/
                // second graph
                var graph3 = new AmCharts.AmGraph();
                graph3.title = \"immeuble\";
                graph3.valueField = \"immeuble\";
                graph3.type = \"column\";
                graph3.lineAlpha = 0;
                graph3.lineColor = \"#B5CB00\";
                graph3.fillAlphas = 1;
                graph3.balloonText = \"nombre des offres de type immeuble pour le client [[category]] : <b>[[value]]</b>\";
                chart.addGraph(graph3);
                
                var graph4 = new AmCharts.AmGraph();
                graph4.title = \"appartement\";
                graph4.valueField = \"appartement\";
                graph4.type = \"column\";
                graph4.lineAlpha = 0;
                graph4.lineColor = \"#B55F00\";
                graph4.fillAlphas = 1;
                graph4.balloonText = \"nombre des offres de type appartement pour le client [[category]] : <b>[[value]]</b>\";
                chart.addGraph(graph4);
//*/
//*/
                chart.write(\"chartdiv\");
            });
        </script>
    </head>

    <body style=\"background-color:#000000;\">
        <div id=\"chartdiv\" style=\"width: 100%; height: 400px;\"></div>
    </body>

</html>
";
    }

    // line 15
    public function block_stat($context, array $blocks = array())
    {
        echo "        
        
            ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat/chart:column3dStacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 15,  44 => 18,  42 => 15,  33 => 9,  29 => 8,  20 => 1,);
    }
}
