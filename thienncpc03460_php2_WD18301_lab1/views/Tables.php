<?php
function getDataUser()
{
    $host = 'localhost';
    $dbname = 'pc03460';
    $username = 'root';
    $password = 'mysql';


    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $e->getMessage());
    }

    try {
        $query = "SELECT * FROM pc03460_users";
        
        $statement = $pdo->query($query);
        
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return  $result;
    } catch (PDOException $e) {
        die("Lỗi truy vấn: " . $e->getMessage());
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>

<body>
    <div class="row justify-content-center">
        <div>
           
            <table class="table table-bordered">
                <thead>
                    <tr >
                        <th scope="col">NO.</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                        $stt = 0;
                        foreach (getDataUser() as $user){ 
                            $stt++;
                            extract($user);
                        ?>
                    <tr>
                        <th scope="row"><?= $stt; ?></th>
                        <td><?= $user_name; ?></td>
                        <td><?= password_hash($password, PASSWORD_DEFAULT) ?></td>
                        <td><?= $email; ?></td>
                        <td><?=($full_name); ?></td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://kit.fontawesome.com/0b11c0c6d5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>