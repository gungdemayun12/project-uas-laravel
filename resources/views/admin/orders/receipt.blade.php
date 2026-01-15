<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            font-size: 12px;
            width: 220px;
            margin: 0 auto;
            padding: 10px;
        }

        .center {
            text-align: center;
        }

        .bold {
            font-weight: bold;
        }

        .line {
            border-top: 1px dashed #000;
            margin: 8px 0;
        }

        .items {
            width: 100%;
            margin-bottom: 10px;
        }

        .items th, .items td {
            text-align: left;
            padding: 2px 0;
        }

        .items td.qty {
            text-align: center;
        }

        .items td.price {
            text-align: right;
        }

        .total {
            text-align: right;
            font-weight: bold;
            font-size: 14px;
            margin-top: 8px;
        }

        .footer {
            text-align: center;
            margin-top: 12px;
            font-size: 11px;
        }
    </style>
</head>
<body>

    <div class="center bold">
        STRUK PEMBELIAN<br>
        Toko Baju Anjay<br>
        {{ date('d-m-Y H:i') }}
    </div>

    <div class="line"></div>

    <p>
        <strong>Order ID:</strong> #{{ $order->id }}<br>
        <strong>Nama:</strong> {{ $order->nama_pemesan }}<br>
        <strong>No HP:</strong> {{ $order->no_hp }}<br>
        <strong>Alamat:</strong> {{ $order->alamat }}
        <strong>Metode Pembayaran:</strong> {{ $order->metode_pembayaran }}
    </p>

    <div class="line"></div>

    <table class="items">
        <thead>
            <tr>
                <th>Produk</th>
                <th class="qty">Qty</th>
                <th class="price">Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $order->nama_produk }}</td>
                <td class="qty">{{ $order->jumlah }}</td>
                <td class="price">Rp {{ number_format($order->harga_satuan, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    <div class="line"></div>

    <div class="total">
        Total: Rp {{ number_format($order->total_harga, 0, ',', '.') }}
    </div>

    <div class="line"></div>

    <div class="footer">
        Terima kasih atas pembelian Anda!<br>
        Silakan kunjungi kami lagi 😊
    </div>

</body>
</html>
