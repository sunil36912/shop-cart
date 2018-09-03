<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSPINIA | Issue list</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="css/toastr.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <?php include './lib/header_links.php';?>
</head>

<body class="pace-running">
    <div class="pace pace-active">
        <div data-progress="99" data-progress-text="99%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress">
          <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <div id="wrapper">

        <?php include './lib/navigation.php';?>
        <div style="min-height: 1670px;" id="page-wrapper" class="gray-bg">
        <?php include './lib/header.php';?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Issue list</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="http://webapplayers.com/inspinia_admin-v2.5/index.html">Home</a>
                        </li>
                        <li>
                            <a>App views</a>
                        </li>
                        <li class="active">
                            <strong>Issue list</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Issue list</h5>
                            <div class="ibox-tools">
                        </div>
                                <a href="" class="btn btn-primary btn-xs">Add new issue</a>
                            </div>
                        <div class="ibox-content">

                            <div class="m-b-lg">

                                <div class="input-group">
                                    <input placeholder="Search issue by name..." class=" form-control" type="text">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-white"> Search</button>
                                    </span>
                                </div>
                                <div class="m-t-md">

                                    <div class="pull-right">
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-comments"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-user"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-list"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-pencil"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-print"></i> </button>
                                        <button type="button" class="btn btn-sm btn-white"> <i class="fa fa-cogs"></i> </button>
                                    </div>

                                    <strong>Found 61 issues.</strong>



                                </div>

                            </div>

                            <div class="table-responsive">
                            <table class="table table-hover issue-tracker">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Added</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-23
                                        </a>

                                        <small>
                                            This is issue with the coresponding note
                                        </small>
                                    </td>
                                    <td>
                                        Adrian Novak
                                    </td>
                                    <td>
                                        12.02.2015 10:00 am
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">0.52,1.041</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 0 1 14.933563796318165 11.990700825968545 Z"></path><path fill="#d7d7d7" d="M 8 8 L 14.933563796318165 11.990700825968545 A 8 8 0 1 1 7.999999999999998 0 Z"></path></svg>
                                        2d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Mag</button>
                                        <button class="btn btn-white btn-xs"> Rag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Added</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-17
                                        </a>

                                        <small>
                                            Desktop publishing packages 
