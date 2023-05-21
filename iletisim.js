function validateForm() 
{
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var email = document.getElementById("email").value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var message = document.getElementById("message").value;
    var country = document.getElementById("country").value;
  
    if (name === "" || surname === "" || email === "" || gender === null || message === "" || country === "") 
    {
      alert("Lütfen tüm alanları doldurun.");
      return false;
    }
  
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) 
    {
      alert("Geçerli bir e-posta adresi girin.");
      return false;
    }
  
    return true;
  }