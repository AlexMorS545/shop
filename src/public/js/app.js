
function addToBasket(id) {
	fetch('./modules/basket.php', {
		method: "POST",
		body: 'basketId='+id,
		headers:{"content-type": "application/x-www-form-urlencoded"}
	})
		.then( (response) => {
			if (response.status !== 200) {
				return Promise.reject();
			}
			return response.text()
		})
		.then(data => {
			const item = JSON.parse(data)
			console.log(item)
		})
		.catch(() => console.log('ошибка'));
}




/*function addToBasket(id){

	$.ajax({
		type: 'POST',
		url: './modules/basket.php',
		data: 'basketId='+id,
		dataType: 'json',
		success: function(data){//data - ответ сервера
			console.log(data)
			$(".basket").html(data)
		}
	});
}*/
