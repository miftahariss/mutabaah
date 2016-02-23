<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> <?php echo $nama; ?> Mutaba'ah Chart <?php echo date('Y'); ?>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="<?php echo base_url(); ?>user/detail/<?php echo $this->session->userdata('id'); ?>">Detail</a>
                                        </li>
                                        <!-- <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i> Twitter
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <a class="twitter-timeline" href="https://twitter.com/info_hamasah" data-widget-id="701996016342446080">Tweets by @info_hamasah</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Calendar
                        </div>
                        <div class="panel-body">
                            <div style="margin:0px auto;text-align:center;width:150px;height:150px;"><embed src="http://widgets.al-habib.info/images/Protected_hijricalendarsquare03_wpd.swf" width="150" height="150" flashvars="&col1=ff0000&col2=ff0000&dayAdd=0&cal=true" swliveconnect="true" quality="best" loop="false" menu="false" wmode="transparent" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" /><br><img style="visibility:hidden;width:0px;height:0px;" border=0 width=0 height=0 src="http://widgets.al-habib.info/images/blank.gif?_alhacid=1456204198563"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>
                            Jadwal Sholat
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!--start code Widget Jadwal Sholat wilayah (KOTA JAKARTA SELATAN/DKI JAKARTA) --><center><iframe src="http://bimasislam.kemenag.go.id/widget/jadwalshalat/66f7eda1bc2d9a912ef5b844bee2905952669272" width="240" style="background : transparent" height="310px"  frameborder="0" scrolling="no"> </iframe></center><!--end code Widget Jadwal Sholat -->
                        </div>
                        <!-- /.panel-body -->
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->