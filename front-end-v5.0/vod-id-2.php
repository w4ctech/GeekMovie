<!DOCTYPE html>
<html lang="zh">
    <head>
        <title>
            电视剧 - Jike 极客影院
        </title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="IE=EmulateIE10" http-equiv="X-UA-Compatible"/>
        <meta content="webkit|ie-comp|ie-stand" name="renderer">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="iconfont.css" rel="stylesheet" type="text/css"/>
        <link href="stui_block.css" rel="stylesheet" type="text/css"/>
        <link href="stui_block_color.css" rel="stylesheet" type="text/css"/>
        <link href="stui_default.css" rel="stylesheet" type="text/css"/>
        <link href="stui_custom.css" rel="stylesheet" type="text/css"/>
        <link href="custom.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="stui_block.js" type="text/javascript"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>
        <script src="jquery.cookie.min.js" type="text/javascript"></script>
        <script src="home.js" type="text/javascript"></script>
    </head>
    <body>
    	<?php include('dbconnection.php') ?>
        <?php include('page_head.php') ?>
        <div class="container" >
            <div class="row">
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box clearfix">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <img src="icon_5.png"/>
                                    <a href="vod-type.php?movtype=欧美剧" style="font-weight: 600;">
                                    	热门欧美剧
                                    </a>
                                </h3>
                                <ul class="nav nav-tabs pull-right hidden-sm hidden-xs" style="font-weight: 600;">
                                </ul>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <?php include('tv_list_oumeiju.php'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box clearfix">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <img src="icon_5.png"/>
                                    <a href="vod-type.php?movtype=国产剧" style="font-weight: 600;">
                                    	热门国产剧
                                    </a>
                                </h3>
                                <ul class="nav nav-tabs pull-right hidden-sm hidden-xs" style="font-weight: 600;">
                                </ul>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <?php include('tv_list_guochanju.php'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box clearfix">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <img src="icon_5.png"/>
                                    <a href="vod-type.php?movtype=韩剧" style="font-weight: 600;">
                                    	热门韩剧
                                    </a>
                                </h3>
                                <ul class="nav nav-tabs pull-right hidden-sm hidden-xs" style="font-weight: 600;">
                                </ul>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <?php include('tv_list_hanju.php'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box clearfix">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <img src="icon_5.png"/>
                                    <a href="vod-type.php?movtype=日剧" style="font-weight: 600;">
                                    	热门日剧
                                    </a>
                                </h3>
                                <ul class="nav nav-tabs pull-right hidden-sm hidden-xs" style="font-weight: 600;">
                                </ul>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <?php include('tv_list_riju.php'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box clearfix">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <img src="icon_5.png"/>
                                    <a href="vod-type.php?movtype=港剧" style="font-weight: 600;">
                                    	热门港剧
                                    </a>
                                </h3>
                                <ul class="nav nav-tabs pull-right hidden-sm hidden-xs" style="font-weight: 600;">
                                </ul>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <?php include('tv_list_gangju.php'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="stui-pannel stui-pannel-bg clearfix">
                    <div class="stui-pannel-box clearfix">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <img src="icon_5.png"/>
                                    <a href="vod-type.php?movtype=台剧" style="font-weight: 600;">
                                    	热门台剧
                                    </a>
                                </h3>
                                <ul class="nav nav-tabs pull-right hidden-sm hidden-xs" style="font-weight: 600;">
                                </ul>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <ul class="stui-vodlist clearfix">
                                <?php include('tv_list_taiju.php'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php include('page_foot.php') ?>
    </body>
</html>