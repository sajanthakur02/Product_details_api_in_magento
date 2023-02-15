<?php

namespace Cloudways\RestApi\Api; 

interface CustomInterface
{
    /**
     * GET product by its ID
     *
     * @api
     * @param string $id
     * @return \Magento\Catalog\Api\Data\ProductInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProductById($sku);
}