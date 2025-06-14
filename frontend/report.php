<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.2.2/css/dataTables.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Document</title>

    <style>
        @media (max-width: 800px) {
            #filter, #month-select, #reportPrint {
                font-size: 10px
            }
        }
    </style>

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
                                    <a class="text-decoration-none text-dark" style="font-size: 13px">Delivery Assignment</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    <a class="text-decoration-none text-dark" style="font-size: 13px" href="manage-orders.php">List</a>
                                </li>
                            </ol>
                        </nav>
                        <div class="bg-white shadow bg-body-tertiary rounded container position-relative py-2">
                            <div class="line-loader position-absolute" id="line-loader" style="display: none; width: 100%; top: 0; left: 0;"></div>
                            <div class="d-flex justify-content-between align-items-center mt-4 pt-2">
                                <form action="" id="filterForm" class="d-flex align-items-center" style="height: 35px">
                                    <button type="submit" id="filter" class="btn btn-sm fw-semibold py-1" style="background-color: #ffbf00;">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-filter"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" /></svg>
                                        Filter by month 
                                    </button>
                                    <select name="month" id="month-select" style="padding: 5px; width: auto" class="underline_fucos">
                                        <option value="" disabled selected>Select month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option class="" value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option class="" value="12">December</option>
                                    </select>
                                    <div class="spinner-border spinner-border-sm ms-3" id="reportSpinner" style="display: none; color: #ffbf00;" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </form>
                                <div class="dropdown" id="dropExport">
                                    <div class="" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /><path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" /></svg>
                                    </div>
                                    <ul class="dropdown-menu user-drop py-0">
                                        <a class="dropdown-item py-2" id="reportPrint" href="">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-printer"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" /><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" /><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" /></svg>
                                            Print
                                        </a>
                                        <a class="dropdown-item py-2" id="exportCsv" href="">
                                            <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-file-export"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v5m-5 6h7m-3 -3l3 3l-3 3" /></svg>
                                            Export CSV
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="">
                                <table id="reportTable" class=" hover" style="font-size: 10px">
                                    <thead class="text-dark " style="background-color: #ffbf00;">
                                        <tr>
                                            <th>#</th>
                                            <th>Status</th>
                                            <th>Assigned Rider</th>
                                            <th>Order ID</th>
                                            <th>Amount</th>
                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>Delivered At</th>
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

<?php include 'modals/logout-modal.php' ?>
<?php include 'modals/delivery-modal.php' ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
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

<!-- display current month report -->
<script>
    $(document).ready(function() {
        let selectMonth = document.getElementById('month-select');
        let table = $('#reportTable').DataTable({
                scrollX: true,
                dom: '<"top-controls">t<"bottom-controls"ip><"clear">',
                columns: [
                    {
                        data: null,
                        render: function(data, type, row, meta) {
                            return meta.row !== undefined ? meta.row + 1 : '';
                        }
                    },
                    {
                        data: 'status',
                        render: function(data, type, row) {
                            if(row.status == 'To Be Deliver') {
                                return `<div class="text-danger fw-semibold" style="font-size: 13px">${row.status}</div>`;
                            }else if(row.status == 'On Transit') {
                                return `<div class="text-warning fw-semibold" style="font-size: 13px">${row.status}</div>`;
                            }else if(row.status == 'Delivered') {
                                return `<div class="text-success fw-semibold" style="font-size: 13px">${row.status}</div>`;
                            }else{
                                return `<div class="text-primary fw-semibold" style="font-size: 13px">${row.status}</div>`;
                            }
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            if(row.rider == null) {
                                return `<div class="text-secondary"> —— </div>`
                            }else{
                                return `<div style="font-size: 12px">${row.rider.firstname + ' ' + row.rider.lastname}</div>`
                            }
                        }
                    },
                    {
                        data: 'id',
                        render: function(data, type, row) {
                            return `<div>#ORD${row.id}</div>`
                        }
                    },
                    { data: 'amount' },
                    { data: 'name' },
                    { data: 'address' },
                    {
                        data: 'updated_at',
                        render: function(data, type, row) {
                            return moment(data).format("MMM D, YYYY - HH:mm"); 
                        }
                    },
                ]
            })


        fetch('https://backend-folder.test/api/admin/report', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        })
        .then(res => res.json())
        .then(data => {
            let orders = data.orders;
            selectMonth.value = data.month;
            table.clear().rows.add(orders).draw();
            
            if(orders.length > 0) {
                document.getElementById('dropExport').style.display = 'block';
            }else{
                document.getElementById('dropExport').style.display = 'none';
            }
        })

        // filtered month
        $(document).on('click', '#filter', function(event) {
            event.preventDefault();
            let monthId = document.getElementById('month-select').value;
            document.getElementById('reportTable').style.display = 'none';
            document.getElementById('reportSpinner').style.display = 'block';

            fetch('https://backend-folder.test/api/admin/filter/month', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                body: JSON.stringify({
                    month_id: monthId
                })
            })
            .then(res => res.json())
            .then(data => {
                document.getElementById('reportTable').style.display = 'table';
                const filteredOrders = data.orders;
                selectMonth.value = monthId;
                table.clear().rows.add(filteredOrders).draw();

                if(filteredOrders.length > 0) {
                    document.getElementById('dropExport').style.display = 'block';
                }else{
                    document.getElementById('dropExport').style.display = 'none';
                }
            })
            .finally(() => {
                document.getElementById('reportSpinner').style.display = 'none';
            })
        })

    })
</script>

<!-- print report -->
<script>
    $(document).on('click', '#reportPrint', function() {
        let id = document.getElementById('month-select').value;
        window.open(`partials/print-report.php?id=${id}`, '_blanck');
    })
</script>

<script>
    $(document).on('click', '#exportCsv', function(e) {
        e.preventDefault();
        let monthId = document.getElementById('month-select').value;
        
        fetch('https://backend-folder.test/api/admin/export', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('token'),
                'Content-type': 'application/json'
            },
            body: JSON.stringify({
                month_id: monthId
            })
        })
        .then(response => {
            const disposition = response.headers.get('Content-Disposition');
            let filename = 'export.csv';

            if (disposition && disposition.includes('filename=')) {
                const match = disposition.match(/filename="?(.+?)"?$/);
                if (match) {
                    filename = match[1];
                }
            }

            return response.blob().then(blob => ({ blob, filename }));
        })
        .then(({ blob, filename }) => {
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = filename;
            document.body.appendChild(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url);
        })
    })
</script>


</body>
</html>