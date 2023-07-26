const btnOpenDropdown = document.getElementById('open__dropdown')
const boxDropdown = document.querySelector('.dropdown')
const main = document.querySelector('main')

btnOpenDropdown.onclick = () => {
  boxDropdown.classList.toggle('show')

  if (boxDropdown.classList.contains('show')) {
    main.onclick = () => boxDropdown.classList.remove('show')
  }
}