<h1>guest-service</h1>

<p>Микросервис guest-service реализует API для CRUD операций над гостем, принимает методы GET, POST, PATCH, DELETE.</p>

<p>У каждого гостя есть Имя, Фамилия, Номер телефона, email, Страна ( Если не указана, подставляется исходя из номера телефона )</p>

<h2>Установка</h2>

<p>Для того чтобы развернуть локально или на удаленном сервере:</p>

<h3>Клонируйте репозиторий</h3>
<p>git clone https://github.com/Famost/guest-service.git</p>

<h3>Установите зависимости</h3>
<p>composer install</p>

<h3>Запустите Sail</h3>
<p>./vendor/bin/sail up -d</p>

<h3>Накатите миграции</h3>
<p>./vendor/bin/sail artisan migrate</p>

<h3>Остановка Sail</h3>
<p>./vendor/bin/sail down</p>

<h2>Использование</h2>

<h3>Получение всех гостей</h3>

<p>http://[URL]/api</p>
<p>method:GET</p>

<h3>Получение конкретного гостя</h3>

<p>http://[URL]/api/{id}</p>
<p>method:GET</p>

<h3>Добавление гостя</h3>

<p>http://[URL]/api</p>
<ul>
	method:POST
	<li>first_name | required | string | max:255</li>
	<li>last_name |required | string| max:255</li>
	<li>email | required | email | unique</li>
	<li>phone | required | string | unique</li>
	<li>country | nullable | string | max:255</li>
</ul>

<h3>Обновление конкретного гостя</h3>

<p>http://[URL]/api/{id}</p>
<ul>
	method:PATCH
	<li>first_name | string | max:255</li>
	<li>last_name | string | max:255</li>
	<li>email | email | unique</li>
	<li>phone | string | unique</li>
	<li>country | string | max:255</li>
</ul>

<h3>Удаление конкретного гостя</h3>

<p>http://[URL]/api/{id}</p>
<p>method:DELETE</p>




