var numero = document.getElementById("numero-integrantes")
var botao = document.getElementById("cadastrar");
numero.oninput = function () {
    document.getElementById('teste').innerHTML = "";
    var selecionado = numero.value;
    for (var i = 0; i < selecionado; i++) {
        var input = document.createElement("input");
        input.type = "text";
        input.className = "form-control";
        input.placeholder = "Digite o nome";
        input.id = "integrante"
        input.required = true;
        document.getElementById("teste").appendChild(input);
    }
};
botao.onclick = function(){
    var integrantes = document.getElementsByClassName("integrante").value;
    var equipe = document.getElementById("nome").value;
    if(integrantes ==""){
        alert("favor inserir os nomes");
    }
    else if(equipe==""){
        alert("favor inserir o nome da equipe");
    }
    else{
        window.location='instrucoes.html';
    }
}

