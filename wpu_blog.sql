-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2023 pada 10.29
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Programming', 'web-programming', '2023-07-03 21:50:50', '2023-07-03 21:50:50'),
(2, 'Web Design', 'web-design', '2023-07-03 21:50:50', '2023-07-03 21:50:50'),
(3, 'Personal', 'personal', '2023-07-03 21:50:51', '2023-07-03 21:50:51'),
(4, 'Art', 'art', '2023-07-04 06:41:57', '2023-07-04 06:41:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_28_074059_create_posts_table', 1),
(6, '2023_05_04_071507_create_categories_table', 1),
(7, '2023_07_06_013347_add_is_admin_to_users_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publshed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `publshed_at`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Optio dicta itaque debitis eius placeat sint dignissimos.', 'voluptatem-exercitationem-totam-aut-magnam-voluptatem', NULL, 'Sed tempore quos minima et illum ut non. Sapiente dolore cupiditate est et sed qui. Vel et ratione nulla ipsum.', '<p>Praesentium et dolor quia velit. Quis sit vitae adipisci aut et. Commodi ut et eaque et soluta eos.</p><p>Voluptatem vero quis totam deleniti temporibus est praesentium. Tenetur facere quasi in. Distinctio et quod voluptas ea. Non neque aut eaque ab provident iusto. Fugit alias porro exercitationem aut et error.</p><p>Dolor voluptatibus sapiente molestias enim maxime. Nostrum vel non optio corrupti deleniti. Doloribus sapiente magnam voluptates aut repellendus nihil eius.</p><p>Temporibus architecto labore est in qui. Harum dolorem at optio voluptas. Eligendi laudantium at illo repudiandae. Rem possimus dolorum alias rerum temporibus qui totam.</p><p>Id adipisci ut ullam dicta nihil. Dolorum quis distinctio recusandae. Sit tempore magnam cum quia quis voluptas voluptas odit. Aliquam blanditiis repellat qui quidem veritatis nihil distinctio.</p><p>In ut hic quod fugiat. Porro iusto dolorem pariatur odit sequi reiciendis. Unde eveniet sed sit deserunt. Eum autem ut omnis unde accusamus labore. Quo ut atque placeat illo corporis.</p><p>Modi vitae explicabo nostrum ut autem cum consequuntur. Nostrum et commodi accusamus et officiis odit. Et occaecati eum sit autem minus.</p><p>Accusamus non suscipit nisi voluptatem fugiat. Molestias qui est voluptatem distinctio natus. Libero fugit quidem corrupti laborum nihil quia laboriosam. Fuga natus nobis dolorem.</p>', NULL, '2023-07-03 21:50:51', '2023-07-03 21:50:51'),
(2, 1, 2, 'Quasi aliquam perferendis modi ad.', 'consequatur-excepturi-vero-non-velit-consequatur', NULL, 'Voluptatibus voluptas blanditiis excepturi recusandae vel. Nulla numquam eum vitae sed neque rerum. Aliquam rerum maiores iste. Vero commodi cupiditate veniam omnis qui dolore voluptas.', '<p>Atque sit et consequatur dolor veniam. Reprehenderit qui qui aut quas. Expedita laudantium deserunt sunt consequatur. Dolore architecto est commodi officia rem ut.</p><p>Cupiditate qui quo voluptatum eos unde dolores nihil. Hic in quos consequatur ipsum iusto eum iure. Quaerat saepe veniam iusto necessitatibus voluptas commodi iste. Suscipit ea rem cum dignissimos omnis vitae mollitia quaerat.</p><p>Impedit earum nulla ea. Sint consectetur fugit earum et. Error ea aliquam debitis tempora omnis. Omnis quae recusandae qui quis doloremque et libero. Sint aut doloremque optio atque nostrum nisi.</p><p>Pariatur qui veritatis ut debitis vero blanditiis qui. Qui eius quas ipsam quo rerum culpa ducimus. Cupiditate velit aliquam delectus omnis nesciunt nam quia earum. Ab voluptatem sapiente et recusandae.</p><p>Qui eaque assumenda numquam et voluptates. Distinctio sed ab inventore id sapiente est natus soluta. Rerum rem ullam dolor occaecati atque est. Et velit illum culpa ipsum aut consequatur.</p><p>Et magni est id laboriosam. Consequatur ullam aspernatur illum expedita rerum ea velit corrupti. Itaque nam saepe qui. Corporis culpa odit accusamus tenetur culpa.</p><p>A fugit ut illum repellat unde. Et omnis dolores repudiandae consectetur commodi. Nam aliquid eos repudiandae omnis magnam. Est quia autem labore et.</p><p>Quas eveniet autem deserunt eligendi qui minus aliquam. Dolor tempore ullam adipisci quia incidunt. Omnis dolores sapiente sint velit ea eos ut.</p><p>Distinctio ut non voluptas perspiciatis ut. Rerum ratione sed id distinctio ipsum perferendis. Ut voluptas ea qui sunt qui autem.</p><p>Et aut sint et voluptas vitae quia. Est velit ut excepturi ut. Culpa et sint vitae eum consequuntur accusantium maiores.</p>', NULL, '2023-07-03 21:50:51', '2023-07-03 21:50:51'),
(5, 2, 3, 'Eveniet dolores possimus eius occaecati rerum odit architecto laborum quis consequatur.', 'eveniet-provident-et-esse-commodi', NULL, 'Eum labore enim enim magnam voluptates. Cum dolor voluptas nihil adipisci. Expedita reprehenderit nihil ducimus fugit nostrum ea.', '<p>Molestias quia ex eum. Et et dolorem aut voluptate maiores. Ut sunt ad fuga quis quas beatae. Accusantium aut voluptates in.</p><p>Modi qui temporibus quis aut. Sit consequatur temporibus autem aut culpa quod tempora. Nihil in ullam perspiciatis voluptatum quo doloribus. Ratione omnis repudiandae autem et iusto.</p><p>Sed sapiente officiis voluptatem non est minima. Consequatur explicabo neque et odit odit adipisci. Voluptas vitae consectetur minus ea dolorem et rem. Aliquam libero modi est eveniet consequuntur.</p><p>Earum quisquam pariatur quam sed modi ut ea. Est est laboriosam at sit qui nam odio. Occaecati accusantium sapiente eveniet. Consequatur quod quo dolorem accusantium nihil quia repellat.</p><p>Et ex quia et tenetur non. Repellendus vel est error est cupiditate illum quos. Eos dolor recusandae eum voluptas perferendis.</p><p>Aut excepturi inventore sint et impedit. Est omnis facilis ut mollitia amet. Reiciendis libero adipisci impedit quia officia fugit. Aliquid voluptates animi iusto inventore ut explicabo sunt dolorum. Voluptas unde odit voluptatibus similique.</p><p>Ut quaerat nostrum aut consectetur quos. Minima aspernatur doloribus excepturi dolorem possimus. Esse laborum voluptas et ut non. Fugiat omnis consequatur amet saepe esse.</p><p>Vel illum pariatur soluta voluptas rerum ipsam quod accusantium. Recusandae vel illo eum et officia ad. Quae iure voluptate qui qui nesciunt ut non.</p><p>Minima sed esse ipsum et nulla quam dolorem. Voluptatem quia repudiandae non voluptates porro magnam. Voluptatem iure neque neque laborum ex. Dolorem quo et sed.</p>', NULL, '2023-07-03 21:50:51', '2023-07-03 21:50:51'),
(6, 2, 3, 'Ea nesciunt suscipit dicta facere dignissimos et excepturi facere magni.', 'non-voluptatem-enim-totam-eaque-assumenda-sapiente-quidem', NULL, 'Ut rerum minima nobis voluptatum nostrum sed. Maiores ex animi alias sed itaque dolor non. Quidem dolor consequuntur ut placeat.', '<p>Quibusdam consectetur sapiente voluptas voluptates ut molestiae qui. Velit est aut temporibus rem nemo dolor. Repellendus voluptas distinctio voluptatem aut ducimus nulla quibusdam qui.</p><p>Qui quibusdam blanditiis hic qui nihil. Velit provident ut nam. Sit et et earum dolores. Numquam et et voluptates. Laborum et assumenda tempora et ipsa.</p><p>Ad ipsam atque qui tempore et. Dolor dolorem nobis laudantium atque ut. Commodi ut qui quas debitis porro.</p><p>Molestias rerum quia deserunt sit dolorem provident voluptas. Nostrum nihil fuga nisi soluta repellat sunt sed provident. Culpa optio sint nostrum qui autem asperiores illo veniam. Sed debitis minima nam cumque.</p><p>Et ipsam porro commodi ratione ratione ut dolor. Fugit magni accusamus adipisci minima qui. Quidem qui rerum ut. Vero minima ipsam debitis consequatur fugit dolor. Perferendis reprehenderit quae impedit quos velit ut.</p><p>Ut possimus et molestiae incidunt. Temporibus velit inventore non alias et id inventore ut. Culpa aut est quod aspernatur.</p><p>Voluptas quo iure et consequatur voluptatem laborum. Modi dolor cupiditate sed rem molestiae. Minima sapiente inventore voluptatem aut quia non nulla qui. Repudiandae quidem tenetur ex rerum ut accusamus est.</p>', NULL, '2023-07-03 21:50:51', '2023-07-03 21:50:51'),
(7, 1, 3, 'Nemo totam iste voluptas ducimus.', 'omnis-iure-voluptatem-facere-sit', NULL, 'Eos aut dolorem non quasi fugit. Cum quasi corporis ut blanditiis ratione. Omnis vitae dolores sit autem mollitia.', '<p>Est et quos nulla accusamus nemo dicta earum velit. Expedita expedita culpa et voluptas et. Autem ad iusto quos animi sapiente fuga. Voluptatem voluptatibus sit sapiente magni.</p><p>Quisquam libero harum aut repudiandae. Aut ut temporibus necessitatibus aut dignissimos hic minima qui. Aperiam et modi qui omnis modi assumenda. Modi ab consequatur reiciendis perferendis.</p><p>Ipsum quis unde minima. Nobis sunt sunt odio. Impedit quo error fugit est. Eveniet sequi dolor voluptas. Eveniet pariatur tempore voluptas.</p><p>Magni dolore alias eos et dolor. Velit recusandae quam dicta tempore quas qui animi.</p><p>Nulla quam officiis quia et optio rerum qui. Aperiam ab architecto error voluptates temporibus delectus voluptatem. Possimus sunt atque consequuntur sunt neque voluptatem.</p><p>Sunt pariatur non quis cupiditate sit. Quasi ut qui ipsum cum. Et molestiae omnis quas explicabo. Ducimus non animi aperiam nesciunt.</p>', NULL, '2023-07-03 21:50:51', '2023-07-03 21:50:51'),
(9, 1, 2, 'Est veniam sed quos et aut voluptatibus quia facilis aut autem.', 'qui-facere-ut-quo-sapiente-est', NULL, 'Porro voluptas enim corporis sit earum. Qui incidunt laborum ut cupiditate. Quo qui vel autem odio ducimus consequuntur.', '<p>Doloremque blanditiis quo quia mollitia accusantium non. Dolor ut iste in eum qui ratione. Illo qui sapiente non magni libero amet itaque.</p><p>Facere et consequatur voluptatem aut ipsum eos. Possimus natus quia ratione molestiae. Ullam dolor qui similique id nemo.</p><p>Molestiae nisi veritatis esse aut voluptate laboriosam dolor. Voluptas non porro dolor nisi alias tempore consequatur cumque. Exercitationem quaerat maxime cum dolor non.</p><p>Non enim eveniet distinctio magni ratione odio in. Molestiae vel rerum porro ut veritatis quis. Neque consequuntur veritatis autem itaque nemo ut sint. Inventore numquam necessitatibus nesciunt.</p><p>Delectus et fuga reiciendis nam. Voluptatum ut incidunt consequatur illum sed veniam. Est tenetur dolore corporis fugit natus velit. Blanditiis suscipit consequatur quia enim reiciendis odio ut.</p><p>Quia autem excepturi qui error voluptatem. Recusandae exercitationem quam sit quo quis soluta. Iusto deserunt dolores eaque magnam eum aut.</p><p>Consectetur magnam sunt recusandae quia unde tempora. Asperiores tempore odit omnis nemo quidem. Adipisci consequatur expedita suscipit sint vitae ab officiis. Temporibus et distinctio vitae itaque fugiat. Quae nihil recusandae nostrum id molestiae quasi.</p><p>Omnis animi asperiores porro sed eligendi maiores nobis. Saepe corrupti perferendis repellat quia. Dolor rerum praesentium voluptatem incidunt voluptatem rerum suscipit.</p><p>Quod sunt fugiat vitae consequatur ex ipsa. A vitae iure sint neque. Saepe eveniet distinctio voluptate. Eveniet eum adipisci hic omnis.</p><p>Distinctio tempore molestiae et animi veritatis autem. Et id dolores blanditiis vero voluptatem voluptatem sed. Quibusdam atque provident dolorem. Eaque neque et nisi possimus repellendus ut.</p>', NULL, '2023-07-03 21:50:52', '2023-07-03 21:50:52'),
(10, 2, 3, 'Incidunt qui doloribus nihil nihil est quis quisquam.', 'voluptatibus-possimus-odit-modi-ut-totam-voluptas-sequi', NULL, 'Fugit rerum delectus asperiores rerum harum dicta sit. Inventore eum placeat iusto numquam sapiente vel. Dolorem ratione at expedita voluptatibus non recusandae eos repellendus. Et praesentium autem reiciendis facilis qui sed.', '<p>Nemo aut voluptatem repellendus velit corporis. Rerum optio laborum omnis quae enim commodi error.</p><p>Voluptates non nostrum id distinctio quia fugiat ipsa dolores. Numquam fugit eum aut in pariatur quaerat. Hic quaerat sequi vitae voluptate molestias id quo.</p><p>Quas iure voluptate molestiae recusandae omnis eius. Similique voluptas ipsam temporibus aut labore nobis perferendis.</p><p>Expedita officia accusantium dolore animi. Molestias ipsa vero sed eligendi totam. Maxime est a accusantium nihil dolorem. Sapiente non laborum hic et ex libero beatae.</p><p>Soluta ut quidem nam. Et mollitia dolores minus aut nihil. Eum esse debitis nobis iure ut sed repellat provident. Aut vitae omnis voluptate ducimus eveniet qui suscipit.</p><p>Vel voluptatem ducimus quaerat magnam vel eveniet ratione. Non amet ut tempora quis provident id. A omnis aperiam minima quos hic expedita quo. Soluta omnis voluptas earum veritatis ducimus unde.</p><p>Dicta dignissimos ut aut saepe accusantium adipisci reiciendis voluptas. Molestiae quasi commodi asperiores officia laudantium. Aliquam libero numquam voluptatibus harum et.</p><p>Qui asperiores recusandae dolore consequatur. Sint dolores cum sapiente. Aut ut eveniet voluptatem autem sint velit dolores.</p>', NULL, '2023-07-03 21:50:52', '2023-07-03 21:50:52'),
(12, 2, 2, 'Soluta voluptas saepe velit molestiae.', 'minus-cumque-excepturi-dolor-ipsam-delectus-et-enim', NULL, 'Magnam accusantium non hic eligendi quia voluptatem fugiat. Sequi est tenetur voluptates. Rerum quia ea placeat laboriosam. Totam quia rem beatae vero. Sint illo natus nemo sapiente.', '<p>Nobis vel at consectetur id et. Molestias architecto animi quia atque tenetur ut. Repudiandae autem rerum laudantium molestias in. Voluptatem fuga distinctio optio exercitationem incidunt ea.</p><p>Aut id mollitia soluta optio et mollitia quas. Corrupti quasi officia est aut perspiciatis architecto. Maxime dolores veniam nobis corporis ducimus molestias. Est sit harum officia ut natus excepturi.</p><p>Nisi ducimus ut reiciendis et voluptate. Et quas ut nostrum voluptatem perferendis unde. Est aut ipsum ipsa ea accusantium consequatur cum.</p><p>Quo consequatur odit consequatur dolor inventore. Enim nesciunt similique animi dolorum. Ratione maiores autem exercitationem est necessitatibus ut. Commodi ea est et sunt ea molestiae. Dolorem numquam ea velit est quae magnam porro rem.</p><p>Voluptatem eum ullam corrupti velit atque. Et nostrum aspernatur beatae repudiandae non. Quod cum laudantium rerum sequi animi unde alias.</p><p>Reiciendis ex ab in a. Consectetur neque qui alias perspiciatis cumque ea. Et consequatur inventore officia sit. Architecto totam incidunt sunt corrupti et quaerat et tenetur.</p><p>Maiores a omnis qui rerum ullam quo velit. Dolores sunt esse laborum similique veritatis. Facilis est et sint asperiores ut. Aliquid vel error nam consequuntur.</p><p>Est quas incidunt voluptatem perferendis sapiente qui praesentium. Laborum ut non inventore illum laborum. Impedit quis qui repudiandae est eum consequatur aut.</p><p>Id eaque non dolore veritatis dolor eos veniam. Est amet omnis vel aut aliquid. Qui numquam dolores nam.</p>', NULL, '2023-07-03 21:50:52', '2023-07-03 21:50:52'),
(13, 1, 2, 'Eos sit eum vero ab accusamus quidem deserunt quasi optio consequatur.', 'ut-qui-voluptatum-possimus-et-sed-expedita-quia', NULL, 'Placeat dolore ut aspernatur nihil qui earum aspernatur eius. Voluptatem ratione non omnis ea et. Voluptas itaque aliquid illo voluptas.', '<p>Impedit rerum voluptate rerum modi atque consequatur. Et impedit saepe modi laborum animi corrupti et.</p><p>Alias unde dolores nihil quisquam officiis. Ipsa sapiente voluptatem veritatis. Similique officia aut optio et.</p><p>Ipsum soluta placeat nam. Reprehenderit maiores et voluptate optio. Nisi sit suscipit ut sit non sapiente non.</p><p>Aperiam dolor praesentium dolorem est et quam. Ut quod natus dolor porro velit. Dolorem dignissimos alias et ut perferendis.</p><p>Et distinctio suscipit incidunt id sint velit eos iure. Corrupti quo ipsam ab sapiente qui voluptates. Nam repellendus velit et dolorem.</p><p>Odit omnis aut iusto nobis. Provident ipsa sunt quia quos aut qui sunt. Ea pariatur quo qui magnam sed aut aut. Officiis voluptatem molestiae error.</p>', NULL, '2023-07-03 21:50:52', '2023-07-03 21:50:52'),
(15, 2, 2, 'In eveniet numquam eaque et architecto amet architecto accusantium aliquid non quae.', 'quis-nisi-quia-labore-distinctio-quidem-eos-dicta', NULL, 'Ratione iusto omnis hic doloribus id vero aperiam vel. Ut cum voluptas nemo cumque rem. Error placeat dolorum doloremque est. Exercitationem quia maiores earum eos aut aut sit.', '<p>Nisi ullam cum magnam quo iure. Praesentium laborum eveniet exercitationem fugiat deleniti in non deserunt. Molestias asperiores sed neque deleniti. Labore voluptatem laudantium temporibus repudiandae rerum.</p><p>Nam alias quibusdam sunt id facere beatae vel. Quia veritatis voluptatum aut rerum. Dolor explicabo voluptatem sint corporis. Dolores pariatur et itaque qui dolores tenetur occaecati.</p><p>Aperiam itaque id et eveniet consequuntur voluptatibus. Neque voluptatem molestiae quia.</p><p>Sint accusamus distinctio voluptas et similique non architecto inventore. Et similique sapiente qui consequatur. Libero aspernatur magni explicabo qui itaque.</p><p>Labore voluptatibus perferendis ipsum qui et voluptates. Et aliquam nostrum facere temporibus ut. Maxime animi maiores est ut voluptatem quo dolores.</p><p>Qui explicabo eius voluptatum neque impedit corrupti quisquam. Dolorem ratione iure cum recusandae omnis quas. Aut natus laborum laborum consequuntur velit dicta et.</p><p>Id laboriosam nam perferendis necessitatibus enim. Velit esse in sed eos. Tempora quos necessitatibus omnis.</p><p>Voluptatem sit nam officiis consequuntur maiores consequuntur. Veniam veniam et et sit ducimus dolorem. Dolores deserunt laudantium officiis voluptatem et.</p>', NULL, '2023-07-03 21:50:52', '2023-07-03 21:50:52'),
(17, 1, 3, 'Sequi delectus voluptas qui consequatur.', 'aut-cupiditate-sint-provident-id-autem-et', NULL, 'Nemo sit ipsa molestias vel ducimus. Eos ut quis distinctio.', '<p>Praesentium debitis omnis voluptates et ea assumenda inventore accusantium. Est pariatur delectus non nihil atque in. Nihil quia necessitatibus repudiandae autem impedit iure.</p><p>Laborum omnis aliquid voluptatem itaque maxime. Libero debitis dolores illum itaque tempora dolorum voluptatum. Ut vero provident qui quaerat.</p><p>Fuga maiores quis recusandae quia modi et rerum. Voluptatem aspernatur molestiae nihil ut nam impedit qui. Distinctio quam et exercitationem ratione facilis sit. Corporis et voluptatem sit incidunt. Voluptatem laudantium nobis eligendi voluptate earum repellat qui.</p><p>Reiciendis laudantium aut distinctio adipisci. Et iure consequuntur aut ipsum. Nemo inventore omnis quibusdam facilis sed quisquam.</p><p>Asperiores qui quibusdam dolor et et. Dolor illum minus error dolor rerum sint a. Laboriosam eos delectus in et libero aut dolor reprehenderit.</p>', NULL, '2023-07-03 21:50:52', '2023-07-03 21:50:52'),
(19, 2, 2, 'Veritatis nesciunt voluptates qui.', 'nihil-rerum-odio-vero-dolores-a-doloremque-itaque', NULL, 'Libero id aspernatur ea. Qui voluptas necessitatibus tenetur laboriosam aut occaecati.', '<p>Itaque aperiam aut quis sed quibusdam sit adipisci. Eveniet inventore nisi dicta fuga quibusdam perferendis. Laboriosam aut voluptatem rerum fugiat suscipit dolor.</p><p>Excepturi neque voluptas quia atque. Et laudantium dolorum nemo maiores corporis consequatur illum. Vitae provident debitis non non iste.</p><p>Impedit aut fugiat unde officiis perspiciatis. Libero sed rerum rerum officia eos. Officia est porro qui ratione debitis voluptatem quam. Expedita adipisci distinctio deserunt.</p><p>Ducimus minus nulla totam dolorem. Porro hic excepturi et. Quaerat qui voluptate suscipit quam.</p><p>Dolores placeat culpa illo nisi. Repellat corrupti doloribus omnis sed consequatur qui molestiae. Fugiat earum ab non officia. In quam incidunt accusamus ratione ut quam illum non.</p><p>Natus dolor libero facere excepturi molestias temporibus tempore veritatis. Tenetur eum quas cum velit sapiente dolorem molestias delectus. Ut quas quisquam est porro.</p><p>Voluptatem est incidunt et nam corporis inventore beatae. Rerum accusantium et odit enim accusamus repellendus voluptas et. Tempore asperiores inventore est et placeat deleniti. Animi necessitatibus quis vero eius.</p><p>Doloribus optio ipsam sapiente ratione qui. Totam aut consequatur corporis est excepturi omnis et. Amet similique at repellendus natus facilis quidem eum.</p><p>Facere doloremque deleniti animi nam ut et. Nam quia ad rerum minima error nisi dolor. Aut ad placeat doloribus debitis odit fuga culpa.</p><p>Autem officiis aliquam impedit ducimus. Officiis quasi nulla id cum quasi. Qui laudantium nemo sunt accusamus vero esse.</p>', NULL, '2023-07-03 21:50:52', '2023-07-03 21:50:52'),
(22, 4, 1, 'Stencil Graffiti', 'stencil-graffiti', 'post-images/ovGVFjuyfJ0U4lO2p5FsetQhrY4a5ZTzTabogyLi.jpg', 'Stencil graffiti is a form of graffiti that makes use of stencils made out of paper, cardboard, or other media to create an image or text that is easily reproducible. The desired design is cut out of...', '<div><strong>Stencil graffiti</strong> is a form of <a href=\"https://en.wikipedia.org/wiki/Graffiti\">graffiti</a> that makes use of <a href=\"https://en.wikipedia.org/wiki/Stencil\">stencils</a> made out of paper, cardboard, or other media to create an image or text that is easily reproducible. The desired design is cut out of the selected medium and then the image is transferred to a surface through the use of <a href=\"https://en.wikipedia.org/wiki/Aerosol_paint\">spray paint</a> or roll-on paint.<br>The process of stencilling involves applying paint across a <a href=\"https://en.wikipedia.org/wiki/Stencil\">stencil</a> to form an image on a surface below. Sometimes multiple layers of stencils are used on the same image to add <a href=\"https://en.wikipedia.org/wiki/Color\">colors</a> or create the illusion of <a href=\"https://en.wikipedia.org/wiki/Three-dimensional_space\">depth</a>.</div><div>Because the stencil stays nearly unchanged throughout its use, it is easier for an artist to replicate what could be a complicated piece - at a high rate when compared to other conventional tagging methods.</div><div><br></div><h1><strong>History</strong></h1><div>Stencil graffiti began in the 1960s.<br>French artist <a href=\"https://en.wikipedia.org/wiki/Ernest_Pignon-Ernest\">Ernest Pignon-Ernest</a>\'s stencilled silhouette of a nuclear bomb victim was spray painted in the south of France in 1966 (Plateau d\'Albion, Vaucluse)<br><a href=\"https://en.wikipedia.org/wiki/Blek_le_Rat\">Blek le Rat</a>\'s first spray painted stencils were seen in Paris in 1981. He was influenced by the graffiti artists of New York City but wanted to create something of his own.<br>Australian photographer <a href=\"https://en.wikipedia.org/wiki/Rennie_Ellis\">Rennie Ellis</a> documented some of the earliest examples of stencil art to appear in <a href=\"https://en.wikipedia.org/wiki/Sydney\">Sydney</a> and <a href=\"https://en.wikipedia.org/wiki/Melbourne\">Melbourne</a> in his 1985 book <em>The All New Australian Graffiti</em>. In the introduction to the book, Ellis noted that US photographer <a href=\"https://en.wikipedia.org/wiki/Charles_Gatewood\">Charles Gatewood</a> had written to him and sent him photographs of similar stencil graffiti that had recently appeared in <a href=\"https://en.wikipedia.org/wiki/New_York_City\">New York City</a>, leading Ellis to speculate that:</div><div><br>... unlike our subway-style graffiti, which is nothing more than a copy of a well-established New York tradition, the symbols of Australia and America had originated separately and unknown to each other.<br><br>Over the years this form of graffiti has become a worldwide subculture. The members are linked through the Internet and the images spray-painted on the urban canvas they place throughout the world. Many of its members connect through blogs and websites that are specifically built to display works, get feedback on posted works, and receive news of what is going on in the world of stencil graffiti.<br>Stencil graffiti is illegal in some jurisdictions, and many of the members of this subculture shroud their identities in aliases. <a href=\"https://en.wikipedia.org/wiki/Above_(artist)\">Above</a> / <a href=\"https://en.wikipedia.org/wiki/Tavar_Zawacki\">Tavar Zawacki</a>, <a href=\"https://en.wikipedia.org/wiki/Banksy\">Banksy</a>, <a href=\"https://en.wikipedia.org/wiki/Blek_le_Rat\">Blek le Rat</a>, <a href=\"https://en.wikipedia.org/wiki/Vhils\">Vhils</a>, <a href=\"https://en.wikipedia.org/wiki/Shepard_Fairey\">Shepard Fairey</a> and <a href=\"https://en.wikipedia.org/wiki/Jef_A%C3%A9rosol\">Jef Aérosol</a> are some names that are synonymous with this subculture.</div>', NULL, '2023-07-03 23:55:45', '2023-07-04 19:48:00'),
(23, 1, 1, 'Bahasa Pemrograman Web PHP', 'bahasa-pemrograman-web-php', 'post-images/zsywKfBlTEqSftr1hvd9bx6aSUKeGEt9i4BsuvIz.png', 'PHP: Hypertext Preprocessor (sebelumnya disebut Personal Home Pages) atau hanya PHP saja, adalah bahasa skrip dengan fungsi umum yang terutama digunakan untuk pengembangan web. Bahasa ini awalnya dibu...', '<div><strong><em>PHP: Hypertext Preprocessor</em></strong> (sebelumnya disebut <em>Personal Home Pages)</em> atau hanya <strong>PHP</strong> saja, adalah bahasa skrip dengan fungsi umum yang terutama digunakan untuk <a href=\"https://id.wikipedia.org/wiki/Pengembangan_web\">pengembangan web</a>. Bahasa ini awalnya dibuat oleh seorang pemrogram Denmark-Kanada <a href=\"https://id.wikipedia.org/wiki/Rasmus_Lerdorf\">Rasmus Lerdorf</a> pada tahun 1994. Implementasi referensi PHP sekarang diproduksi oleh The PHP Group. PHP awalnya merupakan singkatan dari <strong><em>Personal Home Page</em></strong>, tetapi sekarang merupakan singkatan dari inisialisasi rekursif <strong><em>PHP: Hypertext Preprocessor</em></strong>.<br><br>Kode PHP biasanya diproses di <a href=\"https://id.wikipedia.org/wiki/Peladen_web\">peladen web</a> oleh <a href=\"https://id.wikipedia.org/wiki/Interpreter\">interpreter</a> PHP yang diimplementasikan sebagai <a href=\"https://id.wikipedia.org/wiki/Plugin\">modul</a>, <a href=\"https://id.wikipedia.org/wiki/Daemon\">daemon</a>, atau sebagai <a href=\"https://id.wikipedia.org/wiki/Common_Gateway_Interface\"><em>Common Gateway Interface</em></a> (CGI) yang bisa dijalankan. Di server web, hasil dari kode PHP yang ditafsirkan dan dieksekusi (dapat berupa semua jenis data, seperti <a href=\"https://id.wikipedia.org/wiki/HTML\">HTML</a> atau data gambar <a href=\"https://id.wikipedia.org/wiki/Biner\">biner</a>) akan membentuk keseluruhan atau sebagian dari respons <a href=\"https://id.wikipedia.org/wiki/HTTP\">HTTP</a>. Berbagai <a href=\"https://id.wikipedia.org/w/index.php?title=Sistem_templat_web&amp;action=edit&amp;redlink=1\">sistem templat web</a>, <a href=\"https://id.wikipedia.org/wiki/Sistem_manajemen_konten\">sistem manajemen konten</a> web, dan <a href=\"https://id.wikipedia.org/wiki/Kerangka_kerja_aplikasi_web\">kerangka kerja web</a> ada yang dapat digunakan untuk mengatur atau memfasilitasi pembuatan respons itu. Selain itu, PHP dapat digunakan untuk banyak tugas pemrograman di luar konteks web, seperti <a href=\"https://id.wikipedia.org/wiki/Antarmuka_pengguna_grafis\">aplikasi grafis</a> mandiri dan kontrol <a href=\"https://id.wikipedia.org/wiki/Pesawat_nirawak\">drone</a> robotik. Kode PHP juga dapat langsung dieksekusi dari <a href=\"https://id.wikipedia.org/wiki/Baris_perintah\">baris perintah</a>.<br><br></div><h1><strong>Sejaran PHP</strong></h1><div>PHP pertama kali dikembangkan oleh <a href=\"https://id.wikipedia.org/wiki/Rasmus_Lerdorf\">Rasmus Lerdorf</a> pada tahun 1994. Pada awalnya PHP merupakan kependekan dari <em>Personal Home Page</em> (Situs personal). Pada waktu itu PHP masih bernama <em>Form Interpreted</em> (FI), yang wujudnya berupa sekumpulan skrip yang digunakan untuk mengolah data formulir dari <a href=\"https://id.wikipedia.org/wiki/Web\">web</a>.<br><br>Selanjutnya Rasmus merilis kode sumber tersebut untuk umum dan menamakannya <a href=\"https://id.wikipedia.org/w/index.php?title=PHP/FI&amp;action=edit&amp;redlink=1\">PHP/FI</a>. Dengan perilisan kode sumber ini menjadi <a href=\"https://id.wikipedia.org/wiki/Sumber_terbuka\">sumber terbuka</a>, maka banyak <a href=\"https://id.wikipedia.org/wiki/Pemrogram\">pemrogram</a> yang tertarik untuk ikut mengembangkan PHP.<br><br></div><div>Pada November, dirilis PHP/FI 2.0. Pada perilisan ini, <a href=\"https://id.wikipedia.org/wiki/Interpreter\"><em>interpreter</em></a> PHP sudah diimplementasikan dalam program <a href=\"https://id.wikipedia.org/wiki/C\">C</a>. Dalam rilis ini disertakan juga modul-modul ekstensi yang meningkatkan kemampuan PHP/FI secara signifikan.<br><br></div><div>Pada tahun 1995, sebuah perusahaan bernama <a href=\"https://id.wikipedia.org/w/index.php?title=Zend&amp;action=edit&amp;redlink=1\">Zend</a> menulis ulang interpreter PHP menjadi lebih bersih, lebih baik, dan lebih cepat. Kemudian pada Juni 1995, perusahaan tersebut merilis interpreter baru untuk PHP dan meresmikan rilis tersebut sebagai <a href=\"https://id.wikipedia.org/w/index.php?title=PHP_3.0&amp;action=edit&amp;redlink=1\">PHP 3.0</a> dan singkatan PHP diubah menjadi <a href=\"https://id.wikipedia.org/wiki/Akronim_berulang\">akronim berulang</a> <em>PHP: Hypertext Preprocessor</em>.<br><br></div><div>Pada pertengahan tahun 1999, Zend merilis interpreter PHP baru dan rilis tersebut dikenal dengan <a href=\"https://id.wikipedia.org/w/index.php?title=PHP_4.0&amp;action=edit&amp;redlink=1\">PHP 4.0</a>. PHP 4.0 adalah versi PHP yang paling banyak dipakai pada awal abad ke-21. Versi ini banyak dipakai disebabkan kemampuannya untuk membangun aplikasi web kompleks tetapi tetap memiliki kecepatan dan stabilitas yang tinggi.<br><br></div><div>Pada Juni 2004, Zend merilis <a href=\"https://id.wikipedia.org/wiki/PHP_5.0\">PHP 5.0</a>. Dalam versi ini, inti dari interpreter PHP mengalami perubahan besar. Versi ini juga memasukkan model <a href=\"https://id.wikipedia.org/wiki/Pemrograman_berorientasi_objek\">pemrograman berorientasi objek</a> ke dalam PHP untuk menjawab perkembangan bahasa pemrograman ke arah paradigma berorientasi objek. Peladen web bawaan ditambahkan pada versi 5.4 untuk mempermudah pengembang menjalankan kode PHP tanpa menginstal peladen perangkat lunak.<br><br></div><div>Versi terbaru dan stabil dari bahasa pemograman PHP saat ini adalah versi 8.0.</div>', NULL, '2023-07-04 18:31:48', '2023-07-06 19:51:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Abaddon', 'abaddon@gmail.com', 'abaddon', NULL, '$2y$10$oMlduhIPdSZHp7zWDUEKY.HXTNYF.crzfdSyBpIXprU91VgLvYFVa', NULL, '2023-07-03 21:50:46', '2023-07-03 21:50:46', 1),
(2, 'Purwanto Gunawan', 'mahendra.hartana@example.org', 'perkasa.hartati', '2023-07-03 21:50:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'J9NrEEBml0ps9qtCjcV1nGqBFsqfWvevm6kzLybwTnbDEMCA2lygCtkx3iAW', '2023-07-03 21:50:50', '2023-07-03 21:50:50', 0),
(3, 'Dartono Halim', 'asihotang@example.com', 'rahmawati.tirtayasa', '2023-07-03 21:50:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wTptJusrqdhdfsAr5FSIOdyPjLGNYP6QrmVCMFVqCvizSckMOPBIw1BWOXRb', '2023-07-03 21:50:50', '2023-07-03 21:50:50', 0),
(4, 'Surya Tirtayasa Sitorus S.Ked', 'warji.wacana@example.com', 'ciaobella.hasanah', '2023-07-03 21:50:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XYJqrxJ0ER', '2023-07-03 21:50:50', '2023-07-03 21:50:50', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
