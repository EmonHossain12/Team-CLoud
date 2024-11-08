document.getElementById("switch-to-login").onclick = function() {
    document.getElementById("register-form").classList.remove("active");
    document.getElementById("login-form").classList.add("active");
  };
  
  document.getElementById("switch-to-register").onclick = function() {
    document.getElementById("login-form").classList.remove("active");
    document.getElementById("register-form").classList.add("active");
  };
  
  // Show the register form by default
  document.getElementById("register-form").classList.add("active");
  