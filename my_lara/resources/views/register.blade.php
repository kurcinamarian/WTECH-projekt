<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image/png" href="{{ asset('dataset_pics/album.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .form-group {
            display: flex;
            margin-bottom: 15px;
        }

        .form-group input,
        .form-group select {
            width: 48%;
            padding: 10px;
            margin-right: 4%;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .form-group input:last-child,
        .form-group select:last-child {
            margin-right: 0;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group button:hover {
            background-color: #555;
        }

        .checkbox-group {
            margin-bottom: 15px;
        }

        .checkbox-group label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 10px;
        }

        .error {
            color: red;
            font-size: 14px;
            text-align: center;
        }

        .phone-group {
            display: flex;
            margin-bottom: 15px;
        }

        .phone-group select,
        .phone-group input {
            padding: 10px;
            font-size: 16px;
        }

        .phone-group select {
            width: 30%;
            margin-right: 5%;
        }

        .phone-group input {
            width: 65%;
        }

    </style>
</head>
<body>


<div class="container">
    <h2>Register</h2>
    <form action="{{ url('register') }}" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" name="firstname" placeholder="First Name" value="{{ old('firstname') }}" required>
            <input type="text" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <!-- phone number field -->
        <div class="phone-group">
            <select name="phone_prefix" required>
                <option value="A" {{ old('phone_prefix') == 'A' ? 'selected' : '' }}>+421</option>
                <option value="B" {{ old('phone_prefix') == 'B' ? 'selected' : '' }}>+420</option>
            </select>
            <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required>
        </div>

        <div class="checkbox-group">
            <label>
                <input type="checkbox" name="terms" {{ old('terms') ? 'checked' : '' }} required>
                I agree with the terms and conditions
            </label>
            <label>
                <input type="checkbox" name="newsletter" {{ old('newsletter') ? 'checked' : '' }}>
                I would like to receive emails about new products or sales
            </label>
        </div>

        <div class="form-group">
            <button type="submit">Register</button>
        </div>
    </form>

    <div class="error">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

    <div class="error">
        <!-- error message if neccesarry -->
    </div>

</body>
</html>
