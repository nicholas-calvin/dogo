var status = false;
console.log(status);

function user() {
    var remove = document.getElementById("button");
    remove.parentNode.removeChild(remove);

    headerKanan.innerHTML += '<div  style="padding: 40px;"/>Welcome, User';
    status = true;
    console.log(status);
}

function designer() {
    var remove = document.getElementById("button");
    remove.parentNode.removeChild(remove);

    headerKanan.innerHTML += '<div  style="padding: 40px;"/>Welcome, Designer';
    status = true;
    console.log(status);
}

function openForm(event) {
    event.preventDefault();
    document.getElementById("titleField").value = null;
    document.getElementById("descField").value = null;
    document.getElementById("popup-discussion").style.display = "block";
}

function closeForm(event) {
    event.preventDefault();
    document.getElementById("popup-discussion").style.display = "none";
}

function check() {
    if (status === false) {
        console.log("Belum sign in");
    } else {
        console.log("Sudah Sign in");
    }
}
