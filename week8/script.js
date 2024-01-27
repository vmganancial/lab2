document.addEventListener('DOMContentLoaded', function() {
  console.log('DOM content loaded');

// Click Me button
const clickMeButton = document.getElementById('clickMeButton');
if (clickMeButton) {
  clickMeButton.addEventListener('click', function() {
    // Navigate to the second page
    window.location.href = 'second_page.html';
  });
}

// Form button
    const formButton = document.getElementById('formButton');
    if (formButton) {
      formButton.addEventListener('click', function() {
        // Navigate to the form page
        window.location.href = 'form.php';
      });

  // Ok button
  const okButton = document.getElementById('okButton');
  if (okButton) {
    okButton.addEventListener('click', function() {
      const enteredName = document.getElementById('enteredName');
      const nameInput = enteredName.value.trim();

      if (nameInput === '') {
        alert('Please enter your name.');
        return;
      }

      showAlert('Wait for a moment...');

      setTimeout(function() {
        showAlert('Wassup! Nice to meet you, ' + nameInput + '. If there's anything I can do to help you, please let me know.');
        enteredName.value = '';
      }, 2000);
    });
  }

// Go Back button
const goBackButton = document.getElementById('goBackButton');
if (goBackButton) {
  goBackButton.addEventListener('click', function() {
    console.log('Go Back button clicked');
    window.location.href = 'index.php'; 
  });
}

  function showAlert(message) {
    alert(message);
  }
});
