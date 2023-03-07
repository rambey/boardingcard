<?php

namespace Model;

class BoardingCard
{
    private string $origin;
    private string $destination;
    private string $transportation;
    private ?string $seatAssignment;
    private ?string $gate;
    private ?string $baggageDrop;

    public function __construct(string $origin, string $destination, string $transportation, ?string $seatAssignment = null, ?string $gate = null, ?string $baggageDrop = null)
    {
        $this->origin = $origin;
        $this->destination = $destination;
        $this->transportation = $transportation;
        $this->seatAssignment = $seatAssignment;
        $this->gate = $gate;
        $this->baggageDrop = $baggageDrop;
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): void
    {
        $this->origin = $origin;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    public function getTransportation(): string
    {
        return $this->transportation;
    }

    public function setTransportation(string $transportation): void
    {
        $this->transportation = $transportation;
    }

    public function getSeatAssignment(): ?string
    {
        return $this->seatAssignment;
    }

    public function setSeatAssignment(?string $seatAssignment): void
    {
        $this->seatAssignment = $seatAssignment;
    }

    public function getGate(): ?string
    {
        return $this->gate;
    }

    public function setGate(?string $gate): void
    {
        $this->gate = $gate;
    }

    public function getBaggageDrop(): ?string
    {
        return $this->baggageDrop;
    }

    public function setBaggageDrop(?string $baggageDrop): void
    {
        $this->baggageDrop = $baggageDrop;
    }
}
