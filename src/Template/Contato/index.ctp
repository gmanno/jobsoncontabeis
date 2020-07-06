<!--BEGIN:top -->
<div id="top">
  <div id="intro-top">
    <h3>Links Úteis</h3>
    <span>Confira alguns links que lhe podem ser úteis</span>
  </div>
</div>
<!--END:top-->
<!--BEGIN:container-->
<div id="container">
  <span><i>Você está aqui!</i>: <a href="/">Início &raquo;</a> | <a href="/servicos"><b>Links &raquo;</b></a></span>
  <small><div style="float:left; width: 146px; height: 42px; display: block; margin-top: -13px; "></div> </small>
  <div id="main-content">
  <div id="contact">
    
    <?
    if($erroMsg){
      echo '<div class="errorMsg"><h3>A mensagem não foi enviada!</h3><h3>' . $erroMsg . '</p></div>';
    }
    if(isset($ok) and $ok){
      echo '<div class="infoMsg"><h3>A mensagem enviada com sucesso!</h3></div>';
    }
    echo $this->Form->create("Contato",array("id"=>"contact-form")).
    $this->Form->input("nome",array("id"=>"name")).
    $this->Form->input("email").
    $this->Form->input("assunto",array("id"=>"subject")).
    $this->Form->input("mensagem",array('type'=>"textarea","id"=>"message")).
    $this->Form->submit("Enviar",array("class"=>"button"))

      ?>
      
      <?
    echo $this->Form->end();
    ?>
    </div>
  
    <h3>Como chegar</h3>
    <div id="map_canvas" >

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7938.438523106714!2d-35.22879685091592!3d-5.824676201977815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b25565ee3aa647%3A0x136286e312ffcbf3!2sR.+Dr.+Luiz+Felipe+C%C3%A2mara%2C+55+-+304+-+Lagoa+Nova%2C+Natal+-+RN%2C+59064-200%2C+Brasil!5e0!3m2!1spt-BR!2sus!4v1493409442841" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    
  </div>
  <!--END:full-content-->
  <?=$this->element('direita');?>
</div>     