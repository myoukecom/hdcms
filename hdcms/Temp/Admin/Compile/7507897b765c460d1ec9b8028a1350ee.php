<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>水印设置</title>
    <link type="text/css" rel="stylesheet" href="http://localhost/hdcms/hdcms/App/Admin/Tpl/Static/Css/common.css"/>
    <script type='text/javascript' src='http://localhost/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
    <link href="http://localhost/hdphp/hdphp/Extend/Org/HdUi/css/hdui.css" rel="stylesheet" media="screen"><script src="http://localhost/hdphp/hdphp/Extend/Org/HdUi/js/hdui.js"></script>
</head>
<body>
<div class="right_content">
    <form action="<?php echo U(update_code);?>" method="post" enctype="multipart/form-data">
        <div class="nav">
            <table class="table">
                <tr>
                    <th class="w200">验证码宽度</th>
                    <td>
                        <input type="text" class="w300" name="CODE_WIDTH" value="<?php echo C("CODE_WIDTH");?>"/>
                    </td>
                </tr>
                <tr>
                    <th class="w200">验证码高度</th>
                    <td>
                        <input type="text" class="w300" name="CODE_HEIGHT" value="<?php echo C("CODE_HEIGHT");?>"/>
                    </td>
                </tr>
                <tr>
                    <th class="w200">背景颜色</th>
                    <td>
                        <input type="text" class="w300" name="CODE_BG_COLOR" value="<?php echo C("CODE_BG_COLOR");?>"/>
                    </td>
                </tr>
                <tr>
                    <th class="w200">文字数量</th>
                    <td>
                        <input type="text" class="w300" name="CODE_LEN" value="<?php echo C("CODE_LEN");?>"/>
                    </td>
                </tr>
                <tr>
                    <th class="w200">字体大小</th>
                    <td>
                        <input type="text" class="w300" name="CODE_FONT_SIZE" value="<?php echo C("CODE_FONT_SIZE");?>"/>
                    </td>
                </tr>
                <tr>
                    <th class="w200">字体颜色</th>
                    <td>
                        <input type="text" class="w300" name="CODE_FONT_COLOR" value="<?php echo C("CODE_FONT_COLOR");?>"/>
                        <span class="label">不填，表示随机色</span>
                    </td>
                </tr>
            </table>
        </div>
        <!---------提交修改----------->
        <div class="send">
            <input type="submit" value="修改配置" class="btn"/>
        </div>
    </form>
    <!---------提交修改----------->
</div>
</body>
</html>