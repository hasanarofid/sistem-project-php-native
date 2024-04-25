<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="dropdown">
        <a href="./" class="brand-link">
            <?php 
            $login_type = $_SESSION['login_type'];
            if($login_type == 1): ?>
            <h3 class="text-center p-0 m-0"><b>MARKETING</b></h3>
            <?php elseif($login_type == 2): ?>
            <h3 class="text-center p-0 m-0"><b>PM</b></h3>
            <?php elseif($login_type == 3): ?>
            <h3 class="text-center p-0 m-0"><b>ADMINISTRATION</b></h3>
            <?php elseif($login_type == 4): ?>
            <h3 class="text-center p-0 m-0"><b>PROCUREMENT</b></h3>
            <?php elseif($login_type == 5): ?>
            <h3 class="text-center p-0 m-0"><b>SITE MANAGER</b></h3>
            <?php endif; ?>
        </a>
    </div>
    <div class="sidebar pb-4 mb-4">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item dropdown">
                    <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>  
                <?php if($login_type != 5 && $login_type != 3 && $login_type != 4): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-edit_project nav-view_project">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Projects
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php if($login_type != 3 && $login_type != 4): ?>
                        <li class="nav-item">
                            <a href="./index.php?page=new_project" class="nav-link nav-new_project tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index.php?page=project_list" class="nav-link nav-project_list tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>List Project</p>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if($login_type != 5 && $login_type != 3 && $login_type != 4): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-location_of_project">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>
                            Location Of Project
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.php?page=new_location_of_project" class="nav-link nav-new_location_of_project tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>New Add Location Of Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index.php?page=list_location_of_project" class="nav-link nav-list_location_of_project tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>List Location Of Project</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if($login_type != 5 && $login_type != 3 && $login_type != 4): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-activities_location">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Activities Location
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.php?page=new_activities_location" class="nav-link nav-new_activities_location tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>New Add Activities Location</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index.php?page=list_activities_location" class="nav-link nav-list_activities_location tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>List Activities Location</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if($login_type == 3 || $login_type == 1): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-collect_documents">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Collect Documents
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.php?page=bast" class="nav-link nav-bast tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>BAST</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index.php?page=bai" class="nav-link nav-bai tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>BAI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index.php?page=evidence" class="nav-link nav-evidence tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Evidence</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if($login_type == 4 || $login_type == 1): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-procurement">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Procurement
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.php?page=new_mitra" class="nav-link nav-new_mitra tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>New Data Mitra</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index.php?page=list_mitra" class="nav-link nav-list_mitra tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>List Data Mitra</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if($login_type == 5 || $login_type == 1): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-post_problem">
                        <i class="nav-icon fas fa-exclamation-circle"></i>
                        <p>
                            Post Problem
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.php?page=add_problem" class="nav-link nav-add_problem tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Add New Problem</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index.php?page=list_problem" class="nav-link nav-list_problem tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>List Problem</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-post_evidence">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Post Evidence
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.php?page=add_evidence" class="nav-link nav-add_evidence tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Add New Evidence</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index.php?page=list_evidence" class="nav-link nav-list_evidence tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>List Evidence</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if($login_type != 5 && $login_type != 3 && $login_type != 4): ?>
                <li class="nav-item">
                    <a href="./index.php?page=task_list" class="nav-link nav-task_list">
                        <i class="fas fa-tasks nav-icon"></i>
                        <p>Task</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index.php?page=reports" class="nav-link nav-reports">
                        <i class="fas fa-th-list nav-icon"></i>
                        <p>Report</p>
                    </a>
                </li>
                <?php endif; ?>
                <?php if($login_type == 1 || $login_type == 2): ?>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-edit_user">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./index.php?page=new_user" class="nav-link nav-new_user tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./index.php?page=user_list" class="nav-link nav-user_list tree-item">
                                <i class="fas fa-angle-right nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside>
<script>
    $(document).ready(function(){
        var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
        var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
        if(s!='')
            page = page+'_'+s;
            if($('.nav-link.nav-'+page).length > 0){
                $('.nav-link.nav-'+page).addClass('active')
                if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
                    $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
                    $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
                }
                if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
                    $('.nav-link.nav-'+page).parent().addClass('menu-open')
                }
            }
    })
</script>