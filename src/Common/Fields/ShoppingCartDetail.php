<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class ShoppingCartDetail.
 */
class ShoppingCartDetail extends Field
{
    private ?int $discountAmount = null;

    private ?string $mainProduct = null;

    private ?array $mainProductCategoryList = null;

    private ?array $shoppingCartItemList = null;

    private ?int $shoppingCartTotalAmount = null;

    private ?int $shoppingCartTotalQuantity = null;

    private ?int $shoppingCartTotalTaxAmount = null;

    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    public function setDiscountAmount(?int $discountAmount): self
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    public function getMainProduct(): ?string
    {
        return $this->mainProduct;
    }

    public function setMainProduct(?string $mainProduct): self
    {
        $this->mainProduct = $mainProduct;

        return $this;
    }

    public function getMainProductCategoryList(): ?array
    {
        return $this->mainProductCategoryList;
    }

    public function setMainProductCategoryList(
        ?array $mainProductCategoryList
    ): self {
        $this->mainProductCategoryList = $mainProductCategoryList;

        return $this;
    }

    public function getShoppingCartItemList(): ?array
    {
        return $this->shoppingCartItemList;
    }

    public function setShoppingCartItemList(
        ?array $shoppingCartItemList
    ): self {
        $this->shoppingCartItemList = $shoppingCartItemList;

        return $this;
    }

    public function getShoppingCartTotalAmount(): ?int
    {
        return $this->shoppingCartTotalAmount;
    }

    public function setShoppingCartTotalAmount(
        ?int $shoppingCartTotalAmount
    ): self {
        $this->shoppingCartTotalAmount = $shoppingCartTotalAmount;

        return $this;
    }

    public function getShoppingCartTotalQuantity(): ?int
    {
        return $this->shoppingCartTotalQuantity;
    }

    public function setShoppingCartTotalQuantity(
        ?int $shoppingCartTotalQuantity
    ): self {
        $this->shoppingCartTotalQuantity = $shoppingCartTotalQuantity;

        return $this;
    }

    public function getShoppingCartTotalTaxAmount(): ?int
    {
        return $this->shoppingCartTotalTaxAmount;
    }

    public function setShoppingCartTotalTaxAmount(
        ?int $shoppingCartTotalTaxAmount
    ): self {
        $this->shoppingCartTotalTaxAmount = $shoppingCartTotalTaxAmount;

        return $this;
    }
}
