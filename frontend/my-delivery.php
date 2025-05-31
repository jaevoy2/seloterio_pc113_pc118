<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://unpkg.com/html5-qrcode"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loader.css">
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
                        <img class="" src="{{asset('images/no-internet.png')}}" style="width: 30%"></img>
                        <p class="fw-semibold">No internet connection</p>
                    </div>
                    <div class="mt-4 pt-3" style="display: none;" id="content">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-decoration-none text-dark" style="font-size: 13px">My Deliveries</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a class="text-decoration-none text-dark" style="font-size: 13px" href="">Details</a>
                                </li>
                            </ol>
                        </nav>
                        <div class="justify-content-center align-items-center flex-column mt-5 pt-5 text-secondary" id="no_order" style="font-size: 15px">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-truck-off"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M15.585 15.586a2 2 0 0 0 2.826 2.831" /><path d="M5 17h-2v-11a1 1 0 0 1 1 -1h1m3.96 0h4.04v4m0 4v4m-4 0h6m6 0v-6h-6m-2 -5h5l3 5" /><path d="M3 3l18 18" /></svg>
                            No assigned order yet
                        </div>
                        <div class="bg-white shadow bg-body-tertiary rounded position-relative container py-3 details_con" id="con_body" style="">
                            <div class="line-loader position-absolute" id="line-loader" style="display: none; width: 100%; bottom: 0; left: 0;"></div>
                            <!-- <div class="d-flex justify-content-end">
                                <a href="delivery-history.php" class="btn btn-sm fw-semibold" style="font-size: 15px; background-color: #ffbf00;">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-history"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 8l0 4l2 2" /><path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" /></svg>
                                    Delivery History
                                </a>
                            </div> -->
                            <div id="content_details" style="display: none">
                                <div class="p-2 d-flex justify-content-between">
                                    <div class="d-flex flex-column">
                                        <div class="d-flex align-items-center gap-1 order_con">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-shopping-cart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 2a1 1 0 0 1 .993 .883l.007 .117v1.068l13.071 .935a1 1 0 0 1 .929 1.024l-.01 .114l-1 7a1 1 0 0 1 -.877 .853l-.113 .006h-12v2h10a3 3 0 1 1 -2.995 3.176l-.005 -.176l.005 -.176c.017 -.288 .074 -.564 .166 -.824h-5.342a3 3 0 1 1 -5.824 1.176l-.005 -.176l.005 -.176a3.002 3.002 0 0 1 1.995 -2.654v-12.17h-1a1 1 0 0 1 -.993 -.883l-.007 -.117a1 1 0 0 1 .883 -.993l.117 -.007h2zm0 16a1 1 0 1 0 0 2a1 1 0 0 0 0 -2zm11 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2z" /></svg>
                                            <div class="fw-semibold" style="" id="order_id"></div>
                                        </div>
                                        <div class="d-flex gap-2 ord_status">
                                            <div class="text-secondary fw-semibold" style="">Status:</div>
                                            <div class="fw-semibold" style="" id="ord_status"></div>
                                        </div>
                                        <div class="method d-flex gap-1">
                                            <div class="fw-semibold text-secondary">Payment Method:</div>
                                            <div class="fw-semibold text-success">Cash on Delivery</div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="fw-semibold amount d-flex justify-content-end">Amount:</div>
                                        <div class="fw-bold d-flex justify-content-end align-items-center" id="price">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="35"  height="35"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="3"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-currency-peso"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 19v-14h3.5a4.5 4.5 0 1 1 0 9h-3.5" /><path d="M18 8h-12" /><path d="M18 11h-12" /></svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3 cus_detailsCon card" style="">
                                    <div class="fw-bold text-secondary mx-2" style="font-size: 12px">Customer Details:</div>
                                    <div class="py-2 px-2 d-flex flex-column gap-3 customer_details">
                                        <div class="d-flex justify-content-between">
                                            <div class="fw-semibold" style="font-size: 13px">Name: </div>
                                            <div id="cus_name"></div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="fw-semibold" style="font-size: 13px">Address: </div>
                                            <div class="text-end" id="cus_address"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="updateOrdStatus" class="btn align-items-center justify-content-center fw-bold" style="display: none; aligned-items-center; gap: 5px; background-color: #ffbf00;">
                            Update Order Status
                            <div class="spinner-border spinner-border-sm" id="updateOrdSpinner" style="display: none" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        <div id="scanBtn" class="btn align-items-center fw-bold" style="display: none; background-color: #ffbf00;" data-bs-toggle="modal" data-bs-target="#scannerModal">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-scan"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7v-1a2 2 0 0 1 2 -2h2" /><path d="M4 17v1a2 2 0 0 0 2 2h2" /><path d="M16 4h2a2 2 0 0 1 2 2v1" /><path d="M16 20h2a2 2 0 0 0 2 -2v-1" /><path d="M5 12l14 0" /></svg>
                            SCAN QR
                        </div>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" id="scannerModal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn-close m-1" id="stopScanner" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="d-flex justify-content-center p-3">
                                        <div class="qrReader" id="qrReader" style=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="fw-bold position-absolute color_box" style="background-color: #ffbf00; height: 200px; width: 108.8%; z-index: -1; left: -15px; top: -15px;"></div>

