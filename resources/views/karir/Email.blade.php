<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Job Application</title>
</head>

<body>
    <h2>New Job Application</h2>
    <p><strong>Position:</strong> {{ $data['position_name'] }}</p>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
    <p><strong>Current Company:</strong> {{ $data['currentCompany'] }}</p>
    <p><strong>LinkedIn:</strong> <a href="{{ $data['linkedin'] }}">{{ $data['linkedin'] }}</a></p>
    <p><strong>Portfolio:</strong> <a href="{{ $data['portfolio'] }}">{{ $data['portfolio'] }}</a></p>
    <p><strong>CV:</strong> <a href="{{ $data['cv'] }}">{{ $data['cv'] }}</a></p>
</body>

</html>
