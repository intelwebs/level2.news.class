<form action="/" method="post">
    <label for="date">Дата</label>
    <input type="text" id="date" name="date" value="<?=date("Y-m-d H:i:s");?>">
    <label for="title">Заголовок новости</label>
    <input type="text" id="title" name="title" value="<?= $item_edit[0]['title'];?>">
    <label for="content">Содержание</label>
    <textarea id="content" name="content"><?= $item_edit[0]['content'];?></textarea>
    <input type="submit" value="Сохранить">
    <input type="hidden" name="id" value="<?= $_REQUEST['id'];?>">
    <input type="hidden" name="view" value="<?= $_REQUEST['view'];?>">
</form>

<p><a href="/">вернуться к списку новостей сайта</a></p>