<?php include 'modals/logout-modal.php' ?>
<?php include 'modals/delivery-modal.php' ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>


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

<!-- update status -->
<script>
    $(document).on('click', '#updateOrdStatus', function(e) {
        e.preventDefault();
        document.getElementById('updateOrdSpinner').style.display = 'block';
        let orderId = $(this).data('id');

        fetch('https://backend-folder.test/api/rider/update-order-status', {
            method: 'POST',
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token'),
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                id: orderId,
            })
        })
        .then(res => res.json())
        .then(response => {
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
        })
        .finally(() => {
            document.getElementById('updateOrdSpinner').style.display = 'none';
        })
    })
</script>

<!-- scanner -->
 <script>
    $(document).ready(function() {
        $(document).on('click', '#scanBtn', function() {
            fetch('https://backend-folder.test/api/rider/my-assigned-order', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            })
            .then(res => res.json())
            .then(data => {
                const id = data.order[0].external_id;

                let scanner;
                $('#qrReader').html('');

                function startScanner() {
                    scanner = new Html5QrcodeScanner('qrReader', {
                        fps: 10,
                        qrbox: 250
                    });
                    scanner.render(onScan)
                }
                async function onScan(decodeText, decodeResult) {
                        try{
                            
                            const url = new URL(decodeText);
                            const urlParam = new URLSearchParams(url.search);
                            const orderId = urlParam.get('id');
                            const origin = url.origin;
                            const pathname = url.pathname;
                            console.log(url);   

                            if(origin != 'https://frontend-folder.test' || pathname != '/view_scan.php') {
                                scanner.clear();
                                await showSwal('Invalid Qr code format');
                            }else {
                                if(orderId == id) {
                                    await scanner.clear();
                                    window.location.href = decodeText;
                                }else{
                                    scanner.clear();
                                    await showSwal('Invalid QR code')
                                }
                            }
                            
                        }catch(e) {
                            scanner.clear();
                            await showSwal('Invalid QR code lol')
                        }
                    }

                async function showSwal(message) {
                    await Swal.fire({
                        position: "top",
                        icon: "error",
                        color: "#008000",
                        width: 350,
                        toast: true,
                        title: message,
                        showConfirmButton: false,
                        timer: 2000
                    })
                    await scanner.clear();
                    startScanner();
                }

                $(document).on('click', '#stopScanner', function() {
                    scanner.clear();
                });

                startScanner();
            })
    
        })
    })

 </script>


 <!-- fetch order details -->
 <script>
    $(document).ready(function() {
        function fetchOrder() {
            document.getElementById('line-loader').style.display = 'block';

            fetch('https://backend-folder.test/api/rider/my-assigned-order', {
                method: 'GET',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            })
            .then(res => res.json())
            .then(data => {
                if(data.order.length > 0) {
                    let order = data.order[0];

                    document.getElementById('no_order').style.display = 'none';
                    document.getElementById('content_details').style.display = 'block';

                    document.getElementById('order_id').textContent = 'ORDER#' + order.external_id;
                    document.getElementById('price').textContent = order.amount;
                    let status = document.getElementById('ord_status');
                    status.textContent = order.status;
        
                    if(order.status == 'In transit') {
                        let scanBtn = document.getElementById('scanBtn');
                        scanBtn.style.display = 'block';
                        status.style.color = '#ffbf00';
                    }
                    if(order.status == 'Delivered') {
                        status.style.color = '#29a310';
                    }
                    if(order.status == 'Assigned') {
                        let update_Btn = document.getElementById('updateOrdStatus');
                        update_Btn.style.display = 'flex';
                        update_Btn.dataset.id = order.id;
                        status.style.color = '#1977d4';
                    }
                    
                    document.getElementById('cus_name').textContent = order.name;
                    document.getElementById('cus_address').textContent = order.address;
                    // document.getElementById('ord_name').textContent = order.name;
                    // document.getElementById('price').textContent = order.price
                }else {
                    document.getElementById('no_order').style.display = 'flex';
                    document.getElementById('con_body').style.display = 'none';
                }

            })
            .finally(() => {
                document.getElementById('line-loader').style.display = 'none';
            })
        }

        fetchOrder();
        setInterval(fetchOrder, 10000);

    })
 </script>




</body>
</html>