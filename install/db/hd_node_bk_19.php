<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('1','内容','Hdcms','','','','','','1','1','0','8','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('2','内容管理','Hdcms','','','','','','1','1','1','10','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('16','系统','Hdcms','','','','','','1','1','0','10','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('21','后台菜单管理','Hdcms','Node','Node','index','','','1','1','19','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('3','附件管理','Hdcms','Upload','Index','index','','','1','1','10','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('12','数据备份','Hdcms','Backup','Backup','index','','','1','1','79','100','1','1')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('10','内容相关管理','Hdcms','','','','','','1','1','1','12','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('13','栏目管理','Hdcms','Category','Category','index','','','1','1','2','11','1','1')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('14','模型管理','Hdcms','Model','Model','index','','','1','1','10','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('15','推荐位','Hdcms','Flag','Flag','index','','','1','1','10','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('19','系统设置','Hdcms','','','','','','1','1','16','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('4','管理内容','Hdcms','Content','Index','index','','','1','1','2','10','1','1')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('11','管理员设置','Hdcms','','','','','','1','1','16','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('17','管理员管理','Hdcms','Role','Admin','index','','','1','1','11','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('18','角色管理','Hdcms','Role','Role','index','','','1','1','11','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('20','网站配置','Hdcms','Config','Config','edit','','','1','1','19','90','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('5','生成静态','Hdcms','','','','','','1','1','1','11','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('6','批量更新栏目页','Hdcms','Html','Html','create_category','&','','1','1','5','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('8','生成首页','Hdcms','Html','Html','create_index','&','','1','1','5','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('9','批量更新内容页','Hdcms','Html','Html','create_content','&','','1','1','5','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('28','修改密码','Hdcms','Role','Personal','edit_password','&','','1','1','29','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('27','修改个人信息','Hdcms','Role','Personal','edit_info','','','1','1','29','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('26','我的面板','Hdcms','','','','','','1','1','0','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('29','个人信息','Hdcms','','','','','','1','1','26','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('61','一键更新','Hdcms','Html','Html','create_all','','一键更新全站','1','1','5','100','1','1')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('30','会员','Hdcms','','','','','','1','1','0','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('31','会员管理','Hdcms','','','','','','1','1','30','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('32','会员管理','Hdcms','Group','User','index','','','1','1','31','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('33','审核会员','Hdcms','Group','User','index','state=0','','1','1','31','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('34','会员组管理','Hdcms','','','','','','1','1','30','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('35','管理会员组','Hdcms','Group','Group','index','','','1','1','34','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('36','模板','Hdcms','','','','','','1','1','0','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('37','模板管理','Hdcms','','','','','','1','1','36','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('38','模板风格','Hdcms','Template','Template','style_list','','','1','1','37','90','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('39','模板文件','Hdcms','Template','Template','show_dir','','','1','1','37','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('70','标签云','Hdcms','Tag','Tag','index','','','1','1','10','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('69','搜索关键词','Hdcms','Search','Manage','index','3','','1','1','79','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('79','其他操作','Hdcms','','','','','','1','1','1','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('80','导航菜单','Hdcms','Navigation','Navigation','index','','','1','1','79','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('91','插件','Hdcms','','','','','','1','1','0','1000','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('92','插件管理','Hdcms','','','','','','1','1','91','99','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('93','插件管理','Hdcms','Plugin','Plugin','Plugin_list','','','1','1','92','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('94','正在使用','Hdcms','Plugin','','','','','1','1','91','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('153','反馈','Hdcms','','','','','','1','2','0','2000','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('154','问题反馈','Hdcms','','','','','','1','2','153','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('178','友情链接','Plugin','Link','Manage','index','','','1','2','94','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('155','提交BUG','Hdcms','Bug','Bug','feedback','','','1','2','154','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('156','BUG管理','Hdcms','Bug','Bug','showBug','','','1','1','154','100','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."node (`nid`,`title`,`app_group`,`app`,`control`,`method`,`param`,`comment`,`state`,`type`,`pid`,`list_order`,`is_system`,`favorite`) VALUES('179','评论管理','Hdcms','Comment','Manage','index','','','1','1','10','100','1','1')");
