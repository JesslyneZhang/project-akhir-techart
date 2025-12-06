const roleBox = document.getElementById("roleBox");
const loginCard = document.getElementById("loginCard");
const roleInput = document.getElementById("roleInput");
const loginTitle = document.getElementById("loginTitle");
const loginSubtitle = document.getElementById("loginSubtitle");

function selectRole(role) {
  roleBox.style.display = "none";
  loginCard.style.display = "block";
  roleInput.value = role;

  if (role === "admin") {
    loginTitle.innerText = "Admin Login";
    loginSubtitle.innerText = "Masuk sebagai administrator";
  } else {
    loginTitle.innerText = "User Login";
    loginSubtitle.innerText = "Masuk untuk booking kamar";
  }
}

function backToRole() {
  loginCard.style.display = "none";
  roleBox.style.display = "block";
}

function togglePassword() {
  const input = document.getElementById("password");
  const icon = document.getElementById("eyeIcon");

  if (input.type === "password") {
    input.type = "text";
    icon.classList.remove("fa-eye");
    icon.classList.add("fa-eye-slash");
  } else {
    input.type = "password";
    icon.classList.remove("fa-eye-slash");
    icon.classList.add("fa-eye");
  }
}


document.getElementById("loginForm").addEventListener("submit", function(e){
  e.preventDefault();

  const role = roleInput.value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;

  console.log({ role, email, password });

  alert("Login sebagai " + role + " (siap disambungkan ke backend)");
});
