
<div>
    <h3>ListPersons</h3>
    
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
                <td><?=h($person->id) ?></td>
                <td><?=h($person->name) ?></td>
                <td><?=h($person->age)?></td>
                <td><?=h($person->mail)?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?=$this->Paginator->first('<<1ページへ');?>
    <?=$this->Paginator->prev('<前へ');?>
    <?=$this->Paginator->numbers();?>
    <?=$this->Paginator->next('次へ>');?>
    <?=$this->Paginator->last('最終ページへ>>');?>
