<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Employee Management</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <link rel="stylesheet" href="{{ url('CSS/attendancelogs.css') }}" />
    <link rel="stylesheet" href="{{ url('CSS/sidebar.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>

<body>

    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="cafe"></ion-icon>
                        </span>
                        <span class="title">DTR System</span>
                    </a>
                </li>

                <li>
                    <a href="/">
                        <span class="icon">
                            <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('/manage-employees') }}">
                        <span class="icon">
                            <ion-icon name="people"></ion-icon>
                        </span>
                        <span class="title">Employees</span>
                    </a>
                </li>

                <li>
                    <a href="/attendance-logs">
                        <span class="icon">
                            <ion-icon name="calendar"></ion-icon>
                        </span>
                        <span class="title">Attendance Logs</span>
                    </a>
                </li>

                <li>
                    <a href="payroll">
                        <span class="icon">
                            <ion-icon name="cash"></ion-icon>
                        </span>
                        <span class="title">Payroll</span>
                    </a>
                </li>

                <li>
                    <a href="/reports">
                        <span class="icon">
                            <ion-icon name="analytics"></ion-icon>
                        </span>
                        <span class="title">Reports</span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('logout') }}">
                        <span class="icon">
                            <ion-icon name="log-out"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

            
                <div class="name">
                    <h4>{{auth()->user()->name}}</h4>
                </div>
                <div class="qr">
                    <button>Scan QR</button>
                </div>
                <div class="user">
                    <img src="{{ url('img/usericon.svg') }}" alt="">
                </div>
            </div>

        <div class="main-content">




                <div class="filter-group">

                    <input type="text" id="searchInput" placeholder="Search by name..." onkeyup="filterTable()" />
                    <input type="date" id="dateFilter" onchange="filterTable()" />
                 
                    <select id="positionFilter" onchange="filterTable()">
                    <option value="">All Positions</option>
                    
                                <option value="Barista">Barista</option>
                                <option value="Cashier">Kitchen Staff</option>
                              
                    </select>

                    <div class="filter-group">
                        <select id="typeFilter" onchange="filterTable()">
                            <option value="">All Type</option>
                            <option value="regular">Regular</option>
                            <option value="part-ime">Part Time</option>
                          
                        </select>

                    <div class="filter-group">
                        <select id="statusFilter" onchange="filterTable()">
                            <option value="">All Status</option>
                            <option value="Active">On Time</option>
                            <option value="Inactive">Late</option>
                            <option value="Inactive">Absent</option>
                        </select>
                    </div>
                </div>

            </div>

           <!-- Employee Table -->
<!-- Employee Table -->
<div class="employee-table">
    <h2>Attendance Logs</h2>
    <table id="employeeTable">
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Position</th>
                <th>Type</th>
                <th>Time In (AM)</th>
                <th>Time Out (AM)</th>
                <th>Time In (PM)</th>
                <th>Time Out (PM)</th>
                <th>Working Hours</th>
                <th>Status</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>03/21/2025</td>
                <td>Sheina Labadan</td>
                <td>Barista</td>
                <td>Regular</td>
                <td>8:30</td>
                <td></td>
                <td></td>
                <td>10:00</td>
                <td>8 hours</td>
                <td>On time</td>
                <td>350</td>
            </tr>
            <tr>
                <td>03/21/2025</td>
                <td>Sheina Labadan</td>
                <td>Barista</td>
                <td>Regular</td>
                <td>8:30</td>
                <td></td>
                <td></td>
                <td>10:00</td>
                <td>8 hours</td>
                <td>On time</td>
                <td>350</td>
            </tr>
            <tr>
                <td>03/21/2025</td>
                <td>Sheina Labadan</td>
                <td>Barista</td>
                <td>Regular</td>
                <td>8:30</td>
                <td></td>
                <td></td>
                <td>10:00</td>
                <td>8 hours</td>
                <td>On time</td>
                <td>350</td>
            </tr>
            <tr>
                <td>03/21/2025</td>
                <td>Sheina Labadan</td>
                <td>Barista</td>
                <td>Regular</td>
                <td>8:30</td>
                <td></td>
                <td></td>
                <td>10:00</td>
                <td>8 hours</td>
                <td>On time</td>
                <td>350</td>
            </tr>
        </tbody>
    </table>
</div>




          


            <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
            <script src="{{ url('JS/sidebar.js') }}"></script>
            <script src="{{ url('JS/manemp.js') }}"></script>


</body>

</html>
