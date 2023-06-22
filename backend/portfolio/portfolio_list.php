<?php
require_once("../layouts/header.php");
$portfolio_list = "SELECT * FROM portfolio";
$portfolio_list_query = mysqli_query($db_connect, $portfolio_list);
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
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                        <h1 class="m-0">Add Portfolio</h1>
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
                                    <th>portfolio image</th>
                                    <th>portfolio category</th>
                                    <th>portfolio status</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="staff02">
                                <?php
                                foreach ($portfolio_list_query as $value) { ?>
                                    <tr>
                                        <td><?= $value["id"] ?></td>
                                        <td><img src="../../uploads/portfolio/<?= $value["portfolio image"] ?>" width="100px"></td>
                                        <td><?= $value["portfolio category"] ?></td>
                                        <td><?= $value["portfolio status"] ?></td>
                                        <td><a href="./update.php?id=<?= $value["id"] ?>" class="btn btn-info">update</a></td>
                                        <td><button value="<?= $value["id"] ?>" class="btn btn-danger delete">delete</button></td>
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

                <script>
                    const deleteElm = document.querySelectorAll(".delete");
                    const deleteElmToArr = Array.from(deleteElm);
                    deleteElmToArr.map((deleteBtn) => {
                        deleteBtn.addEventListener("click", function() {
                            Swal.fire({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = `./delete.php?id=${deleteBtn.value}`;
                                }
                            })
                        })
                    })
                </script>