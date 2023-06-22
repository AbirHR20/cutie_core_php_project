<?php
require_once("../layouts/header.php");
$id = $_GET["id"];
$experience = "SELECT * FROM experience";
$experience_query = mysqli_query($db_connect, $experience);
$experience_query_assoc = mysqli_fetch_assoc($experience_query);
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
                                <li class="breadcrumb-item active" aria-current="page">Experience</li>
                            </ol>
                        </nav>
                        <h1 class="m-0">Add Experience</h1>
                    </div>

                </div>
            </div>

            <div class="container-fluid page__container">
                <div class="col card-form__body card-body">
                    <form action="./update_data.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">start date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="<?= $experience_query_assoc["start_date"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">end date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" value="<?= $experience_query_assoc["end_date"] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">experience title</label>
                            <input type="text" class="form-control" id="edu_title" name="ex_title" value="<?= $experience_query_assoc["ex_title"] ?>">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <?php
                            if (isset($_SESSION["ex_title_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["ex_title_error"] ?></small>
                            <?php
                            endif;
                            unset($_SESSION["ex_title_error"]);
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">experience academy</label>
                            <input type="text" class="form-control" id="ex_academy" name="ex_academy" value="<?= $experience_query_assoc["ex_academy"] ?>">
                            <?php
                            if (isset($_SESSION["ex_academy_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["ex_academy_error"] ?></small>
                            <?php
                            endif;
                            unset($_SESSION["ex_academy_error"]);
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">experience description</label>
                            <textarea name="ex_description" rows="5" cols="30" class="form-control"></textarea>
                            <?php
                            if (isset($_SESSION["ex_description_error"])) : ?>
                                <small class="text-danger"><?= $_SESSION["ex_description_error"] ?></small>

                            <?php
                            endif;
                            unset($_SESSION["ex_description_error"]);
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