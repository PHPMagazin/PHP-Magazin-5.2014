<?php
namespace WM2014Bet\Service;

class MatchService extends AbstractService
{
    protected $restRoute = '';

    public function setRestRoute($restRoute)
    {
        $this->restRoute = $restRoute;
    }

    public function getRestRoute()
    {
        return $this->restRoute;
    }

    public function fetchAll()
    {
        $matchesData = $this->sendGetRequest($this->getRestRoute());

        return $matchesData->_embedded->matches;
    }

    public function fetchOne($id)
    {
        $matchData = $this->sendGetRequest($this->getRestRoute() . '/' . $id);

        return $matchData;
    }
}
