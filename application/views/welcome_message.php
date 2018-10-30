<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="<?php echo base_url('jjjj.js');?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('jquery-ui.css');?>" />
  
    <script type="text/javascript" src="<?php echo base_url('jquery-ui.js');?>"></script>
    <script type="text/javascript">
  $(document).ready(function() {


    
     
     $('#ss').autocomplete({
        source: "<?php echo site_url('welcome/get/?'); ?>"
    });





     
  });



  

  
  </script>
</head>


        
<body>
<form method="post" action="<?php base_url('welcome/dataitem');?>">
	
<h1 style="text-align: center;">this is autoload functionalty</h1>

	<input type="text" id="ss" name="data" placeholder="Enter Text for Search" style="margin-left: 300px; height: 50px; width: 800px; border-radius: 10px; font-size: 40px; padding-left: 15px;">
  
</form>

</head>
<body>
 

  
</body>
</html>