<!DOCTYPE html>
<html>
<head>
    <title>我的消息</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <hdjs/>
    <bootstrap/>
    <link rel="stylesheet" type="text/css" href="__CONTROL_TPL__/css/message.css?ver=1.0"/>
    <hdcms/>
</head>
<body>
<load file="__GROUP__/Member/Public/block/top_menu.php"/>
<article class="center-block main">
    <!--左侧导航start-->
    <load file="__GROUP__/Member/Public/block/left_menu.php"/>
    <!--左侧导航end-->
    <section class="article">
        <form onsubmit="return hd_submit(this,'{|U:'show',array('g'=>'Member','from_uid'=>$_GET['from_uid'])}')" action="{|U:'reply',array('g'=>'Member')}">
            <input type="hidden" name="to_uid" value="{$hd.get.from_uid}"/>
            <table>
                <tr>
                    <td>
                        <textarea name="content" style="width: 100%;height: 80px;"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="回复" class="hd-success"/>
                    </td>
                </tr>
            </table>
        </form>
        <div id="message">
            <list from="$data" name="d">
                <if value="$d.from_uid eq $_SESSION['uid']">
                    <div class="user">
                        <div class="icon">
                            <a href="__WEB__?{$d.from_uid}" target="_blank">
                                <img src="{|U:get_user_icon($d['from_uid'])}" onmouseover="user.show(this,{$hd.session.uid})"/>
                            </a>
                        </div>
                        <p>{$d.content}</p>
                    </div>
                <else/>
                    <div class="from">

                        <div class="icon">
                            <a href="__WEB__?{$d.from_uid}" target="_blank">
                                <img src="{|U:get_user_icon($d['from_uid'])}" onmouseover="user.show(this,{$d.from_uid})"/>
                            </a>
                        </div>
                        <p>{$d.content}</p>
                    </div>
               </if>
            </list>
        </div>
    </section>

    <div class="page1 h30">
        {$page}
    </div>
</article>
<footer class="container">
    <nav>
        <a href="#">PHP培训</a>
        <a href="#">HDPHP框架</a>
        <a href="#">论坛</a>
    </nav>
    Copyright © 2014 so.com All Rights Reserved <a href="#">京公安网备11000000000006</a>
</footer>
</body>
</html>