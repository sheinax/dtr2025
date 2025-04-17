<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{ url('CSS/sidebar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                    <a href="/payroll">
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


                <li class="logout">
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

            <!-- ======================= Cards ================== -->
            <div class="stats">
                <div class="card"  onclick="location.href='{{route('/manage-employees')}}'">
                <div class="card-content">
                        <div class="iconBx">
                        <i class="fas fa-users"></i> 
                            </div>
                        </div>

                        <div class="card-info">
                            <div class = "txt">
                                <h3>Total Employees</h3>
                                <p>3</p>
                            
                            </div>
                            
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="iconBx">
                        <i class="fas fa-user-check"></i>
                            </div>
                        </div>

                        <div class="card-info">
                            <div class = "txt">
                                <h3>Present Today</h3>
                                <p>3</p>
                                
                            </div>
                            
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="iconBx">
                        <i class="fas fa-user-times"></i>
                            </div>
                        </div>

                        <div class="card-info">
                            <div class = "txt">
                                <h3>Absent Today</h3>
                                <p>3</p>
                                
                            </div>
                            
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <div class="iconBx">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>

                        <div class="card-info">
                            <div class = "txt">
                                <h3>Late Arrival</h3>
                                <p>3</p>
                            </div>
                            
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
                           
                                <td class = "hide">08:00 AM</td>
                                <td class = "hide">05:00 PM</td>
                                <td>8h</td>
                                <td>On Time</td>
                                <td>300</td>
                            </tr>
                            <tr>
                            <td>2025-03-14</td>
                                <td>Jane Smith</td>
                               
                                <td class = 'hide'>08:15 AM</td>
                                <td class = 'hide'>05:05 PM</td>
                                <td>8h</td>
                                <td>Late</td>
                                <td>250</td>
                            </tr>
                            <tr>
                            <td>2025-03-14</td>
                                <td>Jane Smith</td>
                            
                                <td class = "hide">08:15 AM</td>
                                <td class = "hide">05:05 PM</td>
                                <td>8h</td>
                                <td>Absent</td>
                                <td>0</td>
                            </tr>
                            <tr>
                            <td>2025-03-14</td>
                                <td>John Doe</td>
                              
                                <td class = "hide">08:00 AM</td>
                                <td class = "hide">05:00 PM</td>
                                <td>8h</td>
                                <td>On Time</td>
                                <td>300</td>
                            </tr>
                            <tr>
                            <td>2025-03-14</td>
                                <td>John Doe</td>
                         
                                <td class = "hide">08:00 AM</td>
                                <td class = "hide">05:00 PM</td>
                                <td>8h</td>
                                <td>On Time</td>
                                <td>300</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Recent Activity Section -->
                <div class="recent-activity">
                    <h2>Recent Activity</h2>
                    <div class="filters">
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th class = "hide">Time In</th>
                                <th class = "hide">Time Out</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>2025-03-14</td>
                                <td class="hide">08:00 AM</td>
                                <td class="hide">05:00 PM</td>
                                <td>Present</td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td>
                                <td>2025-03-14</td>
                                <td class = "hide">08:15 AM</td>
                                <td class = "hide">05:05 PM</td>
                                <td>Present</td>
                            </tr>
                            <tr>
                                <td>Mark Johnson</td>
                                <td>2025-03-14</td>
                                <td class = "hide">-</td>
                                <td class = "hide">-</td>
                                <td>Absent</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>2025-03-14</td>
                                <td class="hide">08:00 AM</td>
                                <td class="hide">05:00 PM</td>
                                <td>Present</td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>2025-03-14</td>
                                <td class="hide">08:00 AM</td>
                                <td class="hide">05:00 PM</td>
                                <td>Present</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="chart-section">
                <h2>Weekly Attendance Overview</h2>
                <canvas id="attendanceChart"></canvas>
            </div>
        </div>


    </div>
    <!-- =========== Scripts =========  -->
    <script src="{{ url('JS/dashchart.js') }}"></script>
    

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
