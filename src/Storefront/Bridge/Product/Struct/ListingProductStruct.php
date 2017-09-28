<?php declare(strict_types=1);

namespace Shopware\Storefront\Bridge\Product\Struct;

use Shopware\ProductMedia\Struct\ProductMediaBasicStruct;

class ListingProductStruct extends ProductBasicStruct
{
    /**
     * @var ProductMediaBasicStruct
     */
    protected $cover;

    public function getCover(): ?ProductMediaBasicStruct
    {
        return $this->cover;
    }

    public function setCover(?ProductMediaBasicStruct $cover)
    {
        $this->cover = $cover;
    }
}
