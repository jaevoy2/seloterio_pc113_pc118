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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/media.css">
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
                                    <a class="text-decoration-none text-dark" style="font-size: 13px" href="role_permission.php">Roles and Permissions</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a class="text-decoration-none text-dark" style="font-size: 13px">Edit Role</a>
                                </li>
                            </ol>
                        </nav>
                        <div class="bg-white shadow bg-body-tertiary rounded container mt-4 py-3 px-0">
                            <div class="">
                                <div class="">
                                    <div class="d-flex p-4 flex-column position-relative" style="gap:100px">
                                        <div>
                                            <div class="btn_container mb-3 d-flex justify-content-between align-items-center">
                                                <div class="position-absolute" style="width: 5px; height:30px; background-color:#fbc523; left:0; border-radius:0 3px 3px 0"></div>
                                                <h5>Edit Role</h5>
                                            </div>
                                            <div class="pt-2">
                                                <form action="" method="">
                                                    <div class="">
                                                    <small class="d-flex justify-content-center text-danger" style="font-size: 12px" id="editRoleError"></small>
                                                        <div class="form-group my-3">
                                                            <input type="text" name="editRoleId" id="editRoleId" hidden>
                                                            <small class="text-secondary mx-1" style="font-size: 12px">Role name</small>
                                                            <input type="text" id="editRoleName" class="form-control underline_fucos" name="roleName">
                                                        </div>
                                                        <div class="mt-3">
                                                            <h6>Permissions</h6>
                                                            <div class="d-flex flex-wrap gap-5 mt-2 p-3" style="background-color: rgb(242, 242, 242); border-radius: 5px; font-size: 13px" id="editPermissionContainer"></div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end p-3 gap-2">
                                                    <a href="role_permission.php" class="btn btn-secondary">Back</a>
                                                    <button type="submit" id="saveEditRole" class="btn btn-warning d-flex align-items-center gap-2">
                                                        Save
                                                        <div class="spinner-border spinner-border-sm" id="editSpinner" style="display: none" role="status">
                                                            <span class="visually-hidden">Loading...</span>
                                                        </div>
                                                    </button>
                                                    </div>
                                                </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- prevent back -->
    <script>
        const token = localStorage.getItem('token');
        if(!token) {
            window.location.href = 'https://frontend-folder.test';
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

<!-- populate checkbox -->
    <script>
        $(document).ready(function() {
            const urlParam = new URLSearchParams(window.location.search);
            const id = urlParam.get('id');

            let permissionCon = document.getElementById('editPermissionContainer');
            permissionCon.innerHTML = '';

            fetch('https://backend-folder.test/api/admin/show-specific', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token'),
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    role_id: id,
                })
            })
            .then(res => res.json())
            .then(data => {
                let rolePermissions = data.role.permissions;
                document.getElementById('editRoleName').value = data.role.name;
                document.getElementById('editRoleId').value = data.role.id;

                data.permissions.forEach(permission => {
                    let inputContainer = document.createElement('div');
                    inputContainer.classList.add('d-flex', 'gap-2');

                    let checkbox = document.createElement('input');
                    checkbox.classList.add('checked-permission');
                    checkbox.type = 'checkbox';
                    checkbox.value = permission.id;
                    checkbox.id = `checkbox${permission.id}`;
                    checkbox.name = 'permissions[]';

                    let label = document.createElement('label');
                    label.htmlFor = `checkbox${permission.id}`;
                    label.textContent = permission.name;

                    rolePermissions.forEach(rolepermission => {
                        if(rolepermission.name == permission.name) {
                            checkbox.checked = true;
                        }
                    })

                    inputContainer.appendChild(checkbox);
                    inputContainer.appendChild(label);
                    permissionCon.appendChild(inputContainer);
                })
            })
        })
    </script>

<!-- edit role -->
    <script>
        $(document).on('click', '#saveEditRole', function(event) {
            event.preventDefault();
            document.getElementById('editSpinner').style.display = 'block';

            let rolename = document.getElementById('editRoleName').value;
            let roleId = document.getElementById('editRoleId').value;
            console.log(roleId);
            let permissions = [];
            document.querySelectorAll('.checked-permission:checked').forEach(checked => {
                permissions.push(checked.value);
            })

            $.ajax({
                url: 'https://backend-folder.test/api/admin/edit-role',
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                data: {
                    id: roleId,
                    name: rolename,
                    permissions: permissions
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
                            // location.reload();
                        });
                    }
                },
                complete: function() {
                    document.getElementById('editSpinner').style.display = 'none';
                }
            })
        })
    </script>