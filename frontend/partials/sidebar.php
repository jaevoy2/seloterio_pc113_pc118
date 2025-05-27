<?php
    $currentPage = $_SERVER['REQUEST_URI'];
?>
<div id="side_overlay" style=""></div>
<div class="" id="sidebar_con">
    <nav id="sidebar" class=" sidebar">
        <div class="logo d-flex justify-content-between align-items-center py-1" style="width: 100%">
            <img src="https://backend-folder.test/images/padeliber.png" width="150px" height="auto" class="" alt="photo">
            <svg id="close_sidebar" xmlns="http://www.w3.org/2000/svg"  width="28"  height="28"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11 7l-5 5l5 5" /><path d="M17 7l-5 5l5 5" /></svg>
        </div>
        <ul class="nav main_menu mt-4">
            <p class="mb-1" style="font-size: 11px; font-weight:bold; color:rgb(174, 174, 174)">MAIN MENU</p>
            <li class="p-1">
                <div class="<?= (strpos($currentPage, 'dashboard.php') !== false) ? 'active' : '' ?> p-2 mb-1">
                    <a href="dashboard.php" class="nav_btns d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2"  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" /></svg>
                        Dashboard
                    </a>
                </div>
            </li>
            <li class="p-1 mb-1" id="Manage User" style="display: none">
                <div class="<?= (strpos($currentPage, 'users.php') !== false) ? 'active' : '' ?> p-2">
                    <a href="users.php" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2"  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                        User Management
                    </a>
                </div>
            </li>
            <li class="p-1 mb-1" id="Order Assignments" style="display: none">
                <div class="<?= (strpos($currentPage, 'manage-orders.php') !== false) ? 'active' : '' ?> p-2">
                    <a href="manage-orders.php" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-sort-ascending-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 9l3 -3l3 3" /><path d="M5 5m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" /><path d="M5 14m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" /><path d="M17 6v12" /></svg>
                        Order Assignments
                    </a>
                </div>
            </li>
            <li class="p-1 mb-1" id="My Deliveries" style="display: none">
                <div class="<?= (strpos($currentPage, 'my-delivery.php') !== false) ? 'active' : '' ?> p-2">
                    <a href="my-delivery.php" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="16"  height="16"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-truck"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" /></svg>                        
                        My Delivery
                    </a>
                </div>
            </li>
            <li class="p-1 mb-1" id="Delivery History" style="display: none">
                <div class="<?= (strpos($currentPage, 'delivery-history.php') !== false) ? 'active' : '' ?> p-2">
                    <a href="delivery-history.php" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-history"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 8l0 4l2 2" /><path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" /></svg>
                        My Delivery History
                    </a>
                </div>
            </li>
            <li class="p-1 mb-1" id="Reports" style="display: none">
                <div class="<?= (strpos($currentPage, 'report.php') !== false) ? 'active' : '' ?>  p-2">
                    <a href="report.php" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-report-analytics"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 17v-5" /><path d="M12 17v-1" /><path d="M15 17v-3" /></svg>
                        Delivery Reports
                    </a>
                </div>
            </li>
        </ul>
    
        <ul class="nav settings mt-4">
            <p class="mb-1" style="font-size: 11px; font-weight:bold; color:rgb(174, 174, 174)">SETTINGS</p>
            <li class="py-1" id="Roles & Permission" style="display: none">
                <div class="<?= (strpos($currentPage, 'role_permission.php') !== false) || (strpos($currentPage, 'add-role.php') !== false) || (strpos($currentPage, 'edit-role.php') !== false) ? 'active' : '' ?> p-2">
                    <a href="../role_permission.php" class="nav_btns d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14.647 4.081a.724 .724 0 0 0 1.08 .448c2.439 -1.485 5.23 1.305 3.745 3.744a.724 .724 0 0 0 .447 1.08c2.775 .673 2.775 4.62 0 5.294a.724 .724 0 0 0 -.448 1.08c1.485 2.439 -1.305 5.23 -3.744 3.745a.724 .724 0 0 0 -1.08 .447c-.673 2.775 -4.62 2.775 -5.294 0a.724 .724 0 0 0 -1.08 -.448c-2.439 1.485 -5.23 -1.305 -3.745 -3.744a.724 .724 0 0 0 -.447 -1.08c-2.775 -.673 -2.775 -4.62 0 -5.294a.724 .724 0 0 0 .448 -1.08c-1.485 -2.439 1.305 -5.23 3.744 -3.745a.722 .722 0 0 0 1.08 -.447c.673 -2.775 4.62 -2.775 5.294 0zm-2.647 4.919a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" /></svg>
                        Role & Permission Manager
                    </a>
                </div>
            </li>
            <li class="py-1" id="Menu Access Control" style="display: none">
                <div class="<?= (strpos($currentPage, 'menu-access.php') !== false) ? 'active' : '' ?> p-2">
                    <a href="menu-access.php" class="nav_btns d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-shield-lock"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11.998 2l.118 .007l.059 .008l.061 .013l.111 .034a.993 .993 0 0 1 .217 .112l.104 .082l.255 .218a11 11 0 0 0 7.189 2.537l.342 -.01a1 1 0 0 1 1.005 .717a13 13 0 0 1 -9.208 16.25a1 1 0 0 1 -.502 0a13 13 0 0 1 -9.209 -16.25a1 1 0 0 1 1.005 -.717a11 11 0 0 0 7.531 -2.527l.263 -.225l.096 -.075a.993 .993 0 0 1 .217 -.112l.112 -.034a.97 .97 0 0 1 .119 -.021l.115 -.007zm.002 7a2 2 0 0 0 -1.995 1.85l-.005 .15l.005 .15a2 2 0 0 0 .995 1.581v1.769l.007 .117a1 1 0 0 0 1.993 -.117l.001 -1.768a2 2 0 0 0 -1.001 -3.732z" /></svg>
                        Menu Access Control
                    </a>
                </div>
            </li>
            <li class="py-1">
                <div class="<?= (strpos($currentPage, 'profile.php') !== false) ? 'active' : '' ?> p-2">
                    <a href="profile.php" class="nav_btns d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" /><path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" /></svg>
                        Account Settings
                    </a>
                </div>
            </li>
            <!-- <li class="p-1">
                <div class="<?= (strpos($currentPage, 'student.php') !== false) ? 'active' : '' ?> p-2">
                    <a href="employees.php" class="nav_btns d-flex align-items-center text-dark" style="text-decoration: none">
                        <svg class="me-2"  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" /></svg>
                        Student
                    </a>
                </div>
            </li> -->
            <li class="py-1" id="side_logout">
                <div class="p-2">
                    <a class="text-danger fw-semibold text-decoration-none admin-na py-2" href="" data-bs-toggle="modal" data-bs-target="#logoutModal" style="font-size: 13px">
                        <svg class="me-1" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</div>

<script>
    window.addEventListener("load", function() {
        fetch('https://backend-folder.test/api/user-access', {
            headers: {
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        })
        .then(res => res.json())
        .then(response => {
            let userPermission = response.user.permissions;
            let userRole = response.user.name;
            let menuPermission = response.menu;

            menuPermission.forEach(menu => {
                menu.permissions.forEach(permission => {
                    userPermission.forEach(userPerm => {
                        if(userPerm.name == permission.name){
                            document.getElementById(menu.name).style.display = 'block';
                        }
                    })
                })
            });
            
            // if(userRole.name == 'Delivery Man' || userRole.name == 'Delivery Rider' || userRole.name == 'Food Delivery Rider' || userRole.name == 'Food Rider' || userRole.name == 'Rider') {
            //     let riderMenu = document.querySelectorAll('.rider_menu');
            //     riderMenu.forEach(menu => {
            //         menu.style.display = 'block';
            //     });
            // }
        })
    })
</script>


<script>
    window.addEventListener("load", function() {
        $('.drop_down').each(function() {
            if ($(this). find('.active').length) {
                $(this).removeClass('collapse');
            }
        })
    })
</script>

