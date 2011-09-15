<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/Search.php';
require_once BASE.'/app/model/base/DAO.php';

class Search extends BaseController
{
	public function view()
	{
		$dao = DAO::getDAO('SearchDAO');
		
		if (isset($this->params[0]) && trim($this->params[0])=='remove')
		{
			// ex: requesting: /search/delete/2
			$id = trim(sanitizeString($this->params[1]));
			$dao->removeById($id);
		}
		else if (isset($this->params[0]) && trim($this->params[0])=='add')
		{
			$randNum = mt_rand(0, 99999);
			$newSearch = new Search(
							array('username' => "test$randNum", 'email' => "test$randNum@example.com",
							'created' => dbDateTime())
						);
			// #TODO: implement UserDao.create($newUser) instead.
			if ($dao->countAll() > 30) { // Demo mode: clean up if too many searchs
                    $dao->execute("DELETE FROM searchs");
                    $dao->execute("vacuum");
            }
			$dao->insertInto("username, email, created", $newSearch->getFields());
		}
		
		$search = $dao->getAll();

        $v = $this->smarty;
        $v->assign('title', 'Search List');

        $v->assign('inc_content', v('search.html'));
        $v->assign('search', $search);
        $v->assign('totalSearch', $dao->countAll());
        
        $this->display($v, v('index.html'));
	}
	

}

