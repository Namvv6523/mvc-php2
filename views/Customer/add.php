<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Add</title>
</head>

<body>
    <div class="container mt-3">
        <form action="?url=add-customer" method="post" enctype="multipart/form-data">
        
                <label for="">ID</label>
                <input type="text" name="id" disabled class="form-control">
            
        
                <label for="">Name</label>
                <input type="text" name="username" class="form-control">
            
        
                <label for="">Age</label>
                <input type="text" name="age" class="form-control">
            

            <input type="submit" name="themmoi" value="Thêm" class="btn btn-success mt-3">
        </form>
    </div>


</body>

</html>