<h1 align="center">
  <img src=".github/icon.png">
  <br>
    Upload Avatar
  <br>
</h1>

<h4 align="center">
  Upload com redimensionamento de imagens em PHP, arquitetura MVC, progresso de upload, Axios, Fetch API, Mysql, OOP e muito mais.
</h4>

<br />

<p align="center">Data de criação: ***Jul 25, 2023***</p>

<p align="center">
  <img src="https://img.shields.io/github/last-commit/ericneves/uploadAvatar?style=flat-square&logo=github&logoColor=white&color=green">
  <img src="https://img.shields.io/github/languages/top/ericneves/uploadAvatar?style=flat-square&logo=php&logoColor=white&labelColor=blue">
  <img src="https://img.shields.io/github/license/ericneves/simpleCRUDMVC?style=flat-square&logo=github&color=yellow">
</p>

<p align="center">
  <a href="#features">Features</a> •
  <a href="#how-to-use">How to User ?</a>
</p>

![Screenshot1](.github/screenshotA.png)
![Screenshot2](.github/screenshotB.png)

Website: [Upload Avatar](https://resizeimage-ericneves.000webhostapp.com/)

### Features

A aplicação explora vários recursos da linguagem <b>PHP</b>, como a funcionalidade <b>GD</b> para redimensionar as imagens. 

O sistema utiliza a arquitetura <b>MVC</b>, juntamente com recursos de funcionalidades assíncronas do <b>Javascript</b>, como a biblioteca <b>Axios</b> e <b>Fetch API</b>.

Além do mais, o upload das imagens são feitos no formato <b>BLOB (Binary Large Object)</b>, sem a necessidade de armazenar arquivos no <b>servidor</b> ou em uma <b>CDN</b>, diminuindo a necessidade do uso de recursos.

As imagens são expostas através do <b>header</b>, tendo o conteúdo definido como <b>image/jpeg</b> a partir de uma <b>URL</b> com o <b>ID</b> na imagem.

* PHP
  - <b>Version: >= 8</b>
  - <b>PDO (SQL)</b>
  - <b>OOP</b>
  - <b>SPL - Autoload</b>
  - <b>GB</b>
* SQL
  - <b>DDL / DML (BLOB)</b>
* Javascript
  - <b>Fetch API (Async)</b>
  - <b>Axios (Async)</b>
  - <b>Dropdown</b>
* HTML/CSS

### How to use

Segue-se alguns passos para a execução da aplicação:

- Iniciar o servidor <b>Apache</b> e o <b>Mysql</b>.

- Copie a pasta do projeto para dentro do servidor <b>Apache</b>.

- Configure o arquivo <b>config.php</b> com suas credenciais de banco de dados e edite o <b>BASE_URL</b> conforme a o local do projeto, inclua a pasta <b>/app</b>.

- Ativar o ModRewrite: <b>comando via terminal</b>: ```a2enmod rewrite``` ou habilitar nas configurações do <b>Apache</b>.

- Executar os comandos <b>DDL</b> e <b>DML</b> do arquivo <b>database.sql</b>, o arquivo se encontra na raiz do projeto.


### License 📃

<img src="https://img.shields.io/github/license/ericneves/simpleCRUDMVC?style=flat-square&logo=github&color=yellow" alt="License">

---

### Author 🧑‍💻
><a href="https://www.instagram.com/ericneves_dev/"><img src="https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white"></a> <a href="https://linkedin.com/in/ericnevesrr"> <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white"></a>
