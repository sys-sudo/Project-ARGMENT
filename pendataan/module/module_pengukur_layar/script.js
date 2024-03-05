function getUkuranLayar() {
    const panjang = window.innerWidth;
    const lebar = window.innerHeight;

    const teksUkuranLayar = `${panjang} x ${lebar}`;
    document.getElementById("ukuran-layar").innerHTML = teksUkuranLayar;
  }

  getUkuranLayar();