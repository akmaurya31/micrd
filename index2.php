<?php /* ---------- VALIDATION ---------- */

$rowError=false;

/* mandatory */

if($project_name==''){

$errors[]=[
'row'=>$rowNumber,
'column'=>'Project Name',
'message'=>'Required'
];

$rowError=true;

}

if($bidder_firm==''){

$errors[]=[
'row'=>$rowNumber,
'column'=>'Bidder Firm',
'message'=>'Required'
];

$rowError=true;

}

if($govt_department==''){

$errors[]=[
'row'=>$rowNumber,
'column'=>'Govt Department',
'message'=>'Required'
];

$rowError=true;

}

if($udise==''){

$errors[]=[
'row'=>$rowNumber,
'column'=>'UDISE',
'message'=>'Required'
];

$rowError=true;

}

/* UDISE */

if(
$udise!=''
&&
!preg_match(
'/^[0-9]{8,15}$/',
$udise
)
){

$errors[]=[
'row'=>$rowNumber,
'column'=>'UDISE',
'message'=>'Invalid UDISE'
];

$rowError=true;

}

/* HM Mobile */

if(
$hm_number!=''
&&
!preg_match(
'/^[0-9]{10}$/',
$hm_number
)
){

$errors[]=[
'row'=>$rowNumber,
'column'=>'HMNumber',
'message'=>'Invalid Mobile'
];

$rowError=true;

}

/* PIN */

if(
$pin_code!=''
&&
!preg_match(
'/^[0-9]{6}$/',
$pin_code
)
){

$errors[]=[
'row'=>$rowNumber,
'column'=>'PIN Code',
'message'=>'Invalid PIN'
];

$rowError=true;

}

/* DATE */

if($gem_contract_date!=''){

$dateCheck=
DateTime::createFromFormat(
'd-m-Y',
$gem_contract_date
);

if(!$dateCheck){

$errors[]=[
'row'=>$rowNumber,
'column'=>'Gem Contract Date',
'message'=>'Invalid Date'
];

$rowError=true;

}

}

/* skip invalid row */

if($rowError){

$failed++;
continue;

}

/* ---------- DUPLICATE CHECK ---------- */

$dup=$pdo->prepare(

"SELECT id
FROM school_smart_class_uploads
WHERE udise=?
AND gem_contract_number=?"

);

$dup->execute([

$udise,
$gem_contract_number

]);

if(
$dup->rowCount()>0
){

$duplicates++;
continue;

}

/* ---------- CHUNK INSERT ---------- */

$chunk[]=[

'project_name'=>$project_name,

'bidder_firm'=>$bidder_firm,

'govt_department'=>$govt_department,

'gem_contract_number'=>$gem_contract_number,

'gem_contract_date'=>
$dateCheck
?
$dateCheck->format('Y-m-d')
:
null,

'udise'=>$udise,

'district'=>$district,

'school_name'=>$school_name,

'hm_number'=>$hm_number,

'pin_code'=>$pin_code

];

/* batch insert */

if(
count($chunk)>=500
){

foreach(
$chunk as $c
){

$stmt=$pdo->prepare(

"INSERT INTO
school_smart_class_uploads
(
project_name,
bidder_firm,
govt_department,
gem_contract_number,
gem_contract_date,
udise,
district,
school_name,
hm_number,
pin_code
)

VALUES
(?,?,?,?,?,?,?,?,?,?)"

);

$stmt->execute([

$c['project_name'],
$c['bidder_firm'],
$c['govt_department'],
$c['gem_contract_number'],
$c['gem_contract_date'],
$c['udise'],
$c['district'],
$c['school_name'],
$c['hm_number'],
$c['pin_code']

]);

$inserted++;

}

$chunk=[];

}

}

/* ---------- LAST CHUNK ---------- */

if(
count($chunk)>0
){

foreach(
$chunk as $c
){

$stmt=$pdo->prepare(

"INSERT INTO
school_smart_class_uploads
(
project_name,
bidder_firm,
govt_department,
gem_contract_number,
gem_contract_date,
udise,
district,
school_name,
hm_number,
pin_code
)

VALUES
(?,?,?,?,?,?,?,?,?,?)"

);

$stmt->execute([

$c['project_name'],
$c['bidder_firm'],
$c['govt_department'],
$c['gem_contract_number'],
$c['gem_contract_date'],
$c['udise'],
$c['district'],
$c['school_name'],
$c['hm_number'],
$c['pin_code']

]);

$inserted++;

}

}

/* ---------- COMMIT ---------- */

$pdo->commit();

}

}catch(Exception $e){

$pdo->rollBack();

$errors[]=[

'row'=>'SYSTEM',
'column'=>'Exception',
'message'=>$e->getMessage()

];

}

}

}

}
?>

<!doctype html>
<html>
<head>

<meta charset="utf-8">

<meta
name="viewport"
content="width=device-width,initial-scale=1">

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<title>Excel Upload</title>

</head>

<body class="bg-light">

<div class="container py-4">

<div class="card shadow p-4">

<h2 class="mb-4 text-center">

Smart Classroom Upload

</h2>

<form
method="post"
enctype="multipart/form-data">

<input
type="file"
name="excel_file"
class="form-control mb-3"
required>

<button
name="upload"
class="btn btn-primary w-100">

UPLOAD

</button>

</form>

<hr>

<div class="row text-center">

<div class="col-md-4">

<div class="alert alert-success">

Inserted
<br>
<strong>

<?=$inserted?>

</strong>

</div>

</div>

<div class="col-md-4">

<div class="alert alert-warning">

Duplicates
<br>
<strong>

<?=$duplicates?>

</strong>

</div>

</div>

<div class="col-md-4">

<div class="alert alert-danger">

Failed
<br>
<strong>

<?=$failed?>

</strong>

</div>

</div>

</div>

<?php if(!empty($errors)): ?>

<div class="table-responsive">

<table
class="table
table-bordered
table-striped">

<thead class="table-dark">

<tr>

<th>Row</th>
<th>Column</th>
<th>Error</th>

</tr>

</thead>

<tbody>

<?php foreach($errors as $e): ?>

<tr>

<td><?=$e['row']?></td>

<td><?=$e['column']?></td>

<td class="text-danger">

<?=$e['message']?>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

<?php endif; ?>

</div>

</div>

</body>
</html>