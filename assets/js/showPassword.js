function myFunction() {
    var x = document.getElementById("showPassword");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }