<?php
defined('BASE') or exit('No direct script access allowed!');
require_once BASE.'/app/model/Member.php';
require_once BASE.'/app/model/base/DAO.php';

class DatabaseTest extends BaseController
{
	public function view()
	{
		$dao = DAO::getDAO('MemberDAO');
		
		if (isset($this->params[0]) && trim($this->params[0])=='remove')
		{
			// ex: requesting: /member/delete/2
			$id = trim(sanitizeString($this->params[1]));
			$dao->removeById($id);
		}
		else if (isset($this->params[0]) && trim($this->params[0])=='add')
		{
			$randNum = mt_rand(0, 99999);
			$newMember = new Member(
							array('firstName' => 'First', 'lastName' => 'LastName',
							'username' => "test$randNum", 'email' => "test$randNum@example.com",
							'createTime' => dbDateTime())
						);
			// #TODO: implement UserDao.create($newUser) instead.
			if ($dao->countAll() > 30) { // Demo mode: clean up if too many members
                    $dao->execute("DELETE FROM members");
                    $dao->execute("vacuum");
            }
			$dao->insertInto("firstName, lastName, username, email, createTime", $newMember->getFields());
		}
		
		$members = $dao->getAll();

        $v = $this->smarty;
        $v->assign('title', 'Member List');

        $v->assign('inc_content', v('members.html'));
        $v->assign('members', $users);
        $v->assign('totalMembers', $dao->countAll());
        
        $this->display($v, v('index.html'));
	}
	

}

