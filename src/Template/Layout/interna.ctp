<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jobson Barros Assessoria Contábil</title>


<?= $this->Html->css('reset.css').
 $this->Html->css('style.css') ?>
<!-- BEGIN: cufon -->
<?
echo $this->Html->script(
        array(
            'jquery-1.3.2.min',
            'DD_belatedPNG_0.0.8a-min.js',
            'bubbleup.jquery.js',
            'jquery.orbit.min.js',
            'jquery.tipTip.js',
            'jqueryslidemenu.js',
            'superfish.js',
            'cufon-yui.js',
            'custom.font.js',
            'custom.js'
           )
        )
?>

<script type="text/javascript"> 
    Cufon.replace('h3');
    Cufon.replace('h4');
</script>

<!-- menu -->


<!-- PNG FIX for IE6 -->
<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
<!--[if lte IE 6]>
        <script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
    <![endif]-->
    
<!--BEGIN: Login Form panel-->
<script type="text/javascript">
$(document).ready(function() {
    // Expand Panel
    $("#open").click(function(){
        $("div#panel").slideDown("slow");
    }); 
    // Collapse Panel
    $("#close").click(function(){
        $("div#panel").slideUp("slow"); 
    });     
    // Switch buttons from "Log In | Register" to "Close Panel" on click
    $("#toggle a").click(function () {
        $("#toggle a").toggle();
    });         
});
</script>

<!--BEGIN: orbit slider-->

<script type="text/javascript">
      $(window).load(function() {
          $('#featured').orbit({
              'bullets': true,
              'timer' : true,
              'animation' : 'fade'
          });
      });
</script>

<!--BEGIN: BUBBLEUP FOR MEDIA PLUGIN-->

<script type="text/javascript">
$(function(){
    $("ul#menu li img").bubbleup({tooltips: true}); 
    $("ul#menu1 li img").bubbleup({tooltips: true}); 
});
</script>

<!--BEGIN: TOOL TIPS-->

<script type="text/javascript">
    $(function(){
        $(".tip").tipTip({minWidth: 200, edgeOffset: 10});
    });
</script>

<!--BEGIN: DD_belatedPNG for ie6fix-->

<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js" type="text/javascript"></script>
<script>DD_belatedPNG.fix('.ie6fix');</script>
<![endif]-->

</head>
<body>
<!--END:panel -->
<div id="page">
  <!--BEGIN:page_wrap -->
  <div id="page_wrap">
    <!--BEGIN:header -->
    <?=$this->element('header');?>
    <!--END:header -->
     
    <?=$this->fetch('content')?>
       
  </div>
  <!--END:page_wrap-->
</div>
<!--END:page-->
<!--BEGIN:footer-->
<?=$this->element('footer');?>
<!--END:footer-->

<? echo 
        
        
        $this->fetch('scripts')
        
        ?>

</body>
</html>
