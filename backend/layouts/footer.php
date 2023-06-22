<?php
require_once("../layouts/header.php");
$auth = $_SESSION['user_id'];
$auth_query = "SELECT role FROM users WHERE id=$auth";
$service_list_query = mysqli_query($db_connect, $auth_query);
$row = mysqli_fetch_assoc($service_list_query);
?>

<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
    <div class="mdk-drawer__content">
        <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
            <div class="sidebar-heading">Menu</div>
            <ul class="sidebar-menu">
                <li class="sidebar-menu-item active open">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                        <span class="sidebar-menu-text">Dashboards</span>
                    </a>

                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Apps</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="apps_menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-activities.html">
                                <span class="sidebar-menu-text">Activities</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-trello.html">
                                <span class="sidebar-menu-text">Trello</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-projects.html">
                                <span class="sidebar-menu-text">Projects</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-fullcalendar.html">
                                <span class="sidebar-menu-text">Event Calendar</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-chat.html">
                                <span class="sidebar-menu-text">Chat</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-email.html">
                                <span class="sidebar-menu-text">Email</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item ">
                            <a class="sidebar-menu-button" data-toggle="collapse" href="#course_menu">
                                <span class="sidebar-menu-text">Education</span>
                                <span class="ml-auto d-flex align-items-center">
                                    <span class="badge badge-primary">NEW</span>
                                    <span class="sidebar-menu-toggle-icon"></span>
                                </span>
                            </a>
                            <ul class="sidebar-submenu collapse " id="course_menu">
                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" href="app-browse-courses.html">
                                        <span class="sidebar-menu-text">Browse Courses</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" href="app-course.html">
                                        <span class="sidebar-menu-text">Course</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item ">
                                    <a class="sidebar-menu-button" href="app-lesson.html">
                                        <span class="sidebar-menu-text">Lesson</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#service_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Services</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="service_menu">
                        <?php
                        if ($row['role'] === "admin") {?>
                            <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../../backend/services/add.php">
                                <span class="sidebar-menu-text">Add Services</span>
                            </a>
                        </li><?php
                        }
                        ?>
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../../backend/services/service_list.php">
                                <span class="sidebar-menu-text">Service List</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#portfolio_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Portfolio</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="portfolio_menu">
                        <?php
                        if ($row['role'] === "admin") {?>
                            <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../portfolio/add.php">
                                <span class="sidebar-menu-text">Add Portfolio</span>
                            </a>
                        </li><?php
                        }
                        ?>
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../portfolio/portfolio_list.php">
                                <span class="sidebar-menu-text">Portfolio List</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#skills_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Skills</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="skills_menu">
                        <?php
                        if ($row['role'] === "admin") {?>
                            <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../skills/add.php">
                                <span class="sidebar-menu-text">Add skills</span>
                            </a>
                        </li><?php
                        }
                        ?>
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../skills/skills_list.php">
                                <span class="sidebar-menu-text">Skills List</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="app-projects.html">
                                <span class="sidebar-menu-text">Projects</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#education_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Education</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="education_menu">
                        <?php
                        if ($row['role'] === "admin") {?>
                            <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../education/add.php">
                                <span class="sidebar-menu-text">Add education</span>
                            </a>
                        </li><?php
                        }
                        ?>
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../education/education_list.php">
                                <span class="sidebar-menu-text">Education List</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#experience_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Experience </span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="experience_menu">
                        <?php
                        if ($row['role'] === "admin") {?>
                            <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../experience/add.php">
                                <span class="sidebar-menu-text">Add experience</span>
                            </a>
                        </li><?php
                        }
                        ?>
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../experience/experience_list.php">
                                <span class="sidebar-menu-text">Experience List</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#d_skills_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Design skills</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="d_skills_menu">
                        <?php
                        if ($row['role'] === "admin") {?>
                            <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../design_skills/add.php">
                                <span class="sidebar-menu-text">Add design skills</span>
                            </a>
                        </li><?php
                        }
                        ?>
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../design_skills/d_skills_list.php">
                                <span class="sidebar-menu-text">Design skills List</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#team_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Team</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="team_menu">
                        <?php
                        if ($row['role'] === "admin") {?>
                            <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../team/add.php">
                                <span class="sidebar-menu-text">Add Team</span>
                            </a>
                        </li><?php
                        }
                        ?>
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../team/team_list.php">
                                <span class="sidebar-menu-text">Team List</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#blog_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Blog</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="blog_menu">
                        <?php
                        if ($row['role'] === "admin") {?>
                            <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../blog/add.php">
                                <span class="sidebar-menu-text">Add Blog</span>
                            </a>
                        </li><?php
                        }
                        ?>
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../blog/blog_list.php">
                                <span class="sidebar-menu-text">Blog List</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-item">
                    <a class="sidebar-menu-button" data-toggle="collapse" href="#awards_menu">
                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                        <span class="sidebar-menu-text">Awards</span>
                        <span class="ml-auto sidebar-menu-toggle-icon"></span>
                    </a>
                    <ul class="sidebar-submenu collapse" id="awards_menu">
                        <?php
                        if ($row['role'] === "admin") {?>
                            <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../awards/add.php">
                                <span class="sidebar-menu-text">Add awards</span>
                            </a>
                        </li><?php
                        }
                        ?>
                        
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="../awards/aw_list.php">
                                <span class="sidebar-menu-text">Awards List</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-heading">Components</div>
            <div class="sidebar-block p-0 mb-0">
                <ul class="sidebar-menu" id="components_menu">
                    <li class="sidebar-menu-item">
                        <a class="sidebar-menu-button" href="ui-buttons.html">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>
                            <span class="sidebar-menu-text">Buttons</span>
                        </a>
                    </li>

                </ul>

            </div>

            <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account">
                <a href="profile.html" class="flex d-flex align-items-center text-underline-0 text-body">
                    <span class="avatar avatar-sm mr-2">
                        <img src="../assets/images/avatar/demi.png" alt="avatar" class="avatar-img rounded-circle">
                    </span>
                    <span class="flex d-flex flex-column">
                        <strong><?= $_SESSION["user_name"] ?></strong>
                        <small class="text-muted text-uppercase"><?= $_SESSION["user_role"] ?></small>
                    </span>
                </a>
                <div class="dropdown ml-auto">
                    <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-item-text dropdown-item-text--lh">
                            <div><strong><?= $_SESSION["user_name"] ?></strong></div>
                            <div><?= $_SESSION["user_role"] ?></div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item active" href="index.html">Dashboard</a>
                        <a class="dropdown-item" href="profile.html">My profile</a>
                        <a class="dropdown-item" href="../profile/edit_profile.php">Edit Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../auth/logout.php">Logout</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
