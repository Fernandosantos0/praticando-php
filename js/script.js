window.onload = () => {
    // Inserindo o ano atual no rodapé da página
    ano.textContent = new Date().getFullYear()
	
	// Função para limpar os campos do formulário
	const btnLimpar = window.document.querySelector('#btn-limpar').addEventListener('click', () => {
		const campo1 = window.document.querySelector('#campoNum1');
		const campo2 = window.document.querySelector('#campoNum2');
		const campoSlc = window.document.querySelector('#campoSlc');
		
		campo1.value = '';
		campo2.value = '';
		campoSlc.value = '';
		
	});
	
};