<?php if(!defined('PIGCMS_PATH')) exit('deny access!');?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>下级分销商 - <?php echo $config['site_name'];?>分销平台 | <?php if (empty($_SESSION['sync_store'])) { ?><?php echo $config['site_name'];?><?php } else { ?>微店系统<?php } ?></title>
    <meta name="copyright" content="<?php echo $config['site_url'];?>"/>
    <link href="<?php echo TPL_URL;?>css/base.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo TPL_URL;?>css/fx.css" type="text/css" rel="stylesheet"/>
    <link href="./static/css/jquery.ui.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="./static/js/jquery.min.js"></script>
    <script type="text/javascript" src="./static/js/layer/layer.min.js"></script>
    <script type="text/javascript" src="./static/js/area/area.min.js"></script>
    <script type="text/javascript" src="./static/js/plugin/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo TPL_URL;?>js/base.js"></script>
    <script type="text/javascript">var load_url="<?php dourl('load');?>", drp_approve_url="<?php dourl('drp_approve');?>", drp_status_url="<?php dourl('drp_status');?>";</script>
    <script type="text/javascript" src="<?php echo TPL_URL;?>js/fx_next_seller.js"></script>
    <style type="text/css">
        .popover-inner {
            padding: 1px;
            background-color: #e5e5e5;
            -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
        }
    </style>
    <style type="text/css">
        .ui-nav {
            border: none;
            background: none;
            position: relative;
            border-bottom: 1px solid #e5e5e5;
            margin-bottom: 15px;
        }
        .pull-left {
            float: left;
        }
        .ui-nav ul {
            zoom: 1;
            margin-bottom: -1px;
            margin-left: 1px;
        }
        .ui-nav li {
            float: left;
            margin-left: -1px;
        }
        .ui-nav li a {
            display: inline-block;
            padding: 0 12px;
            line-height: 32px;
            color: #333;
            border: 1px solid #e5e5e5;
            background: #f8f8f8;
            min-width: 80px;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .ui-nav li.active a {
            font-size: 100%;
            border-bottom-color: #fff;
            background: #fff;
            margin:0px;
            line-height: 32px;
        }
    </style>
</head>
<?php
$dstributorList = array(
    '一级分销商','二级分销商','三级分销商','四级分销商',
    '五级分销商','六级分销商','七级分销商','八级分销商',
    '九级分销商'
);
$sellerLevel = option('config.max_store_drp_level');
?>
<body class="font14 usercenter">
<?php include display('public:header');?>
<div class="wrap_1000 clearfix container">
    <?php include display('sidebar');?>
    <div class="app">
        <div class="app-inner clearfix">
            <div class="app-init-container">
                <nav class="ui-nav clearfix">
                    <ul class="pull-left">
                            <?php foreach ($dstributorList as $k=>$dstributor):?>
                                <?php if($k >= $level && $k < $level+2):?>
                                    <?php if($k < $sellerLevel) {?>
                                    <li class="<?php echo $k==0 ? 'active': ''?>">
                                        <a href="#<?php echo $k+1;?>" data-level="<?php echo $k+1;?>"><?php echo $dstributor;?></a>
                                    </li>
                                    <?php } ?>
                                <?php endif;?>
                            <?php endforeach;?>
                    </ul>
                </nav>
                <div class="nav-wrapper--app"></div>
                <div class="app__content"></div>
            </div>
        </div>
    </div>
</div>
<?php include display('public:footer');?>
<div id="nprogress"><div class="bar" role="bar"><div class="peg"></div></div><div class="spinner" role="spinner"><div class="spinner-icon"></div></div></div>
</body>
</html>