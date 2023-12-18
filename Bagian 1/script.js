function submitForm() {
    // Validasi form sebelum diproses oleh PHP
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var nim = document.getElementById('nim').value;

    if (name === '' || email === '') {
        alert('Name and Email are required!');
        return;
    }

    // Mengambil data dari form
    var formData = {
        name: name,
        email: email,
        nim:nim,
        check: document.getElementById('check').checked,
        radio: document.querySelector('input[name="radio"]:checked') ? document.querySelector('input[name="radio"]:checked').value : ''
    };

    // Menampilkan data dalam tabel
    displayData(formData);
}

function displayData(data) {
    var resultDiv = document.getElementById('result');

    // Membuat tabel
    var table = document.createElement('table');
    var tbody = document.createElement('tbody');

    // Membuat baris untuk setiap properti dalam objek data
    for (var key in data) {
        var row = tbody.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);

        cell1.innerHTML = key;
        cell2.innerHTML = data[key];
    }

    // Menambahkan tabel ke dalam div result
    table.appendChild(tbody);
    resultDiv.innerHTML = '';
    resultDiv.appendChild(table);
}
