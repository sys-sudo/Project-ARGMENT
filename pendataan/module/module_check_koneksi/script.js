function checkInternet() {
    fetch('?action=check')
      .then(response => response.text())
      .then(data => {
        document.getElementById('status_internet').innerHTML = data;
      })
      .catch(error => {
        console.error('Error fetching status:', error);
      });
  }
  setInterval(checkInternet, 1111);
  checkInternet();