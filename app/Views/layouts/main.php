<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI4 Portfolio App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php echo $this->include('partials/navbar') ?>

        <!-- Section content -->
         <?php echo $this->renderSection('content') ?>

         <div class="row mt-4">
            <?php $this->include('partials/footer') ?>
         </div>
    </div>

    <?php echo $this->renderSection('scripts') ?>
</body>
</html>