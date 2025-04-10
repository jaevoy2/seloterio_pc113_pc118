<?php
    $currentPage = $_SERVER['REQUEST_URI'];
?>

<nav id="sidebar" class=" sidebar">
    <div class="logo d-flex flex-column py-1">
        <img src="http://backend-folder.test/images/padeliber.png" width="150px" height="auto" class="" alt="photo">
    </div>
    <ul class="nav main_menu mt-4">
        <p class="mb-1" style="font-size: 11px; font-weight:bold; color:rgb(174, 174, 174)">MAIN MENU</p>
        <li class="p-1">
            <div class="<?= (strpos($currentPage, 'dashboard.php') !== false) ? 'active' : '' ?> p-2">
                <a href="dashboard.php" class="nav_btns d-flex align-items-center text-dark" style="text-decoration: none">
                    <svg class="me-2"  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-layout-dashboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 3a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2zm10 -4a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2zm0 -8a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-4a2 2 0 0 1 -2 -2v-2a2 2 0 0 1 2 -2z" /></svg>
                    Dashboard
                </a>
            </div>
        </li>
        <li class="p-1 mb-1" id="User Management">
            <div class="<?= (strpos($currentPage, 'users.php') !== false) ? 'active' : '' ?> p-2">
                <a href="users.php" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                    <svg class="me-2"  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                    User Management
                </a>
            </div>
        </li>
        <li class="p-1" id="Delivery Management">
            <div class="p-2">
                <a href="" class="nav_btns text-dark d-flex align-items-center text-dark" data-bs-toggle="collapse" data-bs-target="#delivery" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
                    Delivery Management
                </a>
            </div>
            <div class="collapse report" style="background-color: #efefef; border-radius:5px" id="delivery">
                <a href="" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-sort-ascending-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 9l3 -3l3 3" /><path d="M5 5m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" /><path d="M5 14m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" /><path d="M17 6v12" /></svg>
                    Manage Orders
                </a>
                <a href="" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-truck-delivery"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" /><path d="M3 9l4 0" /></svg>
                    Deliveries
                </a>
            </div>
        </li>
        <li class="p-1" id="Report">
            <div class="p-2">
                <a href="" class="nav_btns text-dark d-flex align-items-center text-dark" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
                    Reports
                </a>
            </div>
            <div class="collapse report" style="background-color: #efefef; border-radius:5px" id="collapseExample">
                <a href="" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-report-analytics"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 17v-5" /><path d="M12 17v-1" /><path d="M15 17v-3" /></svg>
                    Delivery Reports
                </a>
                <a href="" class="nav_btns text-dark d-flex align-items-center text-dark" style="text-decoration: none">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-stack-middle"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 10l4 -2l-8 -4l-8 4l4 2" /><path d="M12 12l-4 -2l-4 2l8 4l8 -4l-4 -2l-4 2z" fill="currentColor" /><path d="M8 14l-4 2l8 4l8 -4l-4 -2" /></svg>
                    Rider Records
                </a>
            </div>
        </li>
    </ul>

    <ul class="nav settings mt-4">
        <p class="mb-1" style="font-size: 11px; font-weight:bold; color:rgb(174, 174, 174)">SETTINGS</p>
        <li class="py-1" id="Role & Permission Manager">
            <div class="<?= (strpos($currentPage, 'role_permission.php') !== false) ? 'active' : '' ?> p-2">
                <a href="../role_permission.php" class="nav_btns d-flex align-items-center text-dark" style="text-decoration: none">
                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-settings"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14.647 4.081a.724 .724 0 0 0 1.08 .448c2.439 -1.485 5.23 1.305 3.745 3.744a.724 .724 0 0 0 .447 1.08c2.775 .673 2.775 4.62 0 5.294a.724 .724 0 0 0 -.448 1.08c1.485 2.439 -1.305 5.23 -3.744 3.745a.724 .724 0 0 0 -1.08 .447c-.673 2.775 -4.62 2.775 -5.294 0a.724 .724 0 0 0 -1.08 -.448c-2.439 1.485 -5.23 -1.305 -3.745 -3.744a.724 .724 0 0 0 -.447 -1.08c-2.775 -.673 -2.775 -4.62 0 -5.294a.724 .724 0 0 0 .448 -1.08c-1.485 -2.439 1.305 -5.23 3.744 -3.745a.722 .722 0 0 0 1.08 -.447c.673 -2.775 4.62 -2.775 5.294 0zm-2.647 4.919a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" /></svg>
                    Role & Permission Manager
                </a>
            </div>
        </li>
        <li class="py-1" id="Menu Access Control">
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
    </ul>
</nav>
