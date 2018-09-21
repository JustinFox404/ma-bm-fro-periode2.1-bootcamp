"use strict";
function setContent(json) {
    document.getElementById("titel").innerText = json['titel'];
    document.getElementById("opdracht").innerText = json['opdracht'];
    updateNames(json['name']);
    document.getElementById("role").innerText = json['role'];
    document.getElementById("uitwerking").innerText = json['uitwerking'];
    document.getElementById("img").src = json['img'];
    updateYears();
}
function updateNames(name) {
    const a = document.getElementsByClassName("name");
    const l = a.length;
    for(let i = 0; i < l; i++) {
        var el = a[i];
        el.innerHTML = name;
    }
}
function updateYears() {
    const a = document.getElementsByClassName("thisyear");
    const l = a.length;
    for(let i = 0; i < l; i++) {
        var el = a[i];
        el.innerHTML = (new Date).getFullYear();
    }
}

document.getElementById("update").addEventListener("click", function () {
    updateID(document.getElementById("test").value);
});

function updateID(id) {
    var xml = new XMLHttpRequest();
    xml.open("GET", "getData.php?id="+id, true);
    xml.send();
    xml.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) setContent(JSON.parse(this.responseText));
    };
}