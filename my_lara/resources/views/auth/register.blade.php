@extends('layouts.custom')

@section('content')
    <div class="container">
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">
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
@endsection
