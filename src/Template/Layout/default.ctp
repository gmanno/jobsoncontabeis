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
      <!--BEGIN:featured-body-->    
     <div id="featured-body">
          <div id="featured">
                <span> <?=$this->Html->image("capa1.jpg")?> <!--rel="ezioCaption"--></span>
                <span> <?=$this->Html->image("capa2.jpg")?></span>
                <span> <?=$this->Html->image("capa3.jpg")?></span>
            </div> 
            <span class="orbit-caption" id="ezioCaption">This is an <em>awesome caption</em> for Ezio. <strong>Note:</strong> This whole image is linked</span>
      </div>
      <!--END:featured-body-->
      <!--BEGIN:social media-->
      <ul id="menu">
        <li> <a href="mailto: assessoria@jobsoncontabeis.com.br"> </a> </li>
        <li> <a href="#"> </a> </li>
      </ul>
      <!--END:social media-->
      <!--BEGIN:intro-->
      <div id="intro">
        <div class="first">
            
            
            <h3>Certidões negativas</h3>
            <p>Diversas certidões da receita federal, estaduais e de vários municípios do Brasil.</p>
            <span class="readmore"><a target="_blank" href="http://sitecontabil.com.br/certidoes.htm">Clique aqui</a></span>
        </div>
        <div class="first-sub">
            
            
            <h3>  Emissão de Notas</h3>
            <p>Tire suas dúvidas sobre emissões de notas fiscais em vários estados brasileiros.</p>
            <span class="readmore"><a target="_blank" href="http://sitecontabil.com.br/consultas/notafiscal.htm">Clique aqui</a></span>
        </div>
        <div class="first-sub">
        
            
            <h3>Tabelas Práticas</h3>
            <p>Tabelas variadas, alíquotas, códigos, donwloads, tabelas do simples e tabelas do trabalho.</p>
            <span class="readmore"><a target="_blank" href="http://sitecontabil.com.br/tabelas_praticas.htm">Clique aqui</a></span>
        </div>
      </div>
      <!--END:intro-->
      <!--BEGIN:intro-content-->
      <div id="intro-content">
        
        <div class="first-sec">
            <h5>Bancos e Instituições</h5>
            <p>Dezenas de dicas para quem está começando uma carreira e tambem textos motivacionais.</p>
             <span><a href="http://sitecontabil.com.br/instituicoes_financeiras.htm" target="_blank">Clique aqui &raquo;</a></span>
        </div>
        <div class="second-sec">
            <h5>Dicas de Marketing</h5>
             
            <p>Listagens com os bancos em todo território nacional, feriados bancários e créditos para empresa.</p>
             <span><a href="http://www.sitecontabil.com.br/Dicas_marketing/" target="_blank">Clique aqui &raquo;</a></span>
        </div>
        <div class="second-sec">
            <h5>Índices de Finanças</h5>

            <p>Índices de finanças, reajustes, crédito, custo do dinheiro, moedas estrangeiras e taxas.</p>
            <span><a href="http://sitecontabil.com.br/financas.htm" target="_blank">Clique aqui &raquo;</a></span>
        </div>
      </div>
      <!--END:intro-content-->
       <!--BEGIN:side-content-->
      <div id="side-content">
        <h5>Link Úteis</h5>
        
        <ul>
          
        <li><img src="/img/links/receita.png" alt="Receita"><h5><a target="_blank" href="http://www.receita.fazenda.gov.br">Receita Federal</a></h5></li>
        <li><img src="/img/links/trabalho.png" alt="Receita"><h5><a target="_blank" href="http://www.trabalho.gov.br/">Ministério do trabalho</a></h5></li>
        <li><img src="/img/links/previdencia.png" alt="Previdencia"><a target="_blank" href="http://www.previdenciasocial.gov.br"><h5>Previdência Social</h5></a></li>
        <li><img src="/img/links/fgts.png" alt="Fgts"><a target="_blank" href="http://www.caixa.gov.br/fgts/index.asp"><h5>Fundo de Garantia</h5></a></li>
        <li><img src="/img/links/caixa.png" alt="Caixa"><a target="_blank" href="http://www.caixa.gov.br/"><h5>Caixa Econômica</h5></a></li>
        <li><img src="/img/links/simples.png" alt="Simples"><a target="_blank" href="http://www8.receita.fazenda.gov.br/SimplesNacional/"><h5>Simples Nacional</h5></a></li>
        <li><img src="/img/links/brasil.png" alt="Brasil"><a target="_blank" href="http://www.brasil.gov.br/"><h5>Governo do Brasil</h5></a></li>
        </ul>
      </div>
      <!--END:side-content-->
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
