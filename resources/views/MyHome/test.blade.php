<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>Test Heading</h1>
<p>Test paragraph.</p>

<form action="/save" method="post">
    @csrf
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"> <br>
    <input type="submit" value="Save">
</form>

</body>
</html>
