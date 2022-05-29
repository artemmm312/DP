window.onload = () => {
  var options = {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    weekday: 'long',
  };
  let data = new Date().toLocaleDateString('ru', options);
  document.getElementById('header-date').innerHTML = data[0].toUpperCase() + data.substring(1);
};