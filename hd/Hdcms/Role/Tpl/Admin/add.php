<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>管理员管理</title>
    <hdjs/>
    <js file="__CONTROL_TPL__/js/add_validate.js"/>
    <css file="__CONTROL_TPL__/css/css.css"/>
</head>
<body>
<div class="wrap">
    <div class="menu_list">
        <ul>
            <li><a href="{|U:'index'}">管理员</a></li>
            <li><a href="javascript:;" class="action">添加管理员</a></li>
        </ul>
    </div>
    <div class="title-header">管理员信息</div>
    <form action="{|U:'add'}" method="post" class="form-inline hd-form" onsubmit="return hd_submit(this,'__CONTROL__')">
        <input type="hidden" name="admin" value="1"/>
        <table class="table1">
            <tr>
                <th class="w100">帐号</th>
                <td>
                    <input type="text" name="username" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">昵称</th>
                <td>
                    <input type="text" name="nickname" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">所属角色</th>
                <td>
                    <select name="rid">
                        <list from="$role" name="r">
                            <option value="{$r.rid}">{$r.rname}</option>
                        </list>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="w100">密码</th>
                <td>
                    <input type="password" name="password" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">确认密码</th>
                <td>
                    <input type="password" name="c_password" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">邮箱</th>
                <td>
                    <input type="text" name="email" class="w200"/>
                </td>
            </tr>
        </table>
        <div class="position-bottom">
            <input type="submit" class="hd-success" value="确定"/>
            <input type="button" class="hd-cancel" value="取消" onclick="location.href='__CONTROL__'"/>
        </div>
    </form>
</div>
</body>
</html>