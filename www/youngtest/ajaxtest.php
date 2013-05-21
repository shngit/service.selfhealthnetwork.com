
<?php
echo $_SERVER['PHP_SELF'];
var_dump($_REQUEST);
$userid = $_POST['userid'];
$email = $_POST['email'];
$employerid = $_POST['employerid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>

    var request = $.ajax({
  url: "connectbraingame.php",
  type: "POST",
  data: {userid :'<?=$userid?>',
  email :'<?=$email?>',
  employerd :'<?=$employerid?>',
  firstname :'<?=$firstname?>',
  lastname :'<?=$lastname?>',
  groupid : 'selfhealth',
  spentityid:'https://www.mybrainsolutions.com/SSO/SelfHealth.aspx'},
  success:function(result){
    if(result=='WRONG INPUT'){
     alert(result);
    }else{
        alert('connected');
      //  alert(result);
      window.location = "https://www.mybrainsolutions.com/MyBrain/Dashboard.aspx";
    }
    
       
  }
  
});
 
</script>

 
 