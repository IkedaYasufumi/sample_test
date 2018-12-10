
<div>
    <h3>FindPerson</h3>
        <?= $msg ?>
        <?= $this->Form->create() ?>
        <fieldset>
            <?=$this->Form->input('find_name');?>
            <?=$this->Form->input('find_age');?>
            <?=$this->Form->input('find_mail');?>
            <?=$this->Form->button('Submit')?>
        
        </fieldset>
        <?=$this->Form->end()?>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>MAIL</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($persons as $person): ?>
            <tr>
                <td><?=h($person->id); ?></td>
                <td><?=h($person->name); ?></td>
                <td><?=h($person->age); ?></td>
                <td><?=h($person->mail); ?></td>
            </tr>
                
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
