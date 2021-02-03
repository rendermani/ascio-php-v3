<?php

namespace ascio\v3;

class AccountTransactionType
{
    const __default = 'Invoice';
    const Invoice = 'Invoice';
    const Payment = 'Payment';
    const Credit = 'Credit';
    const AdhocCredit = 'AdhocCredit';
    const AdhocInvoice = 'AdhocInvoice';
    const Adjustment = 'Adjustment';


}
