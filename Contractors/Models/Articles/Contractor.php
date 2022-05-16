<?php

namespace Contractors\Models\Articles;

class Contractor
{
    private $CompanyName;
    private $CEO;
    private $Contact;
    private $Activity;
    private $Region;

    public function __construct
    (
        $CompanyName,
        $CEO,
        $Contact,
        $Activity,
        $Region
    )
    {
        $this->CompanyName = $CompanyName;
        $this->CEO = $CEO;
        $this->Contact = $Contact;
        $this->Activity = $Activity;
        $this->Region = $Region;
    }

    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    public function getCEO()
    {
        return $this->CEO;
    }

    public function getContact()
    {
        return $this->Contact;
    }

    public function getActivity()
    {
        return $this->Activity;
    }

    public function getRegion()
    {
        return $this->Region;
    }
}
