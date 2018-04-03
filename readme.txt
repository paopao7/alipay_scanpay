该demo为支付宝扫码支付官方demo的PHP版本，因其不支持回调验证，特制追加回调验证功能

具体更改如下：

1、删除原有当面付2.0版集成说明文档-PHP版.docx文档
2、修改原有readme.txt文件
3、将电脑网址支付PHP版demo下的lib及pagepay目录拷贝到该目录下
4、新增Scanpay.class.php文件，用于调用该demo中对应方法
5、修改Scanpay.class.php文件中引入config.php及AlipayTradeService.php所在路径
6、将获取到的回调参数传入其中即$data
7、编写check方法用于回调验证

其他说明：

支付宝公私钥、appid等参数仍旧使用官方demo下的配置
具体路径为：scanPay\f2fpay\config\config.php

联系方式：(添加请注明技术咨询)

本人QQ：980569038
TP集成支付宝群：594955172