# encantoMagico
Funcionalidades Principais
Cadastro de Clientes : Registre informações detalhadas sobre os clientes.
Cadastro de Fornecedores e Prestadores de Serviços : Gerencie os fornecedores e prestadores envolvidos nos eventos.
Cadastro de Produtos : Cadastre os produtos oferecidos nos eventos, incluindo descrição e valor.
Criação de Contratos : Gere contratos personalizados para cada evento.
Agendamento de Eventos : Utilize o FullCalendar para agendar e visualizar eventos com base nas seguintes informações:
Data e hora do evento
Nome do aniversariante
Nome do responsável pelo aniversariante
Produto oferecido
Valor do produto
Forma de pagamento (à vista ou a prazo)
Requisitos do Sistema
Para executar este sistema, você precisará dos seguintes componentes instalados:

Servidor Web : Apache ou Nginx
PHP : Versão 7.x ou superior
MySQL : Versão 5.x ou superior
Node.js (opcional): Para instalar dependências JavaScript, como o FullCalendar
Browser : Google Chrome, Firefox ou outro navegador moderno
Instalação
Siga as etapas abaixo para configurar o sistema em seu ambiente local:

1. Clone o Repositório
bash
Copiar
1
2
git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio
2. Configuração do Banco de Dados
Crie um banco de dados MySQL em seu servidor local ou remoto.
Importe o arquivo database.sql (ou equivalente) localizado na pasta sql do repositório para criar as tabelas necessárias.
bash
Copiar
1
mysql -u seu_usuario -p nome_do_banco < sql/database.sql
3. Configuração do Arquivo de Conexão
Edite o arquivo config.php (ou equivalente) para configurar as credenciais do banco de dados:

php
Copiar
1
2
3
4
5
6
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'seu_usuario');
define('DB_PASS', 'sua_senha');
define('DB_NAME', 'nome_do_banco');
?>
4. Inicie o Servidor Web
Certifique-se de que o servidor web (Apache ou Nginx) esteja em execução e aponte para a pasta do projeto.

5. Acesse o Sistema
Abra o navegador e acesse o sistema através do endereço:

Copiar
1
http://localhost/nome-do-projeto/
Estrutura do Projeto
A estrutura de arquivos do projeto segue o padrão abaixo:

Copiar
1
2
3
4
5
6
7
8
9
10
11
12
/projeto-festas
│
├── /css               # Arquivos de estilos CSS
├── /js                # Scripts JavaScript (inclui FullCalendar)
├── /sql               # Scripts SQL para criação do banco de dados
├── /includes          # Arquivos PHP de configuração e funções
├── /uploads           # Pasta para uploads de arquivos (contratos, imagens, etc.)
├── index.php          # Página inicial do sistema
├── cadastro-cliente.php # Página de cadastro de clientes
├── cadastro-evento.php  # Página de agendamento de eventos
├── config.php         # Configuração da conexão com o banco de dados
└── README.md          # Este arquivo
Como Usar o Sistema
Cadastro de Clientes
Acesse a página de Cadastro de Clientes .
Preencha os campos obrigatórios (nome, telefone, email, etc.).
Salve o cliente no banco de dados.
Agendamento de Eventos
Acesse a página de Agendamento de Eventos .
Selecione a data e hora desejadas no FullCalendar .
Preencha os campos:
Nome do aniversariante
Nome do responsável
Produto oferecido
Valor do produto
Forma de pagamento (à vista ou a prazo)
Confirme o agendamento.
Visualização de Eventos
Na página principal, utilize o FullCalendar para visualizar todos os eventos agendados. Clique em um evento para ver mais detalhes.
Contribuição
Contribuições são bem-vindas! Se você deseja melhorar este projeto, siga estas etapas:

Faça um fork do repositório.
Crie uma nova branch para sua modificação:
bash
Copiar
1
git checkout -b feature/nova-funcionalidade
Faça suas alterações e commit:
bash
Copiar
1
git commit -m "Adiciona nova funcionalidade"
Envie as alterações para o GitHub:
bash
Copiar
1
git push origin feature/nova-funcionalidade
Abra um Pull Request explicando suas alterações.
Licença
Este projeto está licenciado sob a MIT License . Isso significa que você pode usá-lo, modificá-lo e distribuí-lo livremente, desde que mantenha os créditos ao autor original.

Suporte
Se você encontrar problemas ou tiver sugestões, abra uma Issue neste repositório ou entre em contato diretamente com o autor.

Autor
Desenvolvido por Roberto Viñuales .
