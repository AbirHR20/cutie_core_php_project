<?php 
    require_once("../layouts/header.php");
    // session_start();
    $user_id = $_SESSION["user_id"];
    $error = $_SESSION["error"];    
    $user_data_query = "SELECT * FROM users WHERE id = $user_id";
    $user_data_query_to_db = mysqli_query($db_connect, $user_data_query);
    $result_to_array = mysqli_fetch_assoc($user_data_query_to_db);   
?>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">

                        <div class="container-fluid  page__heading-container">
                            <div class="page__heading">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                                        <li class="breadcrumb-item active"
                                            aria-current="page">Account</li>
                                    </ol>
                                </nav>
                                <h1 class="m-0">Edit Account</h1>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="card card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Basic Information</strong></p>
                                        <p class="text-muted">Edit your account details and settings.</p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <form action="./edit_profile_data.php" method="post">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="name">name</label>
                                                        <input id="name"
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="name"
                                                            name="name"
                                                            value=" <?= $result_to_array["name"] ?> ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">                                            
                                                <label for="desc">Bio / Description</label>
                                                <textarea id="desc"
                                                rows="4"
                                                class="form-control"
                                                placeholder="Bio / description ..." name="bio"><?= $result_to_array["bio"] ?? "" ?></textarea>
                                            </div>
                                            <div class="text-right mb-5">
                                                <button href="" class="btn btn-success" name="basic_information">Update</button>
                                            </div>

                                            
                                            <?php 
                                                if(isset($error)){
                                                    ?>


                                                    <div class="alert alert-danger" role="alert">
                                                    <strong><?php print_r("$error") ?></strong>
                                                    </div>  
                                                                   <?php                                                                    
                                                }else{
                                                    unset($_SESSION['error']);
                                                }
                                            ?>

 

                                            

                                                   
                                          
                                    </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Update Your Password</strong></p>
                                        <p class="text-muted">Change your password.</p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <form action="./edit_profile_data.php" method="post">
                                        <div class="form-group">
                                            <label for="opass">Old Password</label>
                                            <input style="width: 270px;"
                                                   id="opass"
                                                   type="password"
                                                   class="form-control"
                                                   name="old_password"
                                                   <small class="invalid-feedback">The new password must not be empty.</small>
                                                   
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">New Password</label>
                                            <input style="width: 270px;"
                                                   id="npass"
                                                   type="password"
                                                   name="new_password"
                                                   class="form-control">
                                                   <small class="invalid-feedback">The new password must not be empty.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="cpass">Confirm Password</label>
                                            <input style="width: 270px;"
                                                   id="cpass"
                                                   type="password"
                                                   class="form-control"
                                                   name="confirm_password"
                                                   <small class="invalid-feedback">The new password must not be empty.</small>
                                        </div>  
                                        <div class="text-right mb-5">
                                                <button href="" class="btn btn-success" name="change_password">Update</button>
                                            </div>                                          
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-form">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 card-body">
                                        <p><strong class="headings-color">Profile Settings</strong></p>
                                        <p class="text-muted">Update your public profile with relevant and meaningful information.</p>
                                    </div>
                                    <div class="col-lg-8 card-form__body card-body">
                                        <div class="form-group">
                                            <label>Avatar</label>
                                            <div class="dz-clickable media align-items-center"
                                                 data-toggle="dropzone"
                                                 data-dropzone-url="http://"
                                                 data-dropzone-clickable=".dz-clickable"
                                                 data-dropzone-files='["../assets/images/account-add-photo.svg"]'>
                                                <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                                    <div class="avatar"
                                                         style="width: 80px; height: 80px;">
                                                        <img src="../assets/images/account-add-photo.svg"
                                                             class="avatar-img rounded"
                                                             alt="..."
                                                             data-dz-thumbnail>
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="desc2">Description</label>
                                            <textarea id="desc2"
                                                      rows="4"
                                                      class="form-control"
                                                      placeholder="Description ..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="social1">Social links</label>
                                            <div class="input-group input-group-merge mb-2"
                                                 style="width: 270px;">
                                                <input id="social1"
                                                       type="text"
                                                       class="form-control form-control-prepended"
                                                       placeholder="Facebook">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-facebook"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-merge mb-2"
                                                 style="width: 270px;">
                                                <input id="social2"
                                                       type="text"
                                                       class="form-control form-control-prepended"
                                                       placeholder="Twitter">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-twitter"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-merge mb-2"
                                                 style="width: 270px;">
                                                <input id="social3"
                                                       type="text"
                                                       class="form-control form-control-prepended"
                                                       placeholder="Instagram">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-instagram"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="customCheck1">Available for freelance?</label>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox"
                                                       class="custom-control-input"
                                                       id="customCheck1"
                                                       checked="">
                                                <label class="custom-control-label"
                                                       for="customCheck1">Yes, show me as available for freelance!</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right mb-5">
                                <a href=""
                                   class="btn btn-success">Save</a>
                            </div>
                        </div>

                    </div>
                    <!-- // END drawer-layout__content -->
                   
                    
<?php 
    require_once("../layouts/footer.php");
?>