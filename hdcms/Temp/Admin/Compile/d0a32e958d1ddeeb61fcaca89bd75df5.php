<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_ERROR",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>图片上传</title>
    <script type='text/javascript' src='http://localhost/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
</head>
<body>
<script>
    var top_document = window.parent.document;//添加页面
    var input = $(top_document).find("*[name='<?php echo $_GET['name'];?>']");//缩略图表单
    var _div = $(top_document).find("div.<?php echo $_GET['div'];?>");
    if (<?php echo $stat;?>) {
        $(input).val("<?php echo $img_path;?>");
        _div.html("<img src='http://localhost/hdcms/<?php echo $img_path;?>' style='width:160px;height:100px;'/>");
    } else {
        alert("上传失败");
    }
</script>
</body>
</html>