-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Sty 2016, 21:47
-- Wersja serwera: 10.1.9-MariaDB
-- Wersja PHP: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bestcrm`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `topic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result_description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `cyclical_projects`
--

CREATE TABLE `cyclical_projects` (
  `cyclical_project_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `emails_organization`
--

CREATE TABLE `emails_organization` (
  `email_organization_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `emails_organization_log`
--

CREATE TABLE `emails_organization_log` (
  `log_id` int(11) NOT NULL,
  `email_organization_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `emails_person`
--

CREATE TABLE `emails_person` (
  `email_person_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `emails_person_log`
--

CREATE TABLE `emails_person_log` (
  `log_id` int(11) NOT NULL,
  `email_person_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_polish_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `organizations`
--

CREATE TABLE `organizations` (
  `organization_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `logo_filepath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `organizations_log`
--

CREATE TABLE `organizations_log` (
  `log_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `logo_filepath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `persons`
--

CREATE TABLE `persons` (
  `person_id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `photo_filepath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `persons_log`
--

CREATE TABLE `persons_log` (
  `log_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_filepath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `phones_organization`
--

CREATE TABLE `phones_organization` (
  `phone_organization_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `organization_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `phones_organization_log`
--

CREATE TABLE `phones_organization_log` (
  `log_id` int(11) NOT NULL,
  `phone_organization_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `phones_person`
--

CREATE TABLE `phones_person` (
  `phone_person_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `phones_person_log`
--

CREATE TABLE `phones_person_log` (
  `log_id` int(11) NOT NULL,
  `phone_person_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `planned_contacts`
--

CREATE TABLE `planned_contacts` (
  `planned_contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resulted_from_contact_id` int(11) DEFAULT NULL,
  `resulted_in_contact_id` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `bio` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `final_datetime` datetime DEFAULT NULL,
  `cyclical_project_id` int(11) DEFAULT NULL,
  `logo_filepath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `project_organization_statuses`
--

CREATE TABLE `project_organization_statuses` (
  `status_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `data` text COLLATE utf8_polish_ci,
  `code` varchar(32) COLLATE utf8_polish_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_polish_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `photo_filepath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_project_assignements`
--

CREATE TABLE `user_project_assignements` (
  `assignement_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `user_id_idx` (`user_id`),
  ADD KEY `organization_id_idx` (`organization_id`),
  ADD KEY `person_id_idx` (`person_id`);

--
-- Indexes for table `cyclical_projects`
--
ALTER TABLE `cyclical_projects`
  ADD PRIMARY KEY (`cyclical_project_id`);

--
-- Indexes for table `emails_organization`
--
ALTER TABLE `emails_organization`
  ADD PRIMARY KEY (`email_organization_id`),
  ADD KEY `organization_id_idx` (`organization_id`);

--
-- Indexes for table `emails_organization_log`
--
ALTER TABLE `emails_organization_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `email_organization_id_idx` (`email_organization_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `emails_person`
--
ALTER TABLE `emails_person`
  ADD PRIMARY KEY (`email_person_id`),
  ADD KEY `person_id_idx` (`person_id`);

--
-- Indexes for table `emails_person_log`
--
ALTER TABLE `emails_person_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `email_oid_idx` (`email_person_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`organization_id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Indexes for table `organizations_log`
--
ALTER TABLE `organizations_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `organization_id_idx` (`organization_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `organization_id_idx` (`organization_id`);

--
-- Indexes for table `persons_log`
--
ALTER TABLE `persons_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `person_id_idx` (`person_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `phones_organization`
--
ALTER TABLE `phones_organization`
  ADD PRIMARY KEY (`phone_organization_id`),
  ADD KEY `organization_id_idx` (`organization_id`);

--
-- Indexes for table `phones_organization_log`
--
ALTER TABLE `phones_organization_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `phone_organization_id_idx` (`phone_organization_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `phones_person`
--
ALTER TABLE `phones_person`
  ADD PRIMARY KEY (`phone_person_id`),
  ADD KEY `person_idx` (`person_id`);

--
-- Indexes for table `phones_person_log`
--
ALTER TABLE `phones_person_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `phone_person_id_idx` (`phone_person_id`),
  ADD KEY `user_id_idx` (`user_id`);

--
-- Indexes for table `planned_contacts`
--
ALTER TABLE `planned_contacts`
  ADD PRIMARY KEY (`planned_contact_id`),
  ADD KEY `user_id_idx` (`user_id`),
  ADD KEY `resulted_from_contact_id_idx` (`resulted_from_contact_id`),
  ADD KEY `resulted_in_contact_id_idx` (`resulted_in_contact_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `cyclical_project_id_idx` (`cyclical_project_id`);

--
-- Indexes for table `project_organization_statuses`
--
ALTER TABLE `project_organization_statuses`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `project_id_idx` (`project_id`),
  ADD KEY `organization_id_idx` (`organization_id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_email` (`email`),
  ADD UNIQUE KEY `user_unique_username` (`username`);

--
-- Indexes for table `user_project_assignements`
--
ALTER TABLE `user_project_assignements`
  ADD PRIMARY KEY (`assignement_id`),
  ADD KEY `user_id_idx` (`user_id`),
  ADD KEY `project_id_idx` (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `cyclical_projects`
--
ALTER TABLE `cyclical_projects`
  MODIFY `cyclical_project_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `emails_organization`
--
ALTER TABLE `emails_organization`
  MODIFY `email_organization_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `emails_organization_log`
--
ALTER TABLE `emails_organization_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `emails_person`
--
ALTER TABLE `emails_person`
  MODIFY `email_person_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `emails_person_log`
--
ALTER TABLE `emails_person_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `organizations`
--
ALTER TABLE `organizations`
  MODIFY `organization_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `organizations_log`
--
ALTER TABLE `organizations_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `persons`
--
ALTER TABLE `persons`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `persons_log`
--
ALTER TABLE `persons_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `phones_organization`
--
ALTER TABLE `phones_organization`
  MODIFY `phone_organization_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `phones_organization_log`
--
ALTER TABLE `phones_organization_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `phones_person`
--
ALTER TABLE `phones_person`
  MODIFY `phone_person_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `phones_person_log`
--
ALTER TABLE `phones_person_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `planned_contacts`
--
ALTER TABLE `planned_contacts`
  MODIFY `planned_contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `project_organization_statuses`
--
ALTER TABLE `project_organization_statuses`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `social_account`
--
ALTER TABLE `social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `user_project_assignements`
--
ALTER TABLE `user_project_assignements`
  MODIFY `assignement_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contactOrganization` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`organization_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `contactPerson` FOREIGN KEY (`person_id`) REFERENCES `persons` (`person_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `contactUser` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `emails_organization`
--
ALTER TABLE `emails_organization`
  ADD CONSTRAINT `emailOrganizationsOrganizations` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`organization_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `emails_organization_log`
--
ALTER TABLE `emails_organization_log`
  ADD CONSTRAINT `email_organization_id` FOREIGN KEY (`email_organization_id`) REFERENCES `emails_organization` (`email_organization_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `emails_person`
--
ALTER TABLE `emails_person`
  ADD CONSTRAINT `emailPersonsPersons` FOREIGN KEY (`person_id`) REFERENCES `persons` (`person_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `emails_person_log`
--
ALTER TABLE `emails_person_log`
  ADD CONSTRAINT `emailsPersonLogEmailsPerson` FOREIGN KEY (`email_person_id`) REFERENCES `emails_person` (`email_person_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `emailsPersonLogUsers` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `organizations_log`
--
ALTER TABLE `organizations_log`
  ADD CONSTRAINT `OrganizationsLogOrganizations` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`organization_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `OrganizationsLogUsers` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `personOrganization` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`organization_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `persons_log`
--
ALTER TABLE `persons_log`
  ADD CONSTRAINT `PersonsLogPersons` FOREIGN KEY (`person_id`) REFERENCES `persons` (`person_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `PersonsLogUsers` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `phones_organization`
--
ALTER TABLE `phones_organization`
  ADD CONSTRAINT `phonesOrganizationsOrganizations` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`organization_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `phones_organization_log`
--
ALTER TABLE `phones_organization_log`
  ADD CONSTRAINT `phonesOrganizationLogPhonesOrganization` FOREIGN KEY (`phone_organization_id`) REFERENCES `phones_organization` (`phone_organization_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `phonesOrganizationLogUsers` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `phones_person`
--
ALTER TABLE `phones_person`
  ADD CONSTRAINT `phonesPersonsPersons` FOREIGN KEY (`person_id`) REFERENCES `persons` (`person_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `phones_person_log`
--
ALTER TABLE `phones_person_log`
  ADD CONSTRAINT `PhonesPersonLogPhonesPerson` FOREIGN KEY (`phone_person_id`) REFERENCES `phones_person` (`phone_person_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `PhonesPersonLogUsers` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `planned_contacts`
--
ALTER TABLE `planned_contacts`
  ADD CONSTRAINT `plannedFromContact` FOREIGN KEY (`resulted_from_contact_id`) REFERENCES `contacts` (`contact_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `plannedUser` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `plannetToContact` FOREIGN KEY (`resulted_in_contact_id`) REFERENCES `contacts` (`contact_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `ProjectsCyclicalProjects` FOREIGN KEY (`cyclical_project_id`) REFERENCES `cyclical_projects` (`cyclical_project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `project_organization_statuses`
--
ALTER TABLE `project_organization_statuses`
  ADD CONSTRAINT `ProjectOrganizationStatusesOrganizations` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`organization_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ProjectOrganizationsStatusesProjects` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `user_project_assignements`
--
ALTER TABLE `user_project_assignements`
  ADD CONSTRAINT `UserProjectAssignementsProject` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `UserProjectAssignementsUsers` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
