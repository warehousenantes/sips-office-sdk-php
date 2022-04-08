<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class ShoppingCartItem.
 */
class ShoppingCartItem extends Field
{
    private ?string $productName = null;

    private ?string $productDescription = null;

    private ?string $productCode = null;

    private ?string $productSKU = null;

    private ?int $productUnitAmount = null;

    private ?int $productQuantity = null;

    private ?string $productTaxRate = null;

    private ?int $productUnitTaxAmount = null;

    private ?string $productCategory = null;

    private ?string $productTaxCategory = null;

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    public function setProductDescription(
        ?string $productDescription
    ): self {
        $this->productDescription = $productDescription;

        return $this;
    }

    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;

        return $this;
    }

    public function getProductSKU(): ?string
    {
        return $this->productSKU;
    }

    public function setProductSKU(?string $productSKU): self
    {
        $this->productSKU = $productSKU;

        return $this;
    }

    public function getProductUnitAmount(): ?int
    {
        return $this->productUnitAmount;
    }

    public function setProductUnitAmount(
        ?int $productUnitAmount
    ): self {
        $this->productUnitAmount = $productUnitAmount;

        return $this;
    }

    public function getProductQuantity(): ?int
    {
        return $this->productQuantity;
    }

    public function setProductQuantity(?int $productQuantity): self
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    public function getProductTaxRate(): ?string
    {
        return $this->productTaxRate;
    }

    public function setProductTaxRate(?string $productTaxRate): self
    {
        $this->productTaxRate = $productTaxRate;

        return $this;
    }

    public function getProductUnitTaxAmount(): ?int
    {
        return $this->productUnitTaxAmount;
    }

    public function setProductUnitTaxAmount(
        ?int $productUnitTaxAmount
    ): self {
        $this->productUnitTaxAmount = $productUnitTaxAmount;

        return $this;
    }

    public function getProductCategory(): ?string
    {
        return $this->productCategory;
    }

    public function setProductCategory(
        ?string $productCategory
    ): self {
        $this->productCategory = $productCategory;

        return $this;
    }

    public function getProductTaxCategory(): ?string
    {
        return $this->productTaxCategory;
    }

    public function setProductTaxCategory(
        ?string $productTaxCategory
    ): self {
        $this->productTaxCategory = $productTaxCategory;

        return $this;
    }
}
