<?php

define ('MODO_DESENVOLVEDOR', false); // no modo desenvolvedor sÃ³ os adiministradores podem usar o bot

// TOKEN DO BOT
define ('TOKEN_BOT', '5503213515:AAGVLACbwA8wnFqjHMlDsPmb9yy5IXXCe-Y');

// API KEY https://sms-activate.ru/en/api2
define ('KEY_SMS', '6d8c26cdeA0A72003ce211c78dff6f6d');

// token do mercado pago
define ('ACCESS_TOKEN_MERCADO_PAGO', 'APP_USR-7450399924600697-062319-fd12210b5789a80a08b44aa17039c580-203899118');

// porcentagem de lucro sobre os valores cobrados no site, jÃ¡ feita a converÃ§Ã£o
define ('PORCENTAGEM_LUCRO', 110); // %

// lista de ids de adms
define ('ADMS', [1783149891]);

define ('CHAT_ID_NOTIFICACAO', '-1783149891'); // onde irÃ¡ as notificaÃ§Ãµes de resgate de saldos (opcional)

define ('GRUPO_ID','-11783149891'); // grupo de bot

// paises em que o bot vai atender,
// limitado a 160 paises por conta do telegram nÃ£o suportar alÃ©m disso
define ('PAISES', [
	'187' => 'ðŸ‡ºðŸ‡¸ EUA',
	'0' => 'ðŸ‡·ðŸ‡º Russia',
	'87' => 'ðŸ‡µðŸ‡¾ Paraguai',
	'86' => 'ðŸ‡®ðŸ‡¹ Italia',
	'117' => 'ðŸ‡µðŸ‡¹ Portugal',
	'73' => 'ðŸ‡§ðŸ‡· Brasil',
	'0' => 'ðŸ‡·ðŸ‡º RÃºssia',
	'1' => 'ðŸ‡ºðŸ‡¦ UcrÃ¢nia',
	'2' => 'ðŸ‡°ðŸ‡¿ CazaquistÃ£o',
	'3' => 'ðŸ‡¨ðŸ‡³ China',
	'4' => 'ðŸ‡µðŸ‡­ Filipinas',
	'5' => 'ðŸ‡²ðŸ‡² Miamar',
	'6' => 'ðŸ‡®ðŸ‡© IndonÃ©sia',
	'7' => 'ðŸ‡²ðŸ‡¾ MalÃ¡sia',
	'8' => 'ðŸ‡°ðŸ‡ª QuÃªnia',
	'9' => 'ðŸ‡¹ðŸ‡¿ TanzÃ¢nia',
	'10' => 'ðŸ‡»ðŸ‡³ ViatinÃ£',
	'13' => 'ðŸ‡®ðŸ‡± Israel',
	'14' => 'ðŸ‡­ðŸ‡° Hong Kong',
	'15' => 'ðŸ‡µðŸ‡± PolÃ´nia',
	'16' => 'ðŸ‡¬ðŸ‡§ Reino Unido',
	'19' => 'ðŸ‡³ðŸ‡ª NigÃ©ria',
	'21' => 'ðŸ‡ªðŸ‡¬ Egito',
	'22' => 'ðŸ‡®ðŸ‡³ Ãndia',
	'23' => 'ðŸ‡®ðŸ‡ª Irlanda',
	'24' => 'ðŸ‡°ðŸ‡­ Camboja',
	'25' => 'ðŸ‡±ðŸ‡¦ Laus',
	'26' => 'ðŸ‡­ðŸ‡¹ Haiti',
	'28' => 'ðŸ‡¬ðŸ‡² Gambia',
	'29' => 'ðŸ‡·ðŸ‡¸ SÃ©rvia',
	'30' => 'ðŸ³ï¸â„1¤7ðŸŒ„1¤7 IÃªmen',
	'31' => 'ðŸ‡¿ðŸ‡¦ Africa do Sul',
	'32' => 'ðŸ‡·ðŸ‡´ RomÃªnia',
	'33' => 'ðŸ‡¨ðŸ‡´ ColÃ´mbia',
	'34' => 'ðŸ‡ªðŸ‡ª EstÃ´nia',
	'35' => 'ðŸ‡¦ðŸ‡¿ AzerbaijÃ£o',
	'36' => 'ðŸ‡¨ðŸ‡¦ CanadÃ¡',
	'37' => 'ðŸ‡²ðŸ‡¦ Marrocos',
	'38' => 'ðŸ‡¬ðŸ‡­ Gana',
	'39' => 'ðŸ‡¦ðŸ‡· Argentina',
	'40' => 'ðŸ‡ºðŸ‡¿ UzbequistÃ£o',
	'41' => 'ðŸ‡¨ðŸ‡² CamarÃµes',
	'43' => 'ðŸ‡©ðŸ‡ª Alemanha',
	'44' => 'ðŸ‡±ðŸ‡¹ lituÃ¢nia',
	'45' => 'ðŸ‡­ðŸ‡· CroÃ¡cia',
	'46' => 'ðŸ‡¸ðŸ‡ª SuÃ©cia',
	'47' => 'ðŸ‡®ðŸ‡¶ Iraque',
	'48' => 'ðŸ‡§ðŸ‡¶ Paises Baixos',
	'49' => 'ðŸ‡±ðŸ‡» LetÃ´nia',
	'50' => 'ðŸ‡¦ðŸ‡¹ AustrÃ¡lia',
	'52' => 'ðŸ‡¹ðŸ‡­ TailÃ¢ndia',
	'53' => 'ðŸ‡¸ðŸ‡¦ ArÃ¡bia Saudita',
	'54' => 'ðŸ‡²ðŸ‡½ MÃ©xico',
	'55' => 'ðŸ‡¹ðŸ‡¼ Taiwan',
	'56' => 'ðŸ‡ªðŸ‡¸ Espanha',
	'57' => 'ðŸ‡®ðŸ‡· IrÃ£',
	'60' => 'ðŸ‡§ðŸ‡© Bangladesh',
	'61' => 'ðŸ‡¸ðŸ‡³ Senegal',
	'62' => 'ðŸ‡µðŸ‡ª Peru'
]);

/*

	Quando ativado esse sistema bloqueia por X minutos o usuario que cancelar mais de X nÃºmeros do mesmo serviÃ§o NO MESMO PAÃS durante as proximas 12h e remove X saldo do usuÃ¡rio em cada bloqueio.
	Para remover o bloqueio use /removeblock (id usuario)

*/
define ('ANTI_CANCELAMENTO', true); // ativa (true) ou desativa (false) sistema de verificaÃ§Ã£o de abuso de cancelamento
define ('TEMPO_BLOCK', 1800); // meia hora 1800 segundos
define ('CANCELAMENTO_MINIMO', 3); // quantidae minima de cancelamentos DO MESMO SERVIÃ‡O para bloquear um usuÃ¡rio
define ('VALOR_DESCONTO_BLOCK', 1); // valor descontado do saldo em cada bloqueio no bot

// SISTEMA DE BONÃ›S

// porcentagem bonus
define ('BONUS', 0); // 10%

define ('STATUS_BONUS_ADICAO', false); // status do sistema de bonus por sdicionar usuÃ¡rio
define ('BONUS_ADICAO', 0.50); // Bonus por adicionar usuario no nosso grupo, em reais
define ('MINIMO_ADICAO', 50); // Minimo de usuarios adicionados para ganhar bonus

// SISTEMA AFILIADOS

define ('STATUS_AFILIADO', true);
define ('BONUS_AFILIADO', 15); // 15% do valor de recarga do indicado
