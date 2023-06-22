<?php
require_once("../layouts/header.php");
$id = $_GET["id"];
$service = "SELECT * FROM services WHERE id=$id";
$service_query = mysqli_query($db_connect, $service);
$service_query_assoc= mysqli_fetch_assoc($service_query);
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
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                        <h1 class="m-0">Add Services</h1>
                    </div>

                </div>
            </div>

            <div class="container-fluid page__container">
                <div class="col card-form__body card-body">
                    <form action="./update_data.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="<?=$service_query_assoc["title"]?>">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <?php
                            if (isset($_SESSION["title_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["title_error"] ?></small>

                            <?php
                            endif;
                            unset($_SESSION["title_error"]);
                            ?>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Short Description</label>
                            <textarea name="short_description" rows="5" cols="30" class="form-control"><?=$service_query_assoc["short_description"]?></textarea>
                            <?php
                            if (isset($_SESSION["short_description_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["short_description_error"] ?></small>

                            <?php
                            endif;
                            unset($_SESSION["short_description_error"]);
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Icon</label>
                            <input type="text" class="form-control service_icon" id="" name="icon" readonly value="<?=$service_query_assoc["icon"]?>">
                            <?php
                            if (isset($_SESSION["icon_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["icon_error"] ?></small>
                            <?php
                            endif;
                            unset($_SESSION["icon_error"]);
                            ?>
                            <div style="overflow: scroll; height:200px; text-align:justify;margin:15px 0px;">
                                <?php
                                require_once("./icons.php");
                                foreach ($icons as $key => $value) { ?>
                                    <span class="badge badge-primary icons" style="margin: 2px; cursor:pointer;"><i class="<?= $key ?>" style="font-size: 14px;" onclick="click()"></i></span>
                                <?php
                                }
                                ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
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
            $(".icons").click(function() {
                $(".service_icon").val($(this).children().attr("class"));
            })
        });
    </script>