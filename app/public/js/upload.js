const preview = document.querySelector('.preview img')
const form = document.forms.form
const loading = document.querySelector("#loading")
const result = document.querySelector('.result')

const { avatar } = form

avatar.onchange = (e) => {
  const render = new FileReader()

  render.onload = e => {
    const imgType = avatar.files[0].type

    if (imgType == 'image/png' || imgType == 'image/jpeg') {
      preview.src = e.target.result
      loading.classList.add('show')
    }
  }

  render.readAsDataURL(avatar.files[0])
}

function updateProgress(progress) {
  loading.textContent = `${progress}%`

  if (progress == 100) {
    setTimeout(() => loading.classList.remove('show'), 2000)
  }
}

function handleUpload(e) {
  e.preventDefault()

  const formData = new FormData(this)

  axios
    .post('upload', formData, {
      onUploadProgress: (event) => {
        const progress = Math.round((event.loaded * 100) / event.total)

        updateProgress(progress)
      }
    })
    .then(res => {
      if (res.data?.success) {
        result.classList.add('success')
        result.textContent = res.data.success
        
        setTimeout(() => {
          result.classList.remove('success')
          loading.textContent = `0%`
        }, 2000)

      } else if (res.data?.error) {
        result.classList.add('error')
        result.textContent = res.data.error

        setTimeout(() => result.classList.remove('error'), 2000)
      }
    })
}

form.addEventListener('submit', handleUpload)