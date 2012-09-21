<?php

App::uses('CakeEmail', 'Network/Email');

class SamplesController extends AppController {

    public function index() {

        $email = new CakeEmail();

        // この行を忘れずに！
        $email->transport('Debug');

        // DebugからMailへ変更
        //$email->transport('Mail');

        // 以下2行は自分のメールアドレスに書き換えてください
        $email->from('suzuki@example.jp');
        $email->to('suzuki@example.com');

        // ファイル添付の例
        // APP とは app ディレクトリの絶対パスを表す CakePHP の定数
        //$email->attachments(APP . '/webroot/img/cake.icon.png');

        // ファイル名を変えて添付する例
        //$email->attachments(array(
        //  'mark_of_cake.png' => APP . '/webroot/img/cake.icon.png'
        //));

        // 日本語ファイル名で添付する例（ファイル名の文字コードは UTF-8 を利用）
        //$ja_file = mb_encode_mimeheader('Cakeのマーク.png', 'UTF-8', 'B');
        //$email->attachments(array(
        //    $ja_file => APP . '/webroot/img/cake.icon.png'
        //));

        // 複数のファイルを添付する例
        //$email->attachments(array(
        //    APP . '/webroot/img/cake.icon.png',
        //    APP . '/webroot/img/cake.power.gif',
        //));

        // 複数のファイルを別名で添付する例
        //$email->attachments(array(
        //    'mark_of_cake.png'    => APP . '/webroot/img/cake.icon.png',
        //    'powered_by_cake.gif' => APP . '/webroot/img/cake.power.gif',
        //));

        $email->subject('これはテストメールです');
        $messages = $email->send('これはテストメールの本文です。');

        $this->set('messages', $messages);



        ////////////////////////////////////
        // HTML メールの送信サンプル
        ////////////////////////////////////
        /*
        $email = new CakeEmail(array(
                                   'charset' => 'ISO-2022-JP'
                               ));
        $email->transport('Debug');
    
        $email->from('suzuki@example.jp','すずき');
        $email->to('suzuki@example.com');
        $email->subject('テストメールの件名です');
        
        $email->template('thank_you', 'sample_layout');
        $email->emailFormat('html');
        
        $email->viewVars(array('user' => 'すずき'));
        
        $messages = $email->send();
        
        $this->set('messages', $messages);
        */


        ////////////////////////////////////
        // EmailConfig の利用例
        ////////////////////////////////////
        /*
        $email = new CakeEmail('default');
        $email->to('suzuki@example.com');
        $messages = $email->send('これはテストメールの本文です。');

        $this->set('messages', $messages);
        */
    }
}
