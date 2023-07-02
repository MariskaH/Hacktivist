<!DOCTYPE html>
<html>

<head>
    <title>Something went wrong</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');

        body {
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .image {
            margin-top: 50px;
            max-width: 42%;
            /* reduced size by an additional 20% */
        }
    </style>
</head>

<body>
    <div class="container">
        <img class="image" src="{{ asset('img/5221808.jpg') }}" alt="Error Image">
    </div>
</body>

</html>