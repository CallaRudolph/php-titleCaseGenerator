
# Title Case Generator
##### _Exercise in Behavior-Driven Development with PHP Testing, 07.03.17_

#### By Calla Rudolph (<callarudolph@gmail.com>)

## Description

This web application allows users to input a string of words, and the program will convert them to proper title case. This is a practice in using Behavior Driven Development PHP with the Silex micro framework and twig templates. It was tested step by step using PHPUnit.

## Setup

* Open GitHub site on your browser: https://github.com/CallaRudolph/php-titleCaseGenerator
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
    * type 'cd desktop' and press enter
    * type 'git clone' then copy the repository link and press enter
    * type 'cd php-titleCaseGenerator' to access the document root (project folder) on your computer
    * type 'composer install' to download dependencies (Silex & Twig)
    * type 'cd web' to access web folder, then type 'php -S localhost:8000' to open local server
* Open browser and type 'localhost:8000' to view app.
* Enter in a word or phrase, and you will see the title case version!
* Click the link on the results page to return home.

## Specifications
* It should inform the user to input an entry if the field is left blank.
    * Input: " "
    * Output: "Please fill out this field."
* It capitalizes the first letter of a single word.
    * Input: 'mermaid'
    * Output: 'Mermaid'
* It capitalizes the first letter of a multiple word string.
    * Input: 'little mermaid'
    * Output: 'Little Mermaid'
* It does not capitalize designated words (prepositions, conjunctions, etc.)
    * Input: 'into the wild'
    * Output: 'Into the Wild'
* It capitalizes designated words if they are the first word.
    * Input: 'the little mermaid'
    * Output: 'The Little Mermaid'
* It handles non-letter characters.
    * Input: 'the 3 little mermaids!'
    * Output: 'The 3 Little Mermaids!'
* It manages all uppercase entries.
  * Input: 'MERMAID'
  * Output: 'Mermaid'
* It manages mixed case entries.
  * Input: 'tHe LiTtLe mErMaId'
  * Input: 'The Little Mermaid'

## Known Bugs

* A future version should convert 'Mc' properly.
  * Input: 'mcdonald'
  * Output: 'McDonald'

## Technologies Used

PHP, Silex, Twig, PHPUnit, CSS, HTML5

### License
This software is licensed under the MIT license.

Copyright &copy; 2017 **_Calla Rudolph_**
