<?php
namespace WM2014Bet\Service;

class BetService extends AbstractService
{
    [...]

    public function save($matchId, array $data)
    {
        $postData = array(
            'match'  => $matchId,
            'goals1' => $data['goals1'],
            'goals2' => $data['goals2'],
        );

        $betData = $this->sendPostRequest($this->getRestRoute(), $postData);

        return $betData;
    }

}
