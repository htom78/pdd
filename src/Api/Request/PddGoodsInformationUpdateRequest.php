<?php
namespace SmartJson\Pdd\Api\Request;

use \SmartJson\Pdd\PopBaseHttpRequest;
use \SmartJson\Pdd\PopBaseJsonEntity;

class PddGoodsInformationUpdateRequest extends PopBaseHttpRequest
{
    public function __construct()
	{

	}
	/**
	* @JsonProperty(Long, "goods_id")
	*/
	private $goodsId;

	/**
	* @JsonProperty(String, "goods_name")
	*/
	private $goodsName;

	/**
	* @JsonProperty(Integer, "goods_type")
	*/
	private $goodsType;

	/**
	* @JsonProperty(String, "goods_desc")
	*/
	private $goodsDesc;

	/**
	* @JsonProperty(Long, "cat_id")
	*/
	private $catId;

	/**
	* @JsonProperty(String, "tiny_name")
	*/
	private $tinyName;

	/**
	* @JsonProperty(Integer, "country_id")
	*/
	private $countryId;

	/**
	* @JsonProperty(String, "warehouse")
	*/
	private $warehouse;

	/**
	* @JsonProperty(String, "customs")
	*/
	private $customs;

	/**
	* @JsonProperty(Boolean, "is_customs")
	*/
	private $isCustoms;

	/**
	* @JsonProperty(Long, "market_price")
	*/
	private $marketPrice;

	/**
	* @JsonProperty(Boolean, "is_pre_sale")
	*/
	private $isPreSale;

	/**
	* @JsonProperty(Long, "pre_sale_time")
	*/
	private $preSaleTime;

	/**
	* @JsonProperty(Long, "shipment_limit_second")
	*/
	private $shipmentLimitSecond;

	/**
	* @JsonProperty(Long, "cost_template_id")
	*/
	private $costTemplateId;

	/**
	* @JsonProperty(Integer, "customer_num")
	*/
	private $customerNum;

	/**
	* @JsonProperty(Long, "buy_limit")
	*/
	private $buyLimit;

	/**
	* @JsonProperty(Long, "order_limit")
	*/
	private $orderLimit;

	/**
	* @JsonProperty(Boolean, "is_refundable")
	*/
	private $isRefundable;

	/**
	* @JsonProperty(Boolean, "second_hand")
	*/
	private $secondHand;

	/**
	* @JsonProperty(Boolean, "is_folt")
	*/
	private $isFolt;

