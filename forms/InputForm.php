	<div class="main">
		<form class="input_form" method="POST">
			<div>
				<h1>Обратная связь</h1>
				<p> * - поля обязательные для заполнения.</p>
			</div>
			<div class="inputs">
				<input class="input" type="text" name="fio" id="fio" onchange="onChangeInput(this.id)" placeholder="Фамилия, Имя, Отчество *" required>
				<input class="input" type="text" name="address" id="address" onchange="onChangeInput(this.id)" placeholder="Адрес *" required>
				<input class="input" type="text" name="number" id="number" onchange="onChangeInput(this.id);" oninput="onNumberChange(this.id)" placeholder="Контактный телефон *" required>
				<input class="input" type="text" name="email" id="email" onchange="onChangeInput(this.id)" placeholder="Электронная почта *" required>
			</div>
				<center><input class="input input_button" type="submit" name="send" id="send" value="Отправить" disabled></center>
		</form>
	</div>