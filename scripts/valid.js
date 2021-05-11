function validFio(value){
	var regExp = /^([А-ЯA-Z]|[А-ЯA-Z][\x27а-яa-z]{1,}|[А-ЯA-Z][\x27а-яa-z]{1,}\-([А-ЯA-Z][\x27а-яa-z]{1,}|(оглы)|(кызы)))\040[А-ЯA-Z][\x27а-яa-z]{1,}(\040[А-ЯA-Z][\x27а-яa-z]{1,})?$/;
	//Регулярное выражение взял готовое
	return regExp.test(value);
}

function validAddress(value){
	var regExp = /^[A-Za-zА-Яа-я0-9,]/;
	return regExp.test(value);
}

function validNumber(value){
	var regExp=/^[7-8]{1}[0-9]{10}$/;
	return regExp.test(value);
}

function validEmail(value){
	var regExp=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	//Регулярное выражение взял готовое
	return regExp.test(value);
}

function onChangeInput(id){
	var elClLi=document.getElementById(id).classList;
	var FIO=document.getElementById("fio").value;
	var address=document.getElementById("address").value;
	var number=document.getElementById("number").value;
	var email=document.getElementById("email").value;

	switch(id){
		case "fio":
			if(validFio(FIO)){
				elClLi.add("right");
				elClLi.remove("wrong");
			}else{
				elClLi.add("wrong");
				elClLi.remove("right");
			}
		break;
		case "address":
			if(validAddress(address)){
				elClLi.add("right");
				elClLi.remove("wrong");
			}else{
				elClLi.add("wrong");
				elClLi.remove("right");
			}
		break;
		case "number":
			if(validNumber(number)){
				elClLi.add("right");
				elClLi.remove("wrong");
			}else{
				elClLi.add("wrong");
				elClLi.remove("right");
			}
		break;
		case "email":
			if(validEmail(email)){
				elClLi.add("right");
				elClLi.remove("wrong");
			}else{
				elClLi.add("wrong");
				elClLi.remove("right");
			}
		break;
	}
	if(validFio(FIO) && validAddress(address) && validNumber(number) && validEmail(email)){
		document.getElementById("send").disabled=false;
	}
}

function onNumberChange(id){
	var reg=/^\d/;
	var str=document.getElementById(id).value;
	s=str[str.length-1];
	if(!reg.test(s) || str.length>11)
		document.getElementById(id).value=str.substr(0,str.length-1);
}