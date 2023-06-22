<?php
require_once("../layouts/header.php");
$id = $_GET["id"];
?>

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        <div class="mdk-drawer-layout__content page">

            <div class="container-fluid page__heading-container">
                <div class="page__heading d-flex align-items-end">
                    <div class="flex">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="../dashboard/dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team</li>
                            </ol>
                        </nav>
                        <h1 class="m-0">Add Team</h1>
                    </div>

                </div>
            </div>

            <div class="container-fluid page__container">
                <div class="col card-form__body card-body">
                    <form action="./update_data.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Team image</label>
                            <input type="file" class="form-control" id="t_img" name="t_img">
                            <input type="hidden" name="id" value="<?=$id?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Team Title</label>
                            <input type="text" class="form-control" id="t_name" name="t_name">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Team Role</label>
                            <input type="text" class="form-control" id="t_role" name="t_role">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Team Description</label>
                            <textarea name="t_description" rows="5" cols="30" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <!-- // END drawer-layout__content -->





    <?php
    require_once("../layouts/footer.php");
    if (isset($_SESSION["success"])) : ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '<?= $_SESSION["success"] ?>',
            })
        </script>
    <?php
    endif;
    unset($_SESSION["success"]);
    ?>
    <script>
        $(document).ready(function() {
            $(".icons").click(function () {
                $(".service_icon").val($(this).children().attr("class"));
            })
        });
    </script>