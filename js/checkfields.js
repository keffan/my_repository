window.onload = onWindowLoaded;

function onWindowLoaded()
{
  document.getElementById('form').onsubmit = onFormSubmit;
}

function onFormSubmit()
{
  event.preventDefault();
  var login = document.getElementById('login');
  var pass = document.getElementById('password');
  var errLogin = document.getElementById('errorLogin');
  var errPass = document.getElementById('errorPassword');
  var error = false;
  
  if (! /^[a-zA-Z]+$/.test(login.value))
  {
      errLogin.innerHTML = "Введен некорректный login. Повторите ввод";
      error = true;
  }
  else
  {
      errLogin.innerHTML = "";
  }
      
  if (pass.value.length < 7)
  {
      errPass.innerHTML = "Пароль должен содержать не менее 8 символов. Повторите ввод";
      error = true;
  }
  else
  {
      errPass.innerHTML = "";
  }
  
  if (!error)
  {
      document.getElementById('form').submit();
  } 
}