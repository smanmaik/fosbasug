use Barryvdh\DomPDF\Facade as PDF;

public function generateInvoice($id)
{
    // Fetch the invoice data from the database
    $invoice = Invoice::find($id);

    // Generate the invoice PDF using the invoice data
    $pdf = PDF::loadView('invoice', ['invoice' => $invoice]);

    // Download the PDF file
    return $pdf->download('invoice.pdf');
}
