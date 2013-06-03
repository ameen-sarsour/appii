<?php
class AuthCommand extends CConsoleCommand
{

        public function actionAddRole($user ,$role) {
                $auth=Yii::app()->authManager;
                $auth->assign($role,$user);
		$auth->save();
	}

public function actionCreateTable() {
	$auth=Yii::app()->authManager;
	if ($auth instanceof CDbAuthManager) {
		$AuthItem=$auth->itemTable;
		$AuthItemChild=$auth->itemChildTable;
		$AuthAssignment=$auth->assignmentTable;
		$sql=array();
		$sql[]="CREATE TABLE IF NOT EXISTS $AuthItem (
  name varchar(64) NOT NULL PRIMARY KEY,
  type INTEGER NOT NULL,
  description text,
  bizrule text,
  data text
)";
		$sql[]="
CREATE TABLE IF NOT EXISTS $AuthItemChild (
  parent varchar(64) NOT NULL,
  child varchar(64) NOT NULL,
  PRIMARY KEY (parent,child),
  FOREIGN KEY(parent) REFERENCES $AuthItem(name),
  FOREIGN KEY(child) REFERENCES $AuthItem(name)
)
";
		$sql[]="
CREATE TABLE IF NOT EXISTS $AuthAssignment (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  itemname varchar(64) NOT NULL,
  userid integer not null,
  bizrule text,
  data text,
  FOREIGN KEY(userid) REFERENCES tbl_user(Id)
)";
		foreach($sql as $s) {
			Yii::app()->db->createCommand($s)->execute();
		}
		Yii::app()->db->createCommand()->createIndex('ix_AuthItemChild__parent', $AuthItemChild, 'parent');
		Yii::app()->db->createCommand()->createIndex('ix_AuthItemChild__child', $AuthItemChild, 'child');
		Yii::app()->db->createCommand()->createIndex('ix_AuthAssignment__userid', $AuthAssignment, 'userid');
		
	} else {
		echo "not DB based\n";
	}
}

        public function actionCreate() {
		$auth=Yii::app()->authManager;

		$auth->createOperation('createPost','create a post');
		$auth->createOperation('readPost','read a post');
		$auth->createOperation('updatePost','update a post');
		$auth->createOperation('deletePost','delete a post');

		$bizRule='return Yii::app()->user->id==$params["post"]->authID;';
		$task=$auth->createTask('updateOwnPost','update a post by author himself',$bizRule);
		$task->addChild('updatePost');

		$role=$auth->createRole('reader');
		$role->addChild('readPost');

		$role=$auth->createRole('author');
		$role->addChild('reader');
		$role->addChild('createPost');
		$role->addChild('updateOwnPost');

		$role=$auth->createRole('editor');
		$role->addChild('reader');
		$role->addChild('updatePost');

		$role=$auth->createRole('admin');
		$role->addChild('editor');
		$role->addChild('author');
		$role->addChild('deletePost');

		$auth->assign('reader','readerA');
		$auth->assign('author','authorB');
		$auth->assign('editor','editorC');
		$auth->assign('admin','adminD');
		$auth->save();
	}
}
