// let form = document.getElementById('edita-adm');
let id = document.getElementById('idAdm');
let nome = document.querySelector('.InputNome');
let email = document.querySelector('.InputEmail');
let senha = document.querySelector('.InputSenha');
let ativo = document.querySelector('.InputAtivo');

let idTabela = Array.from(document.getElementsByClassName("id-adm-tabela"));
let nomeTabela = Array.from(document.getElementsByClassName("nome-adm-tabela"));
let emailTabela = Array.from(document.getElementsByClassName("email-adm-tabela"));
let senhaTabela = Array.from(document.getElementsByClassName("senha-adm-tabela"));
let ativoTabela = Array.from(document.getElementsByClassName("ativo-adm-tabela"));

//Coloca no input o valor do input em questão
function addValor(array,input,index){
    array.forEach(item => {
        input.setAttribute('value', array[index-1].innerText);
    });
}
//Coloca todo o dado aos inputs que devem estar
function showEdit(index){
    
    addValor(nomeTabela,nome,index);
    addValor(emailTabela,email,index);+

    addValor(senhaTabela,senha,index);
    addValor(idTabela,id,index);
    addValor(ativoTabela,ativo,index);
    
    
}




