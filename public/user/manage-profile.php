<head>
  <title>ScriptIO - #USERNAME profil management</title>
  <link rel="stylesheet" href="./assets/css/profile-management.css" />
</head>
<body>
<div class="container space background-white">
<form method='post' enctype="multipart/form-data">
  
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <?php
    include_once('./src/user/manage-profile.php');
    form($user);
  ?>
  

  <!-- Text input -->
  <div class="form-outline mb-4">
    
    <input type="file" id="profil-picture" name="profil-picture" class="form-label">
    <label for="profil-picture">Profil picture</label>

  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="additional" rows="4" name="description"></textarea>
    <label class="form-label" for="additional">Description</label>
  </div>
  
  <figure>
      <figcaption class="blockquote-footer green italic">
          You can implement effects in your description
          <p>Color available: !cyan !cyan-light !green !red !white !yellow</p>
          Exemple: cyan! My product is very nice #;
          <p>You can add effect with : !blink !comment</p>
          <p style="font-weight:bold;color: #ea1a1a;">If you want to skip a line put (#;) at the end of your sentence</p>
      </figcaption>
  </figure>
  <!-- Submit button -->

  <button type="submit" class="btn btn-primary btn-block mb-4" name="manage-profile">Edit my profile</button>
</form>
</div>



</body>