
<body style='background-image:url('images/')'>

<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <a href="../"><h1 style="margin-left:20%;"><img src="img/logo3.png"/></h1></a>
      
	
    <?php 
	if(isLogin()) {
		require_once('includes/nav.php');
	}
    ?>
	
    <!-- End Logo + Top Nav -->
  </div>
  
  </div>
  
</div>
