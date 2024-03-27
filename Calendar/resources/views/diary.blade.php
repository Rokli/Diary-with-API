<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ежедневник</title>
    @vite(['resources/css/diary.css'])
</head>
<body>
<h1>Ежедневник</h1>
<div class="div-block">

    <button class="accordion">Понедельник</button>
    <div class="panel">
        <div id="conteiner-form" class="conteiner">
            <button class="menu">&#9998;</button>
            <div id="content" class="content">
                <div class="b">
                    <input type="text" placeholder="Введите название задачи">
                    <textarea class="text1" placeholder="Введите описание задачи"></textarea>
                    <input type="date" class="date">
                    <button class="button">Отправить</button>
                    <h2 class="it">Задачи:</h2>
                    <div class="out"></div>
                    <button class="del">Очистить список задач</button>
                </div>
            </div>
        </div>
    </div>

    <button class="accordion">Вторник</button>
    <div class="panel">
        <div id="conteiner-form" class="conteiner">
            <button class="menu"> &#9998;</button>
            <div id="content1" class="content">
                <div class="b">
                    <input type="text" placeholder="Введите название задачи">
                    <textarea class="text1" placeholder="Введите описание задачи"></textarea>
                    <input type="date" class="date">
                    <button class="button">Отправить</button>
                    <h2 class="it">Задачи:</h2>
                    <div class="out"></div>
                    <button class="del">Очистить список задач</button>
                </div>
            </div>
        </div>
    </div>

    <button class="accordion">Среда</button>
    <div class="panel">
        <div id="conteiner-form" class="conteiner">
            <button class="menu"> &#9998;</button>
            <div id="content2" class="content">
                <div class="b">
                    <input type="text" placeholder="Введите название задачи">
                    <textarea class="text1" placeholder="Введите описание задачи"></textarea>
                    <input type="date" class="date">
                    <button class="button">Отправить</button>
                    <h2 class="it">Задачи:</h2>
                    <div class="out"></div>
                    <button class="del">Очистить список задач</button>
                </div>
            </div>
        </div>
    </div>
    <button class="accordion">Четверг</button>
    <div class="panel">
        <div id="conteiner-form" class="conteiner">
            <button class="menu"> &#9998;</button>
            <div id="content3" class="content">
                <div class="b">
                    <input type="text" placeholder="Введите название задачи">
                    <textarea class="text1" placeholder="Введите описание задачи"></textarea>
                    <input type="date" class="date">
                    <button class="button">Отправить</button>
                    <h2 class="it">Задачи:</h2>
                    <div class="out"></div>
                    <button class="del">Очистить список задач</button>
                </div>
            </div>
        </div>
    </div>
    <button class="accordion">Пятница</button>
    <div class="panel">
        <div id="conteiner-form" class="conteiner">
            <button class="menu"> &#9998;</button>
            <div id="content4" class="content">
                <div class="b">
                    <input type="text" placeholder="Введите название задачи">
                    <textarea class="text1" placeholder="Введите описание задачи"></textarea>
                    <input type="date" class="date">
                    <button class="button">Отправить</button>
                    <h2 class="it">Задачи:</h2>
                    <div class="out"></div>
                    <button class="del">Очистить список задач</button>
                </div>
            </div>
        </div>
    </div>
    <button class="accordion">Суббота</button>
    <div class="panel">
        <div id="conteiner-form" class="conteiner">
            <button class="menu"> &#9998;</button>
            <div id="content5" class="content">
                <div class="b">
                    <input type="text" placeholder="Введите название задачи">
                    <textarea class="text1" placeholder="Введите описание задачи"></textarea>
                    <input type="date" class="date">
                    <button class="button">Отправить</button>
                    <h2 class="it">Задачи:</h2>
                    <div class="out"></div>
                    <button class="del">Очистить список задач</button>
                </div>
            </div>
        </div>
    </div>
    <button class="accordion">Воскресенье</button>
    <div class="panel">
        <div id="conteiner-form" class="conteiner">
            <button class="menu"> &#9998;</button>
            <div id="content6" class="content">
                <div class="b">
                    <input type="text" placeholder="Введите название задачи">
                    <textarea class="text1" placeholder="Введите описание задачи"></textarea>
                    <input type="date" class="date">
                    <button class="button">Отправить</button>
                    <h2 class="it">Задачи:</h2>
                    <div class="out"></div>
                    <button class="del">Очистить список задач</button>
                </div>
            </div>
        </div>
    </div>
    <button class="fon">Изменить фон</button>
</div>
<div class="modal" id="Madal">
    <div class="modal-content">
        <span class="close" id="span">&times;</span>
        <p>У вас не написано название задачи.</p>
    </div>
</div>
<div class="modalDate">
    <div class="modalDate-content">
        <span class="closeDate" id="span">&times;</span>
        <p>Вы не задали дату задачи или оставили её пустой.</p>
    </div>
</div>


</body>
</html>
