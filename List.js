var toDoList = Array();

function buildList() {
    var mainList = document.getElementById('mainList');
    var buttonWrap = document.getElementById('buttonWrap');

    // Add Button
    var divBtn = document.createElement('div');
    var btnText = document.createTextNode('추가');
    divBtn.id = 'addBtn';
    divBtn.appendChild(btnText);
    mainList.appendChild(divBtn);

    // Del Button
    divBtn = document.createElement('div');
    btnText = document.createTextNode('삭제');
    divBtn.id = 'delBtn';
    divBtn.appendChild(btnText);
    mainList.appendChild(divBtn);

    // getElementById (add, del)
    var addBtn = document.getElementById('addBtn');
    var delBtn = document.getElementById('delBtn');

    // addList 
    addBtn.addEventListener('click', addList); // addList = function addList(){}

    // delList
    delBtn.addEventListener('click', delList); // delList = function delList(){}
}

function addList() {
    var listHead = document.getElementById('listHead');
    var createList = document.createElement('li');
    var listText = document.createElement('input');
    listText.id = 'listText';
    //listText.setAttribute('class', 'listText');

    createList.appendChild(listText);
    listHead.appendChild(createList);
    //listHead.name = 'list';
    var inputList = document.getElementById('listText');
    inputList.setAttribute('size', '55');

    // submit
    if (window.event.keyCode == 13) {
        makeList(inputList.value);
    }
}

function delList() {
    var delInput = document.querySelector('listText');
    delInput.parentNode.removeChild(delInput);
}

function makeList(textValue) {
    toDoList = textValue;
    var listHead = document.getElementById('listHead');
    var createList = document.createElement('li');

    createList.appendChild(textValue);
    listHead.appendChild(createList);
}

buildList();