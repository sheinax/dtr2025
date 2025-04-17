<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Payroll</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    
    <link rel="stylesheet" href="{{ url('CSS/payroll.css') }}" />
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
                    <a href="/e-dashboard">
                        <span class="icon">
                            <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

           

                <li>
                    <a href="/e-attendance">
                        <span class="icon">
                            <ion-icon name="calendar"></ion-icon>
                        </span>
                        <span class="title">Attendance Logs</span>
                    </a>
                </li>

                <li>
                    <a href="e-payroll">
                        <span class="icon">
                            <ion-icon name="cash"></ion-icon>
                        </span>
                        <span class="title">Payroll</span>
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
            <div class="filter-container">
                <input type="date" id="filterDate" placeholder="Select Date">
                <input type="text" id="searchEmployee" placeholder="Search Employee">
               
           
                <select id="filterEmployeeType">
                    <option value="">All Type</option>
                    <option value="regular">Regular</option>
                    <option value="part-time">Part Time</option>
                </select>

                <select id="filterStaff">
                    <option value="">All Position </option>
                    <option value="barista">Barista</option>
                    <option value="kitchen-staff">Kitchen Staff</option>
                </select>

            </div>

            <div class="payroll-table">
                <h2>April 2025 Payroll</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Employee Type</th>
                            <th>Basic Salary</th>
                            <th>Overtime Pay</th>
                            <th>Deductions</th>
                            <th>Net Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>04-01-25</td>
                            <td>303940</td>
                            <td>Benjamin Thompson</td>
                            <td>Part Time</td>
                            <td>₱ 300.00</td>
                            <td>₱ 100.00</td>
                            <td> - </td>
                            <td>₱ 1,400.00</td>
                            <td class="view"><i class="fas fa-eye"></i></td>
                        </tr>
                        

                        <tr>

                            <td>04-01-25</td>
                            <td>493039</td>
                            <td>Emily Williams</td>
                            <td>Regular</td>
                            <td>₱ 500.00</td>
                            <td>₱ 200.00</td>
                            <td>₱ 200.00</td>
                         
                            <td>₱ 1,400.00</td>
                            <td class="view"><i class="fas fa-eye"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>



           

       






            <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
            <script src="{{ url('JS/sidebar.js') }}"></script>
            <script src="{{ url('JS/manemp.js') }}"></script>


</body>

</html>
