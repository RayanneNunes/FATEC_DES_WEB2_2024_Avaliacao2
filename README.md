## FATEC_DES_WEB2_2024_Avaliacao2
Segunda avaliação Desenvolvimento web 2

#  Desafio Técnico

Um sistema de controle de vagas de estágio desempenha um papel crucial na gestão e organização do processo de recrutamento, tanto para as instituições de ensino quanto para as empresas e estudantes. Em um ambiente acadêmico, onde a busca por oportunidades de estágio é constante, um sistema estruturado é essencial para facilitar o acompanhamento e garantir que o processo seja transparente e acessível.

Crie um cadastro em PHP para os coordenadores de estágios da Fatec Araras possam divulgar vagas de estágio. Os campos que devem estar cadastrados são: 

 - Nome da Empresa (varchar[100] )
 - Número Whatsapp (varchar[20] )
 - E-mail contato (varchar[30] )
 - Breve descritivo da vaga (varchar[255] )
 - Curso (varchar[2])
 - - 1 para DSM
 - - 2 para GE
  
![alt text](use_case.png)

### 1- Classe Cadastro (40% da nota)
- Toda a manipulação de dados no banco de dados deve ocorrer dentro da classe Cadastro. Esta classe deve ser criada dentro do diretório <b>classes</b>.
- No método construtor, deve ser criado a conexão com o banco de dados MySQL 
- No método destrutor a conexão precisa ser fechada. 
- Os demais métodos, você deve criar com os nomes e argumentos que julgar apropriados.
- Esta classe deve encapsular a responsabilidade de cadastrar e remover vagas.

### 2- Cadastrar Vagas (20% da nota)
- Cadastrar os campos supracitados no banco de dados MySQL. <b>Será possível realizar o cadastro somente em uma sessão ativa</b>.

- Seu sistema terá um botão "Cadastrar vaga" (arquivo home.php) que irá direcionar a uma página para o recebimento dos parâmetros.

- Os dados recebidos via input devem ser passado como parâmetros dos métodos da classe criada por você ( classe Cadastro).

### 3- Remover Vagas (20% da nota)
- Remover uma vaga pelo ID <b>Será possível remover somente em uma sessão ativa</b>.

- Seu sistema terá um botão "Remover vaga" (arquivo home.php) que irá direcionar a uma página para o recebimento do ID. Você pode optar por combobox, caixa de entrada (textbox) ou outra forma que achar conveniente.

- Os dados recebidos via input devem ser passado como parâmetros dos métodos da classe criada por você ( classe Cadastro).

### 3- Listar todas as vagas (20% da nota)
- <b>Em uma área de sessão</b>, permitir ler todas as vagas de estágio cadastradas no banco de dados. Caso não esteja em uma sessão ativa, redirecionar para a área de login.

- Seu sistema terá um botão "Visualizar vagas" ( arquivo home.php). Ao clicar, deve carregar uma página php, que irá acessar todas as vagas cadastradas e e apresentar ao usuário logado.

