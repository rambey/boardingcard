<?php

namespace Controller;

use Model\BoardingCard;

class BoardingCardController
{
    /**
     * sort array of BoardingCard
     * @param BoardingCard[] $boardingCards
     * @return BoardingCard[]
     */
    public function sortBoardingCards(array $boardingCards): array
    {
        $sortedCards = [];
        $startingCard = null;
        // find starting point
        foreach ($boardingCards as $card) {
            $found = false;
            foreach ($boardingCards as $innerCard) {
                if ($card->getStartPoint() == $innerCard->getDestination()) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $startingCard = $card;
                break;
            }
        }
        // add starting card to sorted array
        if ($startingCard !== null) {
            array_push($sortedCards, $startingCard);
        }

        // find next card for each card and add to sorted array
        while (count($sortedCards) < count($boardingCards)) {
            foreach ($boardingCards as $card) {
                $end = end($sortedCards);
                if ($end !== false && $card->getStartPoint() == $end->getDestination()) {
                    array_push($sortedCards, $card);
                }
            }
            // exit early if all cards are sorted
            if (count($sortedCards) == count($boardingCards)) {
                break;
            }
        }
        return $sortedCards;
    }

    /**
     * display sorted Cards
     * @param BoardingCard[] $sortedCards
     * @return void
     */
    function displayBoardingCards(array $sortedCards):void {
        $i = 1;
        foreach ($sortedCards as $card) {
            echo "$i. Take " . $card->getTransportation() . " from " . $card->getStartPoint() . " to " . $card->getDestination() . ".";
            if ($card->getSeatAssignment()) {
                echo " Sit in seat " . $card->getSeatAssignment() . ".";
            }
            if ($card->getGate()) {
                echo " Gate " . $card->getGate() . ".";
            }
            if ($card->getBaggageDrop()) {
                echo " Baggage drop at " . $card->getBaggageDrop() . ".";
            }
            echo "<br>";
            $i++;
        }
        echo "$i. You have arrived at your final destination.<br>";
    }
}