and web page editors now use Lorem Ipsum as their default model text
                                        </small>
                                    </td>
                                    <td>
                                        Anna Smith
                                    </td>
                                    <td>
                                        10.02.2015 05:32 am
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">3,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 1 1 3.297717981660216 14.47213595499958 Z"></path><path fill="#d7d7d7" d="M 8 8 L 3.297717981660216 14.47213595499958 A 8 8 0 0 1 7.999999999999998 0 Z"></path></svg>
                                        2d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Rag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Added</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-12
                                        </a>

                                        <small>
                                            It is a long established fact that a reader will be
                                        </small>
                                    </td>
                                    <td>
                                        Anthony Jackson
                                    </td>
                                    <td>
                                        02.03.2015 06:02 am
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">1,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 0 1 14.92820323027551 11.999999999999998 Z"></path><path fill="#d7d7d7" d="M 8 8 L 14.92820323027551 11.999999999999998 A 8 8 0 1 1 7.999999999999998 0 Z"></path></svg>
                                        1d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Mag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-primary">Added</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-11
                                        </a>

                                        <small>
                                            There are many variations of
 passages of Lorem Ipsum available, but the majority have suffered
                                        </small>
                                    </td>
                                    <td>
                                        Monica Proven
                                    </td>
                                    <td>
                                        01.10.2015 11:02 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">4,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 1 1 1.0717967697244921 12.000000000000004 Z"></path><path fill="#d7d7d7" d="M 8 8 L 1.0717967697244921 12.000000000000004 A 8 8 0 0 1 7.999999999999998 0 Z"></path></svg>
                                        3d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Rag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-warning">Fixed</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-07
                                        </a>

                                        <small>
                                            Always free from repetition, injected humour, or non-characteristic words etc.
                                        </small>
                                    </td>
                                    <td>
                                        Alex Ferguson
                                    </td>
                                    <td>
                                        28.11.2015 05:10 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">1,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 0 1 14.92820323027551 11.999999999999998 Z"></path><path fill="#d7d7d7" d="M 8 8 L 14.92820323027551 11.999999999999998 A 8 8 0 1 1 7.999999999999998 0 Z"></path></svg>
                                        2d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-warning">Fixed</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-07
                                        </a>

                                        <small>
                                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit am
                                        </small>
                                    </td>
                                    <td>
                                        Mark Conor
                                    </td>
                                    <td>
                                        18.09.2015 06:20 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">3,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 1 1 3.297717981660216 14.47213595499958 Z"></path><path fill="#d7d7d7" d="M 8 8 L 3.297717981660216 14.47213595499958 A 8 8 0 0 1 7.999999999999998 0 Z"></path></svg>
                                        3d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Mag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-warning">Fixed</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-06
                                        </a>

                                        <small>
                                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit am
                                        </small>
                                    </td>
                                    <td>
                                        Carol Jackson
                                    </td>
                                    <td>
                                        11.03.2015 07:30 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">3,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 1 1 3.297717981660216 14.47213595499958 Z"></path><path fill="#d7d7d7" d="M 8 8 L 3.297717981660216 14.47213595499958 A 8 8 0 0 1 7.999999999999998 0 Z"></path></svg>
                                        2d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Mag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-warning">Fixed</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-05
                                        </a>

                                        <small>
                                            Content here, content here', making it look like readable English. Many desktop
                                        </small>
                                    </td>
                                    <td>
                                        Carol Jackson
                                    </td>
                                    <td>
                                        05.04.2015 08:40 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">3,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 1 1 3.297717981660216 14.47213595499958 Z"></path><path fill="#d7d7d7" d="M 8 8 L 3.297717981660216 14.47213595499958 A 8 8 0 0 1 7.999999999999998 0 Z"></path></svg>
                                        2d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Mag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-warning">Fixed</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-04
                                        </a>

                                        <small>
                                            Virginia, looked up one of the more obscure Latin words, consectetur
                                        </small>
                                    </td>
                                    <td>
                                        Monica Smith
                                    </td>
                                    <td>
                                        10.06.2014 08:10 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">5,7</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 0 1 12 14.92820323027551 Z"></path><path fill="#d7d7d7" d="M 8 8 L 12 14.92820323027551 A 8 8 0 1 1 7.999999999999998 0 Z"></path></svg>
                                        4d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Mag</button>
                                        <button class="btn btn-white btn-xs"> Cag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-warning">Fixed</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-03
                                        </a>

                                        <small>
                                            Injected humour, or randomised words which don't l
                                        </small>
                                    </td>
                                    <td>
                                        Anna Johnson
                                    </td>
                                    <td>
                                        13.05.2014 09:20 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">2,7</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 0 1 15.878462024097665 6.610814578664558 Z"></path><path fill="#d7d7d7" d="M 8 8 L 15.878462024097665 6.610814578664558 A 8 8 0 1 1 7.999999999999998 0 Z"></path></svg>
                                        3d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Cag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-danger">Bug</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-44
                                        </a>

                                        <small>
                                            This is issue with the coresponding note
                                        </small>
                                    </td>
                                    <td>
                                        Adrian Novak
                                    </td>
                                    <td>
                                        12.02.2015 10:00 am
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">0.52,1.041</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 0 1 14.933563796318165 11.990700825968545 Z"></path><path fill="#d7d7d7" d="M 8 8 L 14.933563796318165 11.990700825968545 A 8 8 0 1 1 7.999999999999998 0 Z"></path></svg>
                                        2d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Mag</button>
                                        <button class="btn btn-white btn-xs"> Rag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-danger">Bug</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-41
                                        </a>

                                        <small>
                                            Desktop publishing packages 
