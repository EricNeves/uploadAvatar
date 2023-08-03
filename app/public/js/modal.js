const modal         = document.querySelector('.modal')
const btnOpenModal  = document.querySelectorAll('#openModal')
const btnCloseModal = document.getElementById("close__modal")
const btnDelete     = document.getElementById('btn__delete')
const result        = document.querySelector('.delete__result')
const ids_image     = document.querySelectorAll('.image > img')

if (modal) {
  btnOpenModal.forEach(function(btn) {
    btn.onclick = e => {
      e.preventDefault()

      modal.classList.add('show')

      const image = btn.getAttribute('item')
      btnDelete.setAttribute('item', image)
    }
  })

  btnCloseModal.onclick = e => {
    modal.classList.remove('show')
  }

  btnDelete.onclick = e => {
    const imageID = btnDelete.getAttribute('item')

    const formData = new FormData()
    formData.append('id', imageID)

    const url = window.location.href

    fetch(`avatars/remove`, {
      method: 'POST',
      body: formData
    })
      .then(res => res.json())
      .then(res => {
        if (res?.success) {
          result.classList.add('modal__success')
          result.textContent = res.success

          setTimeout(() => window.location.href = url, 2000)
        } else if (res?.error) {
          result.classList.add('modal__error')
          result.textContent = res.error

          setTimeout(() => window.location.href = url, 2000)
        }
      })
  }
}