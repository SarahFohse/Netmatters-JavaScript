const toggleHidden = document.querySelector('.hidden-p-btn');
const hiddenP = document.querySelector('.hidden-paragraphs');
const msgAlert = document.querySelectorAll('.form-alert');

toggleHidden.addEventListener('click', () => {
  window.event.preventDefault();
  hiddenP.classList.toggle('js-hidden');
  toggleHidden.querySelector('i').classList.toggle('fa-chevron-down');
  toggleHidden.querySelector('i').classList.toggle('fa-chevron-up');
});

msgAlert.forEach(msgBox => {
  msgBox.querySelector('.fa-x').addEventListener('click', () => {
    msgBox.classList.add('js-hidden');
  });
});

if (window.location.href.indexOf('?submitted') > -1) {document.querySelector('.success-message').classList.remove('js-hidden')}