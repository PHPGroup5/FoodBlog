-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 08:26 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `photo`, `created_date`, `modified_date`) VALUES
(15, 'ascxcxfhdsadsf', 'Capture.JPG', '2020-02-20 01:11:59', '2020-02-20 01:11:59'),
(18, 'ijh', 'cC.jpg', '2020-02-24 00:56:10', '2020-02-24 00:56:10'),
(20, 'oiugyjytdutg', 'before.JPG', '2020-02-24 00:58:31', '2020-02-24 00:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `content` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `content`) VALUES
(1, '<p>Hi I love this post!</p>'),
(3, '<p>fadsf</p>'),
(4, '<p>asdfsadfasd sd fas</p>'),
(5, '<p>he hee</p>'),
(6, '<p>Haha</p>'),
(7, '<p>Hate it</p>');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `cat_id`, `photo`, `content`, `created_date`, `modified_date`) VALUES
(9, 'FireWorks', 0, '190d59920b0c0c97ca9a2967eda9716e.jpg', '<p>some content some content some content&nbsp;<br></p>', '2020-02-10 23:13:00', '2020-02-10 23:13:00'),
(10, 'Faded', 10, '392f8976113a00746707ee533f7cca7a.jpg', '<p>There are some contents</p>', '2020-02-15 21:16:50', '2020-02-15 21:16:50'),
(13, 'testing', 10, 'bg.jpg', '<p>fsaf sdf easfasd</p>', '2020-02-20 00:57:48', '2020-02-20 00:57:48'),
(14, 'testing', 18, 'cC.jpg', '<p>faesdgas ea f&nbsp;</p>', '2020-02-24 00:56:32', '2020-02-24 00:56:32'),
(18, 'testing 1', 20, 'after.JPG', '<p style=\"margin-right: 0px; margin-bottom: 6px; margin-left: 0px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;\">မြန်မာမှန်ရင် Review ရေးရတဲ့ခေတ်မှာ ကိုယ်လည်း အစားအသောက်နဲ့ပတ်သက်တဲ့ Review လေး ရေးချင်တာပေါ့…</p><p style=\"margin: 6px 0px; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;\">ရွေးချယ်လိုက်တာကတော့<br>ကိုယ်တို့ တစ်လမ်းကျော်က အသစ်ဖွင့်တဲ့ဆိုင်လေး…<br>သွားပြီလေ Review ရေးဖို့…</p><div class=\"text_exposed_show\" style=\"display: inline; font-family: Helvetica, Arial, sans-serif; color: rgb(29, 33, 41); font-size: 14px;\"><p style=\"margin-right: 0px; margin-bottom: 6px; margin-left: 0px; font-family: inherit;\">ဆိုင်သစ်သာ ပြောတာ…<br>ဆိုင်အပြင်အဆင်က လုံးဝ ဆွဲဆောင်မှု မရှိဘူး…<br>ကိုယ်ကတော့ Rating 1 ပဲ ပေးပါတယ်…</p><p style=\"margin: 6px 0px; font-family: inherit;\">အံမယ် စားပွဲထိုးတွေ ကြည့်လိုက်တော့လည်း<br>တစ်ယောက်မှ ဖော်ဖော်ရွေရွေ မရှိဘူး…<br>ဒီကနေ့ခေတ်မှာ Customer ကို<br>ဘယ်လိုဆက်ဆံရမယ် မသိတာလားပဲ…<br>Rating ကတော့ Zero ပဲ ပေးမယ်ဗျို့…<span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t95/1/16/1f629.png&quot;);\">😩</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t95/1/16/1f629.png&quot;);\">😩</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t95/1/16/1f629.png&quot;);\">😩</span></span></p><p style=\"margin: 6px 0px; font-family: inherit;\">ဘာရမလဲ မေးလိုက်တော့ မုန့်ဟင်းခါး ရမယ်တဲ့…<br>ရတာယူခဲ့ လို့ပဲ ပြောရတာပေါ့…<br>ကိုယ်က Review ရေးချင်တာကိုး…</p><p style=\"margin: 6px 0px; font-family: inherit;\">မုန့်ဟင်းခါး လာချတော့ မုန့်ပွဲက အလွတ် …<br>အကြော်လေးကလည်း တစ်ဖတ်လား နှစ်ဖတ်လားပဲ…<br>ကိုယ့်ရုပ်ကများ အကြော်ပိုနဲ့ မစားနိုင်တဲ့<br>ရုပ်ထွက်များ ဖြစ်နေသလားပဲ …&nbsp;<span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/te/1/16/1f622.png&quot;);\">😢</span></span><br>ဟေ့ လာပါဦး… အိုးဘဲဥ ရမလား?<br>ကိုယ်ကမေးတော့<br>မရဘူးတဲ့ ကြက်ဥပြုတ်တော့ ရှိတယ်တဲ့…<span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t95/1/16/1f629.png&quot;);\">😩</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t95/1/16/1f629.png&quot;);\">😩</span></span></p><p style=\"margin: 6px 0px; font-family: inherit;\">အော် … တော်တော် ရောင်းကောင်းဦးမယ့်ဆိုင်ပဲ…<br>ဘူးသီးကြော် မရှိဘူးလား မေးတော့လည်း<br>ပဲကြော်ပဲ ရမယ်တဲ့…ရတာပဲ ယူခိုင်းရတော့တာပေါ့…<br>စိတ်ကတော့ မရှည်တော့ဘူး…&nbsp;<span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t10/1/16/1f624.png&quot;);\">😤</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t10/1/16/1f624.png&quot;);\">😤</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t10/1/16/1f624.png&quot;);\">😤</span></span></p><p style=\"margin: 6px 0px; font-family: inherit;\">ပြောရင်းဆိုရင်း ပန်းကန်က အပဲ့လေး ဖြစ်နေလို့<br>တစ်ယောက်ကို ခေါ်လဲ ခိုင်းလိုက်ရသေးတယ်…<br>အော် … ဘယ်လိုဆိုင်ပါလိမ့်…</p><p style=\"margin: 6px 0px; font-family: inherit;\">အောင်မာ …<br>ကိုယ်က မတင်းရဘူး…<br>သူတို့ ရုပ်တွေက ဖြစ်နေလိုက်တာ သူတို့မုန့်<br>အလကား လာစားနေတဲ့အတိုင်းပဲ…<br>မျက်နှာတွေကိုက အိုချထားလိုက်တာများ<br>စားရတာတောင် နင်တယ်…<span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t10/1/16/1f624.png&quot;);\">😤</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t10/1/16/1f624.png&quot;);\">😤</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t10/1/16/1f624.png&quot;);\">😤</span></span></p><p style=\"margin: 6px 0px; font-family: inherit;\">အော် … ကိုယ့်စားရိတ်နဲ့ ကိုယ်စားပြီး<br>သူတို့ဆိုင် အလကား ကြော်ညာပေးဖို့<br>လာစားတာမှန်းသာ သိရင် ဒီလိုနေပါ့မလားပဲ…</p><p style=\"margin: 6px 0px; font-family: inherit;\">ပြမယ် ပြမယ်…<br>ဓာတ်ပုံရိုက်ပြီးကို Review ရေးပြီး<br>ပက်ပက်စက်စက်ကို ရေးဦးမှာ…<br>ဒေါသကထွက်နေပြီ…<span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/tc/1/16/1f620.png&quot;);\">😠</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/tc/1/16/1f620.png&quot;);\">😠</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/tc/1/16/1f620.png&quot;);\">😠</span></span></p><p style=\"margin: 6px 0px; font-family: inherit;\">အသစ်ပြင်ပေးလာတဲ့ ကြက်ဥပြုတ်နဲ့<br>မုန့်ပန်းကန်ကို ရိုက်တယ်…<br>ဆိုင်ဝန်ထမ်းတွေကို ရိုက်တယ်…<br>အဲ အရေးကြီးတာက ဆိုင်နာမည်…<br>အော ဟိုဘက်မှာ ကျောက်သင်ပုန်းနဲ့ ထောင်ထားတာပဲ…<br>ရိုက်ပြီ…</p><p style=\"margin: 6px 0px; font-family: inherit;\">ဆိုင်နာမည်က ဦးမောင်ကြွယ်တဲ့…<br>အောင်မာ…<br>အသက်တောင် ရေးထည့်ထားသေး…<br>(၄၃)နှစ် တဲ့…<br>ဟင် …<br>အသက်က ဘာလို့ထည့် … ထည့်</p><p style=\"margin: 6px 0px; font-family: inherit;\">\"အောင်မလေး ဦးမောင်ကြွယ်ရဲ့<br>မသေခင်တုန်းကလည်း ကျုပ်တို့ သားအမိကို နှိပ်စက်…<br>သေပြီးတော့လည်း ဘယ်ကဟာကို<br>ဒုက္ခလာပေးခိုင်းနေတာလဲ\" ဆိုပြီး<br>အဒေါ်ကြီးတစ်ယောက် တဗြဲဗြဲ အော်ငိုမှ သိလိုက်တယ်…<br>နာရေးအိမ်ကြီး…<span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t73/1/16/1f616.png&quot;);\">😖</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t73/1/16/1f616.png&quot;);\">😖</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t73/1/16/1f616.png&quot;);\">😖</span></span></p><p style=\"margin: 6px 0px; font-family: inherit;\">ဘာကြည့်နေတာလဲ…<br>ပြေးပြီလေ …&nbsp;<span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/td0/1/16/1f602.png&quot;);\">😂</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/td0/1/16/1f602.png&quot;);\">😂</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/td0/1/16/1f602.png&quot;);\">😂</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t26/1/16/1f3c3_1f3fb_200d_2642.png&quot;);\">🏃🏻</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t26/1/16/1f3c3_1f3fb_200d_2642.png&quot;);\">🏃🏻</span></span><span class=\"_5mfr\" style=\"margin: 0px 1px; font-family: inherit;\"><span class=\"_6qdm\" style=\"background-repeat: no-repeat; background-size: contain; color: transparent; display: inline-block; text-shadow: none; vertical-align: text-bottom; font-family: inherit; height: 16px; width: 16px; font-size: 16px; background-image: url(&quot;https://static.xx.fbcdn.net/images/emoji.php/v9/t26/1/16/1f3c3_1f3fb_200d_2642.png&quot;);\">🏃🏻</span></span></p><p style=\"margin: 6px 0px; font-family: inherit;\"><a class=\"_58cn\" href=\"https://www.facebook.com/hashtag/shoonmimihtet?source=feed_text&amp;epa=HASHTAG\" data-ft=\"{&quot;type&quot;:104,&quot;tn&quot;:&quot;*N&quot;}\" style=\"color: rgb(56, 88, 152); cursor: pointer; font-family: inherit;\"><span class=\"_5afx\" style=\"direction: ltr; unicode-bidi: isolate; font-family: inherit;\"><span aria-label=\"hashtag\" class=\"_58cl _5afz\" style=\"unicode-bidi: isolate; color: rgb(54, 88, 153); font-family: inherit;\">#</span><span class=\"_58cm\" style=\"font-family: inherit;\">ShoonMiMiHtet</span></span></a></p><p style=\"margin: 6px 0px; font-family: inherit;\">( idea credit - အကြည်တော်)</p></div>', '2020-03-01 19:59:12', '2020-03-01 19:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(5) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdDate` date NOT NULL,
  `modifiedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `firstName`, `lastName`, `email`, `password`, `createdDate`, `modifiedDate`) VALUES
(1, 'h', 'z', 'q@q', 'qwerty', '2020-02-24', '2020-02-24'),
(2, 'hein', 'zaw', 'h@h', 'h', '2020-03-02', '2020-03-02'),
(3, 'sdvafdsfas', 'a', 'hee@hee', '1', '2020-03-02', '2020-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_comment_post`
--

CREATE TABLE `user_comment_post` (
  `commentID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `postID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_comment_post`
--

INSERT INTO `user_comment_post` (`commentID`, `userID`, `postID`) VALUES
(1, 1, 14),
(2, 0, 0),
(3, 2, 14),
(4, 2, 14),
(5, 2, 18),
(6, 2, 18),
(7, 3, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
