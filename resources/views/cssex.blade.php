<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("cdn")
    <title>Document</title>
</head>
<body>
    <form action="/form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row form-group">
                <div class="col-sm-6">
                    <label for="name">Name: </label>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name"/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    <label for="email">Email: </label>
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" id="email"/>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    <label for="password">Password: </label>
                </div>
                <div class="col-sm-6">
                    <input type="password" name="password" id="password"/>
                </div>
            </div>
            <input type="submit" class="btn btn-success" value="Submit"/>
        </div>
    </form>
</body>
</html>