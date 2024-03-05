function checkDatabase() {
    fetch('?action=check')
      .then(response => response.text())
      .then(data => {
        document.getElementById('status_database').innerHTML = data;
      })
      .catch(error => {
        console.error('Error fetching status:', error);
      });
  }
  setInterval(checkDatabase, 1111);
  checkDatabase();