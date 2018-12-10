<div>
    <h3>IndexPage</h3>
    <p><?=$message?></p>
 
<?=$this->Form->create(null,['type'=>'post','url'=>['controller'=>'Hello','action'=>'index']])?>
        <?=$this->Form->text('text1',['value'=>'入力してね']) ?>
        <?=$this->Form->radio('radio',[['value'=>'男','text'=>'male','checked'=>true],['value'=>'女','text'=>'female']])?>
        <?=$this->Form->select('select',[['value'=>'Mac','text'=>'MacOSX'],['value'=>'Windows','text'=>'Windows10'],['value'=>'Linux','text'=>'Linux']])?>
        <?=$this->Form->select('select2',[['value'=>'Mac','text'=>'MacOSX'],['value'=>'Windows','text'=>'Windows10'],['value'=>'Linux','text'=>'Linux']],['multiple'=>true])?>
        <?=$this->Form->submit('OK')?><?=$this->Form->end() ?>

    
    
 
    
</div>