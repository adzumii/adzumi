<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet"  href="main.css">
</head>
<body>

<script>
  function checkValid() {
    let name = document.getElementById('Uname');
    var password = document.getElementById('Pass');
    if(name.value == 'Adina' && password.value == '00000')
    {
      pageRedirect();
    }else{
      alert('Invalid');
    }
  }
  function pageRedirect() {
    window.location.href = "https://adina-abdullaeva.herokuapp.com/";
  }
</script>
<h2>Login Page</h2><br>
<div class="login">
  <form id="login" method="get">
    <label><b>User Name
    </b>
    </label>
    <input type="text" name="Uname" id="Uname" placeholder="Username">
    <br><br>
    <label><b>Password
    </b>
    </label>
    <input type="Password" name="Pass" id="Pass" placeholder="Password">
    <br><br>
    <input type="button" name="log" id="log" onclick="checkValid();" value="Log In Here">
  </form>
</div>
</body>
</html>
