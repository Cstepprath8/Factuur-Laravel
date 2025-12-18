<!DOCTYPE html>
<!-- Colin Stepprath -->
<html>

<head>
    <title>Factuur</title>
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
            background-color: #fff;
            width: 450px;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        h1 {
            text-align: center;
            font-size: 26px;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 16px;
        }

        button {
            margin-top: auto;
            background-color: #007bff;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            background-color: #0056b3;
        }

        form {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <div class="factuur-box">
        <h1>Maak een Factuur:</h1>
        <form action="{{ route('factuur.calculate') }}" method="post">
            @csrf
            <label>Klantnaam:</label>
            <input type="text" name="klant" required>

            <label>Product / dienst:</label>
            <input type="text" name="product" required>

            <label>Prijs (€):</label>
            <input type="number" step="0.01" name="prijs" required>

            <label>BTW (%):</label>
            <input type="number" step="0.01" name="btw" required>

            <button type="submit"> Factuur berekenen</button>

        </form>
    </div>
</body>

</html>