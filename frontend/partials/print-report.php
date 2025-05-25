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
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body>

    <div class="d-flex flex-column justify-content-center p-2" style="width: 98vw">
        <div class="mb-4">
            <img src="https://backend-folder.test/images/padeliber.png" style="height: 50px" alt="">
        </div>

        <div class="d-flex flex-column">
            <div class="fw-semibold fs-5" id="monthName"></div>
            <div class="pt-2" id="printTableCon">
                <table id="printReportTable" class=" hover">
                        <thead class="text-dark " style="background-color: #ffbf00; font-size: 8px">
                            <tr>
                                <th>#</th>
                                <th>Status</th>
                                <th>Assigned Rider</th>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Address</th>
                                <th>Delivered At</th>
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
            const url = new URLSearchParams(window.location.search);
            const id = url.get('id');
            console.log(id);
            fetch('https://backend-folder.test/api/admin/filter/month', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('token'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    month_id: id
                })
            })
            .then(res => res.json())
            .then(data => {
                const orders = data.orders;
                const month = document.getElementById('monthName').textContent = 'Report for ' + moment(data.month).format('MMM YYYY');

                $('#printReportTable').DataTable({
                    data: orders,
                    scrollX: true,
                    dom: '<"top-controls">t<"bottom-controls"><"clear">',
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
                        { data: 'customer_name' },
                        { data: 'address' },
                        {
                            data: 'updated_at',
                            render: function(data, type, row) {
                                return moment(data).format("MMM D, YYYY"); 
                            }
                        },
                    ]
                })
            })
            .finally(() => {
                window.print();
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