	/**
	* @JsonProperty(String, "warm_tips")
	*/
	private $warmTips;

	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddGoodsInformationUpdateRequest_SkuListItem>, "sku_list")
	*/
	private $skuList;

	/**
	* @JsonProperty(String, "out_goods_id")
	*/
	private $outGoodsId;

	/**
	* @JsonProperty(String, "image_url")
	*/
	private $imageUrl;

	/**
	* @JsonProperty(List<String>, "carousel_gallery")
	*/
	private $carouselGallery;

	/**
	* @JsonProperty(List<String>, "detail_gallery")
	*/
	private $detailGallery;

	/**
	* @JsonProperty(Integer, "invoice_status")
	*/
	private $invoiceStatus;

	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddGoodsInformationUpdateRequest_GoodsPropertiesItem>, "goods_properties")
	*/
	private $goodsProperties;

	/**
	* @JsonProperty(Integer, "quan_guo_lian_bao")
	*/
	private $quanGuoLianBao;

	/**
	* @JsonProperty(Integer, "zhi_huan_bu_xiu")
	*/
	private $zhiHuanBuXiu;

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddGoodsInformationUpdateRequest_OverseaGoods, "oversea_goods")
	*/
	private $overseaGoods;

	/**
	* @JsonProperty(String, "song_huo_ru_hu")
	*/
	private $songHuoRuHu;

	/**
	* @JsonProperty(String, "shang_men_an_zhuang")
	*/
	private $shangMenAnZhuang;

	/**
	* @JsonProperty(String, "song_huo_an_zhuang")
	*/
	private $songHuoAnZhuang;

	/**
	* @JsonProperty(String, "mai_jia_zi_ti")
	*/
	private $maiJiaZiTi;

	/**
	* @JsonProperty(Integer, "bad_fruit_claim")
	*/
	private $badFruitClaim;

	/**
	* @JsonProperty(Integer, "lack_of_weight_claim")
	*/
	private $lackOfWeightClaim;

	/**
	* @JsonProperty(List<\SmartJson\Pdd\Api\Request\PddGoodsInformationUpdateRequest_CarouselVideoItem>, "carousel_video")
	*/
	private $carouselVideo;

	/**
	* @JsonProperty(Integer, "origin_country_id")
	*/
	private $originCountryId;

	/**
	* @JsonProperty(Integer, "delivery_one_day")
	*/
	private $deliveryOneDay;

	/**
	* @JsonProperty(Integer, "sync_goods_operate")
	*/
	private $syncGoodsOperate;

	protected function setUserParams(&$params)
	{
		$this->setUserParam($params, "goods_id", $this->goodsId);
		$this->setUserParam($params, "goods_name", $this->goodsName);
		$this->setUserParam($params, "goods_type", $this->goodsType);
		$this->setUserParam($params, "goods_desc", $this->goodsDesc);
		$this->setUserParam($params, "cat_id", $this->catId);
		$this->setUserParam($params, "tiny_name", $this->tinyName);
		$this->setUserParam($params, "country_id", $this->countryId);
		$this->setUserParam($params, "warehouse", $this->warehouse);
		$this->setUserParam($params, "customs", $this->customs);
		$this->setUserParam($params, "is_customs", $this->isCustoms);
		$this->setUserParam($params, "market_price", $this->marketPrice);
		$this->setUserParam($params, "is_pre_sale", $this->isPreSale);
		$this->setUserParam($params, "pre_sale_time", $this->preSaleTime);
		$this->setUserParam($params, "shipment_limit_second", $this->shipmentLimitSecond);
		$this->setUserParam($params, "cost_template_id", $this->costTemplateId);
		$this->setUserParam($params, "customer_num", $this->customerNum);
		$this->setUserParam($params, "buy_limit", $this->buyLimit);
		$this->setUserParam($params, "order_limit", $this->orderLimit);
		$this->setUserParam($params, "is_refundable", $this->isRefundable);
		$this->setUserParam($params, "second_hand", $this->secondHand);
		$this->setUserParam($params, "is_folt", $this->isFolt);
		$this->setUserParam($params, "warm_tips", $this->warmTips);
		$this->setUserParam($params, "sku_list", $this->skuList);
		$this->setUserParam($params, "out_goods_id", $this->outGoodsId);
		$this->setUserParam($params, "image_url", $this->imageUrl);
		$this->setUserParam($params, "carousel_gallery", $this->carouselGallery);
		$this->setUserParam($params, "detail_gallery", $this->detailGallery);
		$this->setUserParam($params, "invoice_status", $this->invoiceStatus);
		$this->setUserParam($params, "goods_properties", $this->goodsProperties);
		$this->setUserParam($params, "quan_guo_lian_bao", $this->quanGuoLianBao);
		$this->setUserParam($params, "zhi_huan_bu_xiu", $this->zhiHuanBuXiu);
		$this->setUserParam($params, "oversea_goods", $this->overseaGoods);
		$this->setUserParam($params, "song_huo_ru_hu", $this->songHuoRuHu);
		$this->setUserParam($params, "shang_men_an_zhuang", $this->shangMenAnZhuang);
		$this->setUserParam($params, "song_huo_an_zhuang", $this->songHuoAnZhuang);
		$this->setUserParam($params, "mai_jia_zi_ti", $this->maiJiaZiTi);
		$this->setUserParam($params, "bad_fruit_claim", $this->badFruitClaim);
		$this->setUserParam($params, "lack_of_weight_claim", $this->lackOfWeightClaim);
		$this->setUserParam($params, "carousel_video", $this->carouselVideo);
		$this->setUserParam($params, "origin_country_id", $this->originCountryId);
		$this->setUserParam($params, "delivery_one_day", $this->deliveryOneDay);
		$this->setUserParam($params, "sync_goods_operate", $this->syncGoodsOperate);

	}

	public function getVersion()
	{
		return "V1";
	}

	public function getDataType()
	{
		return "JSON";
	}

	public function getType()
	{
		return "pdd.goods.information.update";
	}

	public function setGoodsId($goodsId)
	{
		$this->goodsId = $goodsId;
	}

	public function setGoodsName($goodsName)
	{
		$this->goodsName = $goodsName;
	}

	public function setGoodsType($goodsType)
	{
		$this->goodsType = $goodsType;
	}

	public function setGoodsDesc($goodsDesc)
	{
		$this->goodsDesc = $goodsDesc;
	}

	public function setCatId($catId)
	{
		$this->catId = $catId;
	}

	public function setTinyName($tinyName)
	{
		$this->tinyName = $tinyName;
	}

	public function setCountryId($countryId)
	{
		$this->countryId = $countryId;
	}

	public function setWarehouse($warehouse)
	{
		$this->warehouse = $warehouse;
	}

	public function setCustoms($customs)
	{
		$this->customs = $customs;
	}

	public function setIsCustoms($isCustoms)
	{
		$this->isCustoms = $isCustoms;
	}

	public function setMarketPrice($marketPrice)
	{
		$this->marketPrice = $marketPrice;
	}

	public function setIsPreSale($isPreSale)
	{
		$this->isPreSale = $isPreSale;
	}

	public function setPreSaleTime($preSaleTime)
	{
		$this->preSaleTime = $preSaleTime;
	}

	public function setShipmentLimitSecond($shipmentLimitSecond)
	{
		$this->shipmentLimitSecond = $shipmentLimitSecond;
	}

	public function setCostTemplateId($costTemplateId)
	{
		$this->costTemplateId = $costTemplateId;
	}

	public function setCustomerNum($customerNum)
	{
		$this->customerNum = $customerNum;
	}

	public function setBuyLimit($buyLimit)
	{
		$this->buyLimit = $buyLimit;
	}

	public function setOrderLimit($orderLimit)
	{
		$this->orderLimit = $orderLimit;
	}

	public function setIsRefundable($isRefundable)
	{
		$this->isRefundable = $isRefundable;
	}

	public function setSecondHand($secondHand)
	{
		$this->secondHand = $secondHand;
	}

	public function setIsFolt($isFolt)
	{
		$this->isFolt = $isFolt;
	}

	public function setWarmTips($warmTips)
	{
		$this->warmTips = $warmTips;
	}

	public function setSkuList($skuList)
	{
		$this->skuList = $skuList;
	}

	public function setOutGoodsId($outGoodsId)
	{
		$this->outGoodsId = $outGoodsId;
	}

	public function setImageUrl($imageUrl)
	{
		$this->imageUrl = $imageUrl;
	}

	public function setCarouselGallery($carouselGallery)
	{
		$this->carouselGallery = $carouselGallery;
	}

	public function setDetailGallery($detailGallery)
	{
		$this->detailGallery = $detailGallery;
	}

	public function setInvoiceStatus($invoiceStatus)
	{
		$this->invoiceStatus = $invoiceStatus;
	}

	public function setGoodsProperties($goodsProperties)
	{
		$this->goodsProperties = $goodsProperties;
	}

	public function setQuanGuoLianBao($quanGuoLianBao)
	{
		$this->quanGuoLianBao = $quanGuoLianBao;
	}

	public function setZhiHuanBuXiu($zhiHuanBuXiu)
	{
		$this->zhiHuanBuXiu = $zhiHuanBuXiu;
	}

	public function setOverseaGoods($overseaGoods)
	{
		$this->overseaGoods = $overseaGoods;
	}

	public function setSongHuoRuHu($songHuoRuHu)
	{
		$this->songHuoRuHu = $songHuoRuHu;
	}

	public function setShangMenAnZhuang($shangMenAnZhuang)
	{
		$this->shangMenAnZhuang = $shangMenAnZhuang;
	}

	public function setSongHuoAnZhuang($songHuoAnZhuang)
	{
		$this->songHuoAnZhuang = $songHuoAnZhuang;
	}

	public function setMaiJiaZiTi($maiJiaZiTi)
	{
		$this->maiJiaZiTi = $maiJiaZiTi;
	}

	public function setBadFruitClaim($badFruitClaim)
	{
		$this->badFruitClaim = $badFruitClaim;
	}

	public function setLackOfWeightClaim($lackOfWeightClaim)
	{
		$this->lackOfWeightClaim = $lackOfWeightClaim;
	}

	public function setCarouselVideo($carouselVideo)
	{
		$this->carouselVideo = $carouselVideo;
	}

	public function setOriginCountryId($originCountryId)
	{
		$this->originCountryId = $originCountryId;
	}

	public function setDeliveryOneDay($deliveryOneDay)
	{
		$this->deliveryOneDay = $deliveryOneDay;
	}

	public function setSyncGoodsOperate($syncGoodsOperate)
	{
		$this->syncGoodsOperate = $syncGoodsOperate;
	}

}

