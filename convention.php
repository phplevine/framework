<?php
// +----------------------------------------------------------------------
// | TOPThink [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://topthink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

// 惯例配置文件
return [
    'app_debug'         =>  true,  // 调试模式
    'app_status'        =>  'debug',// 调试模式状态
    'var_module'        =>  'm',    // 模块变量名
    'var_controller'    =>  'c',    // 控制器变量名
    'var_action'        =>  'a',    // 操作变量名
    'var_pathinfo'      =>  's',    // PATHINFO变量名 用于兼容模式
    'pathinfo_fetch'    =>  'ORIG_PATH_INFO,REDIRECT_PATH_INFO,REDIRECT_URL',
    'pathinfo_depr'     =>  '/',    // pathinfo分隔符
    'require_module'    =>  true,   // 是否显示模块
    'default_module'    =>  'index',  // 默认模块名
    'require_controller'  =>  true,   // 是否显示控制器
    'default_controller'  =>  'index',    // 默认控制器名
    'default_action'    =>  'index',    // 默认操作名
    'action_suffix'     =>  '', // 操作方法后缀
    'url_model'         =>  1,  // URL模式
    'base_url'          =>  $_SERVER["SCRIPT_NAME"],    // 基础URL路径
    'url_html_suffix'   =>  '.html',
    'url_params_bind'   =>  false,  // url变量绑定
    'exception_tmpl'    =>  THINK_PATH.'Tpl/think_exception.tpl',// 异常页面的模板文件
    'tmpl_action_error'     => THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认错误跳转对应的模板文件
    'tmpl_action_success'   => THINK_PATH.'Tpl/dispatch_jump.tpl', // 默认成功跳转对应的模板文件

    /* 错误设置 */
    'error_message'         => '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
    'error_page'            => '',	// 错误定向页面
    'show_error_msg'        => false,    // 显示错误信息

    /* 数据库设置 */
    'db_type'               => 'mysql',     // 数据库类型
    'db_host'               => 'localhost', // 服务器地址
    'db_name'               => '',          // 数据库名
    'db_user'               => 'root',      // 用户名
    'db_pwd'                => '',          // 密码
    'db_port'               => '',        // 端口
    'db_prefix'             => 'think_',    // 数据库表前缀
    'db_fields_cache'       => true,        // 启用字段缓存
    'db_charset'            => 'utf8',      // 数据库编码默认采用utf8
    'db_deploy_type'        => 0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'db_rw_separate'        => false,       // 数据库读写是否分离 主从式有效
    'db_master_num'         => 1, // 读写分离后 主服务器数量
    'db_slave_no'           => '', // 指定从服务器序号
];