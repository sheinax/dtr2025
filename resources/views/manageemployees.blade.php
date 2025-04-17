<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Employee Management</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <link rel="stylesheet" href="{{ url('CSS/manemp.css') }}" />
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
                    <a href="/manage-employees">
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


            <!-- Add employee modal -->
            <div class="controls">
                <button class="add-btn" onclick="openAddModal()">+ Add Employee</button>

                <div class="filter-group">
                    <input type="text" id="searchInput" placeholder="Search by name..." onkeyup="filterTable()" />
                    <select id="positionFilter" onchange="filterTable()">
                    <option value="">Select Position</option>
                                <option value="Barista">Barista</option>
                                <option value="Cashier">Cashier</option>
                                <option value="Manager">Manager</option>
                                <option value="Chef">Chef</option>
                                <option value="Server">Server</option>
                                <option value="Cleaner">Cleaner</option>
                    </select>

                    <div class="filter-group">
                        <select id="statusFilter" onchange="filterTable()">
                            <option value="">All Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>

            </div>

            <!-- Employee Table -->
            <div class="employee-table">
                <h2>Employee Information</h2>
                <table id="employeeTable">
                    <thead>
                        <tr>
                            <th>QR Code</th>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Contact No.</th>
                            <th>Employee Type</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Edit Details</th>
                        </tr>
                    </thead>
                    <tbody id="employeeBody">
                        <!-- Sample Data (Example with QR Code) -->
                        
                    </tbody>
                </table>
            </div>



            <!-- Modal for Add/Edit Employee -->
            <div class="modal" id="employeeModal">
                <div class="modal-content">
                    <span class="close-btn" onclick="closeEmployeeModal()">&times;</span>
                    <h2 id="modalTitle">Add Employee</h2>
                    <form id="employeeForm" onsubmit="generateQRCode(event)">
                        @csrf
                        <input type="hidden" id="employeeId" name="employeeId">
                        <input type="hidden" id="csrf-token" value="{{ csrf_token() }}">
                        <input type="email" id="email" placeholder="Email" required />
                        <div class="password-field">
                            <input type="password" id="password" placeholder="Password" required />
                            <button type="button" id="togglePassword" onclick="togglePasswordVisibility()">
                                <ion-icon name="eye-outline"></ion-icon>
                            </button>
                        </div>
                        <input type="text" id="name" placeholder="Name" required />
                        <input type="number" id="salary" placeholder="salary" required />
                        <div class="agegen">
                            <input type="number" id="age" placeholder="Age" required />
                            <select id="gender" required>
                                <option value=""> Gender</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>


                        <div class="possch">
                            <!-- Dropdown for Position -->
                            <select id="position" required>
                                <option value="">Select Position</option>
                                <option value="Barista">Barista</option>
                                <option value="Cashier">Cashier</option>
                                <option value="Manager">Manager</option>
                                <option value="Chef">Chef</option>
                                <option value="Server">Server</option>
                                <option value="Cleaner">Cleaner</option>
                            </select>

                            
                        </div>

                        <button type="submit">Save</button>
                    </form>

                </div>
            </div>

        
            <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
            
            <script src="{{ url('JS/manemp.js') }}"></script>
            <script src="{{ url('JS/sidebar.js') }}"></script>


</body>

</html>