class PddGoodsInformationUpdateRequest_SkuListItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "thumb_url")
	*/
	private $thumbUrl;

	/**
	* @JsonProperty(Long, "length")
	*/
	private $length;

	/**
	* @JsonProperty(Long, "sku_id")
	*/
	private $skuId;

	/**
	* @JsonProperty(String, "spec_id_list")
	*/
	private $specIdList;

	/**
	* @JsonProperty(Long, "weight")
	*/
	private $weight;

	/**
	* @JsonProperty(Long, "quantity")
	*/
	private $quantity;

	/**
	* @JsonProperty(String, "out_sku_sn")
	*/
	private $outSkuSn;

	/**
	* @JsonProperty(Long, "multi_price")
	*/
	private $multiPrice;

	/**
	* @JsonProperty(Long, "price")
	*/
	private $price;

	/**
	* @JsonProperty(Long, "limit_quantity")
	*/
	private $limitQuantity;

	/**
	* @JsonProperty(Integer, "is_onsale")
	*/
	private $isOnsale;

	/**
	* @JsonProperty(\SmartJson\Pdd\Api\Request\PddGoodsInformationUpdateRequest_SkuListItemOverseaSku, "oversea_sku")
	*/
	private $overseaSku;

	public function setThumbUrl($thumbUrl)
	{
		$this->thumbUrl = $thumbUrl;
	}

	public function setLength($length)
	{
		$this->length = $length;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
	}

	public function setSpecIdList($specIdList)
	{
		$this->specIdList = $specIdList;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
	}

	public function setOutSkuSn($outSkuSn)
	{
		$this->outSkuSn = $outSkuSn;
	}

	public function setMultiPrice($multiPrice)
	{
		$this->multiPrice = $multiPrice;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function setLimitQuantity($limitQuantity)
	{
		$this->limitQuantity = $limitQuantity;
	}

	public function setIsOnsale($isOnsale)
	{
		$this->isOnsale = $isOnsale;
	}

	public function setOverseaSku($overseaSku)
	{
		$this->overseaSku = $overseaSku;
	}

}

