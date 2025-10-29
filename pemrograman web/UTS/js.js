var dataMahasiswa = [];

document.getElementById("tombol").onclick = function () {
  var nama = document.getElementById("nama-mahasiswa").value;
  var nim = document.getElementById("nim").value;
  var semester = document.getElementById("semester").value;
  var prodi = document.getElementById("prodi").value;
  var email = document.getElementById("email").value;

  if (nama == "" || nim == "" || semester == "" || prodi == "" || email == "") {
    alert("Semua data harus diisi!");
    return;
  }

  var mahasiswa = {
    nama: nama,
    nim: nim,
    semester: semester,
    prodi: prodi,
    email: email,
  };
  dataMahasiswa.push(mahasiswa);

  console.log("Data mahasiswa:", mahasiswa);
  console.log("Semua data:", dataMahasiswa);

  var tabel = document.getElementById("tabel-mahasiswa");
  var baris = tabel.insertRow(-1);
  var kolomNo = baris.insertCell(0);
  var kolomNama = baris.insertCell(1);
  var kolomInfo = baris.insertCell(2);

  kolomNo.innerHTML = dataMahasiswa.length;
  kolomNama.innerHTML = nama;
  kolomInfo.innerHTML =
    "Prodi: " +
    prodi +
    ", NIM: " +
    nim +
    ", Semester: " +
    semester +
    ", Email: " +
    email;

  document.getElementById("nama-mahasiswa").value = "";
  document.getElementById("nim").value = "";
  document.getElementById("semester").value = "";
  document.getElementById("prodi").value = "";
  document.getElementById("email").value = "";
};
