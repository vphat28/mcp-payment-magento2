<?php

namespace MCPIntegration\Payment\Model;

use Magento\Payment\Model\InfoInterface;
use Magento\Payment\Model\Method\Adapter;

class PaymentAdapter extends Adapter
{
    /**
     * @inheritdoc
     */
    public function authorize(InfoInterface $payment, $amount)
    {
        // Proceed payment

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function capture(InfoInterface $payment, $amount)
    {
        // Proceed payment

        return $this;
    }
}