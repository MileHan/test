<?php
/**
 * Created by PhpStorm.
 * User: handa
 * Date: 2018/3/2
 * Time: 下午12:32
 */

echo "test";


_在配置文件里的特别codes_

    重要的数据授权使用前应该要小心的检查。

    当数据未通过验证时，为防止CORS，应该直接退出脚本；
    或者可以输出一些JSON数据，让客户端知道请求被拒绝。

    例如:
    if ('some key' !== $_SERVER['HTTP_Key']) exit('{"err": 1, "msg": "Request Denied!"}');
