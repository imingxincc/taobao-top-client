<h1 align="center"> taobao-top-client </h1>

<p align="center"> A Taobao Top SDK For Laravel7+. </p>

## 说明

**本扩展包不支持 Composer 1.x 安装，请确保升级到 Composer 2+ 后使用。**

## 安装

```shell
$ composer require imingxin/taobao-top-client -vvv
```

## 配置

发布资源，输入如下命令后会列出一系列 Provider 让你选择，你从中选出所需要的序号就可以了。

```shell
$ php artisan vendor:publish
```

添加环境变量

```bash
$ vim .env

# 追加应用的 AppKey 和  AppSecret 到环境变量配置文件中
# TAOBAO_APP_KEY=123456789
# TAOBAO_APP_SECRET=xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

## 使用

```php
use Imingxin\TaobaoTopClient\request\TbkTpwdCreateRequest;
.
.
.

$req = new TbkTpwdCreateRequest;
$req->setUrl("https://s.click.taobao.com/aTih7ku");
$resp = app('topClient')->execute($req);
return response()->json($resp);
```

响应示例：

```json
{
    "data": {
        "model": "5￥VU1pXk3w4rS￥ https://m.tb.cn/h.4AiSUnj  【急速发货】TP-LINK全千兆无线路由器 千兆端口家用高速wifi穿墙王tplink双频5G大户型游戏IPv6宿舍学生寝室",
        "password_simple": "￥VU1pXk3w4rS￥"
    },
    "request_id": "15q60nriu82wz"
}
```

## License

MIT
