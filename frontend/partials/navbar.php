<?php
    $currentPage = $_SERVER['REQUEST_URI'];
?>


<div class="navbar d-flex justify-space-between align-items-center py-3">
    <div class="page-title pt-3">
        <h5 class="">
            <?php
                switch($currentPage) {
                    case $currentPage == '/dashboard.php':
                        echo "Dashboard";
                        break;
                    case $currentPage == '/users.php':
                        echo "User Management";
                        break;
                    case $currentPage == '/menu-access.php':
                        echo "Menu Access Control";
                        break;
                    case $currentPage == '/role_permission.php':
                        echo "Role & Permission Management";
                        break;
                    case $currentPage == '/profile.php':
                        echo "Account Settings";
                        break;
                }
            ?>
        </h5>
    </div>
    <!-- User Dropdown -->
    <div class="navbar-1">
        <ul class="nav">
            <li class="nav-item">
                <div class="dropdown d-flex justify-content-center" style="cursor: pointer" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex gap-2 align-items-center">
                        <div class="text-secondary" style="font-size: 13px" id="user_role"></div>
                        <div class="" style="border: 1px solid rgb(182, 182, 182); height: 20px;"></div>                      
                        <div class="d-flex align-items-center gap-1 flex-row-reverse" id="current_user">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 9l6 6l6 -6" /></svg>
                        </div>
                    </div>
                    <div class="">
                        <ul class="user-drop dropdown-menu dropdown-menu-lg-end p-0" style="border: 1px solid #e0e0e0; width:200px">
                            <a href="" id="profileBtn" class="list-group-item  p-2">
                                <div id="user_name"></div>
                                <small class="text-secondary" style="font-size: 12px">Profile</small>
                            </a>
                            <li><hr class="dropdown-divider m-0"></li>
                            <a class="list-group-item shadow dropdown-item admin-na py-2" href="" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <svg class="ms-3" xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="1"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path d="M18 15l3 -3" /></svg>
                                Logout
                            </a>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>


<script>
    $.ajax({
        url: 'http://backend-folder.test/api/currentUser',
        method: 'GET',
        headers: {
            'Accept': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
        success: function(data) {
            const userRole = document.getElementById('user_role');
            const current_user = document.getElementById('current_user');
            const user_name = document.getElementById('user_name');
            userRole.innerHTML = data.role.name;

            if(data.picture == null) {
                let firstLetter = data.firstname.split(' ').map(word => word.charAt(0)).join('');
                let userName = document.createElement('div');
                userName.innerHTML = firstLetter.toUpperCase();
                userName.style.border = '2px solid #000';
                userName.style.borderRadius = '50%';
                userName.style.width = '30px';
                userName.style.height = '30px';
                userName.style.display = 'flex';
                userName.style.justifyContent = 'center';
                userName.style.background = '#ffbf00';
                current_user.appendChild(userName);

            }else {
                let imageCon = document.createElement('img');
                imageCon.style.border = '2px solid #ffbf00'
                imageCon.style.height = '35px';
                imageCon.style.width = '35px';
                imageCon.style.borderRadius = '50%';
                imageCon.style.objectFit = 'cover';
                let imageUrl = `http://backend-folder.test/storage/${data.picture}`;
                imageCon.src = imageUrl;
                current_user.appendChild(imageCon);

            }
            user_name.innerHTML = data.firstname + ' ' + data.lastname;
        }
    })
</script>

<script>
    $(document).on('click', '#profileBtn', function(event) {
        event.preventDefault();
        location.href = 'http://frontend-folder.test/profile.php'
    })
</script>


