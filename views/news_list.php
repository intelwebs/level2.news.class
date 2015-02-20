<table>
    <tr>
        <th>Дата</th>
        <th>Заголовок</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
    <?php foreach($items as $item):?>
        <tr>
            <td><?php echo date('d.m.Y', strtotime($item['date']));?></td>
            <td><?php echo $item['title']; ?></td>
            <td><a href="?view=news_one&id=<?php echo $item['id']?>">подробнее</a></td>
            <td><a href="?view=edit&id=<?php echo $item['id']?>">редактировать</a></td>
            <td><a href="?id=<?php echo $item['id']?>&dell">удалить</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="?view=add">Добавить новость</a>