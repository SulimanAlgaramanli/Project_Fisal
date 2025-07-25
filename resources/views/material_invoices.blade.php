@extends('layouts.app')

@section('title', 'Material Invoices Page')


@section('content')

<table class="table table-bordered text-center align-middle" dir="rtl" style="text-align: right;">
    <thead class="table-primary">
        <tr>
            <th>رقم تسلسلي</th>
            <th>رقم الفاتورة</th>
            <th>رقم العنصر في الفاتورة</th>
            <th>رقم المشروع</th>
            <th>المالك</th>
            <th>تاريخ الفاتورة</th>
            <th>القيمة</th>
            <th>طريقة الدفع</th>
            <th>التخصص</th>
            <th>وصف التخصص</th>
            <th>وصف الفاتورة</th>
            <th>المحل</th>
            <th>صورة</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach($invoices as $index => $invoice)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $invoice->invoice_number }}</td>
            <td>{{ $invoice->item_number }}</td>
            <td>{{ $invoice->project_number }}</td>
            <td>{{ $invoice->owner }}</td>
            <td>{{ $invoice->invoice_date }}</td>
            <td>{{ $invoice->amount }}</td>
            <td>{{ $invoice->payment_method }}</td>
            <td>{{ $invoice->specialty }}</td>
            <td>{{ $invoice->specialty_description }}</td>
            <td>{{ $invoice->invoice_description }}</td>
            <td>{{ $invoice->store }}</td>
            <td>
                @if($invoice->image)
                    <img src="{{ asset('storage/' . $invoice->image) }}" alt="صورة" width="60">
                @else
                    -
                @endif
            </td>
        </tr>
        @endforeach --}}
    </tbody>
</table>

@endsection


