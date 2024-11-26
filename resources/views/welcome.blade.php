<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aethon Payroll</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            text-align: center;
            padding: 50px 20px;
        }

        .header img {
            width: 200px;
        }

        .login-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 30px;
        }

        .login-section {
            background: linear-gradient(90deg, #CAA767, #EBD697);
            width: 80%;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            color: black;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .login-section h2 {
            font-size: 2em;
            margin-bottom: 15px;
        }

        .login-section p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .login-btn {
            padding: 10px 20px;
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
        }

        .login-btn:hover {
            color: #CAA767;
        }

        .site-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .site-btn {
            padding: 10px 20px;
            background-color: #00b983;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
        }

        .site-btn:hover {

            color: #CAA767;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{asset('img/avatars/logo.png')}}" alt="Company Logo">
    </div>

    <div class="login-container">
        <div class="login-section">
            <h2>Super Admin Login</h2>
            <p>Access the management dashboard to oversee all your business operations.</p>
            <a href="{{ route('admin.login') }}"><button class="login-btn">Login</button></a>
        </div>




    </div>



</body>
</html>