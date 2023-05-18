function validateForm() 
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    if (username === "" || password === "") 
    {
      alert("Kullanıcı adı ve şifre alanları boş bırakılamaz.");
      return false;
    }
  
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(username)) 
    {
      alert("Kullanıcı adı bir e-posta adresi olmalıdır.");
      return false;
    }
  
    return true;
  }