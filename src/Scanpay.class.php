<?php
namespace paopao7\alipay_scanpay;
class Scanpay{
	public function check($data){
		//以下引入地址有做修改
		//$data为实际回调参数
		require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'/f2fpay/config/config.php';
		require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'/pagepay/service/AlipayTradeService.php';

		$alipaySevice = new \AlipayTradeService($config); 
		$alipaySevice->writeLog(var_export($data,true));
		$result = $alipaySevice->check($data);

		return $result;
	}
}	

?>