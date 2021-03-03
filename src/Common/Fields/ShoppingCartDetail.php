<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class ShoppingCartDetail
 * @package Worldline\Sips\Common\Fields
 */
class ShoppingCartDetail extends Field
{
    /**
     * @var null|int
     */
    private $discountAmount;

    /**
     * @var null|string
     */
    private $mainProduct;

    /**
     * @var null|array
     */
    private $mainProductCategoryList;

    /**
     * @var null|array
     */
    private $shoppingCartItemList;

    /**
     * @var null|int
     */
    private $shoppingCartTotalAmount;

    /**
     * @var null|int
     */
    private $shoppingCartTotalQuantity;

    /**
     * @var null|int
     */
    private $shoppingCartTotalTaxAmount;

    /**
     * @return int|null
     */
    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    /**
     * @param int|null $discountAmount
     *
     * @return \Worldline\Sips\Common\Fields\ShoppingCartDetail
     */
    public function setDiscountAmount(?int $discountAmount): ShoppingCartDetail
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMainProduct(): ?string
    {
        return $this->mainProduct;
    }

    /**
     * @param string|null $mainProduct
     *
     * @return ShoppingCartDetail
     */
    public function setMainProduct(?string $mainProduct): ShoppingCartDetail
    {
        $this->mainProduct = $mainProduct;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getMainProductCategoryList(): ?array
    {
        return $this->mainProductCategoryList;
    }

    /**
     * @param array|null $mainProductCategoryList
     *
     * @return ShoppingCartDetail
     */
    public function setMainProductCategoryList(?array $mainProductCategoryList
    ): ShoppingCartDetail {
        $this->mainProductCategoryList = $mainProductCategoryList;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getShoppingCartItemList(): ?array
    {
        return $this->shoppingCartItemList;
    }

    /**
     * @param array|null $shoppingCartItemList
     *
     * @return ShoppingCartDetail
     */
    public function setShoppingCartItemList(?array $shoppingCartItemList
    ): ShoppingCartDetail {
        $this->shoppingCartItemList = $shoppingCartItemList;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getShoppingCartTotalAmount(): ?int
    {
        return $this->shoppingCartTotalAmount;
    }

    /**
     * @param int|null $shoppingCartTotalAmount
     *
     * @return ShoppingCartDetail
     */
    public function setShoppingCartTotalAmount(?int $shoppingCartTotalAmount
    ): ShoppingCartDetail {
        $this->shoppingCartTotalAmount = $shoppingCartTotalAmount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getShoppingCartTotalQuantity(): ?int
    {
        return $this->shoppingCartTotalQuantity;
    }

    /**
     * @param int|null $shoppingCartTotalQuantity
     *
     * @return ShoppingCartDetail
     */
    public function setShoppingCartTotalQuantity(?int $shoppingCartTotalQuantity
    ): ShoppingCartDetail {
        $this->shoppingCartTotalQuantity = $shoppingCartTotalQuantity;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getShoppingCartTotalTaxAmount(): ?int
    {
        return $this->shoppingCartTotalTaxAmount;
    }

    /**
     * @param int|null $shoppingCartTotalTaxAmount
     *
     * @return ShoppingCartDetail
     */
    public function setShoppingCartTotalTaxAmount(
        ?int $shoppingCartTotalTaxAmount
    ): ShoppingCartDetail {
        $this->shoppingCartTotalTaxAmount = $shoppingCartTotalTaxAmount;

        return $this;
    }
    
}
