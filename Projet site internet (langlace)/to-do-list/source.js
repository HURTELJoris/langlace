function switchpagejs(id, text) {
    var a = document.getElementsByName(id);
    a.addEventListener("click",converthtml);

    function converthtml(event) {
        a.innerHTML = text;
    }
}

