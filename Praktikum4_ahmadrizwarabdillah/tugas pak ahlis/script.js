function checkEligibility() {
    // Mengambil nilai umur dari input pengguna dan mengonversinya menjadi bilangan bulat
    const age = parseInt(document.getElementById("age").value);
    // Mengambil nilai pendapatan dari input pengguna dan mengonversinya menjadi bilangan bulat
    const income = parseInt(document.getElementById("income").value);
    // Mengambil elemen HTML dengan id 'result' untuk menampilkan hasil kelayakan
    const resultElement = document.getElementById("result");

    // Mengecek apakah umur pengguna memenuhi syarat minimal 21 tahun
    if (age >= 21) {
        // Jika umur memenuhi syarat, lanjut memeriksa apakah pendapatan pengguna >= 3.000.000
        if (income >= 3000000) {
            // Jika kedua syarat terpenuhi, tampilkan pesan bahwa pengguna memenuhi syarat
            resultElement.textContent = "Anda memenuhi syarat untuk pengajuan pinjaman";
            // Ubah warna teks hasil menjadi hijau untuk menandakan kelayakan
            resultElement.style.color = "green";
        } else {
            // Jika pendapatan tidak mencukupi, tampilkan pesan yang sesuai
            resultElement.textContent = "Pendapatan Anda belum mencukupi untuk pengajuan pinjaman";
            // Ubah warna teks hasil menjadi merah untuk menandakan ketidaklayakan
            resultElement.style.color = "blue";
        }
    } else {
        // Jika umur tidak memenuhi syarat, tampilkan pesan yang sesuai
        resultElement.textContent = "Umur Anda belum mencukupi untuk pengajuan pinjaman";
        // Ubah warna teks hasil menjadi merah untuk menandakan ketidaklayakan
        resultElement.style.color = "blue";
    }
}
