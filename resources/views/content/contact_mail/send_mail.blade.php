<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact form</title>
</head>

<body>

    <h1>Contact message</h1>
    <p> Name: {{ $data['send_message_name'] }}</p>
    <p> Email: {{ $data['send_message_email'] }}</p>

    <p> Message: {{ $data['send_message_message'] }}</p>


</body>

</html>

