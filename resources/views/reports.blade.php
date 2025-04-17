<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Employee Management</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <link rel="stylesheet" href="{{ url('CSS/reports.css') }}" />
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
            <div class="report-activity-section">
                <!-- Employee Report Section -->
                <div class="report-section">
                    <h2>Attendance Report</h2>
                    <div class="filters">
                    </div>
                    <table>
                        <thead>
                            <tr>
                               
                                <th>Date</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Employee Type</th>
                                <th class = "hide">Time In</th>
                                <th class = "hide">Time Out</th>
                                <th>Working Hours</th>
                                <th>Status</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody id="reportTableBody">
                            <tr>
                              <td>2025-03-14</td>
                                <td>John Doe</td>
                                <td>Barista</td>
                                <td>Regular</td>
                           
                                <td class = "hide">08:00 AM</td>
                                <td class = "hide">05:00 PM</td>
                                <td>8h</td>
                                <td>On Time</td>
                                <td>300</td>
                            </tr>
                            <tr>
                            <td>2025-03-14</td>
                                <td>Jane Smith</td>
                                <td>Barista</td>
                                <td>Part time</td>
                                <td class = 'hide'>08:15 AM</td>
                                <td class = 'hide'>05:05 PM</td>
                                <td>8h</td>
                                <td>Late</td>
                                <td>250</td>
                            </tr>
                            <tr>
                            <td>2025-03-14</td>
                                <td>Jane Smith</td>
                                <td>Barista</td>
                                <td>Part time</td>
                                <td class = "hide">08:15 AM</td>
                                <td class = "hide">05:05 PM</td>
                                <td>8h</td>
                                <td>Absent</td>
                                <td>0</td>
                            </tr>
                            <tr>
                            <td>2025-03-14</td>
                                <td>John Doe</td>      
                                <td>Kitchen Staff</td>
                                <td>Regular</td>
                                <td class = "hide">08:00 AM</td>
                                <td class = "hide">05:00 PM</td>
                                <td>8h</td>
                                <td>On Time</td>
                                <td>300</td>
                            </tr>
                            <tr>
                            <td>2025-03-14</td>
                                <td>John Doe</td>
                                <td>Barista</td>
                                <td>Regular</td>
                                <td class = "hide">08:00 AM</td>
                                <td class = "hide">05:00 PM</td>
                                <td>8h</td>
                                <td>On Time</td>
                                <td>300</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="report-activity-section">
                <!-- Employee Report Section -->
                <div class="report-section">
                    <h2>Payroll Report</h2>
                    <div class="filters">
                    </div>
                    <table>
                        <thead>
                            <tr>
                               
                             
                                <th>Name</th>
                                <th>Position</th>
                                <th>Employee Type</th>
                                <th>Total Working Hours</th>
                                <th>Total Deduction</th>
                                <th>Net Salary</th>
                            </tr>
                        </thead>
                        <tbody id="reportTableBody">
                            <tr>
                              
                                <td>John Doe</td>
                                <td>Barista</td>
                                <td>Regular</td>
                                <td>100 hrs</td>
                                <td>100</td>
                                <td>2,000</td>
                            </tr>

                            <tr>
                              
                              <td>John Doe</td>
                              <td>Barista</td>
                              <td>Regular</td>
                              <td>100 hrs</td>
                              <td>100</td>
                              <td>2,000</td>
                          </tr>

                        <tr>
                              
                                <td>John Doe</td>           
                                <td>Kitchen Staff</td>
                                <td>Part time</td>
                                <td>100 hrs</td>
                                <td>100</td>
                                <td>2,000</td>
                            </tr>

                            <tr>
                           <tr>
                              
                                <td>John Doe</td>
                                <td>Barista</td>
                                <td>Part time</td>
                                <td>100 hrs</td>
                                <td>100</td>
                                <td>2,000</td>
                            </tr>

                         <tr>
                              
                                <td>John Doe</td>
                                <td>Barista</td>
                                <td>Regular</td>
                                <td>100 hrs</td>
                                <td>100</td>
                                <td>2,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
  




          


            <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
            <script src="{{ url('JS/sidebar.js') }}"></script>
            <script src="{{ url('JS/manemp.js') }}"></script>


</body>

</html>
