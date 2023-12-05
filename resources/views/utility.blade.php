<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>View Users!</title>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container">
    <h3>
        <center>Trash Data!</center>
    </h3>
    <a href="{{url('/view')}}" class="btn btn-primary">Console</a><br><br>
    <table id="myTable" class="display">
        {{-- <pre>
        {{print_r($registers->toArray())}}
    </pre> --}}
        <thead>
            <tr>
                <th>Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Address</th>
                <th>City</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registers as $register)
                <tr>
                    <td>{{ $register->name }}</td>
                    {{-- <td>{{ get_formatted_date($register->dob,'d-m-Y') }}</td> --}}
                    <td>{{ $register->dob }}</td>
                    <td>
                        @if ($register->gender == 'M')
                            Male
                        @else
                            Female
                        @endif
                    </td>
                    <td>{{ $register->address }}</td>
                    <td>{{ $register->city }}</td>
                    <td>{{ $register->email }}</td>
                    <td><a class="btn btn-warning" href="{{route('register.force-delete',$register->id)}}">Delete</a>
                        <a class="btn btn-danger" href="{{route('register.restore',[$id=$register->id])}}">Restore</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    
</body>

</html>
