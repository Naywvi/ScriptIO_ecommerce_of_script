<head>
  <title>ScriptIO - #USERNAME profil management</title>
  <link rel="stylesheet" href="./assets/css/profile-management.css" />
</head>
<body>
<div class="container space background-white">
<form>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Last name</label>
      </div>
    </div>
  </div>
    <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" id="username" class="form-control" />
        <label class="form-label" for="username">Username</label>
    </div>

        <!-- Text input -->
    <div class="form-outline mb-4">
        <input type="text" id="birthday" class="form-control disable" placeholder="birthday"/>
        <label class="form-label" for="birthday">Birthday</label>
    </div>
  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="company" class="form-control" />
    <label class="form-label" for="company">Company name</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="text" id="address" class="form-control" />
    <label class="form-label" for="address">Address</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4 ">
    <div class="email">
        <input type="email" class="form-control disable email-left" placeholder="Last-email"/>
        <input type="email" id="email" class="form-control email-right" />
    </div>
  <label class="form-label" for="email">Email</label>
  </div>
  
  <!-- Number input -->
  <div class="form-outline mb-4">
  <div class="number">
    <input type="text" class="form-control disable number-left" placeholder="Last number"/>
    <input type="text" id="phone" class="form-control number-right"/>
    </div>
    <label class="form-label" for="phone">Phone</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    
    <input type="file" id="profil-picture" name="profil-picture" class="form-label">
    <label for="profil-picture">Profil picture</label>

  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="additional" rows="4"></textarea>
    <label class="form-label" for="additional">Additional information (visible only to staff)</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Edit my profile</button>
</form>
</div>



</body>