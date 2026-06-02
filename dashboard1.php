<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Smart Class Upload</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f7fb;
}

.card{
border:none;
border-radius:18px;
box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.upload-box{
border:2px dashed #0d6efd;
border-radius:14px;
padding:35px;
text-align:center;
background:#fff;
cursor:pointer;
transition:.3s;
}

.upload-box:hover{
background:#eef5ff;
}

.error-table{
max-height:400px;
overflow:auto;
}

.stats-card{
border-radius:15px;
color:#fff;
padding:18px;
}

.success-box{
background:#198754;
}

.duplicate-box{
background:#ffc107;
color:#000;
}

.failed-box{
background:#dc3545;
}

</style>

</head>
<body>

<div class="container py-4">

<div class="row justify-content-center">

<div class="col-lg-10">

<div class="card p-4">

<h2 class="text-center mb-4">
Smart Classroom Excel Upload
</h2>

<form method="POST" enctype="multipart/form-data" action="upload.php">

<div class="upload-box mb-4">

<input
type="file"
name="excel_file"
accept=".xls,.xlsx"
class="form-control mb-3"
required>

<h5>Upload XLS / XLSX File</h5>

<p class="text-muted mb-0">
Select Excel File For Bulk Upload
</p>

</div>

<div class="d-grid">

<button
class="btn btn-primary btn-lg">

Upload Data

</button>

</div>

</form>

<hr class="my-4">

<div class="row g-3">

<div class="col-md-4">

<div class="stats-card success-box">

<h4>Inserted</h4>

<h2>0</h2>

</div>

</div>

<div class="col-md-4">

<div class="stats-card duplicate-box">

<h4>Duplicate</h4>

<h2>0</h2>

</div>

</div>

<div class="col-md-4">

<div class="stats-card failed-box">

<h4>Failed</h4>

<h2>0</h2>

</div>

</div>

</div>

<hr class="my-4">

<h4 class="mb-3">

Validation Errors

</h4>

<div class="table-responsive error-table">

<table
class="table table-bordered table-striped">

<thead class="table-dark">

<tr>

<th>Row</th>
<th>Column</th>
<th>Error Message</th>

</tr>

</thead>

<tbody>

<tr>

<td>3</td>

<td>HMNumber</td>

<td class="text-danger">

Missing Required Field

</td>

</tr>

<tr>

<td>7</td>

<td>UDISE</td>

<td class="text-danger">

Invalid Number

</td>

</tr>

</tbody>

</table>

</div>

</div>

</div>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>