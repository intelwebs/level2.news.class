<h1>Добавить новость</h1>
<form action="/" method="post">
    <label for="date">Дата</label>
    <input type="text" id="date" name="date" value="<?=date("Y-m-d H:i:s");?>">
    <label for="title">Заголовок новости</label>
    <input type="text" id="title" name="title">
    <label for="content">Содержание</label>
    <textarea id="content" name="content"></textarea>
    <input type="submit" value="Добавить новость">
</form>

<p><a href="/">вернуться к списку новостей сайта</a></p>