<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body style="background-color: #006064;">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" type="text/css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="header" style="height: 150px;">
    <div>

      <ul id="navigation">
        <li >
          <a href="doc_allpatients.php">See All Patients</a>
        </li>
        <li class="active">
          <a href="search_p.php">Search Patients</a>
        </li>
        <li>
          <a href="doc_wards.php">Wards</a>
        </li>
        <li>
          <a href="doc_doctors.php">Doctors</a>
        </li>
        <li>
          <a href="h_tests.php">Tests</a>
        </li>
      </ul>
    </div>
</div>
<div class="form-style-5">
    <form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
</div>
</body>
</html>