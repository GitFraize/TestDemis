	<div class="main">
		<form class="input_form" method="POST">
			<center>
				<h1>Ваши данные:</h1>
			</center>
			<center><table>
				<tr>
					<th>ФИО:</th>
					<td><?php echo $_POST['fio'];?></td>
				</tr>
				<tr>
					<th>Адрес:</th>
					<td><?php echo $_POST['address']; ?></td>
				</tr>
				<tr>
					<th>Кон. телефон:</th>
					<td><?php echo $_POST['number']; ?></td>
				</tr>
				<tr>
					<th>Почта:</th>
					<td><?php echo $_POST['email']; ?></td>
				</tr>
			</table></center>
				<input class="input input_button" type="submit" name="back" id="back" value="Назад">
		</form>
	</div>