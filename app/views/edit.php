<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GADREEL</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        body {
            background-color: #19191a; 
            color: white; 
        }

        input.form-control {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row align-items-center d-flex"> <!-- Center align content vertically -->
            <div class="col-md-5">
                <form action="<?= site_url('edit'); ?>" method="post">

                    <input type="hidden" value="<?= $users['id']; ?>" name="id">
                    <p>
                        User Id: <?= $users['id']; ?>
                    </p>
                
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name:</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?= $users['username']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= $users['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?= $users['password']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="repassword" class="form-label">Re-Type Password</label>
                        <input type="password" class="form-control" id="repassword" name="repassword" value="<?= $users['password']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
