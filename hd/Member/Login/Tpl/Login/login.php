<!DOCTYPE html>
<html>
<head>
    <title>{$hd.config.webname}</title>
    <link rel="shortcut icon" href="favicon.ico">
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <jquery/>
    <bootstrap/>
    <link rel="stylesheet/less" href="__CONTROL_TPL__/css/reg.less?ver=1.0 "/>
    <less/>
    <script>
        $(function () {
            var error = '{$error}';
            if (error) {
                $("div#error_tips").show().html(error);
                setTimeout(function(){ $("div#error_tips").hide().html('')},5000);
            }
        })
    </script>
</head>
<body>
<div class="header container">
    <a href="__ROOT__">
       后盾网 人人做后盾
    </a>
</div>
<div class="content container">
    <header>
        <span>盾友注册</span>

        <p>拓展人脉关系，体验分享乐趣，让技术真正属于你，后盾网 人人做后盾！</p>
        <strong>客户服务邮箱 <a href="mailto:{$hd.config.email}">{$hd.config.email}</a></strong>
    </header>
    <article class="row">
        <div class="field col-md-8">
            <div id="error_tips" class="alert alert-warning " style="display: none"></div>
            <form class="form-horizontal" role="form" action="__URL__" method="post">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">帐　号：</label>
                    <div class="col-sm-7">
                        <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="请输入帐号或邮箱" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">密　码：</label>
                    <div class="col-sm-7">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required=""/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-lg">会员登录</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="field col-md-4">
            > 还没有游戏葡萄 账号？ <a href="?a=Login&c=Login&m=reg&g=Member">立即注册</a>
        </div>
    </article>
</div>
</body>
</html>