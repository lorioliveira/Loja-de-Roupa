/* 
function validaBusca() {
	if (document.querySelector('#q').value =='') {
		alert('Não podia ter deixado em branco a busca!');
		return false;
	}
}
*/
// fazendo a associação da função acima com o evento
//document.querySelector('#form-busca').onsubmit = validaBusca;

// Mostrar uma janela de erro é considerado por muitos uma ação muito agressiva contra o usuário.
// Talvez um feedback mais sutil seja pintar o fundo de vermelho, indicando um erro.

/*function validaBusca() {
	if (document.querySelector('#q').value =='') {
		document.querySelector('#form-busca').style.background ='red';
		return false;
	}
}*/

// funções anonimas - que permine definir a função diretamente na definição do onsubmit
// *acontece a mesma coisa que a função anterior, apenas define a função diretamente: .onsubmit = function(){*
document.querySelector('#form-busca').onsubmit = function(){
	if(document.querySelector('#q').value == '') {
		document.querySelector('#form-busca').style.background = 'red';
		return false;
	}
}