<!-- // END drawer-layout -->

</div>
<!-- // END header-layout__content -->
</div>
<!-- // END header-layout -->

<!-- App Settings FAB -->
<div id="app-settings">
    <app-settings layout-active="default" :layout-location="{
      'default': 'index.html',
      'fixed': 'fixed-dashboard.html',
      'fluid': 'fluid-dashboard.html',
      'mini': 'mini-dashboard.html'
    }"></app-settings>
</div>

<!-- jQuery -->
<script src="../assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="../assets/vendor/popper.min.js"></script>
<script src="../assets/vendor/bootstrap.min.js"></script>

<!-- Perfect Scrollbar -->
<script src="../assets/vendor/perfect-scrollbar.min.js"></script>

<!-- DOM Factory -->
<script src="../assets/vendor/dom-factory.js"></script>

<!-- MDK -->
<script src="../assets/vendor/material-design-kit.js"></script>

<!-- App -->
<script src="../assets/js/toggle-check-all.js"></script>
<script src="../assets/js/check-selected-row.js"></script>
<script src="../assets/js/dropdown.js"></script>
<script src="../assets/js/sidebar-mini.js"></script>
<script src="../assets/js/app.js"></script>

<!-- App Settings (safe to remove) -->
<script src="../assets/js/app-settings.js"></script>

<!-- Flatpickr -->
<script src="../assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="../assets/js/flatpickr.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Global Settings -->
<script src="../assets/js/settings.js"></script>

<!-- Moment.js -->
<script src="../assets/vendor/moment.min.js"></script>
<script src="../assets/vendor/moment-range.js"></script>

<!-- Chart.js -->
<script src="../assets/vendor/Chart.min.js"></script>

<!-- App Charts JS -->
<script src="../assets/js/charts.js"></script>
<script src="../assets/js/chartjs-rounded-bar.js"></script>

<!-- Chart Samples -->
<script src="../assets/js/page.dashboard.js"></script>
<script src="../assets/js/progress-charts.js"></script>

<!-- Vector Maps -->
<script src="../assets/vendor/jqvmap/jquery.vmap.min.js"></script>
<script src="../assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="../assets/js/vector-maps.js"></script>



</body>

</html>