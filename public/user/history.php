<head>
    <title>Script'iO - <?php echo $user['username']; ?> history </title>
    <link rel="stylesheet" href="./assets/css/history.css"/>
</head>
<div class="container my-5 space">
  <div class="row">
    <div class="col-md-6 offset-md-3 not-b">
      <h4 style="margin-left: 1.2rem;">Latest News</h4>
      <ul class="timeline-3">
        <?php
            include_once('./src/user/history.php');
            notification($user);
        ?>
    </div>
  </div>
</div>