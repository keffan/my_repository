<h1>Форма для загрузки файлов</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="50000">
  <input type="file" name="filename" accept="image/*"><br> 
  <input type="submit" value="Загрузить"><br>
</form>
      
<h2>Список загруженных изображений</h2>
<ul>
  {foreach from=$images item=imageSrc}
    <li><img src={$imageSrc} /></li>
  {/foreach}
</ul>