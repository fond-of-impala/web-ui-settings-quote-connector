<?php

namespace FondOfImpala\Zed\WebUiSettingsQuoteConnector\Business\Expander;

use Generated\Shared\Transfer\QuoteTransfer;

interface QuoteExpanderInterface
{
    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function expand(QuoteTransfer $quoteTransfer): QuoteTransfer;
}
