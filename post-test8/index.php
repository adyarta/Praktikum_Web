<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Mata Kuliah</title>

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 65vh;
            margin: 0;
        }

        .container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="hitung.php" method="post" id="nilaiForm">
        <label for="nilaiMatkul">Nilai Mata Kuliah:</label>
        <div id="nilaiContainer">
            <input type="number" name="nilaiMatkul[]" required><br>
        </div>
        <button type="button" onclick="tambahMataKuliah()">Tambah Mata Kuliah</button><br>
        <button type="submit" name="hitung_ipk">Hitung IPK</button>
    </form>
</div>

<script>
    function tambahMataKuliah() {
        var container = document.getElementById('nilaiContainer');

        var input = document.createElement("input");
        input.type = "number";
        input.name = "nilaiMatkul[]";
        input.required = true;

        var br = document.createElement("br");

        container.appendChild(input);
        container.appendChild(br);
    }
</script>

</body>
</html>
