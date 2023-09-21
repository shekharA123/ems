<center></center>
<!DOCTYPE html>
<html>
<head>
    <title>Center Button</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust the height as needed */
        }

        .centered-button {
            background-color: #337ab7;
            color: rgb(255, 255, 255);
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('getevent') }}"><button class="centered-button">see full calender</button></a>
    </div>
</body>
</html>
