<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/criteria.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Bidding category of a product offer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.ProductBiddingCategoryInfo</code>
 */
class ProductBiddingCategoryInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the product bidding category.
     * This ID is equivalent to the google_product_category ID as described in
     * this article: https://support.google.com/merchants/answer/6324436
     *
     * Generated from protobuf field <code>optional int64 id = 4;</code>
     */
    protected $id = null;
    /**
     * Level of the product bidding category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevel level = 3;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           ID of the product bidding category.
     *           This ID is equivalent to the google_product_category ID as described in
     *           this article: https://support.google.com/merchants/answer/6324436
     *     @type int $level
     *           Level of the product bidding category.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the product bidding category.
     * This ID is equivalent to the google_product_category ID as described in
     * this article: https://support.google.com/merchants/answer/6324436
     *
     * Generated from protobuf field <code>optional int64 id = 4;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * ID of the product bidding category.
     * This ID is equivalent to the google_product_category ID as described in
     * this article: https://support.google.com/merchants/answer/6324436
     *
     * Generated from protobuf field <code>optional int64 id = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Level of the product bidding category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevel level = 3;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Level of the product bidding category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevel level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V13\Enums\ProductBiddingCategoryLevelEnum\ProductBiddingCategoryLevel::class);
        $this->level = $var;

        return $this;
    }

}

