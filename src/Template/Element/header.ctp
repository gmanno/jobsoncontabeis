<div id="header">
      <h2 class="logo">
        <?=$this->Html->link("", "/") ?>
      </h2>
      <!--BEGIN:menu -->
      <div id="myslidemenu" class="jqueryslidemenu ie6fix">
        <ul>
          <li class="home"><?=$this->Html->link("Início", "/")?></li>
          <li><?=$this->Html->link("Serviços", "/servicos")?></li>
          <li><?=$this->Html->link("Consultorias", "/consultorias")?></li>
          <li><?=$this->Html->link("Formulários", "http://sitecontabil.com.br/formularios/",array("target"=>"_blank"))?></li>
          <li><?=$this->Html->link("Links", "/links")?></li>
          <li><?=$this->Html->link("Contato", "/contato")?></li>
        </ul>
      </div>
      <!--END:menu -->
    </div>