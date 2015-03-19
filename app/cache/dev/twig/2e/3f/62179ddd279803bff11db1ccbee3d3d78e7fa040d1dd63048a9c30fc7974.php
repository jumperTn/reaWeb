<?php

/* PidevReaBundle:Stat/chart:SVG_filters.html.twig */
class __TwigTemplate_2e3f62179ddd279803bff11db1ccbee3d3d78e7fa040d1dd63048a9c30fc7974 extends Twig_Template
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
        <style type=\"text/css\">

        @import url(";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/test.css"), "html", null, true);
        echo ");

            .amcharts-graph-g1 .amcharts-graph-fill {
                filter: url(#blur);
            }

            .amcharts-graph-g2 .amcharts-graph-fill {
                filter: url(#blur);
            }

            .amcharts-cursor-fill {
                filter: url(#shadow);
            }
        </style>

        <script type=\"text/javascript\">

            var chartData = [{
                 \"mois\": 2,
                     \"cars\": 1098,
                     \"motorcycles\": 680,
                     \"bicycles\": 910
             }, {
                 \"mois\": 3,
                     \"cars\": 975,
                     \"motorcycles\": 664,
                     \"bicycles\": 670
             }, {
                 \"mois\": 4,
                     \"cars\": 1246,
                     \"motorcycles\": 648,
                     \"bicycles\": 930
             }, {
                 \"mois\": 5,
                     \"cars\": 1218,
                     \"motorcycles\": 637,
                     \"bicycles\": 1010
             }, {
                 \"mois\": 6,
                     \"cars\": 1913,
                     \"motorcycles\": 133,
                     \"bicycles\": 1770
             }, {
                 \"mois\": 7,
                     \"cars\": 1299,
                     \"motorcycles\": 621,
                     \"bicycles\": 820
             }, {
                 \"mois\": 8,
                     \"cars\": 1110,
                     \"motorcycles\": 10,
                     \"bicycles\": 1050
             }, {
                 \"mois\": 9,
                     \"cars\": 765,
                     \"motorcycles\": 232,
                     \"bicycles\": 650
             }, {
                 \"mois\": 10,
                     \"cars\": 1145,
                     \"motorcycles\": 219,
                     \"bicycles\": 780
             }, {
                 \"mois\": 11,
                     \"cars\": 1163,
                     \"motorcycles\": 201,
                     \"bicycles\": 700
             }, {
                 \"mois\": 12,
                     \"cars\": 1780,
                     \"motorcycles\": 85,
                     \"bicycles\": 1470
             }
             ];

              var chart =  AmCharts.makeChart(\"chartdiv\", {
                  \"type\": \"serial\",
                  \"fontFamily\": \"Lato\",
                  \"autoMargins\": true,
                  \"addClassNames\": true,
                  \"zoomOutText\": \"\",
                  \"defs\": {
                      \"filter\": [
                          {
                              \"x\": \"-50%\",
                              \"y\": \"-50%\",
                              \"width\": \"200%\",
                              \"height\": \"200%\",
                              \"id\": \"blur\",
                              \"feGaussianBlur\": {
                                  \"in\": \"SourceGraphic\",
                                  \"stdDeviation\": \"50\"
                              }
                          },
                          {
                              \"id\": \"shadow\",
                              \"width\": \"150%\",
                              \"height\": \"150%\",
                              \"feOffset\": {
                                  \"result\": \"offOut\",
                                  \"in\": \"SourceAlpha\",
                                  \"dx\": \"2\",
                                  \"dy\": \"2\"
                              },
                              \"feGaussianBlur\": {
                                  \"result\": \"blurOut\",
                                  \"in\": \"offOut\",
                                  \"stdDeviation\": \"10\"
                              },
                              \"feColorMatrix\": {
                                  \"result\": \"blurOut\",
                                  \"type\": \"matrix\",
                                  \"values\": \"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .2 0\"
                              },
                              \"feBlend\": {
                                  \"in\": \"SourceGraphic\",
                                  \"in2\": \"blurOut\",
                                  \"mode\": \"normal\"
                              }
                          }
                      ]
                  },
                  \"fontSize\": 15,
                  \"pathToImages\": \"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("amcharts/images/"), "html", null, true);
        echo "\",
                  \"dataProvider\": chartData,
                  \"dataDateFormat\": \"MM\",
                  \"marginTop\": 0,
                  \"marginRight\": 0,
                  \"marginLeft\": 0,
                  \"autoMarginOffset\": 0,
                  \"categoryField\": \"mois\",
                  \"categoryAxis\": {
                      \"gridAlpha\": 0.07,
                      \"axisColor\": \"#DADADA\",
                      \"startOnAxis\": true,
                      \"tickLength\": 0,
                      \"parseDates\": true,
                      \"minPeriod\": \"MM\"
                  },
                  \"valueAxes\": [
                      {
                          \"stackType\": \"regular\",
                          \"gridAlpha\": 0.07,
                          \"axisAlpha\": 0,
                          \"inside\": true,
                          \"labelFrequency\": 2
                      }
                  ],
                  \"graphs\": [
                      {
                          \"id\": \"g1\",
                          \"type\": \"line\",
                          \"title\": \"Cars\",
                          \"valueField\": \"cars\",
                          \"fillColors\": [
                              \"#0066e3\",
                              \"#802ea9\"
                          ],
                          \"lineAlpha\": 0,
                          \"fillAlphas\": 0.8,
                          \"showBalloon\": false
                      },
                      {
                          \"id\": \"g2\",
                          \"type\": \"line\",
                          \"title\": \"Motorcycles\",
                          \"valueField\": \"motorcycles\",
                          \"lineAlpha\": 0,
                          \"fillAlphas\": 0.8,
                          \"lineColor\": \"#5bb5ea\",
                          \"showBalloon\": false
                      },
                      {
                          \"id\": \"g3\",
                          \"title\": \"Bicycles\",
                          \"valueField\": \"bicycles\",
                          \"lineAlpha\": 0.5,
                          \"lineColor\": \"#FFFFFF\",
                          \"bullet\": \"round\",
                          \"dashLength\": 2,
                          \"bulletBorderAlpha\": 1,
                          \"bulletAlpha\": 1,
                          \"bulletSize\": 15,
                          \"stackable\": false,
                          \"bulletColor\": \"#5d7ad9\",
                          \"bulletBorderColor\": \"#FFFFFF\",
                          \"bulletBorderThickness\": 3,
                          \"balloonText\": \"<div style='margin-bottom:30px;text-shadow: 2px 2px rgba(0, 0, 0, 0.1); font-weight:200;font-size:30px; color:#ffffff'>[[value]]</div>\"
                      }
                  ],
                  \"chartCursor\": {
                      \"cursorAlpha\": 1,
                      \"zoomable\": false,
                      \"cursorColor\": \"#FFFFFF\",
                      \"categoryBalloonColor\": \"#8d83c8\",
                      \"fullWidth\": true,
                      \"categoryBalloonDateFormat\": \"MM\",
                      \"balloonPointerOrientation\": \"vertical\"
                  },
                  \"balloon\": {
                      \"borderAlpha\": 0,
                      \"fillAlpha\": 0,
                      \"shadowAlpha\": 0,
                      \"offsetX\": -50,
                      \"offsetY\": -50
                  }
              });

              // we zoom chart in order to have better blur (form side to side)
              chart.addListener(\"dataUpdated\", zoomChart);

              function zoomChart(){
                  chart.zoomToIndexes(0, chartData.length-1);
              }
            </script>
        </head>

        <body>
            <div id=\"chartdiv\" style=\"width:100%; height:500px;\"></div>
        </body>

</html>";
    }

    public function getTemplateName()
    {
        return "PidevReaBundle:Stat/chart:SVG_filters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 135,  38 => 12,  32 => 9,  28 => 8,  19 => 1,);
    }
}
