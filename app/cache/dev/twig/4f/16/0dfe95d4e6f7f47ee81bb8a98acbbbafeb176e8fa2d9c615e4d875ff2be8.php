<?php

/* PidevReaBundle:Stat/chart:chart.html.twig */
class __TwigTemplate_4f160dfe95d4e6f7f47ee81bb8a98acbbbafeb176e8fa2d9c615e4d875ff2be8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'test' => array($this, 'block_test'),
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
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/amcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/serial.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <style type=\"text/css\">

            .amcharts-graph-g1 .amcharts-graph-stroke {
                stroke-dasharray: 3px 3px;
                stroke-linejoin: round;
                stroke-linecap: round;
                -webkit-animation: am-moving-dashes 1s linear infinite;
                animation: am-moving-dashes 1s linear infinite;
            }

            @-webkit-keyframes am-moving-dashes {
                100% {
                    stroke-dashoffset: -30px;
                }
            }
            @keyframes am-moving-dashes {
                100% {
                    stroke-dashoffset: -30px;
                }
            }


            .lastBullet {
                -webkit-animation: am-pulsating 1s ease-out infinite;
                animation: am-pulsating 1s ease-out infinite;
            }
            @-webkit-keyframes am-pulsating {
                0% {
                    stroke-opacity: 1;
                    stroke-width: 0px;
                }
                100% {
                    stroke-opacity: 0;
                    stroke-width: 50px;
                }
            }
            @keyframes am-pulsating {
                0% {
                    stroke-opacity: 1;
                    stroke-width: 0px;
                }
                100% {
                    stroke-opacity: 0;
                    stroke-width: 50px;
                }
            }

            .amcharts-graph-column-front {
                -webkit-transition: all .3s .3s ease-out;
                transition: all .3s .3s ease-out;
            }
            .amcharts-graph-column-front:hover {
                fill: #496375;
                stroke: #496375;
                -webkit-transition: all .3s ease-out;
                transition: all .3s ease-out;
            }


            .amcharts-graph-g2 {
              stroke-linejoin: round;
              stroke-linecap: round;
              stroke-dasharray: 500%;
              stroke-dasharray: 0 \\0/;    /* fixes IE prob */
              stroke-dashoffset: 0 \\0/;   /* fixes IE prob */
              -webkit-animation: am-draw 40s;
              animation: am-draw 40s;
            }
            @-webkit-keyframes am-draw {
                0% {
                    stroke-dashoffset: 500%;
                }
                100% {
                    stroke-dashoffset: 0px;
                }
            }
            @keyframes am-draw {
                0% {
                    stroke-dashoffset: 500%;
                }
                100% {
                    stroke-dashoffset: 0px;
                }
            }




        </style>


        <script type=\"text/javascript\">
            // note, we have townName field with a name specified for each datapoint and townName2 with only some of the names specified.
            // we use townName2 to display town names next to the bullet. And as these names would overlap if displayed next to each bullet,
            // we created this townName2 field and set only some of the names for this purpse.
            var chartData = [
                
                    ";
        // line 107
        $this->displayBlock('test', $context, $blocks);
        // line 110
        echo "                
            ];
            var chart;

            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.addClassNames = true;
                chart.dataProvider = chartData;
                chart.categoryField = \"nomAgence\";
                chart.startDuration = 1;
                chart.color = \"#FFFFFF\";
                chart.marginLeft = 0;

                // AXES
                // category
               
                // as we have data of different units, we create three different value axes
                // Distance value axis
                var distanceAxis = new AmCharts.ValueAxis();
                distanceAxis.title = \"nombre d'agence\";
                distanceAxis.gridAlpha = 0;
                distanceAxis.axisAlpha = 0;
                chart.addValueAxis(distanceAxis);
                // GRAPHS
                // distance graph
                var distanceGraph = new AmCharts.AmGraph();
                distanceGraph.valueField = \"nbrAgence\";
                distanceGraph.title = \"nombre d'agence\";
                distanceGraph.type = \"column\";
                distanceGraph.fillAlphas = 0.9;
                distanceGraph.valueAxis = distanceAxis; // indicate which axis should be used
                distanceGraph.balloonText = \"[[value]] agences\";
                distanceGraph.legendValueText = \"[[value]] agances\";
                distanceGraph.legendPeriodValueText = \"total: [[value.sum]] agances\";
                distanceGraph.lineColor = \"#263138\";
                distanceGraph.alphaField = \"alpha\";
                chart.addGraph(distanceGraph);
                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.zoomable = false;
                chartCursor.cursorAlpha = 0;
                chart.addChartCursor(chartCursor);

                // LEGEND
                var legend = new AmCharts.AmLegend();
                legend.bulletType = \"round\";
                legend.equalWidths = false;
                legend.valueWidth = 120;
                legend.useGraphSettings = true;
                legend.color = \"#FFFFFF\";
                chart.addLegend(legend);

                // WRITE
                chart.write(\"chartdiv\");
            });
        </script>
    </head>

    <body style=\"background-color:#161616\">
        <div style=\"color:#ff5755; font-weight:bold; text-align:center;\"></div>
        <div id=\"chartdiv\" style=\"width:100%; height:400px;\"></div>
    </body>

</html>";
    }

    // line 107
    public function block_test($context, array $blocks = array())
    {
        // line 108
        echo "                    
                    ";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat/chart:chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 108,  207 => 107,  139 => 110,  137 => 107,  36 => 9,  32 => 8,  28 => 7,  20 => 1,);
    }
}
