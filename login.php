<?php   

include_once('models/Auth.php');

if(isset($_POST['login'])) {
    $data = [
        "username" => $_POST['username'],
        "password" => $_POST['password']
    ];

    $result = Auth::login($data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=.card, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>LOGIN</title>
</head>
<body>
    <form>
        <div class="container mt-5">
            <?php if(isset($result)) : ?>
            <div class="alert alert-<?php $result["status"] === 'error' ? print("danger") : print("success")?>">
            <?= $result["message"]?>
        </div>
        <?php endif ?>
    <div class="card">
        <div class="card-header">
            <center>
            <span class="h1">LOGIN</span>
            </center>
            <div class="card-body">
            <div class="mb-3">
             <label for="name">Username</label>
                <input type="text" class="form-control" name="username" id="username">  
            </div>
            <div class="mb-3">
            <label for="name">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="d-grid gap 2">
                <button type="submit" class="btn btn-primary" name="login">login</button>
            </div>
            </div>
        </div>
    </div>
    </div>
</form>
</body>
</html>