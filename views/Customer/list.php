<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>list</title>
</head>
<body>
    <div class="container mt-3">
    <a href="?url=add-customer" class="btn btn-success mb-3">Thêm</a>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Action</th>
        </thead>
        <?php foreach($customers as $key=>$value){?>
        <tbody>
            <td><?php echo $value['id']?></td>
            <td><?php echo $value['name']?></td>
            <td><?php echo $value['age']?></td>
            <td>
                <a href="?url=update-customer&id=<?php echo $value['id'];?>" class="btn btn-primary">Edit</a>
                <a href="?url=remove-customer&id=<?php echo $value['id'];?>" class="btn btn-danger">Delete</a>
            </td>
        </tbody>
        <?php }?>

    </table>
    </div>
    
</body>
</html>
