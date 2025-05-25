<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>

<div class="d-flex flex-column justify-content-center p-3" style="width: 98vw">
    <div class="mb-5">
        <img src="https://backend-folder.test/images/padeliber.png" style="height: 50px" alt="">
    </div>

    <div class="d-flex flex-column">
        <div class="fw-semibold fs-6">Employees</div>
        <div class="pt-2" id="printTableCon">
            <table id="printUsersTable" class="stripe hover">
                <thead class="text-dark " style="background-color: #ffbf00; font-size: 10px">
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Address</th>
                        <!-- <th>Permission</th> -->
                    </tr>
                </thead>
                <tbody class="text-dark" style="font-size: 8px">
                    <!-- Rows will be populated here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>


<script>
    $(document).ready(function() {
        $.ajax({
            url: 'https://backend-folder.test/api/admin/users',
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token'),
                'Accept': 'application/json',
                'Content-Type': 'application/json',
            },
            success: function(response) {
                console.log(response.users);
                if(response) {
                    $('#printUsersTable').DataTable({
                        data: response.users,
                        searching: false,
                        paging: false,
                        info: false,
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
                                    ? `<img src="https://backend-folder.test/storage/${data}" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;"/>` : 'No image';
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
                                    }else if(data.name == "Rider" || data.name == "Delivery Rider" || data.name == "Delivery Man" || data.name == "Food Delivery Rider" || data.name == "Food Rider"){
                                        return `<div class="btn btn-primary fw-semibold btn-sm" style="font-size: 10px"> ${data.name} </div>`;
                                    }else{
                                        return `<div class="btn btn-secondary fw-semibold btn-sm" style="font-size: 10px"> ${data.name} </div>`
                                    }
                                }
                            },
                            { data: 'email' },
                            { data: 'address' },
                        ]
                    })
                }
            },
            complete: function() {
                window.print();
            }
        })
    })
</script>

<script>
    window.addEventListener("afterprint", function() {
        window.close();
    })
</script>

</body>
</html>