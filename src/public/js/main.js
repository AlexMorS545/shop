const btnUser = document.querySelector('.user-name')
const userModal = document.querySelector('.user-wrp')

btnUser.addEventListener('click', ()=> {
	if(userModal.classList.contains('hidden'))
		userModal.classList.remove('hidden')
})

userModal.addEventListener('click', event => {
		if(event.target.dataset.close) {
			userModal.classList.add('hidden')
		}
})

const btnBasket = document.querySelector('.fa-shopping-basket')
const basketModal = document.querySelector('.basket-wrp')

btnBasket.addEventListener('click', ()=> {
	if(basketModal.classList.contains('hidden'))
		basketModal.classList.remove('hidden')
})

basketModal.addEventListener('click', event => {
	if(event.target.dataset.close) {
		basketModal.classList.add('hidden')
	}
})