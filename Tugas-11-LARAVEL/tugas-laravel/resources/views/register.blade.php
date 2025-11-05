<!DOCTYPE html>
<html>

<head>
    <title>Form Registrasi</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST">
        @csrf <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>

        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br><br>

        <label>Nationality:</label><br>
        <select name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="singaporean">Singaporean</option>
        </select><br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language" value="bahasa"> Bahasa Indonesia<br>
        <input type="checkbox" name="language" value="english"> English<br>
        <input type="checkbox" name="language" value="other"> Other<br><br>

        <label for="bio">Bio:</label><br>
        <textarea id="bio" name="bio" rows="10" cols="30"></textarea><br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>

</html>
