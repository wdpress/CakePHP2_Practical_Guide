SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `categories` 
(`id`, `name`, `created`, `modified`) VALUES
(1, 'コンピューター', '2012-02-02 05:14:16', '2012-02-02 05:14:16'),
(2, '生活', '2012-02-02 05:14:23', '2012-02-02 05:14:23'),
(3, 'グルメ', '2012-02-02 05:14:30', '2012-02-02 05:14:30');

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `comments` 
(`id`, `topic_id`, `title`, `comment`, `created`, `modified`) 
VALUES
(1, 1, 'Mac', 
'プログラミングにはやはりMacではないでしょうか。', 
'2012-02-02 05:16:24', '2012-02-02 05:16:24'),
(2, 1, 'Linuxなら', 
'Windowsのマシンで気に入ったものにLinuxを入れるのが最適。', 
'2012-02-02 05:17:06', '2012-02-02 05:17:06'),
(3, 1, '好みのものを買えば。', 
'何でも大丈夫だと思いますよ。', 
'2012-02-02 05:17:26', '2012-02-02 05:17:26'),
(4, 1, 'ありがとうございました', 
'みなさん、ありがとうございます。\r\n参考になりました！', 
'2012-02-02 05:17:45', '2012-02-02 05:17:45'),
(5, 2, 'えびですね。', 'エビ。', 
'2012-02-02 05:18:37', '2012-02-02 05:18:46'),
(7, 1, '結局', '何を買うことにしたんですか？', 
'2012-02-02 05:25:20', '2012-02-02 05:25:20');

CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `topics` 
(`id`, `title`, `body`, `category_id`, `created`, `modified`) 
VALUES
(1, '新しいパソコン', 
'快適にプログラミングをする新しいパソコンが欲しいです。\r\n
おすすめは何ですか？', 
1, '2012-02-02 05:15:13', '2012-02-02 05:28:22'),
(2, '好きなお寿司は？', 
'みなさんはどんなお寿司のネタが好きですか？', 
3, '2012-02-02 05:18:18', '2012-02-02 05:27:51');
