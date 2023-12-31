document.addEventListener('DOMContentLoaded', function () {
    // Get button elements
    const frenchButton = document.getElementById('frenchButton');
    const englishButton = document.getElementById('englishButton');

    englishButton.classList.add('hidden');


    // Add click event listeners
    frenchButton.addEventListener('click', function () {
      // Hide French button and show English button
      frenchButton.classList.add('hidden');
      englishButton.classList.remove('hidden');
    });

    englishButton.addEventListener('click', function () {
      // Hide English button and show French button
      englishButton.classList.add('hidden');
      frenchButton.classList.remove('hidden');
    });
  });