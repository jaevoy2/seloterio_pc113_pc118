<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://backend-folder.test/dist/css/dropify.min.css">
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
                                    <a class="text-decoration-none text-dark" style="font-size: 13px">Settings</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a href="profile.php" class="text-decoration-none text-dark" style="font-size: 13px">Account Settings</a>
                                </li>
                            </ol>
                        </nav>
                        <div class="bg-white shadow bg-body-tertiary rounded container mt-4 py-3">
                            <div class="d-flex flex-column gap-3 px-3">
                                <h5 class="mb-0 my_profile_text">My Profile</h5>
                                <div class="card top">
                                    <div class="d-flex justify-content-between p-3">
                                        <div class="d-flex align-items-center user_name_image">
                                            <div class="position-relative">
                                                <img class="profile" src="" alt="" style="border-radius:50%">
                                                <svg data-bs-toggle="modal" data-bs-target="#deleteMyProfile" class="position-absolute bottom-0 text-danger" id="removeMyProfile" style="cursor: pointer" xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                                            </div>
                                            <div class="">
                                                <div class="fullname fw-semibold"></div>
                                                <div class="role text-secondary" style=""></div>
                                            </div>
                                        </div>
                                        <a href="" class="editProfile text-decoration-none" id="editProfileBtn" data-bs-toggle="modal" data-bs-target="#editProfile">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="card mid-content d-flex flex-column gap-4 p-3">
                                    <div class="fs-6 fw-semibold">Personal Information</div>
                                    <div class="d-flex user_info" style="">
                                        <div class="d-flex flex-column gap-4" style="">
                                            <div class="">
                                                <div class="text-secondary" style="font-size: 13px">First name</div>
                                                <div class="fname"></div>
                                            </div>
                                            <div class="">
                                                <div class="text-secondary" style="font-size: 13px">Middle name</div>
                                                <div class="mname"></div>
                                            </div>
                                            <div class="">
                                                <div class="text-secondary" style="font-size: 13px">Email</div>
                                                <div class="email"></div>
                                            </div>
                                            <div class="">
                                                <div class="text-secondary" style="font-size: 13px">Age</div>
                                                <div class="age"></div>
                                            </div>

                                        </div>
                                        <div class="d-flex flex-column gap-4">
                                            <div class="">
                                                <div class="text-secondary" style="font-size: 13px">Last name</div>
                                                <div class="lname"></div>
                                            </div>

                                            <div class="">
                                                <div class="text-secondary" style="font-size: 13px">Gender</div>
                                                <div class="gender"></div>
                                            </div>

                                            <div class="">
                                                <div class="text-secondary" style="font-size: 13px">Contact</div>
                                                <div class="contact"></div>
                                            </div>

                                            <div class="">
                                                <div class="text-secondary" style="font-size: 13px">Address</div>
                                                <div class="address"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mid-content d-flex flex-column gap-2 p-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="fs-6 fw-semibold">File Uploads</div>
                                        <div class="addUpload d-flex align-item-center gap-1 text-decoration-underline" data-bs-toggle="modal" data-bs-target="#uploadFileModal" style="cursor: pointer; font-size: 13px;">
                                            Upload File
                                            <svg xmlns="http://www.w3.org/2000/svg"  width="16"  height="16"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-upload"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 9l5 -5l5 5" /><path d="M12 4l0 12" /></svg>
                                        </div>
                                    </div>
                                    <!-- <small class="text-secondary p-0" style="font-size: 13px">Click the link to download</small> -->
                                    <div class="p-3" style="background: #f1f1f1; border-radius: 5px" id="uploadsContainer"></div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>


    <?php include 'modals/logout-modal.php' ?>
    <?php include 'modals/account.php' ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://backend-folder.test/dist/js/dropify.min.js"></script>

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

    <!-- populate -->
     <script>
        $(document).ready(function() {
            $.ajax({
                url: 'https://backend-folder.test/api/account',
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function(data) {
                    if(data.user.picture == null) {
                        picture = 'https://backend-folder.test/storage/images/default.jpg';
                        let trash = document.getElementById('removeMyProfile');
                        trash.style.display = 'none';
                    }else {
                        picture = 'https://backend-folder.test/storage/' + data.user.picture;
                    }

                    const fullname = data.user.firstname + ' ' + data.user.lastname;
                    document.querySelector('.profile').src = picture;
                    document.querySelector('.fullname').textContent = fullname;
                    document.querySelector('.role').textContent = data.user.role.name;
                    document.querySelector('.fname').textContent = data.user.firstname;
                    document.querySelector('.mname').textContent = data.user.middlename;
                    document.querySelector('.lname').textContent = data.user.lastname;
                    document.querySelector('.age').textContent = data.user.age;
                    document.querySelector('.email').textContent = data.user.email;
                    document.querySelector('.contact').textContent = data.user.contact ? data.user.contact : 'N/A';
                    document.querySelector('.gender').textContent = data.user.gender;
                    document.querySelector('.address').textContent = data.user.address;
                }
            })
        })
     </script>

    <!-- upload file -->
    <script>
        $(document).on('click', '#save_upload', function(event) {
            event.preventDefault();

            $.ajax({
                url: 'https://backend-folder.test/api/account',
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function(data) {
                    const file = $('#uploadFile')[0];
                    let currentUser = data.user.id;
                    const formData = new FormData();
                    
                    if(file && file.files.length > 0){
                        formData.append('path', file.files[0]);
                        formData.append('user_id', currentUser);
                        formData.append('name', file.files[0].name);
                    }

                    $.ajax({
                        url: 'https://backend-folder.test/api/uploadFile',
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if(!response.message) {
                                document.getElementById('fileError').textContent = response.error;
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
                }
            })

        })
    </script>

    <!-- display file -->
    <script>
        $(document).ready(function() {
            let mainContainer = document.getElementById('uploadsContainer');
            
            $.ajax({
                url: 'https://backend-folder.test/api/getFileUploads',
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function(data) {
                    data.uploads.forEach(upload => {
                        let fileCon = document.createElement('div');
                        fileCon.classList.add('text-decoration-underline');
                        fileCon.style.display = 'flex';
                        fileCon.style.gap = '5px';

                        let file = document.createElement('a');
                        file.textContent = upload.name;
                        // file.href = 'http://backend-folder.test/storage/' + upload.path;
                        // file.target = '_blank';

                        let deleteBtn = document.createElement('div');
                        deleteBtn.classList.add('delete-file');
                        deleteBtn.innerHTML = '<svg  xmlns="http://www.w3.org/2000/svg"  width="16"  height="16"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-trash-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16zm-9.489 5.14a1 1 0 0 0 -1.218 1.567l1.292 1.293l-1.292 1.293l-.083 .094a1 1 0 0 0 1.497 1.32l1.293 -1.292l1.293 1.292l.094 .083a1 1 0 0 0 1.32 -1.497l-1.292 -1.293l1.292 -1.293l.083 -.094a1 1 0 0 0 -1.497 -1.32l-1.293 1.292l-1.293 -1.292l-.094 -.083z" /><path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z" /></svg>';
                        deleteBtn.dataset.id = upload.id;
                        deleteBtn.style.cursor = 'pointer';
                        deleteBtn.onclick = function() {
                            let delete_file = new bootstrap.Modal(document.getElementById('deleteFileModal'));
                            delete_file.show();
                        }

                        fileCon.appendChild(file);
                        fileCon.appendChild(deleteBtn);
                        mainContainer.appendChild(fileCon);
                    })
                }
            })
        })
    </script>

    <!-- delete file -->
     <script>
        $(document).on('click', '.delete-file', function() {
            let id = $(this).data("id");
            
            $(document).on('click', '#delete_upload', function(event) {
                event.preventDefault();
                $.ajax({
                    url: 'https://backend-folder.test/api/remove-file',
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    data: {
                        id: id
                    },
                    success: function(response) {
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
                })
            }) 
        })
     </script>

     <!-- populate form -->
      <script>
        $(document).on('click', '#editProfileBtn', function() {
            $.ajax({
                url: 'https://backend-folder.test/api/account',
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                success: function(data) {
                    let user = data.user;
                    $('#editProfile').find("input[name='firstname']").val(user.firstname);
                    $('#editProfile').find("input[name='middlename']").val(user.middlename);
                    $('#editProfile').find("input[name='lastname']").val(user.lastname);
                    $('#editProfile').find("input[name='age']").val(user.age);
                    $('#editProfile').find("input[name='email']").val(user.email);
                    $('#editProfile').find("select[name='gender']").val(user.gender);
                    $('#editProfile').find("input[name='contact']").val(user.contact);
                    $('#editProfile').find("input[name='address']").val(user.address);

                    $(document).on('click', '#saveUserProfile', function(event) {
                        event.preventDefault();
                        const file = document.getElementById('profilePicture');

                        formData = new FormData();
                        formData.append('id', user.id);
                        formData.append('firstname', $('#editProfile').find("input[name='firstname']").val());
                        formData.append('middlename', $('#editProfile').find("input[name='middlename']").val());
                        formData.append('lastname', $('#editProfile').find("input[name='lastname']").val());
                        formData.append('age', $('#editProfile').find("input[name='age']").val());
                        formData.append('gender', $('#editProfile').find("select[name='gender']").val());
                        formData.append('contact', $('#editProfile').find("input[name='contact']").val());
                        formData.append('address', $('#editProfile').find("input[name='address']").val());
                        formData.append('password', $('#editProfile').find("input[name='password']").val());

                        if(file && file.files.length > 0){
                            formData.append('picture', file.files[0]);
                        }

                        $.ajax({
                            url: 'https://backend-folder.test/api/edit-profile',
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                if(!response.message) {
                                    document.getElementById('editProfile_error').textContent = response.error;
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
                }
            })
        })
      </script>

    <!-- remove profile picture -->
    <script>
        $(document).on('click', '#removeMyProfile', function() {
            fetch('https://backend-folder.test/api/account', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
            })
            .then(response => response.json())
            .then(data => {
                let user = data.user;

                $(document).on('click', '#deletePersonalProfile', function(event) {
                    event.preventDefault();
                    fetch('http://backend-folder.test/api/remove-profile', {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json',
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        body: JSON.stringify({id: user.id})
                    })
                    .then(res => res.json())
                    .then(response => {
                        if(!response.message) {
                            document.getElementById('myProfile_error').textContent = response.error;
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
                    })
                })
            })
        })
    </script>


