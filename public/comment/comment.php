<head>
    <link rel="stylesheet" href="./assets/css/comment.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>  
    <div class="container-fluid space-comment">
    <div class="container-fluid px-1 py-5 mx-auto">
	<div class="row justify-content-center">
		
			
			

				<?php
					include_once('./src/comment/comment.php');
					listComment($user);
				?>

			

	</div>
</div>
</div>
</div>
</body>