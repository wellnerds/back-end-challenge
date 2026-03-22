<<<<<<< HEAD
# Back-end Challenge

Desafio para os futuros programadores back-end da Apiki.

## Introdução

Desenvolva uma **REST API** que faça conversão de moedas.

**Especifícações**:

* A URL da requisição deve seguir o seguinte formato:
   * http://localhost:8000/exchange/{amount}/{from}/{to}/{rate}
   * http://localhost:8000/exchange/10/BRL/USD/4.50
* A resposta deve seguir o seguinte formato:
   ```json
   {
     "valorConvertido": 45,
     "simboloMoeda": "$"
   }
   ```
* Conversões:
    * De Real para Dólar;
    * De Dólar para Real;
    * De Real para Euro;
    * De Euro para Real;
* Serão executados testes automatizados para validação dos requisitos:
   * Levantar servidor embutido do PHP: `php -S localhost:8000 src/index.php`;
   * Executando testes: `composer test`;
   * Executando lint: `composer lint`;

## Instruções

1. Efetue o fork deste repositório e crie um branch com o seu nome e sobrenome. (exemplo: fulano-dasilva)
2. Após finalizar o desafio, crie um Pull Request.
3. Aguarde algum contribuidor realizar o code review.
 
*Obs.: Não esqueça de executar o `composer test` e `composer lint` localmente.*

## Pré-requisitos

* PHP => 7.4
* Orientado a objetos

## Dúvidas

Em caso de dúvidas, crie uma issue.
=======
# 💱 Currency Exchange API

API REST desenvolvida em PHP para conversão de moedas, como parte de um teste técnico backend.

---

## 📌 Objetivo

Implementar uma API REST capaz de realizar conversões entre moedas utilizando uma taxa de conversão informada via URL.

---

## 🚀 Tecnologias utilizadas

* PHP 7.4+ (compatível com 8.x)
* Composer (autoload PSR-4)
* PHPUnit (testes automatizados)
* PHP Built-in Server

---

## 📂 Estrutura do projeto

```
.
├── src/
│   ├── Controller/
│   │   └── ExchangeController.php
│   ├── Service/
│   │   └── ExchangeService.php
│   └── index.php
├── tests/
│   └── ExchangeServiceTest.php
├── composer.json
├── phpunit.xml
└── README.md
```

---

## ▶️ Como executar o projeto

### 1. Instalar dependências

```bash
composer install
```

---

### 2. Subir o servidor

```bash
php -S localhost:8000 src/index.php
```

---

### 3. Acessar a API

Formato da URL:

```
http://localhost:8000/exchange/{amount}/{from}/{to}/{rate}
```

### Exemplo:

```
http://localhost:8000/exchange/10/BRL/USD/4.5
```

---

## 📥 Exemplo de resposta

```json
{
  "valorConvertido": 45,
  "simboloMoeda": "$"
}
```

---

## 💱 Conversões suportadas

* BRL → USD
* USD → BRL
* BRL → EUR
* EUR → BRL

---

## ⚠️ Regras de negócio

* A taxa de conversão (`rate`) deve ser informada na URL
* Apenas conversões pré-definidas são permitidas
* Conversões inválidas retornam erro

---

## ❌ Tratamento de erros

A API retorna erros em formato JSON:

```json
{
  "error": "Conversão não suportada"
}
```

---

## 🧪 Testes automatizados

Executar testes:

```bash
composer test
```

---

## 🔍 Lint do projeto

```bash
composer lint
```

---

## 🧠 Arquitetura

O projeto segue princípios de separação de responsabilidades:

* **Controller** → responsável pela entrada e saída da requisição
* **Service** → responsável pela regra de negócio
* **Autoload PSR-4** → organização e carregamento automático de classes

---

## ✅ Boas práticas aplicadas

* Orientação a objetos
* Separação de camadas
* Tratamento de exceções
* Padronização de resposta JSON
* Uso de Composer para autoload
* Dependências não versionadas (`vendor/` ignorado via `.gitignore`)

---

## 🔮 Possíveis melhorias

* Integração com API externa de cotação em tempo real
* Implementação de Value Objects (Money, Currency)
* Middleware para tratamento global de erros
* Testes de integração HTTP
* Containerização com Docker

---

## 👨‍💻 Autor

Desenvolvido por Wellington Ferreira da Silva

---

## 📄 Licença

Este projeto foi desenvolvido apenas para fins de avaliação técnica.
>>>>>>> d3f7f4c (feat: implement currency conversion service)
