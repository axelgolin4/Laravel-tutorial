<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send me a emails</title>

    <style>
        a {
            rext-decoration: none;
            background-color: #3490dc;
            padding: 15px;
            border-radius: 10px;
            color: #333;
            cursor: pointer;
            margin: 20px;
        }

        a:hover {
            background-color: aquamarine;
        }

    </style>
</head>
<body>

    <a href="{{ route('mailMe') }}">Mail me</a>
    
</body>
</html>