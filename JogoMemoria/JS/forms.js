var bt = document.getElementById("cadastrar");

bt.onclick = function(){

  var nome = document.getElementById("nome").value;
  var sobrenome = document.getElementById("sobrenome").value;
  var email = document.getElementById("email").value;
  var senha = document.getElementById("senha").value;
  var termos = document.getElementById("termosUso")
  if(nome ==""){
    alert("Favor inserir um nome");
  }
  else if(sobrenome ==""){
    alert("Favor inserir um sobrenome");
  }
  else if(email==""){
    alert("Favor inserir um email");
  }
  else if(senha==""){
    alert("Favor inserir uma senha");
  }
  else if(termos.checked==false){
    alert("Favor concordar com os termos de uso");
  }
  else{
    //alert("Cadastro realizado com sucesso");
    window.location='../tela_Professor/menu_professor.html';

  }
}





