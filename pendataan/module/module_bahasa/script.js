 function getBrowserLanguage() {
    var language = navigator.language || navigator.userLanguage;
    return language.substring(0, 2);
  }
  function changeLanguage() {
    var userLanguage = getBrowserLanguage();
    if (userLanguage === 'en') {
      document.documentElement.lang = 'en';
    } else if (userLanguage === 'id') {
      document.documentElement.lang = 'id';
    }
  }
  window.onload = changeLanguage;