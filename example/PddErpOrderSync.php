<?php
/**
 * 示例接口名称：pdd.erp.order.sync
*/
require_once dirname(__FILE__).'/Config.php';
require_once dirname(__FILE__)."/../vendor/autoload.php";

use \SmartJson\Pdd\PopHttpClient;
use \SmartJson\Pdd\Api\Request\PddErpOrderSyncRequest;
$client = new PopHttpClient(Config::$clientId, Config::$clientSecret);

$request = new PddErpOrderSyncRequest();

$request->setOrderSn('str');
$request->setOrderState(1);
$request->setWaybillNo('str');
$request->setLogisticsId(1);
try{
	$response = $client->syncInvoke($request);
} catch(SmartJson\Pdd\PopHttpException $e){
	echo $e->getMessage();
	exit;
}
$content = $response->getContent();
if(isset($content['error_response'])){
	echo "异常返回";
}
echo json_encode($content,JSON_UNESCAPED_UNICODE);