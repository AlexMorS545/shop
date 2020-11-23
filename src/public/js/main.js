const btn = document.querySelector('.fa-user')
const userModal = document.querySelector('.user-wrp')

btn.addEventListener('click', ()=> {
	if(userModal.classList.contains('hidden'))
		userModal.classList.remove('hidden')
})

userModal.addEventListener('click', event => {
	console.log('Clicked', event.target.dataset.close)
		if(event.target.dataset.close) {
			userModal.classList.add('hidden')
		}
})