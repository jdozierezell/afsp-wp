<script type="text/javascript">

const thirtyYearsButton = document.getElementById('30years-button');
const lookAheadButton = document.getElementById('ahead-button');
const thirtyYearsModal = document.getElementById('30years-modal');
const lookAheadModal = document.getElementById('ahead-modal');

let modalOverlay = document.getElementsByClassName('modal__overlay')
modalOverlay = modalOverlay[0]

function showModal (button, modal) {
  button.addEventListener('click', function (e) {
    modal.style.display = 'initial'
    modalOverlay.style.display = 'initial'
    document.body.classList.add('stop-scrolling')
  })
}

showModal(thirtyYearsButton, thirtyYearsModal)
showModal(lookAheadButton, lookAheadModal)

modalOverlay.addEventListener('click', function (e) {
  const modals = document.getElementsByClassName('modal')
  console.log('clicked')
  for (i = 0; i < modals.length; i += 1) {
    modals[i].style.display = 'none'
    modalsOverlay.style.display = 'none'
    document.body.classList.remove('stop-scrolling')
  }
})

</script>