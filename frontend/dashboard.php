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
        <table class="table stripe" id="studentTable">
        <thead class="table-dark" style="">
            <tr class="">
            <th scope="col">Id</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Course</th>
            <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
    
        </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const token = localStorage.getItem('token');
        if(!token) {
            window.location.href = 'http://frontend-folder.test';
        }
        fetch('http://backend-folder.test/api/index', {
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
                data : data.students,
                columns: [
                    {data: 'id'},
                    {data: 'firstname'},
                    {data: 'lastname'},
                    {data: 'course'},
                    {data: 'email'}
                ]
            });
        });
    })
</script>

</body>
</html>