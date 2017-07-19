-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 20 2017 г., 01:15
-- Версия сервера: 5.7.16
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myself`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `from_user_id` int(10) UNSIGNED DEFAULT NULL,
  `to_user_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `text`, `created_at`, `updated_at`, `from_user_id`, `to_user_id`) VALUES
(1, 'helo', '2017-07-19 14:51:42', '2017-07-19 14:51:42', 3, 1),
(2, 'iaiaia', '2017-07-19 14:53:06', '2017-07-19 14:53:06', 1, 3),
(3, 'tu de?', '2017-07-19 15:07:07', '2017-07-19 15:07:07', 1, 3),
(4, 'tyta', '2017-07-19 15:07:53', '2017-07-19 15:07:53', 3, 1),
(5, '!!!!!!!!!!!!!!!!!', '2017-07-19 15:22:05', '2017-07-19 15:22:05', 1, 4),
(6, ')))', '2017-07-19 15:22:49', '2017-07-19 15:22:49', 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_resets_table', 1),
(26, '2017_07_09_122516_create_table_pages', 1),
(27, '2017_07_09_124405_create_table_portfolios', 1),
(28, '2017_07_12_092001_create_table_messages', 1),
(29, '2017_07_12_094607_change_table_mesages', 1),
(30, '2017_07_15_151746_change_table_portfolios', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `alias`, `text`, `images`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', '<h1>Hello I&#39;m Kostiantyn Logunov</h1>\r\n\r\n<p>My only mission is to build, create, and discover beautiful web applications.&nbsp;<strong>AND DO IT WELL.</strong></p>', 'my_logo2.png', '2017-07-19 14:54:40', '2017-07-19 14:54:40'),
(2, 'About', 'About', '<p>I live with an intense passion for web development. On the better days, I wake up, hit the gym, grab a cold brew, and set up in my office, digging into a React app, setting up a Rails backend, or building an elegant interface using SASS and BEM standards. I also play nicely with Angular.js / MEAN, Ember, Node.js and find it absolutely esssential to work with build tools like Gulp and Webpack.</p>', 'I.jpg', '2017-07-19 14:55:28', '2017-07-19 14:55:28');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('xa.13@i.ua', '$2y$10$e1reMDQCbYTXom88T7XJDunBEe8ViRNc71XZpDqtofR8ZelrUbuR6', '2017-07-19 16:37:35');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `images`, `filter`, `text`, `created_at`, `updated_at`) VALUES
(1, 'New Tehnology', 'portfolio_pic1.jpg', 'web', 'I should also mention that I\'ve done my fair share of building custom WordPress sites, building 100+ WordPress websites from scratch. All of the sites I build are fully manageable by the Client; this means everything from images, text, and custom content types. PS. I hate templates!\r\n\r\nYou can read more about my development musings on my blog.\r\n\r\nCurrently, I reside in the perfect city of Los Angeles, California, engaging in freelance opportunities with wonderful Clients and Vendors in the state and abroad.\r\n\r\nOutside of my passion for work, my life\'s affinity comes in two forms: music and my princess, a Border Collie named Mila.', '2017-07-19 14:59:42', '2017-07-19 14:59:42'),
(2, 'Bank\'s products', 'portfolio_pic2.jpg', 'mobile', 'I highly recommend Andrew Martin and everyone at Believe Labs for website development.  We were in need of a new refreshing look to our website and Andrew and his colleagues delivered right on the money.  We gave him a very basic model of what we were interested and he was able to craft a website that is beyond our expectations – Thank you Andrew!\r\nSTUART NIELSON, COLORADO ANALYTICAL LAB', '2017-07-19 15:00:36', '2017-07-19 15:00:36'),
(3, 'Socila net', 'portfolio_pic3.jpg', 'web+mobile', 'And here are a few nice things people have had to say.\r\nI have used Andrew Martin for sometime with my website needs.  I have recently had him make me a new website with a new logo.  The site is very user friendly, and many of my clients have commented on how attractive the site is and how easy it is to use.  One thing that makes it easy for me, is that I can make changes on my site by myself—I am not a savvy computer person, so this is a big plus for me.   I would highly recommend using Andrew’s services–I am very happy!\r\n\r\nJOANN MARTIN, AVANTE COSMETIC', '2017-07-19 15:01:06', '2017-07-19 15:01:06'),
(4, 'API', 'portfolio_pic4.jpg', 'API', 'I’ve been in this business a long time and have had the pleasure of working with lots of talented designers & programmers.\r\nIt wasn’t until we (LSE) were introduced to Believe Labs that we found a one stop-shop for everything design & programming. I can’t imagine working with anyone other than these guys–they are the best, and they are now stuck with us, forever!\r\nLEIGH SULLIVAN, LEIGH SULLIVAN ENTERPRISES', '2017-07-19 15:02:08', '2017-07-19 15:02:08'),
(5, 'NEW paymant', 'portfolio_pic5.jpg', 'mobile', 'Andrew is a highly-skilled web engineer and is dedicated to producing a top-class user experience. In every project I have had the benefit to work with him, he consistently exceeds clients expectations and always brings in fresh, useful ideas. Besides his technical skill and business acumen, he remains a good friend and a reliable associate. I highly recommend Andrew Martin.\r\n\r\nBILL CATLIN, YORK STREET LABS, LLC', '2017-07-19 15:02:35', '2017-07-19 15:02:35'),
(6, 'API for android', 'portfolio_pic6.jpg', 'Mobile', 'Andrew is an exceptional developer with fabulous technical problem solving skills; the most complex concepts become simple solutions in his hands. He has a great knack for hearing and communicating the heart of a company/client, and it’s a painless process when he is involved. An innate ability to ‘become’ part of the team, while efficiently and joyfully driving a project toward completion, make Andrew an absolute delight to work with.\r\nAMY MCKELVEY, REJUVILA', '2017-07-19 15:03:20', '2017-07-19 15:03:20'),
(7, 'StartUp', 'portfolio_pic7.jpg', 'web', 'Andrew Martin can do design and development better than most but his most valuable traits are his responsiveness, clarity and quality of work.\r\nGEORGE MORRIS, IMULUS\r\nAndrew, among other things is a Web Development Wunderkind. Not sure how, but he manages to keep a level head when stuck in the middle between very exacting designers and very demanding clients like us.\r\nPlease check out thebitterbar.com or thewestendtavern.com for some amazing examples of his work.\r\n\r\nWe are psyched to have worked with him and look forward to keeping the relationship going as our needs evolve.\r\n\r\nJOHN BACHMAN, BIG RED F\r\nAndrew is a highly skilled front end developer and very knowledgeable about the latest in CSS and HTML best practices. He has been instrumental in assisting and training our team to adopt new, much improved front end technologies.\r\n\r\nJULI DUFFER, ACTIVE INTEREST MEDIA', '2017-07-19 15:04:14', '2017-07-19 15:04:14'),
(8, 'mobile market', 'portfolio_pic8.jpg', 'web', '.color-blue {\r\n  color: #0ab0ed; }\r\n\r\n.bg-blue {\r\n  background: #0ab0ed; }\r\n\r\n.border-blue {\r\n  border-color: #0ab0ed; }\r\n\r\n.color-blue-dark {\r\n  color: #0064cd; }\r\n\r\n.bg-blue-dark {\r\n  background: #0064cd; }\r\n\r\n.border-blue-dark {\r\n  border-color: #0064cd; }\r\n\r\n.color-green {\r\n  color: #8da1ae; }\r\n\r\n.bg-green {\r\n  background: #8da1ae; }\r\n\r\n.border-green {\r\n  border-color: #8da1ae; }\r\n\r\n.color-red {\r\n  color: #f06338; }\r\n...', '2017-07-19 15:05:08', '2017-07-19 15:05:08'),
(9, 'IT Study', 'project4.png', 'studing', 'Rapid Development with Sublime Text\r\nIf you scan the posts in my blog, you’ll quickly see they all have one thing in common: Speed. I like to learn things that help me move quickly for two reasons: I get to ship more code (service more Clients) and I get to learn more things. Win win.\r\n\r\nOne thing I spend every few months or so going through is my Sublime Text workflow.\r\n\r\nThis is an old feature, but man oh man did it help save a lot of time this week. If you’re like me, you’re probably jumping through a lot of files trying to find Class definitons, variables, and the like.\r\n\r\nGoto -> Goto Symbol in Project can help with that, especially with namedspaced top level classes.\r\n\r\nAt the same time, this is all great, but by default it will search everything, which is bad. If you’re using CoffeeScript, you probably don’t want to hit all of your .js files, and the same goes for CSS preprocessors.\r\n\r\nSublime Project Settings for the win!\r\n\r\nHit the Project menu and go to Save Project As.... Then, hit Edit Project in the same menu, and add something like this:\r\n\r\nmy_project.sublime-project\r\n1\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n9\r\n10\r\n11\r\n12\r\n13\r\n14\r\n15\r\n16\r\n17\r\n18\r\n19\r\n{\r\n  \"folders\": [{\r\n    \"file_exclude_patterns\": [\r\n      \".gitignore\"\r\n      \"apps/**/*.js\",\r\n      \"dist/js/**/*.js\",\r\n      \"dist/js/*.js\",\r\n      \"dist/stylesheets/*.css\"\r\n    ],\r\n    \"folder_exclude_patterns\": [\r\n      \"assets/components\",\r\n      \"gulp\",\r\n      \"docs\",\r\n      \"dist/build\"\r\n    ],\r\n    \"follow_symlinks\": true,\r\n    \"path\": \"src\"\r\n  }]\r\n}\r\nBoom. All those nasty artifact files are completely ignored from the listing. You can exclude entire directories, just files, or as you can see hear use patterns to define files to ignore.\r\n\r\nOverall performance, file indexing, and searching across your codebase is also vastly improved with this. I haven’t even taken it to the level I want to yet (there are a few more patterns I’d like to add), but this is a huge step in the right direction.\r\n\r\nThe cool thing here is, as you write rules and save this file, it’ll automatically refresh your folder list. So, you can temporarily and quickly add a folder pattern back into the view and not worry about reopening the project or relaunching Sublime.\r\n\r\nI’m way behind the ball with this feature, I know, but hey, give me some credit that I’ve made it this long without finding a building to jump off of. Good day!\r\n\r\nShare0 Comments\r\nsublime text, indexing, rapid development\r\n5/5/14  WORDPRESS\r\nSpeeding Up WordPress, Advanced Custom Fields, and more with helper functions\r\nI don’t particularly love working in WordPress, because at this point I feel everything I’ve ever needed to do, I’ve done many times before. I’ve just seen about everything imagineable when it comes to WordPress development, and until tonight thought it was mostly a cut and run kind of deal.\r\n\r\nWith a recent project I’ve been focusing on really, really optimizing and elegantly developing my theme using DRY code. It’s been an admittedly fun process seeing my templates completely dry up, and while PHP is often messy (it’s official, I now hate semicolons, by the way) it has saved me quite a bit of time rolling boilerplate code.\r\n\r\nI’m using the awesome Advanced Custom Fields plugin, which I have to give credit to Elliot Condon for. He’s really made a powerful system that in my opinion is one of the best open-sourced CMS platforms I’ve ever seen. It’s quite incredible what you can do with it now, really.\r\n\r\nHere are a few examples of tricky things I’ve integrated into my theme that have helped save tons of time:\r\n\r\nButton helper:\r\n\r\nOutputs a quick button with optional internal page-link or external options. That there saved me 10 lines of boilerplate code.\r\n\r\npage-home.php\r\n1\r\n<?php _s_custom_field_link(\'btn btn-primary\'); ?>\r\nfunctions-custom.php\r\n1\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n9\r\n10\r\n11\r\n12\r\n13\r\n14\r\n15\r\n16\r\n17\r\n18\r\n19\r\n20\r\n21\r\n/**\r\n * custom field link helper\r\n * @param  string $className\r\n *         add a custom class name to element\r\n * @return string\r\n *         returns button text for view.\r\n */\r\nfunction _s_custom_field_link($className) {\r\n  $text = get_sub_field(\'button_text\');\r\n  if (!$className) {\r\n    $className = \'btn btn-primary\';\r\n  }\r\n  if (get_sub_field(\'external_button_link\')) {\r\n    // external link stuff\r\n    $link = get_sub_field(\'external_button_link\');\r\n  } else {\r\n    $link = get_sub_field(\'button_link\');\r\n  }\r\n  // echo \"<a href=\"$link\">$text</a>\";\r\n  echo \"<a class=\'$className\' href=\'$link\'>$text</a>\";\r\n}\r\nField conditional\r\n\r\nOr take this for example, which I’ve found I do a lot. Say I want to have a field displayed, wrapped in an HTML tag, only if it’s present. And I want to avoid writing get_field vs. get_sub_field every time:\r\n\r\npage-home.php\r\n1\r\n<?php _s_custom_field(\'title\', \'h2\', \'title\', true); ?>\r\nfunctions.php\r\n1\r\n2\r\n3\r\n4\r\n5\r\n6\r\n7\r\n8\r\n9\r\n10\r\n11\r\n12\r\n13\r\n14\r\nfunction _s_custom_field($name, $tag, $class = \'\', $subField = false) {\r\n  if ($subField) {\r\n    $function = get_sub_field;\r\n  } else {\r\n    $function = get_field;\r\n  }\r\n  if ($function($name)) {\r\n    $str = \'\';\r\n    $str .= \"<{$tag} class=\'{$class}\'>\";\r\n    $str .= $function($name);\r\n    $str .= \"</{$tag}>\";\r\n    echo $str;\r\n  }\r\n}\r\nLink conditional, magic.\r\n\r\nGrid wrappers\r\n\r\n..or, avoid the semi-annoying Bootstrap grid wrappers:', '2017-07-19 15:06:25', '2017-07-19 15:06:25');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifyToken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `images` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `verifyToken`, `status`, `images`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '777koc@gmail.com', '$2y$10$1GyBp9Frs6lcS2ITyLJrsuwec1dbxnTRLT.Ft9NqWAKHoJkBv6ZUS', NULL, 1, 'I.jpg', 'w0lm0v8egZxqs2HF8I8xZxtkDJbMAToH6CELt9cLTcQ4ExyBOzeCCPMMOMcQ', '2017-07-19 14:48:10', '2017-07-19 15:21:41'),
(3, 'vano', 'xa.13@i.ua', '$2y$10$v.hJDeEzVZxKvo6xR/cObu67m8h1NZJVmYtcHg3Ik1do8k07eIBIW', NULL, 1, '3.jpg', 'GlB5ts2RPkoziCKQfc0J2gaEIbrLz8Ntba7HtZGHhwkdBKcVyV0rb1dm5uSS', '2017-07-19 14:50:48', '2017-07-19 14:51:37'),
(4, 'larka', 'laravel777@gmail.com', '$2y$10$7CtZyu1lRxeXZxo3iDmnn.L9aEbx1dcAPKsTkNC0UZIyWi5AZykG2', NULL, 1, 'my_logo12.png', '41r95zhfnqJachkR53E06ryIl7aOx7cjs5DHSW1fxcPT37apnEFzTn7BDhXD', '2017-07-19 15:14:48', '2017-07-19 15:17:18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_from_user_id_foreign` (`from_user_id`),
  ADD KEY `messages_to_user_id_foreign` (`to_user_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_to_user_id_foreign` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
