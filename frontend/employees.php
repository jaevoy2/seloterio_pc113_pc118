<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="main-con d-flex">
    <?php include 'partials/sidebar.php' ?>
    <div class="d-flex flex-column gap-4" style="width: 100%">
        <?php include 'partials/navbar.php' ?>
        <div class="px-4">
            <div class="div">
                <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addUser" href="">Add employee</a>
            </div>
            <div class="px-5">
                <table class="table stripe" style="font-size: 15px" id="studentTable">
                <thead class="table-dark" style="">
                    <tr class="">
                    <th scope="col">Id</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
            
                </tbody>
                </table>
            </div>        
        </div>
    </div>
</div>

    <!-- Add -->
    <div class="fade modal" id="addUser" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex gap-4">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address">
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add</button>
            </div>
            </div>
        </div>
    </div>


    <!-- edit -->
    <div class="fade modal" id="editUser" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex gap-4">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="eidtFirstname" class="form-label">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="editFirstname">
                    </div>
                    <div class="mb-3">
                        <label for="editLastname" class="form-label">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="editLastname">
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-3">
                        <label for="editAddress" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="editAddress">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="updateBtn">Update</button>
            </div>
            </div>
        </div>
    </div>

    <!-- delete -->
    <div class="fade modal" id="delete" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete <strong id="deleteUser"></strong> ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="deleteBtn" class="btn btn-danger">Delete</button>
            </div>
            </div>
        </div>
    </div>

    <!-- logout -->
    <div class="modal fade" id="logoutModal"  tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title">Logout</h5>
                    <svg class="close-btn"  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="logout" class="btn btn-danger">Logout</button>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const token = localStorage.getItem('token');
        if(!token) {
            window.location.href = 'http://frontend-folder.test';
        }
        fetch('http://backend-folder.test/api/employee/employeeList', {
            method: 'GET',
            headers: {
                'Content-Type': 'Application/json',
                'Accept': 'Application/json',
                'Authorization': 'Bearer ' + token 
            },
        })
        .then(response => response.json())
        .then(data => {
            if(!data.message) {
                $('#studentTable').DataTable({
                    data : data,
                    columns: [
                        {data: 'id'},
                        {data: 'firstname'},
                        {data: 'lastname'},
                        {data: 'address'},
                        {data: 'email'},
                        {
                            data: null,
                            render: function(data, type, row) {
                                return `
                                <div class="d-flex gap-3">
                                    <a class="btn btn-primary editBtn btn-sm"
                                     data-id="${row.id}"
                                     data-firstname="${row.firstname}"
                                     data-lastname="${row.lastname}"
                                     data-email="${row.email}"
                                     data-address="${row.address}"
                                     data-bs-toggle="modal" data-bs-target="#editUser">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                    </a>
                                    <a class="btn btn-danger deleteUser btn-sm" data-id="${row.id}" data-firstname="${row.firstname}" data-bs-toggle="modal" data-bs-target="#delete">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                    </a>
                                </div>`;
                            }
                        },
                    ]
                });
            }
        })
        .catch(error => alert('Error: ', error));
    })
</script>

<script>
    document.getElementById('addUser').addEventListener('click', function(event) {
        event.preventDefault();
        const token = localStorage.getItem('token');
        const firstname = document.getElementById('firstname').value;
        const lastname = document.getElementById('lastname').value;
        const address = document.getElementById('address').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const modal = document.getElementById('addUser');
        const modalHide = bootstrap.Modal.getInstance(modal);

        if(firstname && lastname && address && email && password) {
            fetch('http://backend-folder.test/api/employee/add-employee', {
                method: 'POST',
                headers: {
                    'Content-Type': 'Application/json',
                    'Accept': 'Application/json',
                    'Authorization': 'Bearer ' + token
                },
                body: JSON.stringify({
                    firstname,
                    lastname,
                    address,
                    email,
                    password
                })
            })
            .then(async response => {
                if(!response.ok) {
                    const data = await response.json();
                    let message = '';
                    for(let field in data.errors) {
                        message += `${field}: ${data.errors[field][0]}\n`;
                    }
                    alert(message);
                    return;
                }
                else if(response.ok) {
                    const data = await response.json();
                    modalHide.hide();
                    alert('User Added successfully');
                }
            })
        }
    })
</script>

<script>
    $(document).on('click', '.deleteUser', function(event) {
        event.preventDefault();
        const userId = $(this).data("id");
        const token = localStorage.getItem('token');
        const modal = document.getElementById('delete');
        const deleteModal = bootstrap.Modal.getInstance(modal);
        
        $(document).on('click', '#deleteBtn', function() {
            $.ajax({
                url: 'http://backend-folder.test/api/employee/delete',
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    'Authorization': 'Bearer ' + token
                },
                data: {
                    id: userId
                },
                success: function(response) {
                    if(!response.message) {
                        alert('delete unsuccessful');
                    }else{
                        alert(response.message);
                        setTimeout(() => {
                            location.reload();
                        }, 800);
                    }
                }
            })
        });


    })
</script>

<script>
    $(document).on('click', '.editBtn', function() {
        const userId = $(this).data("id");
        const userFirstname = $(this).data("firstname");
        const userLastname = $(this).data("lastname");
        const userAddress = $(this).data("address");
        const modal = document.getElementById('editUser');
        const editModal =  bootstrap.Modal.getInstance(modal);
        
        $('#editUser').find("input[name='firstname']").val(userFirstname);
        $('#editUser').find("input[name='lastname']").val(userLastname);
        $('#editUser').find("input[name='address']").val(userAddress);

        $(document).on('click', '#updateBtn', function(event) {
            event.preventDefault();
            const token = localStorage.getItem('token');
            const firstname = document.getElementById('editFirstname').value;
            const lastname = document.getElementById('editLastname').value;
            const address = document.getElementById('editAddress').value;

            fetch('http://backend-folder.test/api/employee/update', {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + token,
                },
                body: JSON.stringify({
                    id: userId,
                    firstname,
                    lastname,
                    address
                })
            })
            .then(response => response.json())
            .then(data => {
                if(data.success){
                    editModal.hide();
                    window.location.reload();
                    alert(data.success);
                }
                if(!data.success) {
                    alert(data.message);
                }
            })
        })
    })
</script>

<script>
    $(document).on('click', '#logout', function() {
        fetch('http://backend-folder.test/api/logout', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                localStorage.removeItem('token');
                window.location.href = 'http://frontend-folder.test';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        })
    })
</script>

</body>
</html>