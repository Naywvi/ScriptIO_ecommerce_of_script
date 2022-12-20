document.getElementById('tag-searched').contentWindow.document.head.innerHTML = `<link rel="stylesheet" href="./assets/css/wrap-item-tag.css"/> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">`
function newtag(){
    var log = document.getElementById('tag-searched').contentWindow.document.body
    var el = document.createElement('label');
    log.appendChild(el)
    log.lastChild.innerText = "#" + document.getElementById('tag').value
}