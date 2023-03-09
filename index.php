<?php
ini_set('max_execution_time', -1);
require_once 'Controller/BoardingCardController.php';
require_once 'Model/BoardingCard.php';

use Controller\BoardingCardController;
use Model\BoardingCard;

// Create an array of boarding cards with different orders and attributes
$boardingCards = [
    new BoardingCard("Gerona Airport", "Stockholm", "3A", "45B", "ticket counter 344", "flight SK455"),
    new BoardingCard("Madrid", "Barcelona", "45B", null, null, "train 78A"),
    new BoardingCard("Barcelona", "Gerona Airport", "", null, null, "airport bus"),
    new BoardingCard("Stockholm", "New York JFK", "7B", "22", "automatic", "flight SK22")
];

// Create an instance of the BoardingCardController
$controller = new BoardingCardController();

// Sort the boarding cards
$sortedCards = $controller->sortBoardingCards($boardingCards);

// Display the sorted boarding cards
$controller->displayBoardingCards($sortedCards);

