<?php

// app/Exports/SalesReportExport.php

namespace App\Exports;

use App\Models\Sale;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithTitle;

class SalesReportExport implements FromCollection, WithHeadings, WithMapping, WithTitle
{
    // Yeh method data ko fetch karega
    public function collection()
    {
        return Sale::select('id', 'created_at', 'name', 'email', 'grand_total', 'order_status', 'payment_method')->get();
    }

    // Yeh method headings ko define karega (Excel ke columns ka naam)
    public function headings(): array
    {
        return [
            'Order Id',
            'Order Date',
            'Customer Name',
            'Customer Email',
            'Order Amount',
            'Order Status',
            'Payment Method',
        ];
    }

    // Yeh method har sale ko format karega jisme date ko specific format mein dikhaya jayega
    public function map($sale): array
    {
        return [
            $sale->id,
            \Carbon\Carbon::parse($sale->created_at)->format('d-m-Y'),
            $sale->name,
            $sale->email,
            $sale->grand_total,
            $sale->order_status,
            $sale->payment_method,
        ];
    }

    // Yeh method sheet ka title define karega
    public function title(): string
    {
        return 'Sales Report';
    }
}
