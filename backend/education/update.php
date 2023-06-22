<?php
require_once("../layouts/header.php");
$id = $_GET["id"];
$education = "SELECT * FROM education LIMIT 3";
$education_query = mysqli_query($db_connect, $education);
$education_query_assoc = mysqli_fetch_assoc($education_query);
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
                            <label for="exampleInputEmail1">start date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="<?= $education_query_assoc["start_date"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">end date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" value="<?= $education_query_assoc["end_date"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">education title</label>
                            <input type="text" class="form-control" id="edu_title" name="edu_title" value="<?= $education_query_assoc["edu_title"] ?>">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <?php
                            if (isset($_SESSION["edu_title_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["edu_title_error"] ?></small>
                            <?php
                            endif;
                            unset($_SESSION["edu_title_error"]);
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">education academy</label>
                            <input type="text" class="form-control" id="edu_academy" name="edu_academy" value="<?= $education_query_assoc["edu_academy"] ?>">
                            <?php
                            if (isset($_SESSION["edu_academy_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["edu_academy_error"] ?></small>
                            <?php
                            endif;
                            unset($_SESSION["edu_academy_error"]);
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">education description</label>
                            <textarea name="edu_description" rows="5" cols="30" class="form-control"></textarea>
                            <?php
                            if (isset($_SESSION["edu_description_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["edu_description_error"] ?></small>

                            <?php
                            endif;
                            unset($_SESSION["edu_description_error"]);
                            ?>
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