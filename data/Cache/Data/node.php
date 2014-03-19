<?php if(!defined('HDPHP_PATH'))exit;
return array (
  1 => 
  array (
    'nid' => '1',
    'title' => '内容',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '0',
    'list_order' => '8',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 1,
    '_html' => '',
    '_name' => '内容',
  ),
  2 => 
  array (
    'nid' => '2',
    'title' => '内容管理',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '1',
    'list_order' => '10',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 内容管理',
  ),
  4 => 
  array (
    'nid' => '4',
    'title' => '管理内容',
    'app_group' => 'Hdcms',
    'app' => 'Content',
    'control' => 'Content',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '2',
    'list_order' => '10',
    'is_system' => '0',
    'favorite' => '1',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 管理内容',
  ),
  13 => 
  array (
    'nid' => '13',
    'title' => '栏目管理',
    'app_group' => 'Hdcms',
    'app' => 'Category',
    'control' => 'Category',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '2',
    'list_order' => '11',
    'is_system' => '0',
    'favorite' => '1',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 栏目管理',
  ),
  81 => 
  array (
    'nid' => '81',
    'title' => '单页面',
    'app_group' => 'Hdcms',
    'app' => 'Single',
    'control' => 'single',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '2',
    'list_order' => '12',
    'is_system' => '0',
    'favorite' => '1',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 单页面',
  ),
  5 => 
  array (
    'nid' => '5',
    'title' => '生成静态',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '1',
    'list_order' => '11',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 生成静态',
  ),
  6 => 
  array (
    'nid' => '6',
    'title' => '批量更新栏目页',
    'app_group' => 'Hdcms',
    'app' => 'Html',
    'control' => 'Html',
    'method' => 'create_category',
    'param' => '&',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '5',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 批量更新栏目页',
  ),
  8 => 
  array (
    'nid' => '8',
    'title' => '生成首页',
    'app_group' => 'Hdcms',
    'app' => 'Html',
    'control' => 'Html',
    'method' => 'create_index',
    'param' => '&',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '5',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 生成首页',
  ),
  9 => 
  array (
    'nid' => '9',
    'title' => '批量更新内容页',
    'app_group' => 'Hdcms',
    'app' => 'Html',
    'control' => 'Html',
    'method' => 'create_content',
    'param' => '&',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '5',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '1',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 批量更新内容页',
  ),
  61 => 
  array (
    'nid' => '61',
    'title' => '一键更新',
    'app_group' => 'Hdcms',
    'app' => 'Html',
    'control' => 'Html',
    'method' => 'create_all',
    'param' => '',
    'comment' => '一键更新全站',
    'state' => '1',
    'type' => '1',
    'pid' => '5',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 一键更新',
  ),
  10 => 
  array (
    'nid' => '10',
    'title' => '内容相关管理',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '1',
    'list_order' => '12',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 内容相关管理',
  ),
  3 => 
  array (
    'nid' => '3',
    'title' => '附件管理',
    'app_group' => 'Hdcms',
    'app' => 'Upload',
    'control' => 'Index',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '10',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 附件管理',
  ),
  14 => 
  array (
    'nid' => '14',
    'title' => '模型管理',
    'app_group' => 'Hdcms',
    'app' => 'Model',
    'control' => 'Model',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '10',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 模型管理',
  ),
  15 => 
  array (
    'nid' => '15',
    'title' => '推荐位',
    'app_group' => 'Hdcms',
    'app' => 'Flag',
    'control' => 'Flag',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '10',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 推荐位',
  ),
  70 => 
  array (
    'nid' => '70',
    'title' => '标签云',
    'app_group' => 'Hdcms',
    'app' => 'Tag',
    'control' => 'Tag',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '10',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 标签云',
  ),
  79 => 
  array (
    'nid' => '79',
    'title' => '其他操作',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '1',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 其他操作',
  ),
  12 => 
  array (
    'nid' => '12',
    'title' => '数据备份',
    'app_group' => 'Hdcms',
    'app' => 'Backup',
    'control' => 'Backup',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '79',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 数据备份',
  ),
  69 => 
  array (
    'nid' => '69',
    'title' => '搜索关键词',
    'app_group' => 'Hdcms',
    'app' => 'Search',
    'control' => 'Manage',
    'method' => 'index',
    'param' => '3',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '79',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 搜索关键词',
  ),
  80 => 
  array (
    'nid' => '80',
    'title' => '导航菜单',
    'app_group' => 'Hdcms',
    'app' => 'Navigation',
    'control' => 'Navigation',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '79',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 导航菜单',
  ),
  16 => 
  array (
    'nid' => '16',
    'title' => '系统',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '0',
    'list_order' => '10',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 1,
    '_html' => '',
    '_name' => '系统',
  ),
  11 => 
  array (
    'nid' => '11',
    'title' => '管理员设置',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '16',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 管理员设置',
  ),
  17 => 
  array (
    'nid' => '17',
    'title' => '管理员管理',
    'app_group' => 'Hdcms',
    'app' => 'Role',
    'control' => 'Admin',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '11',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 管理员管理',
  ),
  18 => 
  array (
    'nid' => '18',
    'title' => '角色管理',
    'app_group' => 'Hdcms',
    'app' => 'Role',
    'control' => 'Role',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '11',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 角色管理',
  ),
  19 => 
  array (
    'nid' => '19',
    'title' => '系统设置',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '16',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 系统设置',
  ),
  20 => 
  array (
    'nid' => '20',
    'title' => '网站配置',
    'app_group' => 'Hdcms',
    'app' => 'Config',
    'control' => 'Config',
    'method' => 'edit',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '19',
    'list_order' => '90',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 网站配置',
  ),
  21 => 
  array (
    'nid' => '21',
    'title' => '后台菜单管理',
    'app_group' => 'Hdcms',
    'app' => 'Node',
    'control' => 'Node',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '19',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 后台菜单管理',
  ),
  26 => 
  array (
    'nid' => '26',
    'title' => '我的面板',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '0',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 1,
    '_html' => '',
    '_name' => '我的面板',
  ),
  29 => 
  array (
    'nid' => '29',
    'title' => '个人信息',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '26',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 个人信息',
  ),
  27 => 
  array (
    'nid' => '27',
    'title' => '修改个人信息',
    'app_group' => 'Hdcms',
    'app' => 'Role',
    'control' => 'Personal',
    'method' => 'edit_info',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '29',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 修改个人信息',
  ),
  28 => 
  array (
    'nid' => '28',
    'title' => '修改密码',
    'app_group' => 'Hdcms',
    'app' => 'Role',
    'control' => 'Personal',
    'method' => 'edit_password',
    'param' => '&',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '29',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 修改密码',
  ),
  30 => 
  array (
    'nid' => '30',
    'title' => '会员',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '0',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 1,
    '_html' => '',
    '_name' => '会员',
  ),
  31 => 
  array (
    'nid' => '31',
    'title' => '会员管理',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '30',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 会员管理',
  ),
  32 => 
  array (
    'nid' => '32',
    'title' => '会员管理',
    'app_group' => 'Hdcms',
    'app' => 'Group',
    'control' => 'User',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '31',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 会员管理',
  ),
  33 => 
  array (
    'nid' => '33',
    'title' => '审核会员',
    'app_group' => 'Hdcms',
    'app' => 'Group',
    'control' => 'User',
    'method' => 'index',
    'param' => 'state=0',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '31',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 审核会员',
  ),
  34 => 
  array (
    'nid' => '34',
    'title' => '会员组管理',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '30',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 会员组管理',
  ),
  35 => 
  array (
    'nid' => '35',
    'title' => '管理会员组',
    'app_group' => 'Hdcms',
    'app' => 'Group',
    'control' => 'Group',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '34',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 管理会员组',
  ),
  36 => 
  array (
    'nid' => '36',
    'title' => '模板',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '0',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 1,
    '_html' => '',
    '_name' => '模板',
  ),
  37 => 
  array (
    'nid' => '37',
    'title' => '模板管理',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '36',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 模板管理',
  ),
  38 => 
  array (
    'nid' => '38',
    'title' => '模板风格',
    'app_group' => 'Hdcms',
    'app' => 'Template',
    'control' => 'Template',
    'method' => 'style_list',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '37',
    'list_order' => '90',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 模板风格',
  ),
  39 => 
  array (
    'nid' => '39',
    'title' => '模板文件',
    'app_group' => 'Hdcms',
    'app' => 'Template',
    'control' => 'Template',
    'method' => 'show_dir',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '37',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 模板文件',
  ),
  40 => 
  array (
    'nid' => '40',
    'title' => 'JS标签调用',
    'app_group' => 'Hdcms',
    'app' => 'TemplateTag',
    'control' => 'CustomJs',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '37',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ JS标签调用',
  ),
  91 => 
  array (
    'nid' => '91',
    'title' => '插件',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '2',
    'pid' => '0',
    'list_order' => '1000',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 1,
    '_html' => '',
    '_name' => '插件',
  ),
  92 => 
  array (
    'nid' => '92',
    'title' => '插件管理',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '91',
    'list_order' => '99',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 插件管理',
  ),
  93 => 
  array (
    'nid' => '93',
    'title' => '插件管理',
    'app_group' => 'Hdcms',
    'app' => 'Plugin',
    'control' => 'Plugin',
    'method' => 'Plugin_list',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '92',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 插件管理',
  ),
  94 => 
  array (
    'nid' => '94',
    'title' => '正在使用',
    'app_group' => 'Hdcms',
    'app' => 'Plugin',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '91',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 正在使用',
  ),
  157 => 
  array (
    'nid' => '157',
    'title' => '友情链接',
    'app_group' => 'Plugin',
    'app' => 'Link',
    'control' => 'Manage',
    'method' => 'index',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '2',
    'pid' => '94',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => true,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ 友情链接',
  ),
  153 => 
  array (
    'nid' => '153',
    'title' => '反馈',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '2',
    'type' => '1',
    'pid' => '0',
    'list_order' => '2000',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 1,
    '_html' => '',
    '_name' => '反馈',
  ),
  154 => 
  array (
    'nid' => '154',
    'title' => '问题反馈',
    'app_group' => 'Hdcms',
    'app' => '',
    'control' => '',
    'method' => '',
    'param' => '',
    'comment' => '',
    'state' => '2',
    'type' => '1',
    'pid' => '153',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 2,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '├─ 问题反馈',
  ),
  155 => 
  array (
    'nid' => '155',
    'title' => '提交BUG',
    'app_group' => 'Hdcms',
    'app' => 'Bug',
    'control' => 'Bug',
    'method' => 'feedback',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '2',
    'pid' => '154',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => true,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;├─ 提交BUG',
  ),
  156 => 
  array (
    'nid' => '156',
    'title' => 'BUG管理',
    'app_group' => 'Hdcms',
    'app' => 'Bug',
    'control' => 'Bug',
    'method' => 'showBug',
    'param' => '',
    'comment' => '',
    'state' => '1',
    'type' => '1',
    'pid' => '154',
    'list_order' => '100',
    'is_system' => '0',
    'favorite' => '0',
    '_level' => 3,
    '_html' => '',
    '_first' => false,
    '_end' => false,
    '_name' => '│&nbsp;&nbsp;&nbsp;&nbsp;└─ BUG管理',
  ),
);
?>