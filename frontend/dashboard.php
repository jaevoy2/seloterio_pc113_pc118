<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <title>Document</title>
</head>
<body>

    <h1>Dashboard</h1>

    <div class="container">
        <div class="div">
            <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addUser" href="">Add employee</a>
        </div>
        <div class="">
            <table class="table stripe" id="studentTable">
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

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const token = localStorage.getItem('token');
        if(!token) {
            window.location.href = 'http://frontend-folder.test';
        }
        fetch('http://backend-folder.test/api/admin/employeeList', {
            method: 'GET',
            headers: {
                'Content-Type': 'Application/json',
                'Accept': 'Application/json',
                'Authorization': 'Bearer ' + token 
            },
        })
        .then(response => response.json())
        .then(data => {
            if(data.message){
                localStorage.removeItem('token', data.token);
                window.location.href = 'http://frontend-folder.test';
            }
            console.log(data);
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
                                <a class="btn btn-primary btn-sm"
                                 data-id="${row.id}"
                                 data-firstname="${row.firstname}"
                                 data-lastname="${row.lastname}"
                                 data-course="${row.course}">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                </a>
                                <a class="btn btn-danger btn-sm"data-id="${row.id}">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                </a>
                            </div>`;
                        }
                    },
                ]
            });
        });
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

        if(firstname && lastname && address && email && password) {
            fetch('http://backend-folder.test/api/admin/add-employee', {
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
            .then(response => response.json())
            .then(data => {
                alert('User Added successfully');
            })
        }

    })
</script>

</body>
</html>