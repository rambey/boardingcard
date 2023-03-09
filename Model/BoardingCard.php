<?php

namespace Model;

class BoardingCard
{
    private string $startPoint;
    private string $destination;
    private ?string $transportation;
    private ?string $seatAssignment;
    private ?string $gate;
    private ?string $baggageDrop;

    public function __construct(string $startPoint, string $destination, ?string $transportation, ?string $seatAssignment = null, ?string $gate = null, ?string $baggageDrop = null)
    {
        $this->startPoint = $startPoint;
        $this->destination = $destination;
        $this->transportation = $transportation;
        $this->seatAssignment = $seatAssignment;
        $this->gate = $gate;
        $this->baggageDrop = $baggageDrop;
    }

    /**
     * @return string
     */
    public function getStartPoint(): string
    {
        return $this->startPoint;
    }

    /**
     * @param string $startPoint
     */
    public function setStartPoint(string $startPoint): void
    {
        $this->startPoint = $startPoint;
    }

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @return string|null
     */
    public function getTransportation(): ?string
    {
        return $this->transportation;
    }

    /**
     * @param string|null $transportation
     */
    public function setTransportation(?string $transportation): void
    {
        $this->transportation = $transportation;
    }

    /**
     * @return string|null
     */
    public function getSeatAssignment(): ?string
    {
        return $this->seatAssignment;
    }

    /**
     * @param string|null $seatAssignment
     */
    public function setSeatAssignment(?string $seatAssignment): void
    {
        $this->seatAssignment = $seatAssignment;
    }

    /**
     * @return string|null
     */
    public function getGate(): ?string
    {
        return $this->gate;
    }

    /**
     * @param string|null $gate
     */
    public function setGate(?string $gate): void
    {
        $this->gate = $gate;
    }

    /**
     * @return string|null
     */
    public function getBaggageDrop(): ?string
    {
        return $this->baggageDrop;
    }

    /**
     * @param string|null $baggageDrop
     */
    public function setBaggageDrop(?string $baggageDrop): void
    {
        $this->baggageDrop = $baggageDrop;
    }
}
