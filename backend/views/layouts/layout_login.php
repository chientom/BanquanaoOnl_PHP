<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/stylelogin.css">
    <link rel="stylesheet" href="assets/css/stylelogin.css">
    <title><?php echo $this->page_title ?></title>
</head>
<body>
<div class="">
<section class="content">
            <?php
            echo $this->content;
            ?>
            <div class="alert alert-danger">
                <?php 
                    echo $this->error;
                ?>
            </div>
 </section>
</div>
</body>
</html>