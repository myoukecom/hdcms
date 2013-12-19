<?php if(!defined("HDPHP_PATH"))exit;C("DEBUG_SHOW",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>welcome</title>
    <script type='text/javascript' src='http://localhost/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<script src="http://localhost/hdphp/hdphp/Extend/Org/hdui/js/lhgcalendar.min.js"></script>
<link href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
<!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]--><link href='http://localhost/hdphp/hdphp/Extend/Org/hdui/css/hdui.css' rel='stylesheet' media='screen'>
<script src='http://localhost/hdphp/hdphp/Extend/Org/hdui/js/hdui.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/hdcms';
		WEB = 'http://localhost/hdcms/index.php';
		URL = 'http://localhost/hdcms/index.php?a=Hdcms&c=Index&m=feedback';
		HDPHP = 'http://localhost/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
		APP = 'http://localhost/hdcms/index.php?a=Hdcms';
		CONTROL = 'http://localhost/hdcms/index.php?a=Hdcms&c=Index';
		METH = 'http://localhost/hdcms/index.php?a=Hdcms&c=Index&m=feedback';
		GROUP = 'http://localhost/hdcms/hdphp';
		TPL = 'http://localhost/hdcms/hdphp/hdcms/Hdcms/Tpl';
		CONTROLTPL = 'http://localhost/hdcms/hdphp/hdcms/Hdcms/Tpl/Index';
		STATIC = 'http://localhost/hdcms/hdphp/hdcms/Hdcms/Tpl/Static';
		PUBLIC = 'http://localhost/hdcms/hdphp/hdcms/Hdcms/Tpl/Public';
		COMMON = 'http://localhost/hdcms/Common';
</script>
    <link type="text/css" rel="stylesheet" href="http://localhost/hdcms/hdphp/hdcms/Hdcms/Tpl/Index/css/welcome.css"/>
    <script type="text/javascript" src="http://localhost/hdcms/hdphp/hdcms/Hdcms/Tpl/Index/js/welcome.js"></script>
</head>
<body>
<div class="wrap">

    <div class="table_title">安全提示</div>
    <div class="help">
        <p>1. 默认应用组目录hdphp(及子目录)设置为644,文件设置为755</p>

        <p>2. 建议删除安装目录install</p>
    </div>
    <div class="table_title">HDCMS动态</div>
    <div class="help">
        <p><a href="#">[2013-2-22] 增加DISCUZ论坛整合 [已经完成]</a></p>
        <p><a href="#">[2013-2-22] 增加SINA整接口</a></p>
        <a href="#">>>查看所有动态</a>
    </div>
    <div class="table_title">系统信息</div>
    <table class="table2">
        <tr>
            <td class="w80">HDCMS版本</td>
            <td>
                <?php echo C("VERSION");?>
            </td>
        </tr>
        <tr>
            <td class="w80">核心框架</td>
            <td>
                <a href="http://www.hdphp.com" target="_blank">HDPHP</a>
            </td>
        </tr>
        <tr>
            <td>PHP版本</td>
            <td>
                <?php echo PHP_OS; ?>
            </td>
        </tr>
        <tr>
            <td>运行环境</td>
            <td>
                <?php echo $_SERVER['SERVER_SOFTWARE'];?>
            </td>
        </tr>
        <tr>
            <td>允许上传大小</td>
            <td>
                <?php echo ini_get("upload_max_filesize"); ?>
            </td>
        </tr>
        <tr>
            <td>剩余空间</td>
            <td>
                <?php echo get_size(disk_free_space(".")); ?>
            </td>
        </tr>
    </table>
    <div class="table_title">程序团队</div>
    <table class="table2">
        <tr>
            <td class="w80">版权所有</td>
            <td>
                <a href="http://www.houdunwang.com" target="_blank">后盾网</a> &
                <a href="http://www.hdphp.com/hdcms" target="_blank">HDCMS</a>
            </td>
        </tr>
        <tr>
            <td>项目负责人</td>
            <td>
                向军
            </td>
        </tr>
        <tr>
            <td>鸣谢</td>
            <td>
                <a href="http://bbs.houdunwang.com" target="_blank">后盾网所有盾友</a>

            </td>
        </tr>
    </table>
    <form action="http://localhost/hdcms/index.php?a=Bug&c=Bug&m=suggest" method="post">
        <table class="table2">
            <tr>
                <td class="w80">类型</td>
                <td>
                    <select name="type">
                        <option value="1">BUG反馈</option>
                        <option value="2">功能建议</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="w80">反馈者</td>
                <td>
                    <input type="text" name="username"/>
                </td>
            </tr>
            <tr>
                <td class="w80">邮箱</td>
                <td>
                    <input type="text" name="email"/>
                </td>
            </tr>
            <tr>
                <td class="w80">内容描述</td>
                <td>
                    <textarea name="content" class="w500 h200"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="提交" class="btn btn-success"/>
    </form>
</div>
</body>
</html>