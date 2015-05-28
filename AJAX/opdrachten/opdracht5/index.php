<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Cookie Ajax Based Poll Script | 91 Web Lessons</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript">

function submitPoll(id){
      $('#refresh').show();
      $('#refresh').fadeIn(400).html('Please Wait <img src="image/loading.gif" />');
      var optionId=$('input[name=pollOption]:radio:checked').val();
      if(optionId=='' || optionId==null){
            alert('Please select Option');
      }else{
            var type="addPoll";
            var dataString = 'id='+ optionId + '&type=' + type + '&qid=' + id;
            $.ajax({
            type: "POST",
            url: "prosess.php",
            data: dataString,
            cache: false,
            success: function(result){
                   loadPoll('viewPoll',id);
            }
            });
      }
}

function loadPoll(type,id){
      $('#refresh').show();
      $('#refresh').fadeIn(400).html('Please Wait <img src="image/loading.gif" />');
      var dataString = 'id='+ id + '&type=' + type;
      $.ajax({
      type: "POST",
      url: "prosess.php",
      data: dataString,
      cache: false,
      success: function(result){
             $('#refresh').hide();
             $("#poll_wrap").html(result);
          }
      });
}
loadPoll('','');
</script>
</head>
<body>
<div id="container">
    <!--top section start-->
    <div id='top'>
         <a href="http://www.91weblessons.com" title="91 Web Lessons" target="blank">
             <img src="image/logo.png" alt="91 Web Lessons" title="91 Web Lessons" border="0"/>
         </a>
    </div>

    <div id='tutorialHead'>
         <div class="tutorialTitle"><h1>PHP Cookie Ajax Based Poll Script</h1></div>
         <div class="tutorialLink"><a href="http://www.91weblessons.com/php-cookie-ajax-based-poll-script" title="PHP Cookie Ajax Based Poll Script"><h1>Tutorial Link</h1></a></div>

    </div>

    <div id="wrapper">
        <div id="poll_wrap"></div>
    </div>

    <!--fotter section start-->
    <div id="fotter">
         <p>Copyright &copy; 2012 
              <a href="http://www.91weblessons.com" title="91 Web Lessons" target="blank">91 Web Lessons</a>. 
              All rights reserved.
         </p>
    </div>
</div>
</body>
</html>