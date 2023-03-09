<?php

namespace Tests;

use Controller\BoardingCardController;
use Model\BoardingCard;
use PHPUnit\Framework\TestCase;

class BoardingCardSorterTest extends TestCase
{
    public function testSortBoardingCards(): void
    {
        // Test case with 4 boarding cards in random order
        $boardingCards = [
            new BoardingCard("Gerona Airport", "Stockholm", "3A", "45B", "ticket counter 344", "flight SK455"),
            new BoardingCard("Madrid", "Barcelona", "45B", null, null, "train 78A"),
            new BoardingCard("Barcelona", "Gerona Airport", "", null, null, "airport bus"),
            new BoardingCard("Stockholm", "New York JFK", "7B", "22", "automatic", "flight SK22")
        ];
        $boardingCardController = new BoardingCardController();
        $expectedResult = [
            $boardingCards[1],
            $boardingCards[2],
            $boardingCards[0],
            $boardingCards[3]
        ];
        $this->assertEquals($expectedResult, $boardingCardController->sortBoardingCards($boardingCards));
    }

    // Test case with 2 boarding cards in reverse order
    public function testSortBoardingCardsReverseOrder(): void
    {
        $boardingCards = [
            new BoardingCard("Barcelona", "Gerona Airport", null, null, null, "airport bus"),
            new BoardingCard("Madrid", "Barcelona", "45B", null, null, "train 78A")
        ];
        $expectedResult = [
            $boardingCards[1],
            $boardingCards[0]
        ];
        $boardingCardController = new BoardingCardController();
        $this->assertEquals($expectedResult, $boardingCardController->sortBoardingCards($boardingCards));
    }

    // Test case with 1 boarding card
    public function testSortBoardingCard(): void
    {
        $boardingCards = [
            new BoardingCard("Madrid", "Barcelona", "45B", null, null, "train 78A")
        ];
        $expectedResult = [
            $boardingCards[0]
        ];
        $boardingCardController = new BoardingCardController();
        $this->assertEquals($expectedResult, $boardingCardController->sortBoardingCards($boardingCards));
    }
}