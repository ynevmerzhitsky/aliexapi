<?php 

namespace AliexApi\Operations;

class GetProductDetail extends AbstractOperation
{
    public function getName()
    {
        return 'getPromotionProductDetail';
    }

    public function setFields($fields)
    {
        $this->parameter['fields'] = $fields;
        return $this;
    }
    public function setProductId($productId)
    {
        $this->parameter['productId'] = $productId;
        return $this;
    }
	public function setLocalCurrency($localCurrency)
    {
        $this->parameter['localCurrency'] = $localCurrency;
        return $this;
    }
	public function setLanguage($language)
	{
		$this->parameter['language'] = $language;
		return $this;
	}
}
