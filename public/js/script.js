let fun = function () {

    let addButton = document.getElementById("addButton");
    addButton.innerText = addButton.innerText === "Убрать" ? "Добавить заявку" : "Убрать"

    document.getElementById("addForm").classList.toggle("hidden")
    document.getElementById("shadow").class.toggle("hidden")

}

document.getElementById("addButton").onclick = fun

document.getElementById("closeFormButton").onclick = fun

document.getElementById("shadow").onclick = fun

