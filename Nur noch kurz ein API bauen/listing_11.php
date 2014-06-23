<?php
namespace WM2014Bet\Controller;

use WM2014Bet\Form\BetForm;
use WM2014Bet\Service\BetService;

[...]

class IndexController extends AbstractActionController
{
    [...]
    protected $betService = null;
    protected $betForm = null;

    public function setBetService($betService)
    {
        $this->betService = $betService;
    }

    public function getBetService()
    {
        return $this->betService;
    }

    public function setBetForm($betForm)
    {
        $this->betForm = $betForm;
    }

    public function getBetForm()
    {
        return $this->betForm;
    }

    [...]
    
    public function showAction()
    {
        $id = $this->params()->fromRoute('id');

        if ($this->getRequest()->isPost()) {
            $this->getBetService()->save($id, $this->params()->fromPost());

            return $this->redirect()->toRoute('wm2014-bet/action', array(), true);
        }

        $viewModel = new ViewModel();
        $viewModel->setVariable('match', $this->getMatchService()->fetchOne($id));
        $viewModel->setVariable('teams', $this->getTeamService()->fetchOptions());
        $viewModel->setVariable('form', $this->getBetForm());

        return $viewModel;
    }
}
