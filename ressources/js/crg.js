var myModal = document.getElementById('2')
var myInput = document.getElementById('1')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})