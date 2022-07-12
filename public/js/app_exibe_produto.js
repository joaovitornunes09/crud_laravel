const produto_pesquisado = document.querySelector('#pesquisa_produto');
const botao_pesquisa = document.querySelector('#botao_pesquisa');
const div = document.querySelector('.usuario-pesquisado')
const xhr = new XMLHttpRequest();
const table = document.createElement('table');
table.classList.add("table-success")
const thead = document.createElement('thead');
const tbody = document.createElement('tbody');
const tr = document.createElement('tr');
tr.classList.add("table-success")
const th = document.createElement('th');
th.classList.add("table-success")
const h1 = document.createElement('h1')
botao_pesquisa.addEventListener('click', function(e){
    e=0
    e++
    if(e = 1){
    div.appendChild(h1);
    h1.innerText = "Aqui está o produto que você pesquisou"
    div.appendChild(table);
    table.appendChild(thead);
    thead.appendChild(tr);
    tr.appendChild(th);
    
    
}

});
    


  



