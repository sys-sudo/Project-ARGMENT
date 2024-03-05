function updateJam() {
    const waktuSekarang = new Date();
    const jam = waktuSekarang.getHours();
    const menit = waktuSekarang.getMinutes();
    const detik = waktuSekarang.getSeconds();

    const jamStr = jam.toString().padStart(2, "0");
    const menitStr = menit.toString().padStart(2, "0");
    const detikStr = detik.toString().padStart(2, "0");

    document.getElementById("info_jam").innerHTML = `${jamStr}:${menitStr}:${detikStr}`;
  }
  setInterval(updateJam, 1000);
  updateJam();