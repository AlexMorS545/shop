const btn = document.querySelector('.user-name')
const userModal = document.querySelector('.user-wrp')

btn.addEventListener('click', ()=> {
	if(userModal.classList.contains('hidden'))
		userModal.classList.remove('hidden')
})

userModal.addEventListener('click', event => {
		if(event.target.dataset.close) {
			userModal.classList.add('hidden')
		}
})

