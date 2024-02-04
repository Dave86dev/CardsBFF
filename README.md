## The Jurassic Cards Backend for Frontend - Full Stack Developer

<details>
  <summary>Index 📝</summary>
  <ol>
    <li><a href="#goals">Goals</a></li>
    <li><a href="#about-the-project">About the project</a></li>
    <li><a href="#stack">Stack</a></li>
    <li><a href="#local-installation">Local installation</a></li>
    <li><a href="#endpoints">Endpoints</a></li>
    <li><a href="#dev">Dev</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

## Goals

The main objective of the current application is to create a Backend for Frontend (BFF) application that is capable of supplying information to a Single Page Application (SPA) frontend. In this case it will process data from an external API. (https://dinosaur-facts-api.shultzlab.com/dinosaurs)

## About the project

Work in progress!

## Stack

<div align="center">
<a href="https://www.php.net/">
    <img src= "https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"/>
</a>
<a href="https://laravel.com/">
    <img src= "https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white"/>
</a>
 </div>

## Deploy

NOT YET!

## Local installation

1. Clone repository
2. `$ npm install`
3. `composer install`
4. We install all the dependencies listed at composer.json

## Endpoints

<details>
<summary>Endpoints</summary>

-   CARD INFORMATION PROCESS

    -   DINOSAUR CARD MODEL
        body:

        ```js
            {
                "Name": "Carcharodontosaurus",
                "Description": "Its name means \"great white shark lizard.\" Impressed yet?"
            }
        ```

    -   CARD SORT & DATA FETCH

              GET http://localhost:8000/api/cards

</details>

## Dev:

Developed by David Ochando Blasco.

## Contact

-   **David Ochando Blasco** - Project Developer
    -   [GitHub](https://github.com/Dave86dev) - [LinkedIn](https://www.linkedin.com/in/david-ochando-blasco-90b2ba1a/)
