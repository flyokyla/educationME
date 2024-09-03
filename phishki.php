<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="phishki.css">
    <link rel=stylesheet href="components/headstyle.css">
    <title>ФИШКИ И ГОРЯЧИЕ КЛАВИШИ</title>
</head>

<body >
    <?php
    require('components/header.php');
    ?>
    <header>
        <p> <a href="index.html"> <img src="images/photo.jpg" width="100" title="BAZA" alt="BAZA"/> </a> - перейти на <i><u>главную</u></i></p>
        <h2>ФИШКИ И ГОРЯЧИЕ КЛАВИШИ</h2>
    </header>

    <main>
        <h3>VS CODE</h3>
        <p> <b>lorem5</b> - заполнит <b> <u>5</u> <i>рандомными словами</i></b>:<i> Lorem ipsum dolor sit amet.</i></p>
        <p><b>shift + ! + enter </b>- пример <i><u>базовой страницы</u></i></p>
        <p> <b> ctrl + / </b> - закомментировать строчку </p>
        <h3>БРАУЗЕР1</h3>
        <p> <b> ctrl + shift + i </b> - инструменты разработчика </p>
        <p>Открываем вкладку Console, вставляем команду <b>document.body.contentEditable = true</b>, нажимаем Enter. Теперь можно редактировать любой текстовый элемент на странице напрямую. Сначала нужно выбрать текст, который нужно отредачить, мышкой!</p>
        <h3>CSS / HTML</h3>
        <p> Вместо <b> #ffffff </b> можно указать <b>#fff</b> - в этом случае каждое значение продублируется (#112233 = #123) </p>
        <p> <b> rgb(0, 0, 0) = #000000 </b> || <b> rgba(0, 0, 0, 0.5) = #000000 и непрозрачный на 50% </b> </p>
        <dl>
            <dt class="vajno">По отношению к списку &lt;ul&gt;: &lt;li&gt; - дочерние элементы и потомками, а &lt;span&gt; — потомки, <u>!НО не дочерние элементы.</u></dt>
            <dt> &lt;ul&gt; </dt>
                <dd>&lt;li&gt;&lt;span&gt;...&lt;/span&gt;&lt;/li&gt;</dd>
                <dd>&lt;li&gt;&lt;span&gt;...&lt;/span&gt;&lt;/li&gt;</dd>
            <dt>&lt;/ul&gt;</dt>
        </dl>
        <h2>ЗАУМНЫЕ СЛОВЕЧКИ</h2>
        <p><b>CRM</b> - система отношений с клиентами - все контакты бизнеса с каждым клиентом</p>
    </main>
</body>

</html>