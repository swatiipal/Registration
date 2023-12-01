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
        <h4>Register User</h4>
        <form action="{{ url('/') }}/register" method="post">
            @csrf
            <x-input type="text" name="name" label="Name"/>
            <x-input type="date" name="dob" label="DOB"/>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                    <input type="radio" name="gender" value="M">Male
                    <input type="radio" name="gender" value="F">Female
                    <span class="text-danger">
                        @error('gender')  
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <x-input type="text" name="address" label="Address"/>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    <select class="form-control" name="city">
                        <option value="">Select City</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="pune">Pune</option>
                        <option value="navi-mumbai">Navi Mumbai</option>
                        <option value="thane">Thane</option>
                        <option value="delhi">Delhi</option>
                    </select>
                    <span class="text-danger">
                        @error('city')  
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <x-input type="email" name="email" label="Email"/>
            <x-input type="password" name="password" label="Password"/>
            
            <button class="btn btn-primary">Submit</button>
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