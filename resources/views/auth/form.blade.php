<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - SanberBook</title>
</head>
<body>
    <a href="/index"><---- Kembali</a>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/signup" method="POST">
        @csrf
        <label for="firstName">First Name :</label> <br> <br>
        <input type="text" name="firstName" placeholder="Your First Name" required> <br> <br>
        <label for="lastName">Last Name :</label> <br> <br>
        <input type="text" name="lastName" placeholder="Your Last Name" required> <br> <br>
        <label>Gender :</label> <br> <br>
        <input type="radio" name="gender" id="gender" value="0"> Male <br>
        <input type="radio" name="gender" id="gender" value="1"> Female <br>
        <input type="radio" name="gender" id="gender" value="2"> Other <br> <br>
        <label>Nationality :</label> <br> <br>
        <select name="nationality" id="nationality">
            <option value="0">Indonesia</option>
            <option value="1">Singapore</option>
            <option value="2">Malaysia</option>
            <option value="3">Vietnam</option>
            <option value="4">Thailand</option>
        </select>
        <br> <br>
        <label>Language Spoken :</label> <br> <br>
        <input type="checkbox" name="bahasa" id="bahasa" value="0"> Bahasa Indonesia <br>
        <input type="checkbox" name="bahasa" id="bahasa" value="1"> English <br>
        <input type="checkbox" name="bahasa" id="bahasa" value="2"> Other <br> <br>
        <label for="bio">Bio :</label> <br> <br>
        <textarea name="bio" id="bio" cols="30" rows="10" required></textarea> <br>
        <input type="submit" name="sign_up" id="sign_up" value="Sign Up">
    </form>
</body>
</html>