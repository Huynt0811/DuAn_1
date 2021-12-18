
<h1>Danh sách tài khoản</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Password</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Adress</td>
            
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($listuser as $index => $user) {        
            extract($user);
            echo '<tr>
                    <td>' . $index + 1 . '</td>
                    <td>' . $username . '</td>
                    <td>' . $password . '</td>
                    <td>' . $phone . '</td>
                    <td>' . $email . '</td>
                    <td>' . $address . '</td>
                  </tr>';
        }
        ?>
    </tbody>
</table>
<div class="btn-action">
   
</div>