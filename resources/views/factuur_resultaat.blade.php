<!DOCTYPE html>
<!-- Colin Stepprath -->
<html>

<head>
    <title>Factuur Resultaat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* De factuur-box */
        .factuur-box {
            background-color: #ffffff;
            width: 450px;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Information row */
        .row {
            display: flex;
            justify-content: space-between;
            font-size: 16px;
            color: #555;
            padding: 6px 0;
            border-bottom: 1px solid #eee;
        }

        /* Total Row (BOLD) */
        .row.total {
            font-weight: bold;
            font-size: 18px;
            border-bottom: none;
            margin-top: 10px;
        }

        /* Back Button CSS */
        .factuur-box a {
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 12px 0;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.2s;
        }

        .factuur-box a:hover {
            background-color: #0056b3;
        }

        /* Print Button CSS */
        button.print-btn {
           text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background-color: #001f3fff;
            color: #fff;
            padding: 12px 0;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.2s;
        }

        button.print-btn:hover {
            background-color: #0056b3;
        }

        /* Title CSS */
        .factuur-box h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 26px;
            color: #333;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            .factuur-box,
            .factuur-box * {
                visibility: visible;
            }

            .factuur-box {
                position: absolute;
                left: 0;
                top: 0;
                width: 90%;
            }
        }
    </style>
</head>

<body>

    <div class="factuur-box">
        <h1>Factuur</h1>
        <h2>{{ $factuur['klant'] }}</h2>
        <div class="row"><strong>Product:</strong> <span> {{ $factuur['product'] }}</span></div>
        <div class="row"><strong>Prijs:</strong> <span>€ {{ number_format($factuur['prijs'], 2) }}</span></div>
        <div class="row"><strong>BTW ({{ $factuur['btw'] }}%):</strong> <span>€ {{ number_format($factuur['btwBedrag'], 2) }}</span></div>
        <div class="row"><strong>Totaal:</strong> <span>€ {{ number_format($factuur['totaal'], 2) }}</span></div>

        <a href="/factuur">Nieuwe factuur maken </a>
        <button class="print-btn" onclick="window.print()">Print Factuur</button>
    </div>

</body>

</html>