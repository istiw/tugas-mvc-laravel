<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<h2>Buat akun baru!</h2>
	<h3>Sign Up Form</h3>
	<!-- Menu form -->
<form action="/welcome" method="POST">
@csrf 
	<label for="nama1">First Name:</label>
	<br>
	<br>
	<input type="text" placeholder="First Name" id="nama1">
	<br>
	<br>
	<label for="nama2">Last Name:</label>
	<br>
	<br>
	<input type="text" placeholder="First Name" id="nama2">
	<br>
	<br>
	<label>Gender:</label><br><br>
	<input type="radio" name="gender">Male<br>
	<input type="radio" name="gender">Female </i>
	<br>
	<br>

	<label>Nationality:</label><br><br>
	<select>
		<option>Indonesian</option>
		<option>Austrian</option>
		<option>American</option>
	</select>
	<br>
	<br>

	<label>Language Spoken:</label><br><br>
	<input type="checkbox"> Bahasa Indonesia <br>
	<input type="checkbox"> English <br>
	<input type="checkbox"> Other</i>

	<br>
	<br>

	<label>Bio:</label><br><br>
	<textarea cols="40" rows="8"></textarea>
	<br>

<input type="submit" value="Kirim Data">

</form>
	

</body>
</html>