<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("cdn")
    <title>HTTP REQ.</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table table-striped table-bordered">
        <caption>User Info.</caption>
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $value)
                    <tr>
                        <td>{{$value['name']}}</td>
                        <td>{{$value['email']}}</td>
                        <td>{{$value['address']}}</td>
                        <td>
                            <button class="btn btn-primary" onclick="location.href = '{{URL::to('edit')}}'">Edit</button>
                            <button class="btn btn-danger" >Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-success float-end" style="margin-top: -50px;">Add New</button>
    </div>
</body>
</html>

<!--
    <form action="processreq" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6"></div>
            </div>
        </form>
-->