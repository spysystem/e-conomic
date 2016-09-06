<?php

namespace Economic;

class EntryType
{
    const __default = 'DebtorInvoice';
    const DebtorInvoice = 'DebtorInvoice';
    const DebtorPayment = 'DebtorPayment';
    const CreditorInvoice = 'CreditorInvoice';
    const CreditorPayment = 'CreditorPayment';
    const JournalEntry = 'JournalEntry';
    const Reminder = 'Reminder';
    const OpeningEntry = 'OpeningEntry';
    const TransferredOpeningEntry = 'TransferredOpeningEntry';
    const SystemEntry = 'SystemEntry';
    const ManualDebtorInvoice = 'ManualDebtorInvoice';


}
