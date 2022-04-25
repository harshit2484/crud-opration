<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #0449aa;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 350px;
  right: 550px;
  position: fixed;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  border: 3px solid #f1f1f1;
  z-index: 9;
  bottom: 25px;
  right: 550px;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #0449aa;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 30%;
  margin-bottom:1px;
  opacity: 0.8;
}
.button1 {
  background-color: #d1e8e2;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 2px 2px;
  cursor: pointer;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
body {
  
  background-color: #99738e;
  background-image: url('https://media.giphy.com/media/xT9IgN8YKRhByRBzMI/giphy.gif');
    background-size: cover;

}
.button1 {
  background-color: #d1e8e2;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 2px 2px;
  cursor: pointer;
}


</style>
</head>
<body>


<center><a class="button1" href="/">go back</a></center>

<button class="open-button" onclick="openForm()">click here for registration</button>

<div class="form-popup" id="myForm">
  <form action="add" method="POST" class="form-container">
    @csrf
    
  <label for="fname">firstname:</label>
  <input type="text" id="firstname" name="firstname" placeholder="Enter fname" required><br>
  <span style="color:red">@error('firstname') {{$message}}@enderror</span><br>

  <label for="lname">lastname:</label>
  <input type="text" id="lastname" name="lastname" placeholder="Enter lname"required><br>
  <span style="color:red">@error('lastname') {{$message}}@enderror</span><br>

  <label for="age">age  :</label>
  <input type="text" id="age" name="age" placeholder="Enter age"required><br>
  <span style="color:red">@error('age') {{$message}}@enderror</span><br>

  <label for="email">email  :</label>
  <input type="text" id="email" name="email"   placeholder="email" required><br>
  <span style="color:red">@error('email') {{$message}}@enderror</span><br>

  <label for="lname">PASSWORD:</label>
  <input type="password" id="password" name="password" placeholder="Enter password" required><br>
  <span style="color:red">@error('password') {{$message}}@enderror</span><br>

    <button type="submit" value="Submit" class="btn">Rgister</button>  
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    

  </form>
  
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
