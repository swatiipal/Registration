<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <h4>{{ $title }}</h4>

        <form action="{{ $url }}" method="post">
            @csrf
            {{-- <x-input type="text" name="name" label="Name" /> --}}
            {{-- <x-input type="date" name="dob" label="DOB" /> --}}

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name"
                        value="{{ isset($register->name) ? $register->name : '' }}">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="dob" class="col-sm-2 col-form-label">DOB</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="dob"
                        value="{{ isset($register->dob) ? date('Y-m-d',strtotime($register->dob)) : '' }}"
                        >
                    <span class="text-danger">  
                        @error('dob')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <input type="radio" name="gender" value="M"
                        @isset($register->gender){{ $register->gender == 'M' ? 'checked' : '' }} @endisset>
                        <label for="male">Male</label>
                    <input type="radio" name="gender" value="F"
                        @isset($register->gender){{ $register->gender == 'F' ? 'checked' : '' }} @endisset>
                        <label for="female">Female</label>
                    <span class="text-danger">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">address</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address"
                        value="{{ isset($register->address) ? $register->address : '' }}">
                    <span class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            {{-- <x-input type="text" name="address" label="Address" /> --}}
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <select class="form-control" name="city">
                        <option value="">Select City</option>
                        {{-- <option value="mumbai" {{ isset($register->city=="mumbai")? "selected" : ""}}>Mumbai</option> --}}
                        <option value="mumbai"
                            @isset($register->city){{ $register->city == 'mumbai' ? 'selected' : '' }} @endisset>
                            Mumbai</option>
                        <option value="pune"
                            @isset($register->city){{ $register->city == 'pune' ? 'selected' : '' }} @endisset>
                            Pune</option>
                        <option value="navi-mumbai"
                            @isset($register->city){{ $register->city == 'navi-mumbai' ? 'selected' : '' }} @endisset>
                            Navi Mumbai</option>
                        <option value="thane"
                            @isset($register->city){{ $register->city == 'thane' ? 'selected' : '' }} @endisset>
                            Thane</option>
                        <option value="delhi"
                            @isset($register->city){{ $register->city == 'delhi' ? 'selected' : '' }} @endisset>
                            Delhi</option>
                    </select>
                    <span class="text-danger">
                        @error('city')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email"
                        value="{{ isset($register->email) ? $register->email : '' }}">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password"
                        value="{{ isset($register->password) ? $register->password : '' }}">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="form-group row">
                <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password_confirmation"
                        value="{{ isset($register->password) ? $register->password : '' }}">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            {{-- <x-input type="email" name="email" label="Email"/>
            <x-input type="password" name="password" label="Password"/>
            <x-input type="password" name="password_confirmation" label="Confirm Password" /> --}}
            <button class="btn btn-primary">Submit</button>
            <a class="btn btn-primary" href="{{ url('/') }}">Login</a>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
