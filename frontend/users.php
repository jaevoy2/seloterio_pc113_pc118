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
                        <img class="" src="{{asset('images/no-internet.png')}}" style="width: 30%"></img>
                        <p class="fw-semibold">No internet connection</p>
                    </div>
                    <div class="mt-4 py-3" style="display: none;" id="content">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-decoration-none text-dark" style="font-size: 13px" href="users.php">User Management</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a class="text-decoration-none text-dark" style="font-size: 13px">User List</a>
                                </li>
                            </ol>
                        </nav>
                        <div class="bg-white shadow bg-body-tertiary rounded container mt-4 py-3 user-table">
                            <div class="btn_container d-grid d-md-flex justify-content-between align-items-center">
                                <button type="button" id="submitId" class="btn btn-primary add-user fw-semibold text-dark" data-bs-toggle="modal" data-bs-target="#addUser">Add user</button>
                            </div>
                            <div class="pt-2">
                                <table id="usersTable" class="stripe hover">
                                    <thead class="text-dark " style="background-color: #ffbf00;">
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Role</th>
                                            <!-- <th>Permission</th> -->
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-dark">
                                        <!-- Rows will be populated here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <?php include 'modals/manage-user.php' ?>
    <?php include 'modals/view-info.php' ?>
    <?php include 'modals/logout-modal.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script src="http://backend-folder.test/dist/js/dropify.min.js"></script>


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

    <!-- dropify -->
     <script>
        $(document).ready(function() {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove':  'Remove',
                    'error':   'Ooops, something wrong happended.'
                }
            });
        });
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

    <!-- show table -->
     <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://backend-folder.test/api/admin/users',
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token'),
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                },
                success: function(response) {
                    if(response) {
                        $('#usersTable').DataTable({
                            data: response.users,
                            columns: [
                                {
                                    data: null,
                                    render: function(data, type, row, meta) {
                                        return meta.row !== undefined ? meta.row + 1 : '';
                                    }
                                },
                                {
                                    data: 'picture',
                                    render: function(data, type, row) {
                                        return data
                                        ? `<img src="http://backend-folder.test/storage/${data}" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">` : 'No image';
                                    }
                                },
                                { data: 'lastname' },
                                { data: 'firstname' },
                                {
                                    data: 'role',
                                    render: function(data, type, row) {
                                        if(data.name == "Admin"){
                                            return `<div class="btn btn-warning fw-semibold btn-sm" style="font-size: 10px"> ${data.name} </div>`;
                                        }else if(data.name == "Managing Staff"){
                                            return `<div class="btn btn-warning fw-semibold btn-sm" style="font-size: 10px"> ${data.name} </div>`;
                                        }else if(data.name == "Rider" || data.name == "Delivery Rider" || data.name == "Delivery Man"){
                                            return `<div class="btn btn-primary fw-semibold btn-sm" style="font-size: 10px"> ${data.name} </div>`;
                                        }else{
                                            return `<div class="btn btn-secondary fw-semibold btn-sm" style="font-size: 10px"> ${data.name} </div>`
                                        }
                                    }
                                },
                                {
                                    data: null,
                                    render: function(data, type, row) {
                                        return `
                                    <div class="d-flex gap-2">
                                        <a href="" class="view-user text-decoration-none" style="color: gray" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"
                                        data-id="${row.id}"
                                        data-firstname="${row.firstname}"
                                        data-middlename="${row.middlename}"
                                        data-lastname="${row.lastname}"
                                        data-age="${row.age}"
                                        data-gender="${row.gender}"
                                        data-contact="${row.contact}"
                                        data-picture="${row.picture}"
                                        data-address="${row.address}"
                                        data-role="${row.role.name}">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-eye"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                                        </a>

                                        <a class="edit_user"
                                        data-id="${row.id}"
                                        data-firstname="${row.firstname}"
                                        data-middlename="${row.middlename}"
                                        data-lastname="${row.lastname}"
                                        data-age="${row.age}"
                                        data-gender="${row.gender}"
                                        data-contact="${row.contact}"
                                        data-email="${row.email}"
                                        data-picture="${row.picture}"
                                        data-address="${row.address}"
                                        data-role="${row.role.name}"
                                        data-bs-toggle="modal" data-bs-target="#editUser">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </a>
                                        <a class=" btn-sm" style="color:red" id="deleteUserBtn" data-id="${row.id}" data-firstname="${row.firstname}" data-lastname=${row.lastname} data-bs-toggle="modal" data-bs-target="#deleteUser">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                        </a>
                                    </div>`;
                                    }
                                }
                            ]
                        })
                    }
                }
            })
        })
     </script>

    <script>
        function toggleCheckboxes() {
            const checkboxes = document.getElementById('checkboxes');
            checkboxes.style.display = checkboxes.style.display === 'block' ? 'none' : 'block';
        }
        document.addEventListener('click', function(event) {
            const target = event.target;
            const checkboxes = document.getElementById('checkboxes');
            if (!checkboxes.contains(target) && !target.matches('.selectBox, .selectBox *')) {
                checkboxes.style.display = 'none';
            }
        });

    </script>

    <!-- Add user -->
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'http://backend-folder.test/api/admin/users',
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token'),
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                success: function(response) {
                    let roles = response.roles;
                    let permissions = response.permissions;
                    
                    let select = document.getElementById('userRole');
                    select.innerHTML = '';

                    let defaultOption = document.createElement('option');
                    defaultOption.text = 'Select Role';
                    defaultOption.value = '';
                    defaultOption.selected = true;
                    defaultOption.disabled = true;
                    select.appendChild(defaultOption);

                    roles.forEach(role => {
                        let option = document.createElement('option');
                        option.value = role.id;
                        option.text = role.name;
                        select.appendChild(option);
                    });

                    select.addEventListener('change', function() {
                        const selectedRole = this.value;
                        const userRole = roles.find(role => role.id == selectedRole);
                        const permissionContainer = document.getElementById('checkboxes');
                        permissionContainer.innerHTML = '';

                        if(userRole.name == null) {
                            permissionContainer.style.display = 'none';
                        }else if (userRole.name == "Rider" || userRole.name == "Delivery Rider" || userRole.name == "Unassigned") {
                            permissionContainer.style.display = 'none';
                        }else{
                            permissions.forEach(permission => {
                                let inputContainer = document.createElement('div');
                                inputContainer.classList.add('checkbox-container');

                                let checkbox = document.createElement('input');
                                checkbox.classList.add('check_permission');
                                checkbox.type = 'checkbox';
                                checkbox.value = permission.id;
                                checkbox.name = 'permissions[]';

                                let label = document.createElement('label');
                                label.htmlFor = `checkbox${permission.id}`;
                                label.textContent = permission.name;

                                inputContainer.appendChild(checkbox);
                                inputContainer.appendChild(label);
                                permissionContainer.appendChild(inputContainer);
                            });
                        }
                    });
                    
                    $(document).on('click', '#register', function(event) {
                        event.preventDefault();
                        let firstname = document.getElementById('firstname').value;
                        let middlename = document.getElementById('middlename').value;
                        let lastname = document.getElementById('lastname').value;
                        let age = document.getElementById('age').value;
                        let gender = document.getElementById('gender').value;
                        let contact = document.getElementById('contact').value;
                        let address = document.getElementById('address').value;
                        let email = document.getElementById('email').value;
                        let password = document.getElementById('password').value;
                        let role_id = document.getElementById('userRole').value;
                        let picture = document.getElementById('profile').files[0];
                        let permissions = [];
                        document.querySelectorAll('.check_permission:checked').forEach((checkbox) => {
                            permissions.push(checkbox.value);
                        });

                        let formData = new FormData();
                        formData.append('firstname', firstname);
                        formData.append('middlename', middlename);
                        formData.append('lastname', lastname);
                        formData.append('age', age);
                        formData.append('gender', gender);
                        formData.append('contact', contact);
                        formData.append('address', address);
                        formData.append('email', email);
                        formData.append('password', password);
                        formData.append('role_id', role_id);

                        permissions.forEach(permission => {
                            formData.append('permissions[]', permission);
                        });
                        
                        if(picture) {
                            formData.append('picture', picture);
                        }
                        console.log(...formData);
                        $.ajax({
                            url: 'http://backend-folder.test/api/admin/add-user',
                            method: 'POST',
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token'),
                                'Accept': 'application/json',
                            },
                            data: formData,
                            processData: false,  
                            contentType: false,
                            success: function(response) {
                                if(!response.message) {
                                    document.getElementById('addUser_error').textContent = response.error;
                                }
                                else if(response.message) {
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "success",
                                        color: "#008000",
                                        width: 350,
                                        toast: true,
                                        title: response.message,
                                        showConfirmButton: false,
                                        timer: 1800
                                    }).then(() => {
                                        location.reload();
                                    });
                                }

                            }
                        })
                    })
                }
            });
        });
    </script>


    <script>
        function editCheckboxes() {
            const checkboxes = document.getElementById('editCheckboxes');
            checkboxes.style.display = checkboxes.style.display === 'block' ? 'none' : 'block';
        }
        document.addEventListener('click', function(event) {
            const target = event.target;
            const checkboxes = document.getElementById('editCheckboxes');
            if (!checkboxes.contains(target) && !target.matches('.selectBox, .selectBox *')) {
                checkboxes.style.display = 'none';
            }
        });

    </script>

    <!-- populate and edit form -->
     <script>
        $(document).on('click', '.edit_user', function() {
            let userId = $(this).data("id");
            let firstname = $(this).data("firstname");
            let middlename = $(this).data("middlename");
            let lastname = $(this).data("lastname");
            let age = $(this).data("age");
            let gender = $(this).data("gender");
            let contact = $(this).data("contact");
            let email = $(this).data("email");
            let address = $(this).data("address");
            let roleSelected = $(this).data("role");
            let picture = $(this).data("picture");

            $('#editUser').find("input[name='id']").val(userId);
            $('#editUser').find("input[name='firstname']").val(firstname);
            $('#editUser').find("input[name='middlename']").val(middlename);
            $('#editUser').find("input[name='lastname']").val(lastname);
            $('#editUser').find("input[name='age']").val(age);
            $('#editUser').find("select[name='gender']").val(gender);
            $('#editUser').find("input[name='contact']").val(contact);
            $('#editUser').find("input[name='address']").val(address);
            $('#editUser').find("input[name='email']").val(email);

            $.ajax({
                url: 'http://backend-folder.test/api/admin/users',
                method: 'GET',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token'),
                    'Accept': 'application/json',
                },
                success: function(response) {
                    let roles = response.roles;
                    let userPerm = response.users.find(user => user.id == userId);
                    let select = document.getElementById('editRole');
                    select.innerHTML = '';

                    let defaultOption = document.createElement('option');
                    defaultOption.text = 'Select role';
                    defaultOption.value = '';
                    defaultOption.selected = true;
                    defaultOption.disabled = true;
                    select.appendChild(defaultOption);

                    roles.forEach(role => {
                        let option = document.createElement('option');
                        option.classList.add('selected_option');
                        option.value = role.id;
                        option.text = role.name;
                        if(roleSelected == role.name) {
                            option.selected = true;
                        }
                        select.appendChild(option);
                    });
                    document.getElementById('editRole').addEventListener('change', function() {
                        const selectedRole = this.value;
                        const permissionContainer = document.getElementById('editCheckboxes');
                        const userRole = roles.find(role => role.id == selectedRole);
                        permissionContainer.innerHTML = '';

                        if(userRole.name == 'Rider' || userRole.name == 'Delivery Rider' || userRole.name == 'Unassigned') {
                            permissionContainer.style.display = 'none';
                        }else{
                            const permissions = response.permissions;
                            permissions.forEach(permission => {
                                let inputContainer = document.createElement('div');
                                inputContainer.classList.add('checkbox-container');

                                const checkbox = document.createElement('input');
                                checkbox.classList.add('checked_permission');
                                checkbox.type = 'checkbox';
                                checkbox.id = `checkbox${permission.id}`;
                                checkbox.value = permission.id;
                                checkbox.name = 'permissions[]';

                                const label = document.createElement('label');
                                label.htmlFor = `checkbox${permission.id}`;
                                label.textContent = permission.name;

                                inputContainer.appendChild(checkbox);
                                inputContainer.appendChild(label);
                                permissionContainer.appendChild(inputContainer);

                                if(userPerm.permissions.some(userPermission => userPermission.id == permission.id)) {
                                    checkbox.checked = true;
                                }
                            });
                        }
                    });
                    document.getElementById('editRole').dispatchEvent(new Event('change'));

                    $(document).on('click', '#updateBtn', function(event) {
                        event.preventDefault();
                        let editFname = document.getElementById('editFname').value;
                        let editMname = document.getElementById('editMname').value;
                        let editLname = document.getElementById('editLname').value;
                        let editAge = document.getElementById('editAge').value;
                        let editGender = document.getElementById('editGender').value;
                        let editContact = document.getElementById('editContact').value;
                        let editAddress = document.getElementById('editAddress').value;
                        let editEmail = document.getElementById('editEmail').value;
                        let role_id = document.getElementById('editRole').value;
                        let picture = document.getElementById('editProfile').files[0];
                        let permissions = [];
                        document.querySelectorAll('.checked_permission:checked').forEach((checkbox) => {
                            permissions.push(checkbox.value);
                        });

                        let formData = new FormData();
                        formData.append('id', userId);
                        formData.append('firstname', editFname);
                        formData.append('middlename', editMname);
                        formData.append('lastname', editLname);
                        formData.append('age', editAge);
                        formData.append('gender', editGender);
                        formData.append('contact', editContact);
                        formData.append('address', editAddress);
                        formData.append('email', editEmail);
                        formData.append('role_id', role_id);
                        if(picture) {
                            formData.append('picture', picture);
                        }
                        permissions.forEach(permission => {
                            formData.append('permissions[]', permission);
                        });

                        $.ajax({
                            url: 'http://backend-folder.test/api/admin/edit-user',
                            method: 'POST',
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token'),
                                'Accept': 'application/json',
                            },
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                if(!response.message) {
                                    document.getElementById('editUser_error').textContent = response.error;
                                }
                                else if(response.message) {
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "success",
                                        color: "#008000",
                                        width: 350,
                                        toast: true,
                                        title: response.message,
                                        showConfirmButton: false,
                                        timer: 1800
                                    }).then(() => {
                                        location.reload();
                                    });
                                }
                            }
                        });
                    })
                }
            });
        });
     </script>

     <!-- delete user -->
    <script>
        $(document).on('click', '#deleteUserBtn', function() {
            let id = $(this).data("id");
            let fname = $(this).data("firstname");
            let lname = $(this).data("lastname");

            let nameCon = document.getElementById('user-delete');
            nameCon.textContent = fname + ' ' + lname;

            $(document).on('click', '#delete_user', function(event) {
                event.preventDefault();
                $.ajax({
                    url: 'http://backend-folder.test/api/admin/delete-user',
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    data: {
                        id: id
                    },
                    success: function(response) {
                        if(!response.message) {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                color: "#008000",
                                width: 350,
                                toast: true,
                                title: 'Failed to delete user',
                                showConfirmButton: false,
                                timer: 2500,
                            });
                        }
                        else if(response.message) {
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                color: "#008000",
                                width: 350,
                                toast: true,
                                title: response.message,
                                showConfirmButton: false,
                                timer: 1800
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