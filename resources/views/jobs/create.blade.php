<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Job</title>
</head>
<body>
<h1>Create New job</h1>
<form action="/jobs" method="post">
    @csrf
    <input type="text" name="title" placeholder="Job Title">
    <input type="text" name="description" placeholder="Job Description">
    <button type="submit">Create Job</button>
</form>
</body>
</html>
