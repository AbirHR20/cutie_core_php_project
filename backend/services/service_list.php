<?php
require_once("../layouts/header.php");
$service_list = "SELECT * FROM services";
$service_list_query = mysqli_query($db_connect, $service_list);
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
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                        <h1 class="m-0">Add Services</h1>
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
                                    <th>service name</th>
                                    <th>service description</th>
                                    <th>service icon</th>
                                    <th>actions</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="staff02">
                                <?php
                                foreach ($service_list_query as $value) { ?>
                                    <tr>
                                        <td><?= $value["id"] ?></td>
                                        <td><?= $value["title"] ?></td>
                                        <td><?= $value["short_description"] ?></td>
                                        <td><?= $value["icon"] ?></td>
                                        <td><?= $value["status"] ?></td>
                                        <td><a href="./update.php?id=<?= $value["id"] ?>" class="btn btn-info">update</a></td>
                                        <td><a href="./delete.php/?abcd=<?= $value["id"] ?>" class="btn btn-danger">delete</a></td>
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

                