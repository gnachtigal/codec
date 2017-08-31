# Cifra de César

Em criptografia, a Cifra de César, também conhecida como cifra de troca, código de César ou troca de César,
é uma das mais simples e conhecidas técnicas de criptografia. É um tipo de cifra de substituição na qual cada
letra do texto é substituída por outra, que se apresenta no alfabeto acima dela um número fixo de vezes.

Por exemplo, com uma troca de três posições, **A** seria substituído por **D**, **B** se tornaria **E**, e assim por diante.
O nome do método é em homenagem a Júlio César, que o usou para se comunicar com os seus generais.

#### [Usando uma chave 3]
**Normal**:  ABCDEFGHIJKLMNOPQRSTUVWXYZ
**Cifrado**: DEFGHIJKLMNOPQRSTUVWXYZABC

## Utilizando o sistema:
Nosso sistema é composto por duas funções: *cifrar* e *decifrar*, ambas utilizando **chaves**.

Para *cifrar* uma mensagem, o usuário deve digitar o texto desejado no campo indicado, escolher um número para a chave e clicar em **[cifrar]**.
O resultado da cifra será exibido em um textbox logo abaixo.

Já para *decifrar* uma mensagem encriptada pelo código de César, o usuário deve inserir o seu texto no campo indicado, informar a chave que foi utilizada para a cifra e então clicar em **[decifrar]**.
A mensagem decifrada será exibida em um textbox logo abaixo.


## Desenvolvimento

Para o desenvolvimento do sistema foi utilizado como linguagem de programação o **PHP**, juntamente com [JQuery](https://github.com/jquery/jquery) e [Bootstrap](http://getbootstrap.com/).
O programa funciona de modo simples e direto, onde a string inserida pelo usuário passa por um método que *cifra* ou *decifra* a mensagem, retornando um novo texto.

Ao todo, o programa é composto por 5 arquivos:

- [index.php](../gnachtigal/codec/index.php) | *Página principal onde está presente o html no qual o programa funciona*
- [cifrar.php](../gnachtigal/codec/cifrar.php) | *Página **PHP** onde é executado o método **cifrar** da classe*
- [decifrar.php](../gnachtigal/codec/cifrar.php) | *Página **PHP** onde é executado o método **decifrar** da classe*
- [ClasseCifraCesar.php](../gnachtigal/codec/ClasseCifraCesar.php) | *Classe **PHP** composta por todos os métodos necessários para execução do programa*
- [cesar.js](../gnachtigal/codec/cesar.js) | *Arquivo **javascript** onde é executado o **AJAX** para atualização dos resultados obtidos pela execução do programa*

#### Classe [CifraCesar](../gnachtigal/codec/ClasseCifraCesar.php)

A classe é composta por 4 métodos principais:
- criptografa() | *Utilizada para chamar o método **executar()** de modo que criptografe uma mensagem*
- decriptografa() | *Utilizada para chamar o método **executar()** de modo que decriptografe uma mensagem*
- executar() | *Separa a string em um array e retorna o texto cifrado ou decifrado (dependendo se a chave é positiva ou negativa) chamando o método **embaralha()***
- embaralha() | *Método principal o qual soma para cada caractere da string o número indicado pela chave e retorna a mensagem obtida.*

E dois métodos auxiliares:
- wrapLowercase() | *Funciona buscando o respectivo caractere minúsculo dentro da tabela ASCII*
- wrapUppercase() | *Funciona buscando o respectivo caractere maiúsculo dentro da tabela ASCII*

---

> Desenvolvido no ano de 2017 por [Gabriel Nachtigal](https://github.com/gnachtigal) e [Tales Igor Vieira](https://github.com/Talesigor)
> Trabalho ministrado pelo professor [Raffael Bottoli Schemmer](https://github.com/RaffaelSchemmer), do Institudo Federal do Rio Grande do Sul - Campus Restinga
