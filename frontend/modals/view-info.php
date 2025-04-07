<div class="offcanvas offcanvas-end d-flex flex-column justify-content-center px-3" style="width: 900px" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <img src="http://backend-folder.test/images/padeliber.png" style="height: 50px" alt="">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="dropdown d-flex flex-row-reverse">
            <div class="" data-bs-toggle="dropdown" aria-expanded="false" >
                <svg xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="#002"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
            </div>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Download PDF</a></li>
              <li><a class="dropdown-item" href="#">Print</a></li>
            </ul>
        </div>
    <div class="top-con d-flex flex-column gap-3 px-3 pb-3">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Employee information</h5>
        <div class="pb-3 card" style="">
            <div class="d-flex align-items-center gap-3 py-2 px-3">
                <img src="" class="picture" alt="" style="width: 90px; height: 90px; border-radius:50%">
                <div class="" style="">
                    <div class="fullname fw-semibold"></div>
                    <div class=" text-secondary" style="font-size: 13px">
                        <div class="role"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="employee-info card p-3 mt-3" style="">
            <div class="fs-6 fw-semibold mb-2">Personal Information</div>
            <div class="d-flex" style="gap: 250px">
                <div class="d-flex flex-column gap-4" style="">
                    <div class="">
                        <div class="text-secondary" style="font-size: 13px">First name</div>
                        <div class="fname"></div>
                    </div>
                    <div class="">
                        <div class="text-secondary" style="font-size: 13px">Middle Name</div>
                        <div class="mname"></div>
                    </div>
                    <div class="">
                        <div class="text-secondary" style="font-size: 13px">Age</div>
                        <div class="age"></div>
                    </div>
                    <div class="">
                        <div class="text-secondary" style="font-size: 13px">Gender</div>
                        <div class="gender"></div>
                    </div>
                </div>
                <div class="d-flex flex-column gap-4">
                    <div class="">
                        <div class="text-secondary" style="font-size: 13px">Last name</div>
                        <div class="lname"></div>
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
      </div>
    </div>
</div>

<script>
    $(document).on('click', ".view-user", function() {
        let userId = $(this).data("id");
        let firstname = $(this).data("firstname");
        let middlename = $(this).data("middlename");
        let lastname = $(this).data("lastname");
        let age = $(this).data("age");
        let gender = $(this).data("gender");
        let contact = $(this).data("contact");
        let address = $(this).data("address");
        let role = $(this).data("role");
        let picture = $(this).data("picture");

        if(picture === null) {
            picture = "images/default.jpg";
        }

        document.querySelector('.fullname').textContent = firstname + ' ' + middlename + ' ' + lastname;
        document.querySelector('.fname').textContent = firstname;
        document.querySelector('.mname').textContent = middlename;
        document.querySelector('.lname').textContent = lastname;
        document.querySelector('.role').textContent = role;
        document.querySelector('.age').textContent = age;
        document.querySelector('.gender').textContent = gender;
        document.querySelector('.contact').textContent = contact;
        document.querySelector('.address').textContent = address;
        document.querySelector('.picture').src = 'http://backend-folder.test/storage/' + picture;
    })
</script>
