// Select the button
const btn = document.querySelector('.btn-toggle');
const btn2 = document.querySelector('.btn-toggle2');

// Listen for a click on the button
btn.addEventListener('click', function() {
  // Then toggle (add/remove) the .dark-theme class to the body
  document.body.classList.toggle('dark-theme');  
  let theme = "light";
  // If the body contains the .dark-theme class...
  if (document.body.classList.contains("dark-theme")) {
    // ...then let's make the theme dark
    theme = "dark";
  }
  // Then save the choice in a cookie
  document.cookie = "theme=" + theme;
})

btn2.addEventListener('click', function() {
  // Then toggle (add/remove) the .dark-theme class to the body
  document.body.classList.toggle('dark-theme');  
  let theme = "light";
  // If the body contains the .dark-theme class...
  if (document.body.classList.contains("dark-theme")) {
    // ...then let's make the theme dark
    theme = "dark";
  }
  // Then save the choice in a cookie
  document.cookie = "theme=" + theme;
})
