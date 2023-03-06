<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    #main {
        background-color: orange;
        width: 50%;
        padding: 20px;
        margin: 30px;
        border: 10px;

    }

    #input1 {
        font-weight: bold;

    }

    #input2 {
        font-weight: bold;
    }
    </style>
</head>

<body>

    <form class="form-horizontal" id="main" action="insert.php" method="post">
        <center>
            <h3>Enter The Bank name and address</h3>
        </center>
        <br>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label class="col-form-label" id="input1" placeholder="Enter Bank Name">Bank Name :</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputPassword6" class="form-control" name="bank_name">
            </div>
            <hr>

            <div class="col-auto">
                <label class="col-form-label" id="input2" placeholder="Enter Bank Address">Bank Address :</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="bank_address">
            </div>

        </div>
        <hr>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>

</body>

</html>