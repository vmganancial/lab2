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
        showAlert('Wassup! Nice to meet you, ' + nameInput + '. If there\'s anything I can do to help you, please let me know.');
        enteredName.value = ''; // Clear the entered name
      }, 2000);
    });
  }

  // Go Back button
  const goBackButton = document.getElementById('goBackButton');
  if (goBackButton) {
    goBackButton.addEventListener('click', function() {
      // Navigate back to the first page
      window.location.href = 'index.html';
    });
  }

  // Other code...

  // Ensure the showAlert function is defined
  function showAlert(message) {
    alert(message);
  }
});
