## The Cards Game AOE - Full Stack Developer

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

The main objective of the current application is to create a Backend for Frontend (BFF) application that is capable of supplying information to a Single Page Application (SPA) frontend. In this case it will process data from an external API. (https://opensource.aoe.com/the-card-game-data/player.json)

## About the project


Some of the key points in the development of this application have been, on the one hand, securing incoming information at the "/submit" endpoint by checking that the input data is not empty and, at the same time, contains a player that exists in the information provided by the API.

The second point has occurred at the "/cards" endpoint where we have verified that if the information in the "sort" variable is empty, we also proceed to return the default ascending order in which the cards were originally presented.

## Deploy 
<div align="center">
    <a href="https://cardsbff-production.up.railway.app/"><strong>BFF Production Url </strong></a>
</div>

## Stack
<div align="center">
<a href="https://www.php.net/">
    <img src= "https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"/>
</a>
<a href="https://laravel.com/">
    <img src= "https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white"/>
</a>
 </div>

## Local installation
1. Clone repository
2. ` $ npm install `
3. `composer install`
4. We install all the dependencies listed at composer.json

## Endpoints
<details>
<summary>Endpoints</summary>

- CARD INFORMATION PROCESS
    - PLAYER SUBMIT

            POST http://localhost:8000/api/submit
        body:
        ``` js
            {
                "realName": "Esmeralda Carrillo",
                "playerName": "Skulldart",
                "asset": "Yellow Orichalcum Of Paladins"
            }
        ```

    - CARD SORT & DATA FETCH

            GET http://localhost:8000/api/cards
        
</details>

## Dev:

Developed by David Ochando Blasco. 

## Contact

- ***David Ochando***  
<a href = "mailto:davidochando1986@gmail.com"><img src="https://img.shields.io/badge/Gmail-C6362C?style=for-the-badge&logo=gmail&logoColor=white" target="_blank"></a>
<a href="https://github.com/Dave86dev" target="_blank"><img src="https://img.shields.io/badge/github-24292F?style=for-the-badge&logo=github&logoColor=green" target="_blank"></a> 