and web page editors now use Lorem Ipsum as their default model text
                                        </small>
                                    </td>
                                    <td>
                                        Anna Smith
                                    </td>
                                    <td>
                                        10.02.2015 05:32 am
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">3,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 1 1 3.297717981660216 14.47213595499958 Z"></path><path fill="#d7d7d7" d="M 8 8 L 3.297717981660216 14.47213595499958 A 8 8 0 0 1 7.999999999999998 0 Z"></path></svg>
                                        2d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Rag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-danger">Bug</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-34
                                        </a>

                                        <small>
                                            It is a long established fact that a reader will be
                                        </small>
                                    </td>
                                    <td>
                                        Anthony Jackson
                                    </td>
                                    <td>
                                        02.03.2015 06:02 am
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">1,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 0 1 14.92820323027551 11.999999999999998 Z"></path><path fill="#d7d7d7" d="M 8 8 L 14.92820323027551 11.999999999999998 A 8 8 0 1 1 7.999999999999998 0 Z"></path></svg>
                                        1d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Mag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-danger">Bug</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-46
                                        </a>

                                        <small>
                                            There are many variations of
 passages of Lorem Ipsum available, but the majority have suffered
                                        </small>
                                    </td>
                                    <td>
                                        Monica Proven
                                    </td>
                                    <td>
                                        01.10.2015 11:02 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">4,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 1 1 1.0717967697244921 12.000000000000004 Z"></path><path fill="#d7d7d7" d="M 8 8 L 1.0717967697244921 12.000000000000004 A 8 8 0 0 1 7.999999999999998 0 Z"></path></svg>
                                        3d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Rag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-danger">Bug</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-51
                                        </a>

                                        <small>
                                            Always free from repetition, injected humour, or non-characteristic words etc.
                                        </small>
                                    </td>
                                    <td>
                                        Alex Ferguson
                                    </td>
                                    <td>
                                        28.11.2015 05:10 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">1,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 0 1 14.92820323027551 11.999999999999998 Z"></path><path fill="#d7d7d7" d="M 8 8 L 14.92820323027551 11.999999999999998 A 8 8 0 1 1 7.999999999999998 0 Z"></path></svg>
                                        2d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="label label-danger">Bug</span>
                                    </td>
                                    <td class="issue-info">
                                        <a href="#">
                                            ISSUE-52
                                        </a>

                                        <small>
                                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit am
                                        </small>
                                    </td>
                                    <td>
                                        Mark Conor
                                    </td>
                                    <td>
                                        18.09.2015 06:20 pm
                                    </td>
                                    <td>
                                        <span style="display: none;" class="pie">3,2</span><svg width="16" height="16" class="peity"><path fill="#1ab394" d="M 8 8 L 8 0 A 8 8 0 1 1 3.297717981660216 14.47213595499958 Z"></path><path fill="#d7d7d7" d="M 8 8 L 3.297717981660216 14.47213595499958 A 8 8 0 0 1 7.999999999999998 0 Z"></path></svg>
                                        3d
                                    </td>
                                    <td class="text-right">
                                        <button class="btn btn-white btn-xs"> Tag</button>
                                        <button class="btn btn-white btn-xs"> Mag</button>
                                        <button class="btn btn-white btn-xs"> Dag</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company © 2014-2015
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery_003.js"></script>
    <script src="js/jquery.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/pace.js"></script>
    <!-- Peity -->
    <script src="js/jquery_002.js"></script>
    <!-- Peity demo data -->
    <script src="js/peity-demo.js"></script>



