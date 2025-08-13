# Treinamento PontoGOV Sistemas - Projeto Pr�tico IV

## **Enunciado**

Este exerc�cio tem como objetivo introduzir os fundamentos do PHP com foco em **requisi��es**, **controle de fluxo** e **manipula��o de dados**. Dividido em duas etapas, o desafio come�a com a compreens�o das vari�veis globais (`$_GET`, `$_POST`, `$_SERVER`) e termina com a constru��o de um **controller simples** baseado no padr�o usado pela empresa, com l�gica de c�lculo.

---

### **Etapa 1: Explorando Requisi��es em PHP**

Crie um pequeno sistema com dois arquivos PHP (`.php`), um ir� conter o conte�do HTML com um formul�rio e o outro um script PHP que **recebe e processa os dados via POST**.

#### **Requisitos B�sicos (obrigat�rios)**

- O formul�rio deve solicitar os seguintes campos:
  - Nome
  - Idade
  - G�nero (Masculino/Feminino/Outro)
- Ao submeter, os dados devem ser enviados para o outro arquivo PHP onde deve-se:
  - Imprimir todos os dados recebidos em forma de string (use `echo`) e tamb�m:
    - Mostrar a idade do usu�rio em 10 anos;
    - Informar se a pessoa � maior de idade.
- Ao retronar a requisi��o, deve imprimir a resposta com `console.log`

### **Desafios Extras (opcionais)**

- Capture e exiba o **IP do usu�rio** usando `$_SERVER`.
- Mostre o **User-Agent** do navegador.
- Validar se idade � um n�mero inteiro
- Exibir a data/hora da requisi��o (timestamp formatado com `date()`)

---

### **Etapa 2: Controller com l�gica de aprova��o**

Crie um **controller simples** (`controller.php`) que responda a diferentes a��es com base em um par�metro `action` enviado via `GET`. Cada a��o deve executar uma l�gica espec�fica.

#### **Requisitos B�sicos (obrigat�rios)**

1. A��o para calcular a m�dia do aluno (`action=calcularMedia`):
   - Recebe 4 notas via `POST`, calcula a m�dia e retorna a situa��o:
     - M�dia >= 7 ? Aprovado
     - M�dia >= 5 ? Recupera��o
     - M�dia < 5 ? Reprovado
   - Extras (opcionais):
     - Exibir tamb�m a maior e menor nota recebida;
     - Exibir nota necess�ria para atingir m�dia 7 (se ficar em recupera��o).

2. A��o para calcular ao �ndice de Massa Corporal - IMC (`action=calcularIMC`):
   - Recebe peso e altura via `POST` e retorna o IMC e sua classifica��o com base em:
     - IMC < 18.5: Abaixo do peso
     - IMC < 25: Peso normal
     - IMC < 30: Sobrepeso
     - IMC >= 30: Obesidade
 - Extras (opcionais):
   - Calcular o peso ideal da pessoa com base na f�rmula do IMC 22 (padr�o de refer�ncia saud�vel): `peso_ideal = 22 * (altura ^ 2)`

3. A��o para calcular ao �ndice de Massa Corporal - IMC (`action=calcularIMC`):
  - Recebe uma data-alvo (`YYYY-MM-DD`) via `GET` e retorna:
    - Dias, horas e minutos restantes at� a data
    - Informa se a data j� passou
    - Se a data j� passou, informar h� quanto tempo ela passou.
 - Extras (opcionais):
   - Permitir comparar com hora exata (GET?hora=HH:MM) al�m da data.

#### **Formato de resposta**

- Todas as respostas devem ser retornadas em **JSON** com os dados de resposta.

---

### **Observa��es**

- Crie uma pasta para cada etapa.
- Prefer�ncia por identa��o clara e uso de `isset`/`empty` para valida��es
- Mantenha as boas pr�ticas e padr�es de c�digo adotados pela empresa.
- Use mensagens de commit claras e sem�nticas.