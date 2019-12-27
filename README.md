# PontoCLT Api

# Introdução

Este repositório é parte de um projeto real que será utilizado em produção no início de 2020.

Tem como intensão primária ensinar PHP sem nenhum framework para devs juriores seguindo boas práticas, como clean code, 
git e testes unitários. Em segundo lugar a intensão desse projeto é criar uma API real para um projeto real de registro 
de ponto para funcionários de empresas.

Estamos seguindo o parcialmente a metodologia Kanban usando o [Trello](https://trello.com/b/ljki55rX/pontoclt) para 
organizar o projeto.

# Professores
## Andre Antunes Vieira
CTO (Diretor de tecnologia) em [Me Salva!](https://www.mesalva.com)
- [Linkedin](https://linkedin.com/in/andreantunesvieira)
- [Github](https://github.com/andreantunesvieira)

# Alunos
## Andrew Amorin Ermel
Desenvolvedor backend desde janeiro de 2019.
- [Linkedin](https://www.linkedin.com/in/andrew-ermel-7465ba16a)
- [Github](https://github.com/andrewermel)

# Fases do projeto

- [x] *Procedural simples:* Na primeira fase a ideia é resolver as tarefas de backend descritas no Trello da forma mais 
simples possível, sem camada de segurança, sem bibliotecas de terceiros, mas seguindo boas práticas: arquivos pequenos, 
códigos repedidos extraídos para funções, versionando todas as alterações no banco de dados com migrations (manualmente).

- [ ] *Camada de segurança simples*: Adicionar Basic Authentication. Com rota de login e header de autenticação em todas
as requisições.

- [ ] *MVC:* Transformar o projeto para arquitetura MVC (sem a camada de view por ser uma API)

- [ ] *Framework:* adicionar algum framework ou micro-framework popular para ajudar a organizar o projeto e   