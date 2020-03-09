<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class ShoppingCartItem
 * @package Worldline\Sips\Common\Fields
 */
class ShoppingCartItem extends Field
{
    /**
     * @var null|string
     */
    private $productName;

    /**
     * @var null|string
     */
    private $productDescription;

    /**
     * @var null|string
     */
    private $productCode;

    /**
     * @var null|string
     */
    private $productSKU;

    /**
     * @var null|int
     */
    private $productUnitAmount;

    /**
     * @var null|int
     */
    private $productQuantity;

    /**
     * @var null|string
     */
    private $productTaxRate;

    /**
     * @var null|int
     */
    private $productUnitTaxAmount;

    /**
     * @var null|string
     */
    private $productCategory;

    /**
     * @var null|string
     */
    private $productTaxCategory;

    /**
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string|null $productName
     *
     * @return ShoppingCartItem
     */
    public function setProductName(?string $productName): ShoppingCartItem
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    /**
     * @param string|null $productDescription
     *
     * @return ShoppingCartItem
     */
    public function setProductDescription(?string $productDescription
    ): ShoppingCartItem {
        $this->productDescription = $productDescription;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * @param string|null $productCode
     *
     * @return ShoppingCartItem
     */
    public function setProductCode(?string $productCode): ShoppingCartItem
    {
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductSKU(): ?string
    {
        return $this->productSKU;
    }

    /**
     * @param string|null $productSKU
     *
     * @return ShoppingCartItem
     */
    public function setProductSKU(?string $productSKU): ShoppingCartItem
    {
        $this->productSKU = $productSKU;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProductUnitAmount(): ?int
    {
        return $this->productUnitAmount;
    }

    /**
     * @param int|null $productUnitAmount
     *
     * @return ShoppingCartItem
     */
    public function setProductUnitAmount(?int $productUnitAmount
    ): ShoppingCartItem {
        $this->productUnitAmount = $productUnitAmount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProductQuantity(): ?int
    {
        return $this->productQuantity;
    }

    /**
     * @param int|null $productQuantity
     *
     * @return ShoppingCartItem
     */
    public function setProductQuantity(?int $productQuantity): ShoppingCartItem
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductTaxRate(): ?string
    {
        return $this->productTaxRate;
    }

    /**
     * @param string|null $productTaxRate
     *
     * @return ShoppingCartItem
     */
    public function setProductTaxRate(?string $productTaxRate): ShoppingCartItem
    {
        $this->productTaxRate = $productTaxRate;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProductUnitTaxAmount(): ?int
    {
        return $this->productUnitTaxAmount;
    }

    /**
     * @param int|null $productUnitTaxAmount
     *
     * @return ShoppingCartItem
     */
    public function setProductUnitTaxAmount(?int $productUnitTaxAmount
    ): ShoppingCartItem {
        $this->productUnitTaxAmount = $productUnitTaxAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    /**
     * @param string|null $productCategory
     *
     * @return ShoppingCartItem
     */
    public function setProductCategory(?string $productCategory
    ): ShoppingCartItem {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductTaxCategory(): ?string
    {
        return $this->productTaxCategory;
    }

    /**
     * @param string|null $productTaxCategory
     *
     * @return ShoppingCartItem
     */
    public function setProductTaxCategory(?string $productTaxCategory
    ): ShoppingCartItem {
        $this->productTaxCategory = $productTaxCategory;

        return $this;
    }
    
}
