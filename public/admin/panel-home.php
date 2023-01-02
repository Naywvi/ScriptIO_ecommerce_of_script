<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" href="./assets/css/new-item.css" />
  <link rel="stylesheet" href="./assets/css/panel.css">
</head>
<body>

<!-- add category, delete category, ban un user, supprimer un produit, envoyer notification utilisateur -->

<div className="">
    <div class="container container-margin-top">
        <div class="row">
        <div class="col-md-6">
            <div class="card">
            <div class="card-body">
                <form method="post">
                    <h5 class="card-title">Add new category</h5>
                    <p class="card-text">Add a new category to the shop</p>
                    <input type="text" class="form-control" placeholder="Category name" name="category-name"/>
                    <button type="submit" class="btn btn-primary" name="add-category">Add new category</button>
                <form>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Delete category</h5>
                <p class="card-text">Delete a category from the shop</p>
                <input type="text" class="form-control" placeholder="Category name" name="category-name"/>
                <button type="submit" class="btn btn-primary" name="delete-category">Delete category</button>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ban user</h5>
                <p class="card-text">Ban a user from the shop</p>
                <input type="text" class="form-control" placeholder="User name" name="ban-username"/>
                <button type="submit" class="btn btn-primary" name="ban-user">Ban user</button>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Unban user</h5>
                <p class="card-text">Unban a user from the shop</p>
                <input type="text" class="form-control" placeholder="User name" name="unban-username"/>
                <button type="submit" class="btn btn-primary" name="unban-user">Unban user</button>
            </div>
            </div>
        </div>  

        <div class="col-md-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Delete item</h5>
                <p class="card-text">Delete an item from the shop</p>
                <input type="text" class="form-control" placeholder="Item name" name="product_name"/>
                <button type="submit" class="btn btn-primary" name="delete-item">Delete item</button>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Send notification</h5>
                <p class="card-text">Send a notification to a user</p>
                <input type="text" class="form-control" placeholder="User name" name="username"/>
                <input type="text" class="form-control" placeholder="Notification" name="notification"/>
                <button type="submit" class="btn btn-primary" name="notification-send">Send notification</button>
            </div>
            </div>
        </div>
    </div>
</div>

</body>