<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="../css/styledash.css">
	<title>Ampliva Employee Dashboard</title>

</head>

<body>


<!---sidebar--->
<div class="sidebar">
	<a href="#" class="logo">
	<i class='bx bx-code-alt'></i>
	<div class="logo-name"><span>Ampliva</span></div>
</a>

<ul class="side-menu">
	<li><a href="#"><i class='bx bxs-dashboard' ></i>Dashboard</a></li>
	<li><a href="#"><i class='bx bxs-report' ></i>Announcements</a></li>
	<li class="active"><a href="#"><i class='bx bx-task' ></i>Task Lists</a></li>
	<li><a href="#"><i class='bx bx-cog' ></i>Settings</a></li>
	
</ul>
<ul class="side-menu">
	<li><a href="#" class="logout"><i class='bx bx-log-out' ></i>Logout</a></li>
</ul>

</div>
<!--- end of sidebar --->

<!--- main content --->
<div class="content">
	<nav>
		<i class='bx bx-menu'></i>
		<form action="#">
			<div class="form-input">
				<input type="search" placeholder="Search...">
				<button class="search-btn" type="submit"><i class='bx bx-search-alt'></i></button>
			</div>
		</form>
		<input type="checkbox" id="theme-toggle"hidden>
		<label for="theme-toggle" class="theme-toggle"></label>
		<a href="#"><i class='bx bx-bell'></i><span class="count">12</span></a>
		<a href="#" class="profile">
			<img src="../img/logo.png">
		</a>
	</nav>

<!--- end of nav bar --->

<main>
	<div class="header">
		<div class="left">

			<h1>Dashboard</h1>
			<ul class="breadcrumb"><li><a href="#">Task Lists</a></li>
             

			</ul>
			
		</div>
	</div>

	<!--- start of task lists --->

<div class="bottom-data">
<div class="orders">
<div class="header">
<i class='bx bx-task' ></i>
<h3>Tasks Assigned</h3>
<i class='bx bx-filter' ></i>	
</div>
<table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Task Deadline</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../img/user.jpg">
                                    <p>User</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status completed">Completed</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/user.jpg">
                                    <p>User</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../img/user.jpg">
                                    <p>User</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status process">Processing</span></td>
                            </tr>
                        </tbody>
                    </table> 
               </div>
<!--- reminders --->

<div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Reminders</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-plus'></i>
                    </div>
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Reminder 1</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Reminder 2</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-x-circle'></i>
                                <p>Reminder 3</p>
                            </div>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                    </ul>
                </div>

                <!-- End of Reminders-->



</main>


</div>

<script src="ampliva-emp-dashboard.js"></script>

</body>



</html>