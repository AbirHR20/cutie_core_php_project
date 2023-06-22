<?php
require_once("../layouts/header.php");
$experience = "SELECT * FROM experience";
$experience_query = mysqli_query($db_connect, $experience);
?>

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
                <div class="col-lg-12 card-form__body">

                    <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                        <table class="table mb-0 thead-border-top-0">
                            <thead>
                                <tr>

                                    <th>#</th>
                                    <th>start date</th>
                                    <th>end date</th>
                                    <th>experiance title</th>
                                    <th>experiance academy</th>
                                    <th>experiance description</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="staff02">
                                <?php
                                foreach ($experience_query as $value) { ?>
                                    <tr>
                                        <td><?= $value["id"] ?></td>
                                        <td><?= $value["start_date"] ?></td>
                                        <td><?= $value["end_date"] ?></td>
                                        <td><?= $value["ex_title"] ?></td>
                                        <td><?= $value["ex_academy"] ?></td>
                                        <td><?= $value["ex_description"] ?></td>
                                        <td><a href="./update.php?id=<?= $value["id"] ?>" class="btn btn-info">update</a></td>
                                        <td><a href="./delete.php?abcd=<?= $value["id"] ?>" class="btn btn-danger">delete</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <?php
                require_once("../layouts/footer.php");
                ?>