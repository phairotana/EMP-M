<li class="nav-item"><a class="nav-link" href="{{ URL("admin/dashboard") }}"><em class="nav-icon fa fa-dashboard"></em>Dashboard</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><em class="nav-icon fa fa-users"></em> Authentications</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ URL("admin/user-list") }}'><em class='nav-icon la la-ban'></em>User Lists</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ URL("admin/user") }}'><em class='nav-icon la la-list'></em>Add User</a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><em class="nav-icon fa fa-list"></em> Departments</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ URL("admin/department/list") }}'><em class='nav-icon la la-ban'></em>Department Lists</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ URL("admin/department/create") }}'><em class='nav-icon la la-list'></em>Add Department</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><em class="nav-icon fa fa-users"></em> Employees</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ URL("admin/employee/list") }}'><em class='nav-icon la la-ban'></em>All Employees</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ URL("admin/employee/create") }}'><em class='nav-icon la la-list'></em>Add Employee</a></li>
    </ul>
</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><em class="nav-icon fa fa-list"></em> Salaries</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ URL("admin/salary/list") }}'><em class='nav-icon la la-ban'></em>Salary Lists</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ URL("admin/salary/create") }}'><em class='nav-icon la la-list'></em>Add Salary</a></li>
    </ul>
</li>



