// Light and Dark Mode
const toggleButton = document.getElementById('toggle-button');

let isDarkMode = getCookie("darkMode") === "true"; // Check cookie for dark mode preference

// Set the initial theme based on the cookie
if (isDarkMode) {
    document.documentElement.style.setProperty('--bg-color', '#000000');
    document.documentElement.style.setProperty('--second-bg-color', '#161616');
    document.documentElement.style.setProperty('--text-color', '#ffffff');
    document.documentElement.style.setProperty('--main-color', '#7b4bb7');
    toggleButton.textContent = 'Light Mode';
} else {
    document.documentElement.style.setProperty('--bg-color', '#ffffff');
    document.documentElement.style.setProperty('--second-bg-color', '#f0f0f0');
    document.documentElement.style.setProperty('--text-color', '#000000');
    document.documentElement.style.setProperty('--main-color', '#4bb77b');
    toggleButton.textContent = 'Dark Mode';
}

toggleButton.addEventListener('click', () => {
    isDarkMode = !isDarkMode;
    
    if (isDarkMode) {
        document.documentElement.style.setProperty('--bg-color', '#000000');
        document.documentElement.style.setProperty('--second-bg-color', '#161616');
        document.documentElement.style.setProperty('--text-color', '#ffffff');
        document.documentElement.style.setProperty('--main-color', '#7b4bb7');
        toggleButton.textContent = 'Light Mode';
    } else {
        document.documentElement.style.setProperty('--bg-color', '#ffffff');
        document.documentElement.style.setProperty('--second-bg-color', '#f0f0f0');
        document.documentElement.style.setProperty('--text-color', '#000000');
        document.documentElement.style.setProperty('--main-color', '#4bb77b');
        toggleButton.textContent = 'Dark Mode';
    }

    setCookie("darkMode", isDarkMode, 30); // Set cookie for dark mode preference
});

// smooth scrolling
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// scroll animation
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.home, .info');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            } else {
                entry.target.classList.remove('animate');
            }
        });
    });

    sections.forEach(section => {
        observer.observe(section);
    });
});

// Ajax function
function showSuggestion(str) {
    if (str.length == 0) { 
      document.getElementById("txtHint").innerHTML = "";
      return;
    } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
        }
      }
      xmlhttp.open("GET", "gethint.php?q="+str, true);
      xmlhttp.send();
    }
}

// Cookie functions
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name + '=; Max-Age=-99999999;';  
}
