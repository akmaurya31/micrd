<?php
include 'config.php';

/* ---------- PAGINATION ---------- */
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 20;
$page  = isset($_GET['page']) ? (int)$_GET['page'] : 1;

if ($page < 1) { $page = 1; }
$offset = ($page - 1) * $limit;

/* ---------- FILTERS ---------- */
$search       = $_GET['search'] ?? '';
$district     = $_GET['district'] ?? '';
$project_name = $_GET['project_name'] ?? '';
$from_date    = $_GET['from_date'] ?? '';
$to_date      = $_GET['to_date'] ?? '';

$where = " WHERE 1=1 ";

/* SEARCH */
if (!empty($search)) {
    $search_escaped = mysqli_real_escape_string($conn, $search);
    $where .= " AND (
        project_name LIKE '%$search_escaped%'
        OR bidder_firm LIKE '%$search_escaped%'
        OR school_name LIKE '%$search_escaped%'
        OR hm_name LIKE '%$search_escaped%'
    )";
}

/* DISTRICT */
if (!empty($district)) {
    $district_escaped = mysqli_real_escape_string($conn, $district);
    $where .= " AND district='$district_escaped'";
}

/* PROJECT */
if (!empty($project_name)) {
    $project_name_escaped = mysqli_real_escape_string($conn, $project_name);
    $where .= " AND project_name='$project_name_escaped'";
}

/* DATE FILTER */
if (!empty($from_date) && !empty($to_date)) {
    $from_date_escaped = mysqli_real_escape_string($conn, $from_date);
    $to_date_escaped = mysqli_real_escape_string($conn, $to_date);
    $where .= " AND DATE(created_at) BETWEEN '$from_date_escaped' AND '$to_date_escaped'";
}

/* TOTAL RECORDS */
$count_sql = "SELECT COUNT(*) as total FROM schools_table $where";
$count_result = mysqli_query($conn, $count_sql);
$total_row = mysqli_fetch_assoc($count_result);
$total_records = $total_row['total'];

$total_pages = ceil($total_records / $limit);

/* MAIN QUERY */
// Security Fix: $offset aur $limit ko integer ensure kiya hai injection se bachne ke liye
$sql = "SELECT * FROM schools_table $where ORDER BY id DESC LIMIT " . (int)$offset . ", " . (int)$limit;
$result = mysqli_query($conn, $sql);

// Export URL ke liye query string banana
$query_string = http_build_query(array_filter($_GET));
?>
<!DOCTYPE html>
<html>
<head>
    <title>Schools Records</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f5f7fb; }
        .card { border-radius: 18px; box-shadow: 0 4px 15px rgba(0,0,0,.08); }
        .table td { white-space: nowrap; font-size: 14px; }
        .badge-custom { background: #0d6efd; }
    </style>
</head>
<body>

<div class="container-fluid mt-4">
    <div class="card p-4">
        <h3 class="mb-4">Schools Records Management</h3>

        <form method="GET">
            <input type="hidden" name="limit" value="<?= $limit ?>">
            
            <div class="row g-3">
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search..." value="<?= htmlspecialchars($search, ENT_QUOTES, 'UTF-8') ?>">
                </div>

                <div class="col-md-2">
                    <input type="date" name="from_date" class="form-control" value="<?= htmlspecialchars($from_date, ENT_QUOTES, 'UTF-8') ?>">
                </div>

                <div class="col-md-2">
                    <input type="date" name="to_date" class="form-control" value="<?= htmlspecialchars($to_date, ENT_QUOTES, 'UTF-8') ?>">
                </div>

                <div class="col-md-2">
                    <select name="district" class="form-select">
                        <option value="">All District</option>
                        <?php
                        $dq = mysqli_query($conn, "SELECT DISTINCT district FROM schools_table ORDER BY district ASC");
                        while($d = mysqli_fetch_assoc($dq)) {
                            $sel = ($district == $d['district']) ? 'selected' : '';
                            echo "<option value='".htmlspecialchars($d['district'], ENT_QUOTES)."' $sel>".htmlspecialchars($d['district'])."</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-2">
                    <select name="project_name" class="form-select">
                        <option value="">All Projects</option>
                        <?php
                        $pq = mysqli_query($conn, "SELECT DISTINCT project_name FROM schools_table ORDER BY project_name ASC");
                        while($p = mysqli_fetch_assoc($pq)) {
                            $sel = ($project_name == $p['project_name']) ? 'selected' : '';
                            echo "<option value='".htmlspecialchars($p['project_name'], ENT_QUOTES)."' $sel>".htmlspecialchars($p['project_name'])."</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-1">
                    <button class="btn btn-primary w-100">Filter</button>
                </div>
            </div>
        </form>

        <hr>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <b>Total Records:</b>
                <span class="badge badge-custom"><?= $total_records ?></span>
            </div>
            <div>
                <a href="export.php?type=csv&<?= $query_string ?>" class="btn btn-success btn-sm">CSV Export</a>
                <a href="export.php?type=excel&<?= $query_string ?>" class="btn btn-warning btn-sm">Excel Export</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Project</th>
                        <th>Bidder</th>
                        <th>District</th>
                        <th>School Name</th>
                        <th>HM Name</th>
                        <th>HM No</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['project_name']) ?></td>
                            <td><?= htmlspecialchars($row['bidder_firm']) ?></td>
                            <td><?= htmlspecialchars($row['district']) ?></td>
                            <td><?= htmlspecialchars($row['school_name']) ?></td>
                            <td><?= htmlspecialchars($row['hm_name']) ?></td>
                            <td><?= htmlspecialchars($row['hm_number']) ?></td>
                            <td><?= ($row['created_at']) ? date('d-m-Y h:i A', strtotime($row['created_at'])) : '' ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                <a href="view_single.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    <?php
                        }
                    } else {
                    ?>
                        <tr>
                            <td colspan="9" class="text-center text-danger">No Records Found</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="row mt-3 align-items-center">
            <div class="col-md-4">
                <form method="GET" class="d-inline-block">
                    <input type="hidden" name="search" value="<?= htmlspecialchars($search) ?>">
                    <input type="hidden" name="district" value="<?= htmlspecialchars($district) ?>">
                    <input type="hidden" name="project_name" value="<?= htmlspecialchars($project_name) ?>">
                    <input type="hidden" name="from_date" value="<?= htmlspecialchars($from_date) ?>">
                    <input type="hidden" name="to_date" value="<?= htmlspecialchars($to_date) ?>">
                    
                    <select name="limit" class="form-select w-auto" onchange="this.form.submit()">
                        <option value="10" <?= ($limit == 10) ? 'selected' : '' ?>>10 Records</option>
                        <option value="20" <?= ($limit == 20) ? 'selected' : '' ?>>20 Records</option>
                        <option value="50" <?= ($limit == 50) ? 'selected' : '' ?>>50 Records</option>
                        <option value="100" <?= ($limit == 100) ? 'selected' : '' ?>>100 Records</option>
                    </select>
                </form>
            </div>
            
            <div class="col-md-8 d-flex justify-content-end">
                <?php if($total_pages > 1): ?>
                    <nav>
                        <ul class="pagination mb-0">
                            <?php for($i = 1; $i <= $total_pages; $i++): ?>
                                <?php 
                                    // Sahi page link ke liye parameters generate karna
                                    $link_params = $_GET;
                                    $link_params['page'] = $i;
                                    $page_url = "?" . http_build_query($link_params);
                                ?>
                                <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
                                    <a class="page-link" href="<?= $page_url ?>"><?= $i ?></a>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </nav>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

</body>
</html>