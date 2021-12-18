<h1>Danh sách bình luận</h1>
<table class="table table-hover">
    <thead>
        <tr>
            <td>ID</td>
            <td id="name-catogory">Nội dung bình luận</td>
            <td>User</td>
            <td>ID sản phẩm</td>
            <td>Ngày bình luận</td>
            <td colspan="2">ACTION</td>
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($listcmt as $index => $cmt){
            extract($cmt);
            $iduser = $id_user;
            foreach($listuser as $user){
                extract($user);
                if($iduser == $id_user){
                    $user_name = $username;
                    break;
                }
            }
            $idprd = $id_product;
            foreach($listprd as $prd){
                extract($prd);
                if($idprd == $id_product){
                    $nameprd = $name_product;
                    break;
                }
            }

            
            $delcmt = "index.php?act=delcmt&id_cmt=" .$id_cmt;
            echo '<tr>
                    <td>'. $index+1 .'</td>
                    <td>'. $description_cmt .'</td>
                    <td>'. $user_name .'</td>
                    <td>'. $nameprd .'</td>
                    <td>'. $date_cmt .'</td>
                    <td><a href="'.$delcmt.'"><input  class="btn btn-outline-danger" type="button" value="Xóa"</a></td>
                  </tr>';
                
        }
    ?>
    </tbody>
</table>
<div class="btn-action">
    <input class="btn btn-secondary" type="button"  value="Chọn tất cả">
    <input class="btn btn-secondary" type="button" value="Bỏ chọn tất cả">
    <a  class="text-decoration-none" href=""><input type="button" class="btn btn-danger" value="Xóa các danh mục đã chọn"></a>
</div>