<?php

namespace Economic;

class DocumentStatus
{
    const __default = 'Unprocessed';
    const Unprocessed = 'Unprocessed';
    const Archived = 'Archived';
    const Linked = 'Linked';
    const InUse = 'InUse';
    const LinkedToInvoiceNotBooked = 'LinkedToInvoiceNotBooked';
    const LinkedToUnsavedJournalEntry = 'LinkedToUnsavedJournalEntry';


}
