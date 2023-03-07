<html>
<head>
    <title>Invoice</title>
</head>
<body>
    <h1>Invoice</h1>
    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice->items as $item)
                <tr>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity * $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>Total: {{ $invoice->total }}</div>
</body>
</html>
