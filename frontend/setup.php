<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/media.css">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: "Poppins", serif;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

    <div class="position-absolute" style="height: 150px; width: 100%; left: 0; top: -20px; background-color: #ffbf00"></div>
    <div class="form-setup-container shadow z-2 bg-white">
        <p class="title" style="padding-bottom: 20px">
            <img src="http://backend-folder.test/images/padeliber.png" style="height:40px" alt="">
            <span class="" style="font-size: 20px">Setup Your Account!</span>
        </p>
        <form action="" method="POST" enctype="multipart/form-data">
            <small class="d-flex justify-content-center mb-2 text-danger" style="font-size: 12px" id="setup_error"></small>
            <input type="text" id="setupId" hidden>
            <div class="d-flex gap-5">
                <input type="text" name="editUserId" id="editUserId" hidden>
                <div class="col-5">
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Firstname</small>
                        <input type="text" placeholder="First Name" disabled id="setFname" class="underline_fucos" name="firstname" required>
                    </div>
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Middlename</small>
                        <input type="text" placeholder="Middle Name" disabled id="setMname" class="underline_fucos" name="middlename" required>
                    </div>
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Lastname</small>
                        <input type="text" placeholder="Last Name" disabled id="setLname" class="underline_fucos" name="lastname" required>
                    </div>
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Age</small>
                        <input type="text" placeholder="Age" disabled id="setAge" class="underline_fucos" name="age" required>
                    </div>
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Gender</small>
                        <input type="text" placeholder="" disabled id="setGender" class="underline_fucos" name="gender" >
                    </div>
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Contact #</small>
                        <input type="text" placeholder="Contact #" disabled id="setContact" class="underline_fucos" name="contact" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Address</small>
                        <input type="text" placeholder="Address" disabled id="setAddress" class="underline_fucos" name="address" required>
                    </div>
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Role</small>
                        <input type="text" placeholder="" disabled id="setRole" class="underline_fucos" name="role" >
                    </div>
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Email</small>
                        <input type="email" placeholder="Email" disabled id="setEmail" class="underline_fucos" name="email" >
                    </div>
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Password</small>
                        <input type="password" placeholder="" id="setpassword" class="underline_fucos" name="password" required>
                    </div>
                    <div class="form-group mb-3">
                        <small class="text-secondary" style="font-size: 12px">Confirm Password</small>
                        <input type="password" placeholder="" id="confirmPass" class="underline_fucos" name="password" required>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end p-3 gap-2">
            <button type="submit" class="btn btn-warning d-flex align-items-center gap-2" id="saveSetup">
                Save
                <div class="spinner-border spinner-border-sm" id="editSpinner" style="display: none" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<!-- populate form -->
 <script>
    $(document).ready(function() {
        const urlParam = new URLSearchParams(window.location.search);
        const id = urlParam.get('id');

        fetch('https://backend-folder.test/api/setup', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                id: id
            })
        })
        .then(res => res.json())
        .then(data => {
            document.getElementById('setFname').value = data.firstname;
            document.getElementById('setMname').value = data.middlename;
            document.getElementById('setLname').value = data.lastname;
            document.getElementById('setAge').value = data.age;
            document.getElementById('setGender').value = data.gender;
            document.getElementById('setContact').value = data.contact;
            document.getElementById('setAddress').value = data.address;
            document.getElementById('setRole').value = data.role.name;
            document.getElementById('setEmail').value = data.email;
            document.getElementById('setupId').value = data.id;
        })
    })
 </script>


<script>
    $(document).on('click', '#saveSetup', function(e) {
        e.preventDefault();
        document.getElementById('editSpinner').style.display = 'block';
        let pass = document.getElementById('setpassword').value;
        let confirmPass = document.getElementById('confirmPass').value;
        let id = document.getElementById('setupId').value;

        if(pass != confirmPass) {
            document.getElementById('setup_error').textContent = 'Password confirmation does not match.';
            document.getElementById('editSpinner').style.display = 'none';
        }else{
            fetch('https://backend-folder.test/api/setup/save', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    id: id,
                    password: pass
                })
            })
            .then(res => res.json())
            .then(response => {
                if(!response.message) {
                    document.getElementById('setup_error').textContent = response.error;
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
                        timer: 1200
                    }).then(() => {
                        location.href = 'frontend.test';
                    });
                }
            })
            .finally(() => {
                document.getElementById('editSpinner').style.display = 'none';
            })
        }

    })
</script>



</body>
</html>