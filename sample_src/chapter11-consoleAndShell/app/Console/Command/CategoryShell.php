<?php
class CategoryShell extends AppShell {
    public $uses = array('Category');

    public function index() {
        $this->out("id\tname");
        foreach ($this->Category->find('all') as $category) {
            $this->out($category['Category']['id']
                ."\t".$category['Category']['name']);
        }
    }

    public function add() {
        $this->Category->create();
        $this->Category->save(array('name'=>$this->args[0]));
        $this->out('登録しました');
    }

    public function delete() {
        $category = $this->Category->findById($this->args[0]);
        $this->out($category['Category']['id']
            ."\t".$category['Category']['name']);
        if(!$this->params['force']) {
            if(strtolower($this->in('本当に削除してもよろしいですか？', 
                                array('y', 'n'), 'n')) == 'n') {
                $this->out('終了します');
                return;
            }
        }
        $this->Category->delete($this->args[0]);
        $this->out('削除しました');
    }

    public function main() {
        return $this->out($this->OptionParser->help());
    }

    public function getOptionParser() {
        $parser = parent::getOptionParser();
        return $parser->description('カテゴリ管理プログラム'
        )->addSubcommand('index', array(
            'help' => 'カテゴリの一覧表示',
            'parser' => array(
                'description' => array(
                    '登録されているカテゴリをすべて一覧表示します。'))          
        ))->addSubcommand('add', array(
            'help' => 'カテゴリ追加', 
            'parser' => array('description' => array(
                '指定されたカテゴリ名のレコードを追加します。'),
                'arguments' => array(
                    'name' => array(
                        'help' => 'カテゴリ名',
                        'required' => true)))
        ))->addSubcommand('delete', array(
            'help' => 'カテゴリ削除',
            'parser' => array(
                'description' => array(
                    '指定されたカテゴリIDのレコードを削除します。'
                ),
                'arguments' => array(
                    'id' => array('help' => 'カテゴリID', 'required' => true)
                ),
                'options' => array(
                    'force' => array(
                        'short' => 'f',
                        'help' => '確認メッセージなしで削除する',
                        'boolean' => true
                    )
                )
        )));
    }
}
