<html>

<head>
<center>
<h2>Student Form</h2>
</center>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="validate.js"></script>
<style>

</style>
</head>

<body>
<center>
<h3>Basic Details</h3><br>

<form action="" id="signupForm" method="post" autocomplete="off">

First Name:<input type="text" id="fname" name="fname" /><br>
Last Name:<input type="text" id="lname" name="lname" /><br>
Email:<input type="email" name="email" id="email" /><br>
Username:<input type="text" name="uname" id="uname" /><br>
Password:<input type="password" name="pass" id="pass" /><br>
Confirm Password:<input type="password" name="cpass" id="cpass" /><br>
Class:<input type="text" name="class" id="class" /><br>
Section:<input type="text" name="section" id="section" /><br>

<br>

<h3>Personal Details</h3><br>
Father Name:<input type="text" name="faname" id="faname" /><br>
Mother Name:<input type="text" name="maname" id="maname" /><br>
Address:<textarea name="address" id="address" ></textarea><br>
Phone Number:<input type="tel" name="phone" id="phone" /><br>

<fieldset>
    <legend>
Subject:</legend>
<input type="checkbox" name="language[]"  value="Hindi" />Hindi
<input type="checkbox" name="language[]"  value="English"/>English
<input type="checkbox" name="language[]"   value="Math" />Math
<input type="checkbox" name="language[]"  value="Punjabi" />Punjabi
<input type="checkbox" name="language[]"  value="Urdu" />Urdu
<input type="checkbox" name="language[]"   value="Tamil" />Tamil
<label for="language[]" class="error" style="display:none"></label>

</fieldset>
<br><br>
<input type="submit" name="submit" class="submit" value="Submit"/>

</form>
</center>

</body>


</html>