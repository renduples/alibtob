<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/User.php';
require_once BASE.'/app/model/base/DAO.php';

class UserList extends BaseController
{
	public function view()
	{
		$dao = DAO::getDAO('UserDAO');
		
		if (isset($this->params[0]) && trim($this->params[0])=='remove')
		{
			// ex: requesting: /user-list/delete/2
			$id = trim(sanitizeString($this->params[1]));
			$dao->removeById($id);
		}
		else if (isset($this->params[0]) && trim($this->params[0])=='add')
		{
			$randNum = mt_rand(0, 99999);
			$newUser = new User(
							array('firstName' => 'First', 'lastName' => 'LastName',
							'username' => "test$randNum", 'email' => "test$randNum@example.com",
							'createTime' => dbDateTime())
						);
			// #TODO: implement UserDao.create($newUser) instead.
			if ($dao->countAll() > 30) { // Demo mode: clean up if too many users
                    $dao->execute("DELETE FROM user");
                    $dao->execute("vacuum");
            }
			$dao->insertInto("firstName, lastName, username, email, createTime", $newUser->getFields());
		}
		
		$users = $dao->getAll();

        $v = $this->smarty;
        $v->assign('title', 'User List');

        $v->assign('inc_content', v('user_list.html'));
        $v->assign('users', $users);
        $v->assign('totalUsers', $dao->countAll());
        
        $this->display($v, v('index.html'));
	}
}

