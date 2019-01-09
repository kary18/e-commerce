
  -- Structure de la table `commandes`


CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `produits_id` int(11) NOT NULL,
  `clients_id` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Index pour la table `commandes`
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_id` (`produits_id`),
  ADD KEY `clients_id` (`clients_id`);

  -- AUTO_INCREMENT pour la table `commandes`

ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

 -- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `marques`
--

INSERT INTO `marques` (`id`, `nom`) VALUES
(1, 'kary'),
(2, 'manou'),
(4, 'alpha');


-- Index pour la table `marques`

ALTER TABLE `marques`
  ADD PRIMARY KEY (`id`);


-- Structure de la table `produits`


CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produits`
--

INSERT INTO `produits` (`id`, `description`, `prix`, `marque_id`, `categories_id`) VALUES
(1, 'robe evasée longue', '80', 3, 3),
(2, 'robe pull', '64', 3, 3),
(3, 'robe imprimée', '55', 3, 3),
(4, 'manteau jaune moutarde', '120', 3, 2),
(5, 'sac a main dark green ', '74', 3, 1),
(6, 'robe imprimée leopard', '99', 2, 3),
(7, 'robe de soirée', '119', 2, 3),
(8, 'manteau gris', '260', 2, 2),
(9, 'chapeau beige', '40', 1, 4),
(10, 'echarpe en cachemire', '88', 1, 4),
(11, 'echarpe bicolor en sois', '149', 1, 4),
(12, 'chapeau gris souris', '99', 1, 4);



-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marque_id` (`marque_id`),
  ADD KEY `categories_id` (`categories_id`);


-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_PRODUITS_CATEGORIES` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_PRODUITS_MARQUES` FOREIGN KEY (`marque_id`) REFERENCES `marques` (`id`);




 
 Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `produits_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produits_id` (`produits_id`),
  ADD KEY `categories_id` (`categories_id`);


-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

-- Contraintes pour la table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `FK_MEDIAS_CATEGORIES` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `FK_MEDIAS_PRODUITS` FOREIGN KEY (`produits_id`) REFERENCES `produits` (`id`);
