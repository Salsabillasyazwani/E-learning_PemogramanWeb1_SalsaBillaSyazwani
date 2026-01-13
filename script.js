document.addEventListener("DOMContentLoaded", () => {

const API_URL = "http://localhost/Uas_Peweb1_U-manage/";

const container = document.querySelector(".container");

// ================= TOGGLE FORM =================
const registerBtn = document.querySelector(".register-btn");
const loginBtn = document.querySelector(".login-btn");
const toRegister = document.getElementById("toRegister");
const toLogin = document.getElementById("toLogin");

registerBtn?.addEventListener("click", () => {
    container.classList.add("active");
});

loginBtn?.addEventListener("click", () => {
    container.classList.remove("active");
});

toRegister?.addEventListener("click", (e) => {
    e.preventDefault();
    container.classList.add("active");
});

toLogin?.addEventListener("click", (e) => {
    e.preventDefault();
    container.classList.remove("active");
});

// ================= LOGIN =================
document.querySelector(".login .btn")?.addEventListener("click", async () => {  // PERBAIKI: dari ".login-btn-submit" ke ".login .btn"

    const username = document.querySelector(".login input[name='username']").value;
    const password = document.querySelector(".login input[type='password']").value;

    if (!username || !password) {
        alert("Username & password wajib diisi");
        return;
    }

    const res = await fetch(API_URL + "API/auth/login.php", {
        method: "POST",
        credentials: "include",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ username, password })
    });

    const data = await res.json();
    alert(data.message);

    if (data.success) {
        location.href = "dashboard.php";
    }
});

// ================= REGISTER =================
const registerForm = document.querySelector(".register form");

registerForm?.addEventListener("submit", async e => {
    e.preventDefault();

    const inputs = registerForm.querySelectorAll("input");

    const body = {
        nama_UMKM: inputs[0].value,
        username: inputs[1].value,
        email: inputs[2].value,
        password: inputs[3].value,
        confirm: inputs[4].value
    };

    if (Object.values(body).some(v => !v)) {
        alert("Semua field wajib diisi");
        return;
    }

    if (body.password !== body.confirm) {
        alert("Password tidak sama");
        return;
    }

    const res = await fetch(API_URL + "API/auth/register.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(body)
    });

    const data = await res.json();
    alert(data.message);

    if (data.success) {
        container.classList.remove("active");
        registerForm.reset();
    }
});

});