<div class="theme-config">
    <div class="theme-config-box">
        <div class="spin-icon">
            <i class="fa fa-cogs fa-spin"></i>
        </div>
        <div class="skin-setttings">
            <div class="title">Configuration</div>
            <div class="setings-item">
                    <span>
                        Collapse menu
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input name="collapsemenu" class="onoffswitch-checkbox" id="collapsemenu" type="checkbox">
                        <label class="onoffswitch-label" for="collapsemenu">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Fixed sidebar
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input name="fixedsidebar" class="onoffswitch-checkbox" id="fixedsidebar" type="checkbox">
                        <label class="onoffswitch-label" for="fixedsidebar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Top navbar
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input name="fixednavbar" class="onoffswitch-checkbox" id="fixednavbar" type="checkbox">
                        <label class="onoffswitch-label" for="fixednavbar">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Top navbar v.2
                        <br>
                        <small>*Primary layout</small>
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input name="fixednavbar2" class="onoffswitch-checkbox" id="fixednavbar2" type="checkbox">
                        <label class="onoffswitch-label" for="fixednavbar2">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Boxed layout
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input name="boxedlayout" class="onoffswitch-checkbox" id="boxedlayout" type="checkbox">
                        <label class="onoffswitch-label" for="boxedlayout">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="setings-item">
                    <span>
                        Fixed footer
                    </span>

                <div class="switch">
                    <div class="onoffswitch">
                        <input name="fixedfooter" class="onoffswitch-checkbox" id="fixedfooter" type="checkbox">
                        <label class="onoffswitch-label" for="fixedfooter">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="title">Skins</div>
            <div class="setings-item default-skin">
                    <span class="skin-name ">
                         <a href="#" class="s-skin-0">
                             Default
                         </a>
                    </span>
            </div>
            <div class="setings-item blue-skin">
                    <span class="skin-name ">
                        <a href="#" class="s-skin-1">
                            Blue light
                        </a>
                    </span>
            </div>
            <div class="setings-item yellow-skin">
                    <span class="skin-name ">
                        <a href="#" class="s-skin-3">
                            Yellow/Purple
                        </a>
                    </span>
            </div>
            <div class="setings-item ultra-skin">
                    <span class="skin-name ">
                        <a target="_blank" href="http://webapplayers.com/inspinia_admin-v2.5/md_skin/" class="md-skin">
                            Material Design
                        </a>
                    </span>
            </div>
        </div>
    </div>
