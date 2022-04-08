<?php

declare(strict_types=1);

namespace Worldline\Sips\Common\Fields;

/**
 * Class TravelContext.
 */
class TravelContext extends Field
{
    private ?string $departureDate = null;

    private ?string $passengerName = null;

    private ?string $originAirport = null;

    private ?int $numberOfRoutingCities = null;

    private ?array $routingCityList = null;

    private ?int $numberOfAirlineCarriers = null;

    private ?array $airlineCarrierList = null;

    private ?string $fareBasis = null;

    private ?int $numberOfPassengers = null;

    private ?string $destinationAirport = null;

    private ?string $reservationCode = null;

    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }

    public function setDepartureDate(?string $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    public function getPassengerName(): ?string
    {
        return $this->passengerName;
    }

    public function setPassengerName(?string $passengerName): self
    {
        $this->passengerName = $passengerName;

        return $this;
    }

    public function getOriginAirport(): ?string
    {
        return $this->originAirport;
    }

    public function setOriginAirport(?string $originAirport): self
    {
        $this->originAirport = $originAirport;

        return $this;
    }

    public function getNumberOfRoutingCities(): ?int
    {
        return $this->numberOfRoutingCities;
    }

    public function setNumberOfRoutingCities(
        ?int $numberOfRoutingCities
    ): self {
        $this->numberOfRoutingCities = $numberOfRoutingCities;

        return $this;
    }

    public function getRoutingCityList(): ?array
    {
        return $this->routingCityList;
    }

    public function setRoutingCityList(?array $routingCityList): self
    {
        $this->routingCityList = $routingCityList;

        return $this;
    }

    public function getNumberOfAirlineCarriers(): ?int
    {
        return $this->numberOfAirlineCarriers;
    }

    public function setNumberOfAirlineCarriers(
        ?int $numberOfAirlineCarriers
    ): self {
        $this->numberOfAirlineCarriers = $numberOfAirlineCarriers;

        return $this;
    }

    public function getAirlineCarrierList(): ?array
    {
        return $this->airlineCarrierList;
    }

    public function setAirlineCarrierList(
        ?array $airlineCarrierList
    ): self {
        $this->airlineCarrierList = $airlineCarrierList;

        return $this;
    }

    public function getFareBasis(): ?string
    {
        return $this->fareBasis;
    }

    public function setFareBasis(?string $fareBasis): self
    {
        $this->fareBasis = $fareBasis;

        return $this;
    }

    public function getNumberOfPassengers(): ?int
    {
        return $this->numberOfPassengers;
    }

    public function setNumberOfPassengers(
        ?int $numberOfPassengers
    ): self {
        $this->numberOfPassengers = $numberOfPassengers;

        return $this;
    }

    public function getDestinationAirport(): ?string
    {
        return $this->destinationAirport;
    }

    public function setDestinationAirport(
        ?string $destinationAirport
    ): self {
        $this->destinationAirport = $destinationAirport;

        return $this;
    }

    public function getReservationCode(): ?string
    {
        return $this->reservationCode;
    }

    public function setReservationCode(?string $reservationCode): self
    {
        $this->reservationCode = $reservationCode;

        return $this;
    }
}
