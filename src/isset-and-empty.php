<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Bootstrap Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style> h1 {width: 20rem; height: 4rem; background: lightblue;} </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">MySite</a>
    </div>
</nav>

<div class="container">
    <h1 class="mb-4">Welcome!</h1>
        <?php
            $pageTitle = 'PHP is amazing!';
            echo 'isset($pageTitle) ' . var_dump(isset($pageTitle)) . '<br>';
            echo 'empty($pageTitle) ' . var_dump(empty($pageTitle)) . '<br>';
            // unset($pageTitle);
            // echo 'unset($pageTitle) ' . '<br>';
            // echo 'isset($pageTitle) ' . var_dump(isset($pageTitle)) . '<br>';
            echo '<br>'; ?>
        <?php
            if (isset($pageTitle) && !empty($pageTitle)): ?>
                <h1> <?php echo $pageTitle; ?> </h1>
        <?php endif; ?>
</div>

<!-- Bootstrap JS and Popper.js (for some components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
