

const loginForm = document.querySelector(".login");
const officialButton = document.querySelector(".official-btn");
const scheduleButton = document.querySelector(".schedule-btn");
const btn = document.querySelector(".btn");
const backButton = document.querySelector(".back-btn");
const loginButton = document.querySelector(".login-btn");
const registrationForm = document.querySelector(".form");
const registrationBackButton = document.querySelector(".r-back-btn");
const registrationNextButton = document.querySelector(".r-next-btn");
const registrationBackButton2 = document.querySelector(".r2-back-btn");
const registrationNextButton2 = document.querySelector(".r2-next-btn");
const registrationBackButton3 = document.querySelector(".r3-back-btn");
const registrationNextButton3 = document.querySelector(".r3-submit-btn");
const slider = document.querySelector(".slider");

loginForm.style.left = "100%";
registrationForm.style.left = "100%";

function onOfficialButtonClick()
{
    loginForm.style.left = "65%";
    loginForm.style.opacity = "1";
    btn.style.opacity = "0";
}

function onScheduleButtonClick()
{
    registrationForm.style.left = "60%";
    registrationForm.style.opacity = "1";
}

function onBackButtonClick()
{
    loginForm.style.left = "100%";
    btn.style.opacity = "1";
    loginButton.style.width = "60%";
    loginButton.style.backgroundColor = "var(--primary-color)";
    loginButton.style.color = "white";
    backButton.style.width = "30%";
    backButton.style.backgroundColor = "white";
    backButton.style.color = "var(--primary-color)";
}

function onLoginButtonClick()
{
    window.location.href = "php/admin-page/dashboard.php";
}

function onLoginButtonHover()
{
    loginButton.style.width = "60%";
    loginButton.style.backgroundColor = "var(--primary-color)";
    loginButton.style.color = "white";
    backButton.style.width = "30%";
    backButton.style.backgroundColor = "white";
    backButton.style.color = "var(--primary-color)";
}

function onBackButtonHover()
{
    loginButton.style.width = "30%";
    backButton.style.width = "60%";
    backButton.style.backgroundColor = "var(--primary-color)";
    backButton.style.color = "white";
    loginButton.style.backgroundColor = "white";
    loginButton.style.color = "var(--primary-color)";
    loginButton.style.border = "1px solid var(--primary-color)";
}

function onBackButtonUnhover()
{
    onLoginButtonHover();
}

function onRBackButtonClick()
{
    registrationForm.style.left = "100%";
    registrationBackButton.style.width = "100px";
    registrationBackButton.style.backgroundColor = "white";
    registrationBackButton.style.color = "var(--primary-color)";
    registrationBackButton.style.border = "1px solid var(--primary-color)";
    registrationNextButton.style.width = "180px";
    registrationNextButton.style.backgroundColor = "var(--primary-color)";
    registrationNextButton.style.color = "white";
}

function onRNextButtonClick()
{
    slider.style.transform = "translate(-25%)";
}

function onRBackHover()
{
    registrationBackButton.style.width = "180px";
    registrationBackButton.style.backgroundColor = "var(--primary-color)";
    registrationBackButton.style.color = "white";
    registrationNextButton.style.backgroundColor = "white";
    registrationNextButton.style.border = "1px solid var(--primary-color)";
    registrationNextButton.style.color = "var(--primary-color)";
    registrationNextButton.style.width = "100px";
}

function onRNextHover()
{
    registrationNextButton.style.backgroundColor = "var(--primary-color)";
    registrationNextButton.style.color = "white";
    registrationNextButton.style.width = "180px";
    registrationBackButton.style.width = "100px";
    registrationBackButton.style.backgroundColor = "white";
    registrationBackButton.style.color = "var(--primary-color)";
    registrationBackButton.style.border = "1px solid var(--primary-color)";
}

function onRBackUnhover()
{
    onRNextHover();
}

function onR2BackButtonClick()
{
    slider.style.transform = "translate(0%)";
}

function onR2NextButtonClick()
{
    slider.style.transform = "translate(-50%)";
}

function onR2BackHover()
{
    registrationBackButton2.style.width = "180px";
    registrationBackButton2.style.backgroundColor = "var(--primary-color)";
    registrationBackButton2.style.color = "white";
    registrationNextButton2.style.backgroundColor = "white";
    registrationNextButton2.style.border = "1px solid var(--primary-color)";
    registrationNextButton2.style.color = "var(--primary-color)";
    registrationNextButton2.style.width = "100px";
}

function onR2NextHover()
{
    registrationNextButton2.style.backgroundColor = "var(--primary-color)";
    registrationNextButton2.style.color = "white";
    registrationNextButton2.style.width = "180px";
    registrationBackButton2.style.width = "100px";
    registrationBackButton2.style.backgroundColor = "white";
    registrationBackButton2.style.color = "var(--primary-color)";
    registrationBackButton2.style.border = "1px solid var(--primary-color)";
}

function onR2BackUnhover()
{
    onR2NextHover();
}

function onR3BackButtonClick()
{
    slider.style.transform = "translate(-25%)";
}

function onR3SubmitHover()
{
    registrationNextButton3.style.backgroundColor = "var(--primary-color)";
    registrationNextButton3.style.color = "white";
    registrationNextButton3.style.width = "180px";
    registrationBackButton3.style.width = "100px";
    registrationBackButton3.style.backgroundColor = "white";
    registrationBackButton3.style.color = "var(--primary-color)";
    registrationBackButton3.style.border = "1px solid var(--primary-color)";
}

function onR3BackHover()
{
    registrationBackButton3.style.width = "180px";
    registrationBackButton3.style.backgroundColor = "var(--primary-color)";
    registrationBackButton3.style.color = "white";
    registrationNextButton3.style.backgroundColor = "white";
    registrationNextButton3.style.border = "1px solid var(--primary-color)";
    registrationNextButton3.style.color = "var(--primary-color)";
    registrationNextButton3.style.width = "100px";
}

function onR3BackUnhover()
{
    onR3SubmitHover();
}



