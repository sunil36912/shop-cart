<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Dashboard</title>
    <?php include './lib/header_links.php';?>
</head>
<body>
    <div id="wrapper">
        <?php include './lib/navigation.php';?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php include './lib/header.php';?>
            <div class="wrapper wrapper-content animated fadeInRight ">
            <div class="row">
                <div class="col-lg-5 col-sm-5">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Basic Data Tables example with responsive plugin</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                        <tr>
                            <th class='cu_width'>Class</th>
                            <th>Sec.</th>
                            <th>Subject</th>
                            <th>Chapter</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>1</td>
                        <td style='min-width:44px !important;text-align: center !important;font-size:11px !important;'>A</td>
                        <td style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Maths</td>
                        <td class="center" style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Liner equation in one variable</td>
                        <td class="center" style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>Done</td>
                    </tr>
                    <tr class="gradeC">
                       <td style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>1</td>
                        <td style='min-width:44px !important;text-align: center !important;font-size:11px !important;'>B</td>
                        <td style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Science</td>
                        <td class="center" style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Micro Organisms</td>
                        <td class="center" style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>-</td>
                    </tr>
                    <tr class="gradeA">
                        <td style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>1</td>
                        <td style='min-width:44px !important;text-align: center !important;font-size:11px !important;'>C</td>
                        <td style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Sst</td>
                        <td class="center" style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Indian Constitution </td>
                        <td class="center" style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>Done</td>
                    </tr>
                    <tr class="gradeA">
                        <td style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>1</td>
                        <td style='min-width:44px !important;text-align: center !important;font-size:11px !important;'>D</td>
                        <td style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Sst</td>
                        <td class="center" style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Poverty</td>
                        <td class="center" style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>-</td>
                    </tr>
                    <tr class="gradeA">
                        <td style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>1</td>
                        <td style='min-width:44px !important;text-align: center !important;font-size:11px !important;'>E</td>
                        <td style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Sst</td>
                        <td class="center" style='min-width:60px !important;text-align: left !important;font-size:11px !important;'>Freedom Movement</td>
                        <td class="center" style='min-width:52px !important;text-align: center !important;font-size:11px !important;'>-</td>
                    </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
             <div class="col-lg-4 col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <h2>T</h2>
                        <small>This is example of small version of todo list</small>
                        <ul class="todo-list m-t small-list">
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                <span class="m-l-xs todo-completed">Buy a milk</span>

                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-check-square"></i> </a>
                                <span class="m-l-xs  todo-completed">Go to shop and find some products.</span>

                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Send documents to Mike</span>
                                <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 mins</small>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Go to the doctor dr Smith</span>
                            </li>
                            <li>
                                <a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>
                                <span class="m-l-xs">Plan vacation</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <h2>Monthly usage</h2>
                         <ul class="list-group clear-list m-t">
                            <li class="list-group-item fist-item">
                                <span class="label label-success pull-right">1</span> Total tests conducted in Lab
                            </li>
                            <li class="list-group-item">
                                <span class="label label-info pull-right">2</span> No. of diagnostic tests 
                            </li>
                            <li class="list-group-item">
                                <span class="label label-primary pull-right">3</span> No. improvement tests
                            </li>
                            <li class="list-group-item">
                                <span class="label label-default pull-right">4</span> ........................
                            </li>
                            <li class="list-group-item">
                                <span class="label label-primary pull-right">5</span> .............
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
            </div>
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                     <div class="ibox-title">
                        <h5>Line Chart Example </h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a></li>
                                <li><a href="#">Config option 2</a></li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                     </div>
                     <div class="ibox-content">
                        <div id="morris-line-chart"></div>
                     </div>
                </div>
           </div>
        </div>
    </div>
    <!-- Data Tables -->
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <!-- Morris -->
    <script src="js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="js/plugins/morris/morris.js"></script>
    <!-- Mainly scripts -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Morris demo data-->
    <script src="js/demo/morris-demo.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                },

              });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );
       });
        function fnClickAddRow(){
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ]);

        }
    </script>
    <style>
        body.DTTT_Print {
            background: #fff;

        }
        .DTTT_Print #page-wrapper {
            margin: 0;
            background:#fff;
        }
        button.DTTT_button, div.DTTT_button, a.DTTT_button {
            border: 1px solid #e7eaec;
            background: #fff;
            color: #676a6c;
            box-shadow: none;
            padding: 6px 8px;
        }
        button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
            border: 1px solid #d2d2d2;
            background: #fff;
            color: #676a6c;
            box-shadow: none;
            padding: 6px 8px;
        }    
        .dataTables_filter label {
            margin-right: 5px;

        }
    </style>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>
    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>
    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
    <script>
            $(document).ready(function() {
                $('.load').css('display','initial');
            }); 
    </script>
    <script>
            $(document).ready(function() {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');
                  }, 1300);
                var data1 = [
                    [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
                ];
                var data2 = [
                    [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
                ];
                $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                    data1, data2
                ],
                        {
                            series: {
                                lines: {
                                    show: false,
                                    fill: true
                                },
                                splines: {
                                    show: true,
                                    tension: 0.4,
                                    lineWidth: 1,
                                    fill: 0.4
                                },
                                points: {
                                    radius: 0,
                                    show: true
                                },
                                shadowSize: 2
                            },
                            grid: {
                                hoverable: true,
                                clickable: true,
                                tickColor: "#d5d5d5",
                                borderWidth: 1,
                                color: '#d5d5d5'
                            },
                            colors: ["#1ab394", "#464f88"],
                            xaxis:{
                            },
                            yaxis: {
                                ticks: 4
                            },
                            tooltip: false
                        }
                );
                var doughnutData = [
                    {
                        value: 300,
                        color: "#a3e1d4",
                        highlight: "#1ab394",
                        label: "App"
                    },
                    {
                        value: 50,
                        color: "#dedede",
                        highlight: "#1ab394",
                        label: "Software"
                    },
                    {
                        value: 100,
                        color: "#b5b8cf",
                        highlight: "#1ab394",
                        label: "Laptop"
                    }
                ];
                var doughnutOptions = {
                    segmentShowStroke: true,
                    segmentStrokeColor: "#fff",
                    segmentStrokeWidth: 2,
                    percentageInnerCutout: 45, // This is 0 for Pie charts
                    animationSteps: 100,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                };
                var ctx = document.getElementById("doughnutChart").getContext("2d");
                var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);
                var polarData = [
                    {
                        value: 300,
                        color: "#a3e1d4",
                        highlight: "#1ab394",
                        label: "App"
                    },
                    {
                        value: 140,
                        color: "#dedede",
                        highlight: "#1ab394",
                        label: "Software"
                    },
                    {
                        value: 200,
                        color: "#b5b8cf",
                        highlight: "#1ab394",
                        label: "Laptop"
                    }
                ];
                var polarOptions = {
                    scaleShowLabelBackdrop: true,
                    scaleBackdropColor: "rgba(255,255,255,0.75)",
                    scaleBeginAtZero: true,
                    scaleBackdropPaddingY: 1,
                    scaleBackdropPaddingX: 1,
                    scaleShowLine: true,
                    segmentShowStroke: true,
                    segmentStrokeColor: "#fff",
                    segmentStrokeWidth: 2,
                    animationSteps: 100,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                };
                var ctx = document.getElementById("polarChart").getContext("2d");
                var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);
            });
    </script>    
<script src='js/navigation_selection.js'></script>
</body>
</html>
