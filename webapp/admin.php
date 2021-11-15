<!DOCTYPE html>
<html> 

<head>
    <meta charset="utf-8">
    <title>Student Database</title>
</head>
    
<body>
<div class="contain row">
    <div class="comm-md-6">
        <h2 class="text-center">Welcome Admin</h2>
    </div>
</div>
<form action = "view_class.php" method = "get">
    <input type = "submit" value = "View Courses">
</form>
<form action = "add_c.php" method = "get">
    <input type = "submit" value = "Add Course">
</form>
<form action = "remove_c.php" method = "get">
    <input type = "submit" value = "Remove Course">
</form>
<form action = "view_p.php" method = "get">
    <input type = "submit" value = "View Professor">
</form>
<form action = "add_p.php" method = "get">
    <input type = "submit" value = "Add New Professor">
</form>
<form action = "view_cb.php" method = "get">
    <input type = "submit" value = "View Clubs">
</form>
<form action = "add_cb.php" method = "get">
    <input type = "submit" value = "Add New Club">
</form>
<form action = "view_s.php" method = "get">
    <input type = "submit" value = "View Students">
</form>
<form action = "add_s.php" method = "get">
    <input type = "submit" value = "Add New Student">
</form>
<form action = "view_a.php" method = "get">
    <input type = "submit" value = "View Advisors">
</form>
<form action = "add_a.php" method = "get">
    <input type = "submit" value = "Add New Advisors">
</form>
</body>

</html>
