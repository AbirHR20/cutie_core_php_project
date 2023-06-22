<?php
require_once("../layouts/header.php");
$id = $_GET["id"];
$skills = "SELECT * FROM skills WHERE id=$id";
$skills_query = mysqli_query($db_connect, $skills);
$skills_query_assoc= mysqli_fetch_assoc($skills_query);
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
                                <li class="breadcrumb-item active" aria-current="page">Skills</li>
                            </ol>
                        </nav>
                        <h1 class="m-0">Add Skills</h1>
                    </div>

                </div>
            </div>

            <div class="container-fluid page__container">
                <div class="col card-form__body card-body">
                    <form action="./update_data.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">skills name</label>
                            <input type="text" class="form-control" id="title" name="skills_name" value="<?=$skills_query_assoc["skills name"]?>">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <?php
                            if (isset($_SESSION["skills_name_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["skills_name_error"] ?></small>

                            <?php
                            endif;
                            unset($_SESSION["skills_name_error"]);
                            ?>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">skills percentage</label>
                            <input type="text" class="form-control" id="title" name="skills_percentage" value="<?=$skills_query_assoc["skills percentage"]?>">
                            <?php
                            if (isset($_SESSION["skills_percentage_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["skills_percentage_error"] ?></small>

                            <?php
                            endif;
                            unset($_SESSION["skills_percentage_error"]);
                            ?>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">skills status</label>
                            <select name="skills_status" id="" class="form-control">
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