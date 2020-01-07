# PontoCLT Api

# Introdução

Este repositório é parte de um projeto real que será utilizado em produção no início de 2020.

Tem como intensão primária ensinar PHP sem nenhum framework para devs juriores seguindo boas práticas, como clean code, 
git e testes unitários. Em segundo lugar a intensão desse projeto é criar uma API real para um projeto real de registro 
de ponto para funcionários de empresas.

**Todo o código de produção será gerado pelos alunos**, apenas scripts de organização de ambiente que serão realizados
pelos professores e explicados minusiosamente aos alunos.
Estamos seguindo o parcialmente a metodologia Kanban usando o [Trello](https://trello.com/b/ljki55rX/pontoclt) para 
organizar o projeto.

# Professores
## Andre Antunes Vieira
CTO (Diretor de tecnologia) em [Me Salva!](https://www.mesalva.com)
- [Linkedin](https://linkedin.com/in/andreantunesvieira)
- [Github](https://github.com/andreantunesvieira)

# Alunos
## Andrew Amorin Ermel
Desenvolvedor backend Jr.
- [Linkedin](https://www.linkedin.com/in/andrew-ermel-7465ba16a)
- [Github](https://github.com/andrewermel)

# Pré-Requisitos
Este projeto assume que todos os alunos já possuem conhecimento básico de PHP e SQL, a ideia aqui é melhorar as skills destes alunos e não ensinar do zero.

# Fases do projeto

- [x] *Procedural simples:* Na primeira fase a ideia é resolver as tarefas de backend descritas no Trello da forma mais 
simples possível, sem camada de segurança, sem bibliotecas de terceiros, mas seguindo boas práticas: arquivos pequenos, 
códigos repedidos extraídos para funções, versionando todas as alterações com git, incluindo alterações debanco de dados
com migrations (manualmente).

- [ ] **Camada de segurança simples:** Adicionar Basic Authentication. Com rota de login e header de autenticação em todas
as requisições.

- [ ] **MVC:** Transformar o projeto para arquitetura MVC (sem a camada de view por ser uma API)

- [ ] **Framework:** Adicionar algum framework ou micro-framework popular para ajudar a organizar o projeto.

- [ ] **Testes unitários:** Depois de já ter várias funções, será introduzido o conceito de testes unitários, para 
garantir que refatorações futuras.

- [ ] **Refatoração completa:** Depois de todos os conceitos de boas práticas já terem sido tocados, chega a hora de
garantir que todo o projeto se ajuste a elas. Aqui a ideia é aumentar o teste coverage, diminuir o tamanho das funções,
dividir responsabilidades.
