<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://backend-folder.test/dist/css/dropify.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>
     <?php include 'partials/sidebar.php' ?>
    <div class="card_con position-relative" style="width: 100%" style="">
        <div class="list-group-flush list-unstyled">
            <div class="list-group-item p-0">
                <?php include 'partials/navbar.php' ?>
                <div class="position-relative" style="min-height:400px">
                    <div class="loader-con position-absolute top-50 start-50 translate-middle" id="preloader">
                        <div class="loader">
                            <div class="truckWrapper">
                              <div class="truckBody">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 198 93" class="trucksvg" >
                                  <path stroke-width="3" stroke="#282828" fill="#FFBF00" d="M135 22.5H177.264C178.295 22.5 179.22 23.133 179.594 24.0939L192.33 56.8443C192.442 57.1332 192.5 57.4404 192.5 57.7504V89C192.5 90.3807 191.381 91.5 190 91.5H135C133.619 91.5 132.5 90.3807 132.5 89V25C132.5 23.6193 133.619 22.5 135 22.5Z" ></path>
                                  <path stroke-width="3" stroke="#282828" fill="#7D7C7C" d="M146 33.5H181.741C182.779 33.5 183.709 34.1415 184.078 35.112L190.538 52.112C191.16 53.748 189.951 55.5 188.201 55.5H146C144.619 55.5 143.5 54.3807 143.5 53V36C143.5 34.6193 144.619 33.5 146 33.5Z" ></path>
                                  <path stroke-width="2" stroke="#282828" fill="#282828" d="M150 65C150 65.39 149.763 65.8656 149.127 66.2893C148.499 66.7083 147.573 67 146.5 67C145.427 67 144.501 66.7083 143.873 66.2893C143.237 65.8656 143 65.39 143 65C143 64.61 143.237 64.1344 143.873 63.7107C144.501 63.2917 145.427 63 146.5 63C147.573 63 148.499 63.2917 149.127 63.7107C149.763 64.1344 150 64.61 150 65Z" ></path>
                                  <rect stroke-width="2" stroke="#282828" fill="#FFFCAB" rx="1" height="7" width="5" y="63" x="187" ></rect>
                                  <rect
                                    stroke-width="2" stroke="#282828" fill="#282828" rx="1" height="11" width="4" y="81" x="193"></rect>
                                  <rect
                                    stroke-width="3" stroke="#282828" fill="#DFDFDF" rx="2.5" height="90" width="121" y="1.5" x="6.5"></rect>
                                  <rect
                                    stroke-width="2" stroke="#282828" fill="#DFDFDF" rx="2" height="4" width="6" y="84" x="1"></rect>
                                </svg>
                              </div>
                              <div class="truckTires">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"fill="none"viewBox="0 0 30 30"class="tiresvg">
                                  <circle
                                    stroke-width="3"stroke="#282828"fill="#282828"r="13.5"cy="15"cx="15"></circle>
                                  <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg"fill="none"viewBox="0 0 30 30"class="tiresvg">
                                  <circle
                                    stroke-width="3"stroke="#282828"fill="#282828"r="13.5"cy="15"cx="15"></circle>
                                  <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                                </svg>
                              </div>
                              <div class="road"></div>

                              <svg
                                xml:space="preserve"viewBox="0 0 453.459 453.459"xmlns:xlink="http://www.w3.org/1999/xlink"xmlns="http://www.w3.org/2000/svg" id="Capa_1" version="1.1"fill="#000000" class="lampPost">
                                <path
                                  d="M252.882,0c-37.781,0-68.686,29.953-70.245,67.358h-6.917v8.954c-26.109,2.163-45.463,10.011-45.463,19.366h9.993c-1.65,5.146-2.507,10.54-2.507,16.017c0,28.956,23.558,52.514,52.514,52.514c28.956,0,52.514-23.558,52.514-52.514c0-5.478-0.856-10.872-2.506-16.017h9.992c0-9.354-19.352-17.204-45.463-19.366v-8.954h-6.149C200.189,38.779,223.924,16,252.882,16c29.952,0,54.32,24.368,54.32,54.32c0,28.774-11.078,37.009-25.105,47.437c-17.444,12.968-37.216,27.667-37.216,78.884v113.914h-0.797c-5.068,0-9.174,4.108-9.174,9.177c0,2.844,1.293,5.383,3.321,7.066c-3.432,27.933-26.851,95.744-8.226,115.459v11.202h45.75v-11.202c18.625-19.715-4.794-87.527-8.227-115.459c2.029-1.683,3.322-4.223,3.322-7.066c0-5.068-4.107-9.177-9.176-9.177h-0.795V196.641c0-43.174,14.942-54.283,30.762-66.043c14.793-10.997,31.559-23.461,31.559-60.277C323.202,31.545,291.656,0,252.882,0zM232.77,111.694c0,23.442-19.071,42.514-42.514,42.514c-23.442,0-42.514-19.072-42.514-42.514c0-5.531,1.078-10.957,3.141-16.017h78.747C231.693,100.736,232.77,106.162,232.77,111.694z"></path>
                              </svg>
                            </div>
                        </div>
                        <p class="fw-semibold">Loading...</p>
                    </div>
                    <div class="no-internet opacity-50 position-absolute top-50 start-50 translate-middle text-center" style="display: none;" id="no-internet">
                        <img class="" src="" style="width: 30%"></img>
                        <p class="fw-semibold">No internet connection</p>
                    </div>
                    <div class="mt-4 py-3" style="display: none;" id="content">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-decoration-none text-dark" style="font-size: 13px" href="users.php">Roles and Permissions</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a class="text-decoration-none text-dark" style="font-size: 13px">List</a>
                                </li>
                            </ol>
                        </nav>
                        <div class="bg-white shadow bg-body-tertiary rounded container mt-4 py-3 px-0">
                            <div class="">
                                <div class="">
                                    <div class="d-flex p-4 flex-column position-relative" style="gap:100px">
                                        <div>
                                            <div class="btn_container mb-3 d-grid d-md-flex justify-content-between align-items-center">
                                                <div class="position-absolute" style="width: 5px; height:30px; background-color:#fbc523; left:0; border-radius:0 3px 3px 0"></div>
                                                <h5>Roles</h5>
                                            </div>
                                            <div class="pt-2">
                                                <div class="d-flex flex-wrap align-items-center gap-3 p-3 fw-bold" style="font-size: 12px; min-height: 100px; background: #f1f1f1; border-radius:10px" id="roleWrapper"></div>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="position-absolute" style="width: 5px; height:30px; background-color:#fbc523; left:0; border-radius:0 3px 3px 0"></div>
                                            <div class="btn_container mb-3 d-grid d-md-flex justify-content-between align-items-center">
                                                <h5>Permission</h5>
                                            </div>
                                            <div class="pt-2">
                                                <div class="d-flex flex-wrap align-items-center gap-3 p-3 fw-bold" style="font-size: 12px; min-height: 100px; background: #f1f1f1; border-radius:10px" id="permissionWrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>


    <?php include 'modals/logout-modal.php' ?>
    <?php include 'modals/role-permission-modal.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- prevent back -->
    <script>
        const token = localStorage.getItem('token');
        if(!token) {
            window.location.href = 'http://frontend-folder.test';
        }else{
            if (window.history && window.history.pushState) {
                window.history.pushState(null, null, location.href);
                window.onpopstate = function () {
                    window.history.pushState(null, null, location.href); // Prevent back
                };
            }
        }
    </script>

    <!-- preloader -->
    <script>
        window.addEventListener("load", function() {
            setTimeout(() => {
                if(navigator.onLine) {
                    document.getElementById('preloader').style.display = 'none';
                    document.getElementById('content').style.display = 'block';
                }else{
                    document.getElementById('preloader').style.display = 'none';
                    document.getElementById('no-internet').style.display = 'block';
                }
            }, 800);
        })
    </script>

    <!-- roles -->
     <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://backend-folder.test/api/admin/roles-permissions',
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token'),
                },
                success: function(data) {
                    let roleContainer = document.getElementById('roleWrapper');

                    let addBtn = document.createElement('button');
                    addBtn.classList.add('addBtn');
                    addBtn.innerHTML = '<svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14zm8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" /></svg>';
                    addBtn.onclick = function() {
                        let addRole = new bootstrap.Modal(document.getElementById('addRole'));
                        addRole.show();
                    }
                    roleContainer.appendChild(addBtn);

                    data.roles.forEach(role => {
                        let roleCon = document.createElement('div');
                        roleCon.classList.add('role-item');
                        roleCon.textContent = role.name;

                        let editRole = document.createElement('button');
                        editRole.classList.add('editRoleBtn');
                        editRole.dataset.id = role.id;
                        editRole.dataset.name = role.name;
                        editRole.innerHTML = '<svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>';
                        editRole.onclick = function() {
                            let edit_role = new bootstrap.Modal(document.getElementById('editRoleModal'));
                            $('#editRoleModal').find('input[name="roleName"]').val(role.name);
                            edit_role.show();   
                        }

                        let deleteRole = document.createElement('button');
                        deleteRole.classList.add('deleteBtn');
                        deleteRole.dataset.id = role.id;
                        deleteRole.innerHTML = '<svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>';
                        deleteRole.onclick = function() {
                            let delete_role = new bootstrap.Modal(document.getElementById('deleteRole'));
                            document.querySelector('.roleName').textContent = role.name;
                            delete_role.show();
                        }

                        roleCon.appendChild(editRole);
                        roleCon.appendChild(deleteRole);
                        roleContainer.appendChild(roleCon);

                        if(role.name == 'Admin' || role.name == 'Unassigned') {
                            editRole.style.display = 'none';
                            deleteRole.style.display = 'none';
                        }
                    })
                }
            })
        })
     </script>

    <!-- add role -->
     <script>
        $(document).on('click', '#saveRole', function(event) {
            event.preventDefault();
            let role = document.getElementById('role_name').value;

            $.ajax({
                url: 'http://backend-folder.test/api/admin/save-role',
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                data: {
                    name: role
                },
                success: function(response) {
                    if(!response.message) {
                        document.getElementById('roleError').textContent = response.error;
                    }else{
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            color: "#008000",
                            width: 350,
                            toast: true,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1200
                        }).then(() => {
                            location.reload();
                        });
                    }
                }
            })
        })
     </script>
     
     <!-- edit role -->
      <script>
        $(document).on('click', '.editRoleBtn', function() {
            let roleId = $(this).data("id");
            
            $(document).on('click', '#saveEditRole', function(event) {
                event.preventDefault();
                let rolename = document.getElementById('editRoleName').value;

                $.ajax({
                    url: 'http://backend-folder.test/api/admin/edit-role',
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    data: {
                        id: roleId,
                        name: rolename
                    },
                    success: function(response) {
                        if(!response.message) {
                            document.getElementById('editRoleError').textContent = response.error;
                        }else {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                color: "#008000",
                                width: 350,
                                toast: true,
                                title: response.message,
                                showConfirmButton: false,
                                timer: 1200
                            }).then(() => {
                                location.reload();
                            });
                        }
                    }
                })
            })
        })
      </script>

    <!-- delete role -->
     <script>
        $(document).on('click', '.deleteBtn', function() {
            let userId = $(this).data("id");

            $(document).on('click', '#confirmDelete', function(event) {
                event.preventDefault();
                $.ajax({
                    url: 'http://backend-folder.test/api/admin/delete-role',
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    data: {
                        id : userId
                    },
                    success: function(response) {
                        if(!response.message) {
                            document.getElementById('deleteRoleError').textContent = response.error;
                        }else {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                color: "#008000",
                                width: 350,
                                toast: true,
                                title: response.message,
                                showConfirmButton: false,
                                timer: 1200
                            }).then(() => {
                                location.reload();
                            }); 
                        }
                    }
                })
            })
        })
     </script>

    

    <!-- permissions -->
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://backend-folder.test/api/admin/roles-permissions',
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function(data) {
                    let permissionContainer = document.getElementById('permissionWrapper');

                    let addBtn = document.createElement('button');
                    addBtn.classList.add('addBtn');
                    addBtn.innerHTML = '<svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4.929 4.929a10 10 0 1 1 14.141 14.141a10 10 0 0 1 -14.14 -14.14zm8.071 4.071a1 1 0 1 0 -2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0 -2h-2v-2z" /></svg>';
                    addBtn.onclick = function() {
                        let add_perm = new bootstrap.Modal(document.getElementById('addPermission'));
                        add_perm.show();
                    }
                    permissionContainer.appendChild(addBtn);

                    data.permissions.forEach(permission => {
                        let permissionCon = document.createElement('div');
                        permissionCon.classList.add('permission-item');
                        permissionCon.textContent = permission.name;

                        let editPermission = document.createElement('button');
                        editPermission.classList.add('editBtn');
                        editPermission.dataset.id = permission.id;
                        editPermission.innerHTML = '<svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>';
                        editPermission.onclick = function() {
                            let edit_permission = new bootstrap.Modal(document.getElementById('editPermission'));
                            $('#editPermission').find('input[name="permission_name"]').val(permission.name);
                            edit_permission.show();   
                        }

                        let deleteBtn = document.createElement('button');
                        deleteBtn.classList.add('deleteBtn');
                        deleteBtn.dataset.id = permission.id;
                        deleteBtn.innerHTML = '<svg  xmlns="http://www.w3.org/2000/svg"  width="15"  height="15"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>';
                        deleteBtn.onclick = function() {
                            let delete_permission = new bootstrap.Modal(document.getElementById('deletePermission'));
                            document.querySelector('.permissionName').textContent = permission.name;
                            delete_permission.show();
                        }

                        permissionCon.appendChild(editPermission);
                        permissionCon.appendChild(deleteBtn);
                        permissionContainer.appendChild(permissionCon);

                        if(permission.name == 'Manage User' || permission.name == 'System Settings') {
                            editPermission.style.display = 'none';
                            deleteBtn.style.display = 'none';
                        }
                    });
                }
            })
        })
    </script>

    <!-- add permission -->
     <script>
        $(document).on('click', '#savePermission', function(event) {
            event.preventDefault();
            let permission_name = document.getElementById('perm_name').value;

            $.ajax({
                url: 'http://backend-folder.test/api/admin/save-permission',
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                data: {
                    name: permission_name
                },
                success: function(response) {
                    if(!response.message) {
                        document.getElementById('perm_error').textContent = response.error;
                    }else{
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            color: "#008000",
                            width: 350,
                            toast: true,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1200
                        }).then(() => {
                            location.reload();
                        }); 
                    }
                }
            })
        })
     </script>

    <!-- edit permission -->
     <script>
        $(document).on('click', '.editBtn', function() {
            let id = $(this).data('id');
            
            $(document).on('click', '#saveEditPermission', function(event) {
                event.preventDefault();
                let perm_name = document.getElementById('permission_name').value;

                $.ajax({
                    url: 'http://backend-folder.test/api/admin/edit-permission',
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    data: {
                        id: id,
                        name: perm_name
                    },
                    success: function(response) {
                        if(!response.message) {
                            document.getElementById('editPerm_error').textContent = response.error;
                        }else {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                color: "#008000",
                                width: 350,
                                toast: true,
                                title: response.message,
                                showConfrmButton: false,
                                timer: 1200
                            }).then(() => {
                                location.reload();
                            }); 
                        }
                    }
                })
            })
        })
     </script>

    <!-- delete permission -->
     <script>
        $(document).on('click', '.deleteBtn', function() {
            let id = $(this).data('id');

            $(document).on('click', '#delete_permission', function(event) {
                event.preventDefault();

                $.ajax({
                    url: 'http://backend-folder.test/api/admin/delete-permission',
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    data: {
                        id: id
                    },
                    success: function(response) {
                        console.log(id);
                        if(!response.message) {
                            document.getElementById('deletePerm_error').textContent = response.error;
                        }else {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                color: "#008000",
                                width: 350,
                                toast: true,
                                title: response.message,
                                showConfirmButton: false,
                                timer: 1200
                            }).then(() => {
                                location.reload();
                            }); 
                        }
                    }
                })
            })
        })
     </script>

</body>
</html>
