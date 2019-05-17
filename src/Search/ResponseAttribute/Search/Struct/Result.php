<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/8/27
 * Time: 下午7:31
 * Source: Result.php
 * Project: libjdvop
 */

namespace Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Result
{
    /**
     * 总记录数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("resultCount")
     * @JMS\Type("integer")
     */
    public $resultCount;
    /**
     * 当前第几页
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageIndex")
     * @JMS\Type("integer")
     */
    public $pageIndex;
    /**
     * 每页大小
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    public $pageSize;
    /**
     * 总页数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageCount")
     * @JMS\Type("integer")
     */
    public $pageCount;
    /**
     * 品牌汇总信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("brandAggregate")
     * @JMS\Type("Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct\BrandAggregate")
     */
    public $brandAggregate;
    /**
     * 相关分类汇总信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("categoryAggregate")
     * @JMS\Type("array<string,array>")
     */
    public $categoryAggregate;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("priceIntervalAggregate")
     * @JMS\Type("array")
     */
    public $priceIntervalAggregate;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("expandAttrAggregate")
     * @JMS\Type("string")
     */
    public $expandAttrAggregate;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("hitResult")
     * @JMS\Type("array<Zeevin\Libjdvop\Search\ResponseAttribute\Search\Struct\HitResult>")
     */
    public $hitResult;

    /**
     * @return mixed
     */
    public function getResultCount()
    {
        return $this->resultCount;
    }

    /**
     * @return mixed
     */
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @return mixed
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * @return mixed
     */
    public function getBrandAggregate()
    {
        return $this->brandAggregate;
    }

    /**
     * @return mixed
     */
    public function getCategoryAggregate()
    {
        return $this->categoryAggregate;
    }

    /**
     * @return mixed
     */
    public function getPriceIntervalAggregate()
    {
        return $this->priceIntervalAggregate;
    }

    /**
     * @return mixed
     */
    public function getExpandAttrAggregate()
    {
        return $this->expandAttrAggregate;
    }

    /**
     * @return mixed
     */
    public function getHitResult()
    {
        return $this->hitResult;
    }

}