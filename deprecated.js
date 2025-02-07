function hitung(event) {
    event.preventDefault(); // Mencegah form dari reload

    let num1 = parseFloat(document.getElementById('num1').value);
    let num2 = parseFloat(document.getElementById('num2').value);
    let operation = document.getElementById('operation').value;
    let result = '';

    if (isNaN(num1) || isNaN(num2)) {
        result = 'Masukkan angka yang valid!';
    } else {
        switch (operation) {
            case 'tambah':
                result = `Hasil: ${num1} + ${num2} = ${num1 + num2}`;
                break;
            case 'kurang':
                result = `Hasil: ${num1} - ${num2} = ${num1 - num2}`;
                break;
            case 'kali':
                result = `Hasil: ${num1} × ${num2} = ${num1 * num2}`;
                break;
            case 'bagi':
                result = num2 !== 0 ? `Hasil: ${num1} ÷ ${num2} = ${(num1 / num2).toFixed(2)}` : 'Error: Tidak dapat membagi dengan nol';
                break;
            default:
                result = 'Operasi tidak valid';
        }
    }
    document.getElementById('result').innerText = result;
}

function reset() {
    document.getElementById('num1').value = '';
    document.getElementById('num2').value = '';
    document.getElementById('result').innerText = '';
}
