<?php 

namespace Cloudways\RestApi\Model; 
use Cloudways\RestApi\Api\CustomInterface;
use Psr\Log\LoggerInterface;

class Custom implements CustomInterface
{

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    protected $productRepository;

    public function __construct(
       \Magento\Catalog\Api\ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductById($sku)
    {
        $details =  $this->productRepository->get($sku);
		
		return $details;
    }
}