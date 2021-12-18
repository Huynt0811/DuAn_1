<!-- Bình Luận -->

<?php
session_start();
include '../../model/pdo.php';
include '../../model/comment.php';
include '../../model/taikhoan.php';
$listuser = loadall_user();
$id_product = $_REQUEST['id_product'];
$dsbl = loadall_comment($id_product);
$dsuser = loadall_user();
?>
<h1>Đánh giá sản phẩm</h1>

<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    
<div class="commenter" >
    <div class="comment row">
        <table class="table">
            <tr class="table-active">
                <th>Người bình luận</th>
                <th>Nội dung bình luận</th>
                <th>Ngày Bình luận</th>
            </tr>
            <?php
            foreach ($dsbl as $bl) {
                extract($bl);
                $iduser = $id_user;
                foreach($listuser as $user){
                    extract($user);
                    if($iduser == $id_user){
                        $user_name = $username;
                        break;
                    }
                }
                echo '<tr class="table-active">
                        <td>' .$user_name. '</td>';
                echo '<td>' . $description_cmt . '</td>';
                echo '<td>' . $date_cmt . '</td></tr>';
            }
            ?>
        </table>
        
        </div>
        <?php if (isset($_SESSION['user'])){?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <input type="hidden" name="id_product" value="<?php echo $id_product; ?>">
                <input type="text" name="description_cmt" placeholder="Viết Bình Luận.....">
                <input type="submit" class="btn btn-primary" value="Đăng bình Luận" name="guibinhluan">
            </form>
        <?php
            } else {
                echo '<div class="col">
                <a href="index.php?act=dangnhap&spbl=<?=$id_product?>" class="btn btn-danger mb-3">Đăng nhập để bình luận</a>
            </div>';
            }
        ?>
        
    </div>
    <?php
    
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
        $description_cmt = $_POST['description_cmt'];
        $id_product = $_POST['id_product'];
        $id_user = $_SESSION['user']['id_user'];
        $date_cmt = date ("Y-m-d H:i:s");
        insert_comment($description_cmt,$id_user,$id_product,$date_cmt);
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
    
    ?>
</div>