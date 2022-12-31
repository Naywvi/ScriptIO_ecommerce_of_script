<head>
    <title>Script'iO - <?php echo $user['username']; ?> products </title>
    <link rel="stylesheet" href="./assets/css/manage-product.css">
</head>
<section  class="">
  <div class="container py-5">
    <div class="row">

      <?php
        include_once('./src/user/manage-product.php');
        products($user);
      ?>

    </div>
  </div>
</section>