</div>
<script>
    // Config box

    // Enable/disable fixed top navbar
    $('#fixednavbar').click(function (){
        if ($('#fixednavbar').is(':checked')){
            $(".navbar-static-top").removeClass('navbar-static-top').addClass('navbar-fixed-top');
            $("body").removeClass('boxed-layout');
            $("body").addClass('fixed-nav');
            $('#boxedlayout').prop('checked', false);

            if (localStorageSupport){
                localStorage.setItem("boxedlayout",'off');
            }

            if (localStorageSupport){
                localStorage.setItem("fixednavbar",'on');
            }
        } else{
            $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
            $("body").removeClass('fixed-nav');
            $("body").removeClass('fixed-nav-basic');
            $('#fixednavbar2').prop('checked', false);

            if (localStorageSupport){
                localStorage.setItem("fixednavbar",'off');
            }

            if (localStorageSupport){
                localStorage.setItem("fixednavbar2",'off');
            }
        }
    });

    // Enable/disable fixed top navbar
    $('#fixednavbar2').click(function (){
        if ($('#fixednavbar2').is(':checked')){
            $(".navbar-static-top").removeClass('navbar-static-top').addClass('navbar-fixed-top');
            $("body").removeClass('boxed-layout');
            $("body").addClass('fixed-nav').addClass('fixed-nav-basic');
            $('#boxedlayout').prop('checked', false);

            if (localStorageSupport){
                localStorage.setItem("boxedlayout",'off');
            }

            if (localStorageSupport){
                localStorage.setItem("fixednavbar2",'on');
            }
        } else {
            $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
            $("body").removeClass('fixed-nav').removeClass('fixed-nav-basic');
            $('#fixednavbar').prop('checked', false);

            if (localStorageSupport){
                localStorage.setItem("fixednavbar2",'off');
            }
            if (localStorageSupport){
                localStorage.setItem("fixednavbar",'off');
            }
        }
    });

    // Enable/disable fixed sidebar
    $('#fixedsidebar').click(function (){
        if ($('#fixedsidebar').is(':checked')){
            $("body").addClass('fixed-sidebar');
            $('.sidebar-collapse').slimScroll({
                height: '100%',
                railOpacity: 0.9
            });

            if (localStorageSupport){
                localStorage.setItem("fixedsidebar",'on');
            }
        } else{
            $('.sidebar-collapse').slimscroll({destroy: true});
            $('.sidebar-collapse').attr('style', '');
            $("body").removeClass('fixed-sidebar');

            if (localStorageSupport){
                localStorage.setItem("fixedsidebar",'off');
            }
        }
    });

    // Enable/disable collapse menu
    $('#collapsemenu').click(function (){
        if ($('#collapsemenu').is(':checked')){
            $("body").addClass('mini-navbar');
            SmoothlyMenu();

            if (localStorageSupport){
                localStorage.setItem("collapse_menu",'on');
            }

        } else{
            $("body").removeClass('mini-navbar');
            SmoothlyMenu();

            if (localStorageSupport){
                localStorage.setItem("collapse_menu",'off');
            }
        }
    });

    // Enable/disable boxed layout
    $('#boxedlayout').click(function (){
        if ($('#boxedlayout').is(':checked')){
            $("body").addClass('boxed-layout');
            $('#fixednavbar').prop('checked', false);
            $('#fixednavbar2').prop('checked', false);
            $(".navbar-fixed-top").removeClass('navbar-fixed-top').addClass('navbar-static-top');
            $("body").removeClass('fixed-nav');
            $("body").removeClass('fixed-nav-basic');
            $(".footer").removeClass('fixed');
            $('#fixedfooter').prop('checked', false);

            if (localStorageSupport){
                localStorage.setItem("fixednavbar",'off');
            }

            if (localStorageSupport){
                localStorage.setItem("fixednavbar2",'off');
            }

            if (localStorageSupport){
                localStorage.setItem("fixedfooter",'off');
            }


            if (localStorageSupport){
                localStorage.setItem("boxedlayout",'on');
            }
        } else{
            $("body").removeClass('boxed-layout');

            if (localStorageSupport){
                localStorage.setItem("boxedlayout",'off');
            }
        }
    });

    // Enable/disable fixed footer
    $('#fixedfooter').click(function (){
        if ($('#fixedfooter').is(':checked')){
            $('#boxedlayout').prop('checked', false);
            $("body").removeClass('boxed-layout');
            $(".footer").addClass('fixed');

            if (localStorageSupport){
                localStorage.setItem("boxedlayout",'off');
            }

            if (localStorageSupport){
                localStorage.setItem("fixedfooter",'on');
            }
        } else{
            $(".footer").removeClass('fixed');

            if (localStorageSupport){
                localStorage.setItem("fixedfooter",'off');
            }
        }
    });

    // SKIN Select
    $('.spin-icon').click(function (){
        $(".theme-config-box").toggleClass("show");
    });

    // Default skin
    $('.s-skin-0').click(function (){
        $("body").removeClass("skin-1");
        $("body").removeClass("skin-2");
        $("body").removeClass("skin-3");
    });

    // Blue skin
    $('.s-skin-1').click(function (){
        $("body").removeClass("skin-2");
        $("body").removeClass("skin-3");
        $("body").addClass("skin-1");
    });

    // Inspinia ultra skin
    $('.s-skin-2').click(function (){
        $("body").removeClass("skin-1");
        $("body").removeClass("skin-3");
        $("body").addClass("skin-2");
    });

    // Yellow skin
    $('.s-skin-3').click(function (){
        $("body").removeClass("skin-1");
        $("body").removeClass("skin-2");
        $("body").addClass("skin-3");
    });

    if (localStorageSupport){
        var collapse = localStorage.getItem("collapse_menu");
        var fixedsidebar = localStorage.getItem("fixedsidebar");
        var fixednavbar = localStorage.getItem("fixednavbar");
        var fixednavbar2 = localStorage.getItem("fixednavbar2");
        var boxedlayout = localStorage.getItem("boxedlayout");
        var fixedfooter = localStorage.getItem("fixedfooter");

        if (collapse == 'on'){
            $('#collapsemenu').prop('checked','checked')
        }
        if (fixedsidebar == 'on'){
            $('#fixedsidebar').prop('checked','checked')
        }
        if (fixednavbar == 'on'){
            $('#fixednavbar').prop('checked','checked')
        }
        if (fixednavbar2 == 'on'){
            $('#fixednavbar2').prop('checked','checked')
        }
        if (boxedlayout == 'on'){
            $('#boxedlayout').prop('checked','checked')
        }
        if (fixedfooter == 'on') {
            $('#fixedfooter').prop('checked','checked')
        }
    }
</script></body></html>