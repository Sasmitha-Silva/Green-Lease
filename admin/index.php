<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="admin.js" defer></script>
</head>

<body>
    <div class="admin-container">
        <div class="top-bar">
            <div class="logo-section">
                <img src="../Green Lease Logo" width="100px">
            </div>
            <div class="user-actions">
                <button class="notification-btn"><i class="fas fa-bell"></i></button>
                <button class="profile-btn"><i class="fas fa-user"></i></button>
            </div>
        </div>

        <div class="sidebar">
            <ul>
                <li><a href="#" onclick="showSection('dashboard-section')">Dashboard</a></li>
                <li><a href="#" onclick="showSection('manage-bids-section')">Manage Bids</a></li>
                <li><a href="#" onclick="showSection('manage-supervisors-section')">Manage Supervisors</a></li>
                <li><a href="#" onclick="showSection('3rd-section')">Section 3</a></li>
                <li><a href="#" onclick="showSection('4th-section')">Section 4</a></li>
                <li><a href="#" onclick="showSection('5th-section')">Section 5</a></li>
                <li><a href="#" onclick="showSection('6th-section')">Section 6</a></li>
            </ul>
            <ul class="logout">
                <li><a href="#">Log Out</a></li>
            </ul>
        </div>

        <div class="content">
            <div id="dashboard-section" class="section">
                <div class="metric-grid">
                    <div class="metric-card">
                        <h3>Heading 1</h3>
                        <div class="metric-content">
                            <span class="metric-value">Value 1</span>
                            <i class="fas fa-user"></i>
                        </div>
                        <button>View</button>
                    </div>
                    <div class="metric-card">
                        <h3>Heading 2</h3>
                        <div class="metric-content">
                            <span class="metric-value">Value 2</span>
                            <i class="fas fa-user"></i>
                        </div>
                        <button>View</button>
                    </div>
                    <div class="metric-card">
                        <h3>Heading 3</h3>
                        <div class="metric-content">
                            <span class="metric-value">Value 3</span>
                            <i class="fas fa-user"></i>
                        </div>
                        <button>View</button>
                    </div>
                    <div class="metric-card">
                        <h3>Heading 4</h3>
                        <div class="metric-content">
                            <span class="metric-value">Value 4</span>
                            <i class="fas fa-user"></i>
                        </div>
                        <button>View</button>
                    </div>
                </div>

                <h2>Pending Approvals</h2>
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>Land ID</th>
                            <th>Location</th>
                            <th>Crop Type</th>
                            <th>Lease Duration</th>
                            <th>Field Visit Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>LD1234</td>
                            <td>Moratuwa</td>
                            <td>Orchid</td>
                            <td>1 Year</td>
                            <td>2024-09-20</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>LD1235</td>
                            <td>Panadura</td>
                            <td>Anthurium</td>
                            <td>6 Months</td>
                            <td>2024-09-23</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Manage Bids Section -->
            <div id="manage-bids-section" class="section" style="display:none;">
                <h1>Manage Bids</h1>
                <p>Content for managing bids goes here.</p>
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>Land ID</th>
                            <th>Crop Type</th>
                            <th>Bidder's Name</th>
                            <th>Bidding Amount</th>
                            <th>Percentage of the Harvest</th>
                            <th>Text</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Text</td>
                            <td>Text</td>
                            <td>Text</td>
                            <td>Text</td>
                            <td>Text</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Text</td>
                            <td>Text</td>
                            <td>Text</td>
                            <td>Text</td>
                            <td>Text</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div id="manage-supervisors-section" class="section" style="display:none;">
                <h1>Manage Supervisors</h1>
                <p>Content for managing supervisors goes here.</p>
                <br><br>

                <!-- Search and Filter Section -->
                <div class="filter-section">
                    <input type="text" id="search-bar" placeholder="Search supervisors by name or email">
                    <select id="status-filter">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <select id="zone-filter">
                        <option value="">Zone</option>
                        <option value="Zone 1">Zone 1</option>
                        <option value="Zone 2">Zone 2</option>
                    </select>
                </div>

                <!-- Supervisors Table -->
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Zone</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="supervisor-list">
                        <tr data-id="1">
                            <td>Yasitha Vas</td>
                            <td>trackvas@gmail.com</td>
                            <td>0715559997</td>
                            <td>Zone 1</td>
                            <td>Active</td>
                            <td>
                                <button class="green-btn edit-btn" data-id="1">Edit</button>
                                <button class="red-btn">Deactivate</button>
                            </td>
                        </tr>
                        <tr data-id="2">
                            <td>Rashmi Prasadi</td>
                            <td>rp@gmail.com</td>
                            <td>0715558888</td>
                            <td>Zone 2</td>
                            <td>Active</td>
                            <td>
                                <button class="green-btn edit-btn" data-id="2">Edit</button>
                                <button class="red-btn">Deactivate</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Add New Supervisor Button -->
                <br>
                <button class="green-btn" id="add-supervisor-btn">Add Supervisor</button>

                <!-- Supervisor Details Modal -->
                <div id="supervisor-modal" class="modal">
                    <div class="modal-content">
                        <span class="close-modal">&times;</span>
                        <h2>Supervisor Details</h2>
                        <!-- Supervisor details will be populated dynamically -->
                        <div id="supervisor-details"></div>
                    </div>
                </div>

                <!-- Add Supervisor Form -->
                <div id="add-supervisor-form" class="modal">
                    <div class="modal-content">
                        <span class="close-form">&times;</span>
                        <h2>Add New Supervisor</h2>
                        <form id="new-supervisor-form" class="form-styles">
                            <label for="name">Full Name:</label>
                            <input type="text" id="name" name="name" required>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone" required>
                            <label for="zone">Zone:</label>
                            <select id="zone" name="zone" required>
                                <option value="Zone 1">Zone 1</option>
                                <option value="Zone 2">Zone 2</option>
                                <option value="Zone 3">Zone 3</option>
                                <option value="Zone 4">Zone 4</option>
                            </select>
                            <label for="status">Status:</label>
                            <select id="status" name="status" required>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            <button type="submit">Add Supervisor</button>
                        </form>
                    </div>
                </div>

                <!-- Edit Supervisor Form -->
                <div id="edit-supervisor-form" class="modal">
                    <div class="modal-content">
                        <span class="close-form">&times;</span>
                        <h2>Edit Supervisor</h2>
                        <form id="edit-supervisor-form" class="form-styles">
                            <input type="hidden" id="edit-supervisor-id">
                            <label for="edit-name">Full Name:</label>
                            <input type="text" id="edit-name" name="name" required>
                            <label for="edit-email">Email:</label>
                            <input type="email" id="edit-email" name="email" required>
                            <label for="edit-phone">Phone Number:</label>
                            <input type="tel" id="edit-phone" name="phone" required>
                            <label for="edit-zone">Zone:</label>
                            <select id="edit-zone" name="zone" required>
                                <option value="Zone 1">Zone 1</option>
                                <option value="Zone 2">Zone 2</option>
                                <option value="Zone 3">Zone 3</option>
                                <option value="Zone 4">Zone 4</option>
                            </select>
                            <label for="edit-status">Status:</label>
                            <select id="edit-status" name="status" required>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                            <button type="submit">Update Supervisor</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <div id="3rd-section" class="section" style="display:none;">
            <h1>Section 3 Content</h1>
            <!-- Add content for Section 3 -->
        </div>

        <div id="4th-section" class="section" style="display:none;">
            <h1>Section 4 Content</h1>
            <!-- Add content for Section 4 -->
        </div>

        <div id="5th-section" class="section" style="display:none;">
            <h1>Section 5 Content</h1>
            <!-- Add content for Section 5 -->
        </div>

        <div id="6th-section" class="section" style="display:none;">
            <h1>Section 6 Content</h1>
            <!-- Add content for Section 6 -->
        </div>
    </div>
    </div>
</body>

</html>