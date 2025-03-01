<html lang="en">
<head>
    <title>Kalkulator UKK RPL 2025</title>
    <!--Membuat Template Desain Website dengan CSS-->
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #ffffff, #0000ff);
        }
        .calculator {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 350px;
            width: 50%;
        }
        .calculator h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #333;
        }
        .calculator input, .calculator select, .calculator button {
            margin: 10px 0;
            padding: 10px;
            width: calc(100% - 20px);
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }
       .opt{
			font-size: 16pt;
			border: none;
			max-width: 200px;
			margin: 5px;
			border-radius: 5px;
			padding: 10px;
		}
		.tombol{
			background: #EC5159;
			border-top: none;
			border-right: none;
			border-left: none;
			border-radius: 5px;
	 		max-width: 70px;
			padding: 10px 20px;
			color: #eee;
			font-size: 15pt;
			border-bottom:4px solid #BF3D3D;
		}
        .result {
        	margin-top: 20px;
        	font-size: 1.2em;
        	color: #333;
        }
    </style>
</head>
<body>
<!--Membuat Form Tampilan Aplikasi dengan HTML dan PHP-->
    <div class="calculator">
        <h2>Kalkulator UKK RPL 2025</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="Angka pertama" required>
            <input type="number" name="num2" placeholder="Angka kedua" required>
            <select class="opt" name="operation">
                <option value="tambah">Tambah (+)</option>
                <option value="kurang">Kurang (-)</option>
                <option value="kali">Kali (×)</option>
                <option value="bagi">Bagi (÷)</option>
            </select>
            <button type="submit" class="tombol">=</button><button type="reset" class="tombol">C</button>
        </form>

        <div class="result">
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operation = $_POST['operation'];

                    switch ($operation) {
                        case 'tambah':
                            $result = $num1 + $num2;
                            echo "Hasil: $num1 + $num2 = $result";
                            break;
                        case 'kurang':
                            $result = $num1 - $num2;
                            echo "Hasil: $num1 - $num2 = $result";
                            break;
                        case 'kali':
                            $result = $num1 * $num2;
                            echo "Hasil: $num1 × $num2 = $result";
                            break;
                        case 'bagi':
                            if ($num2 != 0) {
                                $result = $num1 / $num2;
                                echo "Hasil: $num1 ÷ $num2 = $result";
                            } else {
                                echo "Error: Tidak dapat membagi dengan nol.";
                            }
                            break;
                        default:
                            echo "Operasi tidak valid.";
                    }
                }
            ?>
            
        </div>
    </div>
</body>
</html>