class PddGoodsInformationUpdateRequest_SkuListItemOverseaSku extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "measurement_code")
	*/
	private $measurementCode;

	/**
	* @JsonProperty(Integer, "taxation")
	*/
	private $taxation;

	/**
	* @JsonProperty(String, "specifications")
	*/
	private $specifications;

	public function setMeasurementCode($measurementCode)
	{
		$this->measurementCode = $measurementCode;
	}

	public function setTaxation($taxation)
	{
		$this->taxation = $taxation;
	}

	public function setSpecifications($specifications)
	{
		$this->specifications = $specifications;
	}

}

class PddGoodsInformationUpdateRequest_GoodsPropertiesItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Long, "parent_spec_id")
	*/
	private $parentSpecId;

	/**
	* @JsonProperty(Long, "spec_id")
	*/
	private $specId;

	/**
	* @JsonProperty(String, "note")
	*/
	private $note;

	/**
	* @JsonProperty(String, "img_url")
	*/
	private $imgUrl;

	/**
	* @JsonProperty(Integer, "group_id")
	*/
	private $groupId;

	/**
	* @JsonProperty(Long, "template_pid")
	*/
	private $templatePid;

	/**
	* @JsonProperty(Long, "vid")
	*/
	private $vid;

	/**
	* @JsonProperty(String, "value")
	*/
	private $value;

	/**
	* @JsonProperty(String, "value_unit")
	*/
	private $valueUnit;

	public function setParentSpecId($parentSpecId)
	{
		$this->parentSpecId = $parentSpecId;
	}

	public function setSpecId($specId)
	{
		$this->specId = $specId;
	}

	public function setNote($note)
	{
		$this->note = $note;
	}

	public function setImgUrl($imgUrl)
	{
		$this->imgUrl = $imgUrl;
	}

	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
	}

	public function setTemplatePid($templatePid)
	{
		$this->templatePid = $templatePid;
	}

	public function setVid($vid)
	{
		$this->vid = $vid;
	}

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function setValueUnit($valueUnit)
	{
		$this->valueUnit = $valueUnit;
	}

}

class PddGoodsInformationUpdateRequest_OverseaGoods extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(Integer, "consumption_tax_rate")
	*/
	private $consumptionTaxRate;

	/**
	* @JsonProperty(Integer, "value_added_tax_rate")
	*/
	private $valueAddedTaxRate;

	/**
	* @JsonProperty(String, "hs_code")
	*/
	private $hsCode;

	/**
	* @JsonProperty(String, "customs_broker")
	*/
	private $customsBroker;

	/**
	* @JsonProperty(String, "bonded_warehouse_key")
	*/
	private $bondedWarehouseKey;

	public function setConsumptionTaxRate($consumptionTaxRate)
	{
		$this->consumptionTaxRate = $consumptionTaxRate;
	}

	public function setValueAddedTaxRate($valueAddedTaxRate)
	{
		$this->valueAddedTaxRate = $valueAddedTaxRate;
	}

	public function setHsCode($hsCode)
	{
		$this->hsCode = $hsCode;
	}

	public function setCustomsBroker($customsBroker)
	{
		$this->customsBroker = $customsBroker;
	}

	public function setBondedWarehouseKey($bondedWarehouseKey)
	{
		$this->bondedWarehouseKey = $bondedWarehouseKey;
	}

}

class PddGoodsInformationUpdateRequest_CarouselVideoItem extends PopBaseJsonEntity
{

	public function __construct()
	{

	}

	/**
	* @JsonProperty(String, "file_id")
	*/
	private $fileId;

	/**
	* @JsonProperty(String, "video_url")
	*/
	private $videoUrl;

	public function setFileId($fileId)
	{
		$this->fileId = $fileId;
	}

	public function setVideoUrl($videoUrl)
	{
		$this->videoUrl = $videoUrl;
	}

}