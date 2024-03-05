function checkUkuranLayar() {
    const panjang = window.innerWidth;
    const lebar = window.innerHeight;

    if (panjang <= 720 && lebar <= 668) {
      window.location.href = "/unsupport";
    }
  }

  checkUkuranLayar();