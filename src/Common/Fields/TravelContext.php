<?php


namespace Worldline\Sips\Common\Fields;


/**
 * Class TravelContext
 * @package Worldline\Sips\Common\Fields
 */
class TravelContext extends Field
{
    /**
     * @var null|string
     */
    protected $departureDate;

    /**
     * @var null|string
     */
    protected $passengerName;

    /**
     * @var null|string
     */
    protected $originAirport;

    /**
     * @var null|int
     */
    protected $numberOfRoutingCities;

    /**
     * @var null|array
     */
    protected $routingCityList;

    /**
     * @var null|int
     */
    protected $numberOfAirlineCarriers;

    /**
     * @var null|array
     */
    protected $airlineCarrierList;

    /**
     * @var null|string
     */
    protected $fareBasis;

    /**
     * @var null|int
     */
    protected $numberOfPassengers;

    /**
     * @var null|string
     */
    protected $destinationAirport;

    /**
     * @var null|string
     */
    protected $reservationCode;

    /**
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }

    /**
     * @param string|null $departureDate
     *
     * @return TravelContext
     */
    public function setDepartureDate(?string $departureDate): TravelContext
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassengerName(): ?string
    {
        return $this->passengerName;
    }

    /**
     * @param string|null $passengerName
     *
     * @return TravelContext
     */
    public function setPassengerName(?string $passengerName): TravelContext
    {
        $this->passengerName = $passengerName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOriginAirport(): ?string
    {
        return $this->originAirport;
    }

    /**
     * @param string|null $originAirport
     *
     * @return TravelContext
     */
    public function setOriginAirport(?string $originAirport): TravelContext
    {
        $this->originAirport = $originAirport;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfRoutingCities(): ?int
    {
        return $this->numberOfRoutingCities;
    }

    /**
     * @param int|null $numberOfRoutingCities
     *
     * @return TravelContext
     */
    public function setNumberOfRoutingCities(?int $numberOfRoutingCities
    ): TravelContext {
        $this->numberOfRoutingCities = $numberOfRoutingCities;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getRoutingCityList(): ?array
    {
        return $this->routingCityList;
    }

    /**
     * @param array|null $routingCityList
     *
     * @return TravelContext
     */
    public function setRoutingCityList(?array $routingCityList): TravelContext
    {
        $this->routingCityList = $routingCityList;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfAirlineCarriers(): ?int
    {
        return $this->numberOfAirlineCarriers;
    }

    /**
     * @param int|null $numberOfAirlineCarriers
     *
     * @return TravelContext
     */
    public function setNumberOfAirlineCarriers(?int $numberOfAirlineCarriers
    ): TravelContext {
        $this->numberOfAirlineCarriers = $numberOfAirlineCarriers;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getAirlineCarrierList(): ?array
    {
        return $this->airlineCarrierList;
    }

    /**
     * @param array|null $airlineCarrierList
     *
     * @return TravelContext
     */
    public function setAirlineCarrierList(?array $airlineCarrierList
    ): TravelContext {
        $this->airlineCarrierList = $airlineCarrierList;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFareBasis(): ?string
    {
        return $this->fareBasis;
    }

    /**
     * @param string|null $fareBasis
     *
     * @return TravelContext
     */
    public function setFareBasis(?string $fareBasis): TravelContext
    {
        $this->fareBasis = $fareBasis;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumberOfPassengers(): ?int
    {
        return $this->numberOfPassengers;
    }

    /**
     * @param int|null $numberOfPassengers
     *
     * @return TravelContext
     */
    public function setNumberOfPassengers(?int $numberOfPassengers
    ): TravelContext {
        $this->numberOfPassengers = $numberOfPassengers;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDestinationAirport(): ?string
    {
        return $this->destinationAirport;
    }

    /**
     * @param string|null $destinationAirport
     *
     * @return TravelContext
     */
    public function setDestinationAirport(?string $destinationAirport
    ): TravelContext {
        $this->destinationAirport = $destinationAirport;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReservationCode(): ?string
    {
        return $this->reservationCode;
    }

    /**
     * @param string|null $reservationCode
     *
     * @return TravelContext
     */
    public function setReservationCode(?string $reservationCode): TravelContext
    {
        $this->reservationCode = $reservationCode;

        return $this;
    }
    
}
