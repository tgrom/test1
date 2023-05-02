<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Тест</title>
    <link rel="icon" href="img/raccoon.svg">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="page light-theme">
    <header>
      <h1 class="page-title">Тестовое задание!!!</h1>
      <button class="theme-button" type="button">Изменить тему</button>
    </header>
    <main>
      
      <div class="avatar-container">
        <img class="avatar" src="img/raccoon.svg" width="80" height="80" alt="Аватарка">
      </div>
      <nav class="blog-navigation">
        <h2>Записи в блоге</h2>
        <button class="theme-button content_toggle">
                Показать
            </button>
                

  
        <ul class="content_block" style="display: none;">
          <li>День первый.</li>
          <li>День второй.</li>
          <li>День третий.</li>
          <li>День четвертый.</li>
          <li>День пятый.</li>
          <li>День шестой.</li>
          <li>День седьмой.</li>
          <li>День восьмой.</li>
          <li>День девятый.</li>
          <li>День десятый.</li>
          <li>День одиннадцатый.</li>
          <li>День двенадцатый.</li>
          <li>День тринадцатый.</li>
          <li>День четырнадцатый.</li>
          <li>День пятнадцатый.</li>
        </ul>
      </nav>
      
      
      
    </main>
    
    <?php
    
    require ('form.php'); 
    require_once ('action.php');    
    ?>
    <footer>
  
    © 2023 by Romanchenko
   
</footer>
  <script src="jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
    
    
  </body>
</html>
