<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : "NBDIUP Portal"; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/css1.css">
    <link rel="stylesheet" href="/css.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #fcf8f5; }
        .sidebar.active { transform: translateX(0); }
        .nav-item.open .sidebar-submenu { display: block; }
        .nav-item.open .arrow { transform: rotate(180deg); }
        th.sort-asc i::before { content: "\f0de"; color: #1a202c; }
        th.sort-desc i::before { content: "\f0dd"; color: #1a202c; }
    </style>
</head>
<body class="bg-[#fcf8f5] overflow-x-hidden min-h-screen flex flex-col md:flex-row">