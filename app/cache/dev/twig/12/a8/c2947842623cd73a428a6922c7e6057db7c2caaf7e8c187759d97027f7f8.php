<?php

/* PidevReaBundle:Stat/chart:columnStackedAndClustered.html.twig */
class __TwigTemplate_12a8c2947842623cd73a428a6922c7e6057db7c2caaf7e8c187759d97027f7f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stat' => array($this, 'block_stat'),
            'graph' => array($this, 'block_graph'),
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

            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = \"year\";
                chart.plotAreaBorderAlpha = 0.2;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridAlpha = 0.1;
                categoryAxis.axisAlpha = 0;
                categoryAxis.gridPosition = \"start\";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.stackType = \"regular\";
                valueAxis.gridAlpha = 0.1;
                valueAxis.axisAlpha = 0;
                chart.addValueAxis(valueAxis);

                // GRAPHS
                // first graph
                var graph = new AmCharts.AmGraph();
        //*/        
                ";
        // line 45
        $this->displayBlock('graph', $context, $blocks);
        // line 187
        echo "        // LEGEND
                var legend = new AmCharts.AmLegend();
                legend.borderAlpha = 0.2;
               //legend.horizontalGap = 10;
                chart.addLegend(legend);

                // WRITE
                chart.write(\"chartdiv\");
            });

            // this method sets chart 2D/3D
            function setDepth() {
                if (document.getElementById(\"rb1\").checked) {
                    chart.depth3D = 0;
                    chart.angle = 0;
                } else {
                    chart.depth3D = 25;
                    chart.angle = 30;
                }
                chart.validateNow();
            }
        </script>
    </head>

    <body>
        <div id=\"chartdiv\" style=\"width: 600px; height: 400px;\"></div>
        <div style=\"margin-left:30px;\">
\t        <input type=\"radio\" checked=\"true\" name=\"group\" id=\"rb1\" onclick=\"setDepth()\">2D
\t        <input type=\"radio\" name=\"group\" id=\"rb2\" onclick=\"setDepth()\">3D
\t\t</div>
    </body>
</html>";
    }

    // line 15
    public function block_stat($context, array $blocks = array())
    {
        // line 16
        echo "               
                ";
    }

    // line 45
    public function block_graph($context, array $blocks = array())
    {
        // line 46
        echo "        graph.title = \"janvier\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"01\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#C72C95\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span style='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);

                // second graph
                graph = new AmCharts.AmGraph();
                graph.title = \"février\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"02\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#D8E0BD\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span style='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);
//*/
                // third graph
                graph = new AmCharts.AmGraph();
                graph.title = \"mars\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"03\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#B3DBD4\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span style='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);

                // fourth graph
                graph = new AmCharts.AmGraph();
                graph.title = \"avril\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"04\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.newStack = true; // this line starts new stack
                graph.fillAlphas = 1;
                graph.lineColor = \"#69A55C\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span style='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);

                // fifth graph
                graph = new AmCharts.AmGraph();
                graph.title = \"may\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"05\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#B5B8D3\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span style='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);

                // sixth graph
                graph = new AmCharts.AmGraph();
                graph.title = \"juin\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"06\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#F4E23B\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span class='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);
                
                graph = new AmCharts.AmGraph();
                graph.title = \"juillet\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"07\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                        graph.newStack = true; // this line starts new stack        
        graph.fillAlphas = 1;
                graph.lineColor = \"#F4E00B\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span class='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);

                
        graph = new AmCharts.AmGraph();
                graph.title = \"août\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"08\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#F4E90B\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span class='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);
                
                graph = new AmCharts.AmGraph();
                graph.title = \"septembre\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"09\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#F4EBBB\";
        
        graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span class='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);

graph = new AmCharts.AmGraph();
                graph.title = \"octobre\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"10\";
                        graph.newStack = true; // this line starts new stack
        graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#F4ECCB\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span class='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);
                
                graph = new AmCharts.AmGraph();
                graph.title = \"novembre\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"11\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#44E00B\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span class='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);

graph = new AmCharts.AmGraph();
                graph.title = \"décembre\";
                graph.labelText = \"[[value]]\";
                graph.valueField = \"12\";
                graph.type = \"column\";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                graph.lineColor = \"#F4E4FB\";
                graph.balloonText = \"<span style='color:#555555;'>[[category]]</span><br><span class='font-size:14px'>[[title]]:<b>[[value]]</b></span>\";
                chart.addGraph(graph);
                    ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat/chart:columnStackedAndClustered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  119 => 45,  114 => 16,  111 => 15,  76 => 187,  74 => 45,  45 => 18,  43 => 15,  34 => 9,  30 => 8,  21 => 1,);
    }
}
